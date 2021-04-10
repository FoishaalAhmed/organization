<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;

class Member extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'education', 'position', 'address',
    ];

    public static $validateRule = [

        'email'       => 'nullable|email|max:255',
        'phone'       => 'required|string|max:15|unique:members,phone',
        'education'   => 'nullable|string|max:255',
        'position'    => 'nullable|string|max:255',
        'address'     => 'nullable|string|max:255',
        'first_name'  => 'required|string|max:255',
        'last_name'   => 'required|string|max:255',
    ];

    public function storeMember(Object $request)
    {
        $this->first_name  = $request->first_name;
        $this->last_name   = $request->last_name;
        $this->education   = $request->education;
        $this->email       = $request->email;
        $this->position    = $request->position;
        $this->phone       = $request->phone;
        $this->address     = $request->address;
        $storeMember       = $this->save();

        $storeMember ?
        Session::flash('message', 'Your information is collected! We will contact you soon.') : Session::flash('message', 'Something went wrong');
    }
}
