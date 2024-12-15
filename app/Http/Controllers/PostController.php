<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\post;
use Illuminate\Http\Request;

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
            $post->status = false;
            if ($request->hasFile('image')) {
            $post -> image = $imgfile.$imgfilename;}
            if ($request->hasFile('video')) {
            $post -> video = $vidfile.$vidfilename;}
            $post -> save();
        }
        catch(\Exception $e){
           dd($e);
        }
            return redirect()->route('homepage');
    }
}
