<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Event;
use App\Model\Gallery;
use App\Model\Member;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(19);
        return view('frontend.events', compact('events'));
    }

    public function photos()
    {
        $photos = Gallery::where('type', 'Photo')->latest()->paginate(18);
        return view('frontend.photos', compact('photos'));
    }

    public function videos()
    {
        $videos = Gallery::where('type', 'Video')->latest()->paginate(18);
        return view('frontend.videos', compact('videos'));
    }

    public function member(Request $request)
    {
        $memberObject = new Member();
        $request->validate(Member::$validateRule);
        $memberObject->storeMember($request);
        return back();
    }
}
