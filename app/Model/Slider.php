<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;

class Slider extends Model
{
    protected $fillable = [
       'photo',
    ];

    public function storeSlider(Object $request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/sliders/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $storeSlider = $this->save();

        $storeSlider ?
            Session::flash('message', 'Slider Save Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function updateSlider(Object $request, Int $id)
    {
        $slider = $this::findOrFail($id);
        $image  = $request->file('photo');

        if ($image) {

            if (file_exists($slider->photo)) unlink($slider->photo);

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/sliders/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $slider->photo     = $image_url;
        }
        
        $updateSlider  = $slider->save();

        $updateSlider ?
            Session::flash('message', 'Slider Updated Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function destroySlider(Int $id)
    {
        $slider = $this::findOrFail($id);
        if (file_exists($slider->photo)) unlink($slider->photo);
        $destroySlider = $slider->delete();

        $destroySlider ?
            Session::flash('message', 'Slider Deleted Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }
}
