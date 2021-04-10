<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Model\Branch;
use App\Model\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $newsObject;
    private $branchObject;

    public function __construct()
    {
        $this->newsObject = new News();
        $this->branchObject = new Branch();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->get();
        return view('backend.admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = $this->branchObject->getAllBranches();
        return view('backend.admin.news.create', compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $this->newsObject->storeNews($request);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        $branches = $this->branchObject->getAllBranches();
        return view('backend.admin.news.edit', compact('branches', 'news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->newsObject->updateNews($request, $id);
        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->newsObject->destroyNews($id);
        return redirect()->route('admin.news.index');
    }
}
