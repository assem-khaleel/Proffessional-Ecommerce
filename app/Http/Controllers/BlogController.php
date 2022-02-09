<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Session;

class BlogController extends Controller
{
    public function blog()
    {
        $post = DB::table('posts')
            ->join('post_category', 'posts.category_id', 'post_category.id')
            ->select('posts.*', 'post_category.category_name_en', 'post_category.category_name_ar')
            ->get();
        return view('pages.blog', compact('post'));
    }

    public function English()
    {
        Session::get('lang');
        Session()->forget('lang');
        Session::put('lang', 'english');
        return redirect()->back();
    }

    public function Arabic()
    {
        Session::get('lang');
        Session()->forget('lang');
        Session::put('lang', 'arabic');
        return redirect()->back();
    }

    public function BlogSingle($id)
    {
        $posts = DB::table('posts')->where('id', $id)->get();
        return view('pages.blog_single', compact('posts'));

    }
}
