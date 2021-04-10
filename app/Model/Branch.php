<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;

class Branch extends Model
{
    protected $fillable = [
        'district_id', 'name', 
    ];

    public static $validateRule = [

        'name'  => 'required|string|max:255',
        'district_id'  => 'required|numeric',
    ];

    public function getAllBranches()
    {
        $branches = DB::table('branches')
                        ->join('districts', 'branches.district_id', '=', 'districts.id')
                        ->orderBy('districts.name', 'asc')
                        ->select('branches.*', 'districts.name as district')
                        ->get();
        return $branches;
    }

    public function storeBranch(Object $request)
    {
        $this->name = $request->name;
        $this->district_id = $request->district_id;
        $storeBranch = $this->save();

        $storeBranch ? 
        Session::flash('message', 'New Branch Created Successfully!') :
        Session::flash('message', 'Something Went Wrong!') ;
    }

    public function updateBranch(Object $request, Int $id)
    {
        $branch           = $this::findOrFail($id);
        $branch->name     = $request->name;
        $branch->district_id = $request->district_id;
        $updateBranch     = $branch->save();

        $updateBranch ? 
        Session::flash('message', 'Branch Updated Successfully!') :
        Session::flash('message', 'Something Went Wrong!') ;
    }

    public function destroyBranch(Int $id)
    {
        $branch           = $this::findOrFail($id);
        $destroyBranch     = $branch->delete();

        $destroyBranch ? 
        Session::flash('message', 'Branch Deleted Successfully!') :
        Session::flash('message', 'Something Went Wrong!') ;
    }
}
