<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create_post (Request $request){
        try{
            if ($request->hasFile('image')) {
            $imgfile = $request->file('image');
            $imgextension = $imgfile ->getClientOriginalExtension();
            $imgfilename = time().'.'.$imgextension;
            $imgpath = 'image/post_img/';
            $imgfile->move($imgpath, $imgfilename);
            }

            if ($request->hasFile('video')) {
            $vidfile = $request->file('video');
            $vidextension = $vidfile ->getClientOriginalExtension();
            $vidfilename = time().'.'.$vidextension;
            $vidpath = 'image/post_vid/';
            $vidfile->move($vidpath, $vidfilename);
            }

            $post = new post();
            $post -> user_id = $request->input('user_id');
            $post -> title = $request->input('title');
            $post -> type_of_crime = $request->input('type_of_crime');
            $post -> content = $request->input('content');
            if ($request->hasFile('image')) {
            $post -> image = $imgfile.$imgfilename;}
            if ($request->hasFile('video')) {
            $post -> video = $vidfile.$vidfilename;}
            if(Auth::user() -> usertype == 'admin'){
                $post -> priority =$request->input('priority');
                $post -> status = 1;
            }
            else{
                $post -> priority = 1;
                $post -> status = 0;
            }
            $post -> save();
        } catch (\Exception $e) {
            dd($e);
        }
            return redirect()->route('homepage');
    }

    public function index()
    {
    $listposts = DB::table('post')
                    ->join('users', 'users.id', '=', 'post.user_id')
                    ->where('post.status', '=', '1')
                    ->orderBy('priority', 'asc')
                    ->select('post.id', 'post.user_id', 'post.title', 'post.content', 'post.district', 'post.type_of_crime', 'post.image', 'post.video', 'post.priority', 'post.created_at', 'users.name', 'users.full_name')
                    ->get();
    return view('Homepage', ['listpost' => $listposts]);
    }
    public function search(Request $request)
    {
        $query = $request->input('search');
    
        $listposts = DB::table('post')
            ->join('users', 'users.id', '=', 'post.user_id')
            ->where('post.status', '=', '1')
            ->where('post.district', 'LIKE', '%' . $query . '%')
            ->orderBy('priority', 'asc')
            ->get();
    
        return view('Homepage', ['listpost' => $listposts]);
    }

    public function index_censor()
    {
        $listposts= DB::table('post')
                            ->join('users', 'users.id', '=', 'post.user_id')
                            ->where('post.status', '=', '0')
                            ->get();
        return view('ListPost', ['listpost' => $listposts]);    
    }

    public function detail(Request $request) {  
        $postId = $request->post_id;
        $listposts= DB::table('post')
                            ->join('users', 'users.id', '=', 'post.user_id')
                            ->where('post.id','=', $postId)
                            ->get();
        return view('CensorPost',['listpost' => $listposts]);
    }

    public function censor(Request $request) {

        $postId = $request->post_id;
        $status = $request->post_status;

        $post = \App\Models\post::find($postId);
        if($post) {
            DB::table('post')
                ->where('id', $postId)
                ->update(['status' => $status]);

            return redirect()->route('index_censor');
        }
    }


    public function delete_censor(Request $request) {
        
        $postId = $request->post_id;

        $post = \App\Models\post::find($postId);
        if($post) {
            DB::table('post')->where('post.id', '=', $id)->delete();

            return redirect()->route('index_censor');
        }
    }

    public function delete(Request $request) {
        $id = $request->post_id;
        DB::table('post')->where('post.id', '=', $id)->delete();
        return redirect()->route('homepage');
    }
}
