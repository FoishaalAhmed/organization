<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\Category;
use App\Model\Gallery;
use App\Model\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('frontend.about', compact('pages'));
    }

    public function blogs()
    {
        $blogs      = Blog::latest()->paginate(18);
        $categories = Category::orderBy('name', 'asc')->select('id', 'name')->get();
        return view('frontend.blogs', compact('blogs', 'categories'));
    }

    public function detail($id, $title)
    {
        $blog = Blog::findOrFail($id);
        $relatedBlog = Blog::where('category_id', $blog->category_id)->where('id', '!=', $id)->take(3)->get();
        $video = Gallery::where('type', 'Video')->latest()->first();
        return view('frontend.blogDetail', compact('blog', 'relatedBlog', 'video'));
    }
}
