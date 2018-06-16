<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
      public function index(){
        $posts = Post::all();
        return view('post')->with('posts', $posts);
      }
      public function show($id){
        $posts = Post::findOrFail($id);
        return view('post_view')->with('posts', $posts);
      }
      public function create(){
        return view('post_create');
      }
      public function update($id){
        $posts = Post::findOrFail($id);
        return view('post_update')->with('posts', $posts);
      }
      public function store(Request $request){
      $this->validate($request, [
        'title' => 'required|min:3|max:191',
        'description' => 'required|min:3',
        'add_photo' => 'image|mimes:jpeg,png,jpg',
      ]);

      $post = new Post;
      $post->title = $request->input('title');
      $post->description = $request->input('description');
      $post->images = ($request->hasFile('image'));
      $post->save();

      $images = $post->images();
      if ($request->hasFile('image')) $file = $request->file('image')->move($images['server_path'], $images['image']);
      return redirect('/post')->with('post_success', 'You have succesfully made a post!');
    }
}
