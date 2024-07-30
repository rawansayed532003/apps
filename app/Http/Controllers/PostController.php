<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index( ){
        $post=post::all();
        return view("posts.index",
        ["posts"=>$post
    ]);
    
    }
    public function show($id){
        $post=post::findOrFail($id);
        return view("posts.show",
        ["posts"=>$post
    ]);
}
public function create(){
    return view("posts/create");

}
public function store(Request $request){
    // $request->validate([
    //     'title'=>'required'|'string'|'max:50',
    //     'content'=>'required'|'string'

    // ]);
    

    
    $post=post::create([
        'title'=> $request->title,
        'content'=> $request->content,

   ] );
   return redirect('posts');
}
public function edit($id){
    $post=post::findOrFail($id);
    return view("posts/edit",[
       "post"=>$post
    ]);
}
public function update(Request $request, $id){
    // $request-> validate([
    //     'title'=>'required'|'string'|'max:50',
    //     'content'=>'required'|'string',

    // ]);
    $post=post::findOrFail($id)->update([
        'title'=> $request->title,
        'content'=> $request->content,
    ]);
    return redirect('posts');

}
public function destroy($id){
    $post=post::findOrFail($id)->destroy;
    return redirect('posts');
}
    

}
