<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create_post (Request $request){
        dd($request);
        try{
            $imgfile = $request->file('image');
            $imgextension = $imgfile ->getClientOriginalExtension();
            $imgfilename = time().'.'.$imgextension;
            $imgpath = 'uploads/post_img/';
            $imgfile->move($imgpath, $imgfilename);

            $vidfile = $request->file('video');
            $vidextension = $vidfile ->getClientOriginalExtension();
            $vidfilename = time().'.'.$vidextension;
            $vidpath = 'uploads/post_img/';
            $vidfile->move($vidpath, $vidfilename);

            $post = new posts();
            $post -> id = $request->input('id');
            $post -> title = $request->input('title');
            $post -> type_of_crime = $request->input('type_of_crime');
            $post -> content = $request->input('content');
            $post -> img = $imgfile.$imgfilename;
            $post -> video = $vidfile.$vidfilename;
            $post -> save();
        }
        catch(\Exception $e){
            
        }
            // return redirect()->route('homepage');
    }
}
