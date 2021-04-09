<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Gallery;
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
        return view('frontend.home', compact('sliders', 'photoGallery', 'videoGallery', 'about'));
    }

    public function support()
    {
        return view('frontend.support');
    }

    public function sendSupport(Request $request)
    {
        $validation = Validator::make($request->all(), [

            'currency'    => 'required|string|max:255',
            'email'       => 'nullable|email|max:255',
            'phone'       => 'required|string|max:15',
            'amount'      => 'required|numeric|min:10',
            'first_name'  => 'required|string|max:255',
            'last_name'   => 'required|string|max:255',
            'nationality' => 'nullable|string|max:255',

        ]);

        $error_array = array();
        $success_output = '';

        if ($validation->fails()) {

            foreach ($validation->messages()->getMessages() as $field_name => $messages) {

                $error_array[] = $messages;
            }
        } else {

            $support = new Supporter();

            $return_message = $support->storeSupport($request);

            $success_output = '<div class="alert alert-success"> ' . $return_message . ' </div>';
        }

        $output = array(

            'error'   => $error_array,
            'success' => $success_output
        );

        echo json_encode($output);
    }
}
