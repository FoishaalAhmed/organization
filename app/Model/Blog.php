<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;

class Blog extends Model
{
    protected $fillable = [
       'date', 'title', 'category_id', 'writer', 'text', 'photo',
    ];

    public function getAllBlog($limit = null)
    {
        $query = $this::join('categories', 'blogs.category_id', '=', 'categories.id')
                        ->select('blogs.*', 'categories.name as category');
                        $query->orderBy('blogs.created_at', 'desc');
                        
                        if ($limit != null) {

                            $query->take($limit);
                            $blogs = $query->get();

                        } else {

                            $blogs = $query->paginate(20);
                        }
        return $blogs;
    }

    public function getRelatedBlog($limit, $id)
    {
        $blogs = $this::join('categories', 'blogs.category_id', '=', 'categories.id')
                        ->select('blogs.*', 'categories.name as category')
                        ->orderBy('blogs.created_at', 'desc')
                        ->where('blogs.id', '!=', $id )
                        ->take($limit)
                        ->get();
        return $blogs;
    }

    public function getBlogDetail($id)
    {
        $blog = $this::join('categories', 'blogs.category_id', '=', 'categories.id')
                        ->select('blogs.*', 'categories.name as category')
                        ->where('blogs.id', $id)
                        ->firstOrFail();
        return $blog;
    }

    public function storeBlog(Object $request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/blogs/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->title       = $request->title;
        $this->date        = date('Y-m-d', strtotime($request->date));
        $this->category_id = $request->category_id;
        $this->writer      = $request->writer;
        $this->text        = $request->text;
        $storeBlog         = $this->save();

        $storeBlog ?
            Session::flash('message', 'New Blog Created Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function updateBlog(Object $request, Int $id)
    {
        $blog = $this::findOrFail($id);
        $image = $request->file('photo');

        if ($image) {
            if (file_exists($blog->photo)) unlink($blog->photo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/blogs/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $blog->photo     = $image_url;
        }

        $blog->title       = $request->title;
        $blog->date        = date('Y-m-d', strtotime($request->date));
        $blog->category_id = $request->category_id;
        $blog->writer      = $request->writer;
        $blog->text        = $request->text;
        $updateBlog        = $blog->save();

        $updateBlog ?
            Session::flash('message', 'Blog Updated Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyBlog(Int $id)
    {
        $blog = $this::findOrFail($id);
        if (file_exists($blog->photo)) unlink($blog->photo);

        $deleteBlog = $blog->delete();

        $deleteBlog ?
            Session::flash('message', 'Blog Deleted Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }
}
