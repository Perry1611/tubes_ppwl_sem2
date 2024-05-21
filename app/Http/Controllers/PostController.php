<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function delete(request $request)
    {
        Post::where('id', $request->id)->delete();
        return redirect('/dashboard')->with('error', 'Post has been deleted successfully!');
    }

    public function create()
    {
        return view('CRUD.create',[
            'title' => 'Add new Post',
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' =>'required|min:5|max:255',
            'body' =>'required|min:5',
            'category_id' =>'required',
            'cost' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        Post::create($validatedData);

        return redirect('/dashboard')->with('success', 'New post has been added successfully!');
    }

    public function edit(Request $request)
    {
        $post = Post::find($request->id);

        return view('CRUD.edit',[
            'title' => 'Edit post',
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' =>'required|min:5|max:255',
            'body' =>'required|min:5',
            'category_id' =>'required',
            'cost' =>'required'
        ]);

        Post::where('id', $request->id)->update($validatedData);

        return redirect('/dashboard')->with('success', 'This post has been updated successfully!');
    }
}
