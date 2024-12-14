<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create_post (Request $request){
        try{
            $imgfile = $request->file('image');
            $imgextension = $imgfile ->getClientOriginalExtension();
            $imgfilename = time().'.'.$imgextension;
            $imgpath = 'uploads/post_img/';
            $imgfile->move($imgpath, $imgfilename);

            $vidfile = $request->file('image');
            $vidextension = $vidfile ->getClientOriginalExtension();
            $vidfilename = time().'.'.$vidextension;
            $vidpath = 'uploads/post_img/';
            $vidfile->move($vidpath, $vidfilename);

            $region = DB::table('region')
            ->where('bname', $request->bname)
            ->select('brands.id')
            ->first();

            $post = new posts();
            $post -> id = $request->input('id');
            $post -> title = $request->input('title');
            $post -> content = $request->input('content');
            $post -> img = $imgfile.$imgfilename;
            $post -> video = $vidfile.$vidfilename;
            $post -> save();
        }
        catch(\Exception $e){
            return redirect()->route('addnew')->with('alert', 'Something went wrong happened');
        }
            return redirect()->route('homepage');
    }
}
