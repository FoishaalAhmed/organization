<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Supporter;
use Illuminate\Http\Request;

class SupporterController extends Controller
{
    public function index()
    {
        $supports = Supporter::latest()->get();
        return view('backend.admin.supporter', compact('supports'));
    }
}
