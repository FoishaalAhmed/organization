<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Gallery;
use App\Model\News;
use App\Model\Page;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news      = News::latest()->paginate(20);
        return view('frontend.news', compact('news'));
    }

    public function detail($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $relatedNews = News::where('branch_id', $news->branch_id)->where('id', '!=', $news->id)->take(3)->get();
        $video = Gallery::where('type', 'Video')->latest()->first();
        return view('frontend.newsDetail', compact('news', 'relatedNews', 'video'));
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('frontend.page', compact('page'));
    }

    public function search(Request $request)
    {
        $newsObject = new News();

        $search = $request->search;

        $news = $newsObject->getSearchedNews($search);
        
        return view('frontend.news', compact('news'));


    }
}
