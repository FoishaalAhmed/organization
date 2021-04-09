<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;

class Event extends Model
{
    protected $fillable = [

        'title', 'details', 'photo', 'slug',
    ];

    public function storeEvent(Object $request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/events/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->title       = $request->title;
        $this->slug        = $request->slug;
        $this->details     = $request->details;
        $storeEvent         = $this->save();

        $storeEvent ?
            Session::flash('message', 'New Event Created Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function updateEvent(Object $request, Int $id)
    {
        $event = $this::findOrFail($id);
        $image = $request->file('photo');

        if ($image) {
            if (file_exists($event->photo)) unlink($event->photo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/events/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $event->photo     = $image_url;
        }

        $event->title       = $request->title;
        $event->slug        = $request->slug;
        $event->details     = $request->details;
        $updateEvent        = $event->save();

        $updateEvent ?
            Session::flash('message', 'Event Updated Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyEvent(Int $id)
    {
        $event = $this::findOrFail($id);
        if (file_exists($event->photo)) unlink($event->photo);

        $deleteEvent = $event->delete();

        $deleteEvent ?
            Session::flash('message', 'Event Deleted Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }
}
