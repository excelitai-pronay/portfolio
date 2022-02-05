<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Core;

class CoreController extends Controller
{
     //Core Feature View
     public function CoreView()
     {
         $cores = core::all();
         return view('backend.core.core_view', compact('cores'));
     } // end method

     //Core feature store

     public function CoreStore(Request $request)
    {

        $request->validate(
            [
                'image' => 'required|image|mimes:jpeg,png,jpg',
            ],
            [

                'heading' => 'required',
            ],
           
        );

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->extension();
            $name = time() . '.' . $extension;
            $image->move(public_path('/upload/core_img'), $name);
            $save_url = '/upload/core_img/'.$name;
        }

        Core::insert([

          
            'heading'   => $request->heading,
            'image'     => $save_url,
        ]);


        $notification = array(
            'message' => 'Slider Image Create sucessfully',
            'alert-type' => 'success'
        );

        return redirect()->route('core.view')->with($notification);
    } // end method


    //core feature edit

         public function CoreEdit($id)
         {
     
             $cores = Core::findOrFail($id);
     
             return view('backend.core.core_edit', compact('cores'));
         } // end method

    //core feature update

    public function CoreUpdate(Request $request, $id)
    {
        $core = Core::find($id);

        if ($request->file('image')) {

            $destination = public_path($core->image);

            if (file_exists($destination)) {
                unlink($destination);
            }
            $image = $request->file('image');
            $extension = $image->extension();
            $name = time() . '.' . $extension;
            $image->move(public_path('/upload/core_img/'), $name);
            $path = 'upload/core_img/' .$name;

            $core->image =  $path;
        }

       
        $core->heading= $request->heading;

        $core->save();

        $notification = array(
            'message' =>  'Slider Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('core.view')->with($notification);
    }//end method


     //Core Delete

     public function CoreDelete($id)
     {
 
         $cores = Core::findOrFail($id);
 
         $img = $cores->image;
         
 
         Core::findOrFail($id)->delete();
 
         $notification = array(
             'message' =>  'Core Feature Delete Successfully',
             'alert-type' => 'info'
         );
 
         return redirect()->back()->with($notification);
     } // end method


  
}
