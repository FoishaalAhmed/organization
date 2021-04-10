<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;

class Supporter extends Model
{
    protected $fillable = [

        'first_name', 'last_name', 'nationality', 'email', 'phone', 'amount', 'currency', 
    ];

    public static $validateRule = [

        'currency'    => 'required|string|max:255',
        'email'       => 'nullable|email|max:255',
        'phone'       => 'required|string|max:15',
        'amount'      => 'required|numeric|min:10',
        'first_name'  => 'required|string|max:255',
        'last_name'   => 'required|string|max:255',
        'nationality' => 'nullable|string|max:255',
    ];

    public function storeSupport($request)
    {
        $this->first_name  = $request->first_name ;
        $this->last_name   = $request->last_name ;
        $this->nationality = $request->nationality ;
        $this->email       = $request->email ;
        $this->phone       = $request->phone ;
        $this->amount      = $request->amount ;
        $this->currency    = $request->currency ;
        $store_support     = $this->save();

        $store_support ? 
        Session::flash('message', 'Your information is collected! We will contact you soon.') : Session::flash('message', 'Something went wrong') ;
    }
}
