<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Gallery;
use App\Model\News;
use App\Model\Page;
use App\Model\Slider;
use App\Model\Supporter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->take(3)->get();
        $photoGallery = Gallery::where('type', 'Photo')->latest()->take(9)->get();
        $videoGallery = Gallery::where('type', 'Video')->latest()->take(3)->get();
        $about = Page::where('slug', 'about-us')->first();
        $news      = News::latest()->take(8)->get();
        return view('frontend.home', compact('sliders', 'photoGallery', 'videoGallery', 'about', 'news'));
    }

    public function support()
    {
        return view('frontend.support');
    }

    public function sendSupport(Request $request)
    {

        $support = new Supporter();
        $request->validate(Supporter::$validateRule);
        $support->storeSupport($request);

        return back();
    }
}
