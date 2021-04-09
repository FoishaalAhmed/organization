<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Model\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $user_object;

    public function __construct()
    {
        $this->user_object = new Profile();
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id   = auth()->user()->id;
        $user_info = User::findOrFail($user_id);
        return view('backend.profile', compact('user_info'));
    }

    public function photo(Request $request)
    {
        $user_id      = auth()->user()->id;
        $request->validate(Profile::$validatePhotoRule);
        $this->user_object->update_user_photo($request, $user_id);
        return redirect()->back();
    }

    public function password(Request $request)
    {
        $user_id      = auth()->user()->id;
        $request->validate(Profile::$validatePasswordRule);
        $this->user_object->update_user_password($request, $user_id);
        return redirect()->back();
    }

    public function update(ProfileRequest $request)
    {
        $user_id      = auth()->user()->id;
        //$request->validate(Profile::$validateInfoRule);
        $this->user_object->update_user_info($request, $user_id);
        return redirect()->back();
    }
}
