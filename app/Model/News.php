<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;

class News extends Model
{
    protected $fillable = [

        'title','slug','date','branch_id','photo','detail',
    ];

    public function getSearchedNews($search)
    {
        $news = $this::join('branches', 'news.branch_id', '=', 'branches.id')
                      ->join('districts', 'branches.district_id', '=', 'districts.id')

        ->where('news.title', 'LIKE', '%' . $search . '%')
        ->orWhere('branches.name', 'LIKE', '%' . $search . '%')
        ->orWhere('districts.name', 'LIKE', '%' . $search . '%')
        ->paginate(20);
        $news->appends(['search' => $search]);

        return $news;
    }

    public function storeNews(Object $request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/news/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->title       = $request->title;
        $this->date        = date('Y-m-d', strtotime($request->date));
        $this->branch_id   = $request->branch_id;
        $this->slug        = $request->slug;
        $this->detail      = $request->detail;
        $storeNews         = $this->save();

        $storeNews ?
            Session::flash('message', 'New News Created Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function updateNews(Object $request, Int $id)
    {
        $news = $this::findOrFail($id);
        $image = $request->file('photo');

        if ($image) {
            if (file_exists($news->photo)) unlink($news->photo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/news/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $news->photo     = $image_url;
        }

        $news->title       = $request->title;
        $news->date        = date('Y-m-d', strtotime($request->date));
        $news->branch_id   = $request->branch_id;
        $news->slug        = $request->slug;
        $news->detail      = $request->detail;
        $updateNews         = $news->save();

        $updateNews ?
            Session::flash('message', 'News Updated Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyNews(Int $id)
    {
        $news = $this::findOrFail($id);
        if (file_exists($news->photo)) unlink($news->photo);
        $destroyNews = $news->delete();

        $destroyNews ?
            Session::flash('message', 'News Deleted Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }
}
