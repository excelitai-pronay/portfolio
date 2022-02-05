<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Slider;

class SliderController extends Controller
{
    //Slider View
    public function SliderView()
    {
        $sliders = Slider::all();
        return view('backend.slider.slider_view', compact('sliders'));
    } // end method

    //Slider Store

    public function SliderStore(Request $request)
    {

        $request->validate(
            [
                'image' => 'required|image|mimes:jpeg,png,jpg',
            ],
            [

                'content' => 'required',
            ],
           
        );

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->extension();
            $name = time() . '.' . $extension;
            $image->move(public_path('/upload/slider_img'), $name);
            $save_url = '/upload/slider_img/'.$name;
        }

        Slider::insert([

          
            'content'   => $request->content,
            'image'     => $save_url,
        ]);


        $notification = array(
            'message' => 'Slider Image Create sucessfully',
            'alert-type' => 'success'
        );

        return redirect()->route('slider.view')->with($notification);
    } // end method

       // Slider Edit
       public function SliderEdit($id)
       {
   
           $sliders = Slider::findOrFail($id);
   
           return view('backend.slider.slider_edit', compact('sliders'));
       } // end method


       // Slider Update

    public function SliderUpdate(Request $request, $id)
    {
        $slider = Slider::find($id);

        if ($request->file('image')) {

            $destination = public_path($slider->image);

            if (file_exists($destination)) {
                unlink($destination);
            }
            $image = $request->file('image');
            $extension = $image->extension();
            $name = time() . '.' . $extension;
            $image->move(public_path('/upload/slider_img/'), $name);
            $path = 'upload/slider_img/' .$name;

            $slider->image =  $path;
        }

       
        $slider->content= $request->content;

        $slider->save();

        $notification = array(
            'message' =>  'Slider Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('slider.view')->with($notification);
    }//end method

     //Slider Delete

     public function SliderDelete($id)
     {
 
         $sliders = Slider::findOrFail($id);
 
         $img = $sliders->image;
         
 
         Slider::findOrFail($id)->delete();
 
         $notification = array(
             'message' =>  'Slider Delete Successfully',
             'alert-type' => 'info'
         );
 
         return redirect()->back()->with($notification);
     } // end method
 
}//end main method
