<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;

class Contact extends Model
{
    protected $fillable = [

        'email', 'phone', 'mobile', 'facebook', 'twitter', 'youtube', 'instagram', 'address',

    ];

    public static $validateRule = [

        'email'     => 'required|email|max:255',
        'phone'     => 'nullable|string|max:15',
        'mobile'    => 'required|string|max:15',
        'address'   => 'nullable|string',
        'facebook'  => 'nullable|string|max:255',
        'twitter'   => 'nullable|string|max:255',
        'youtube'   => 'nullable|string|max:255',
        'instagram' => 'nullable|string|max:255',
    ];

    public function updateContact(Object $request, Int $id)
    {
        $contact = $this::findOrFail($id);
        $contact->email     = $request->email;
        $contact->phone     = $request->phone;
        $contact->mobile    = $request->mobile;
        $contact->facebook  = $request->facebook;
        $contact->twitter   = $request->twitter;
        $contact->youtube   = $request->youtube;
        $contact->instagram = $request->instagram;
        $contact->address   = $request->address;
        $updateContact      = $contact->save();

        $updateContact ? 
        Session::flash('message', 'Contact Updated Successfully!') :
        Session::flash('message', 'Something Went Wrong!') ;
    }
}
