<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Branch;
use App\Model\District;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    private $branchObject;

    public function __construct()
    {
        $this->branchObject = new Branch();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = $this->branchObject->getAllBranches();
        $districts = District::orderBy('name', 'asc')->select('id', 'name')->get();

        return view('backend.admin.branch', compact('branches', 'districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Branch::$validateRule);

        $this->branchObject->storeBranch($request);

        return back();
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(Branch::$validateRule);

        $this->branchObject->updateBranch($request, $request->id);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->branchObject->destroyBranch($id);

        return back();
    }
}
