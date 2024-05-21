<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function detail(request $request){
        $post = Post::find($request->id);

        return view('dashboard.details', [
            'title' => 'Detail',
            'post' => $post,
        ]);
    }

    public function dashboard(){
        $totalAmount = Post::where('user_id', auth()->user()->id)->sum('cost');
        return view('dashboard.dashboard', [
            'title' => 'Dashboard',
            'posts' => Post::where('user_id', auth()->user()->id)->get(),
            'amount' => $totalAmount,
        ]);
    }

    public function about(){
        return view('dashboard.about', [
            'title' => 'About',
        ]);
    }
}
