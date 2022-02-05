<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Galary;
use Illuminate\Http\Request;

class GalaryController extends Controller
{
    //Image galary view
    public function GalaryView()
    {
        $galaries = Galary::all();
        return view('backend.galary.galary_view', compact('galaries'));
    }//end method

    //Image galary store
    public function GalaryStore(Request $request)
    {

        $request->validate(
            [
                'image' => 'required|image|mimes:jpeg,png,jpg',
            ],
           
        );

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->extension();
            $name = time() . '.' . $extension;
            $image->move(public_path('/upload/galary_img'), $name);
            $save_url = '/upload/galary_img/'.$name;
        }

        Galary::insert([

          
            'image'     => $save_url,
        ]);


        $notification = array(
            'message' => 'Slider Image Create sucessfully',
            'alert-type' => 'success'
        );

        return redirect()->route('galary.view')->with($notification);
    } // end method

    //Image galary edit

    public function GalaryEdit($id)
    {

        $galaries = Galary::findOrFail($id);

        return view('backend.galary.galary_edit', compact('galaries'));
    } // end method

    //Image galary update

    public function GalaryUpdate(Request $request, $id)
    {
        $galary = Galary::find($id);

        if ($request->file('image')) {

            $destination = public_path($galary->image);

            if (file_exists($destination)) {
                unlink($destination);
            }
            $image = $request->file('image');
            $extension = $image->extension();
            $name = time() . '.' . $extension;
            $image->move(public_path('/upload/galary_img/'), $name);
            $path = 'upload/galary_img/' .$name;

            $galary->image =  $path;
        }


        $galary->save();

        $notification = array(
            'message' =>  'Slider Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('galary.view')->with($notification);
    }//end method

    public function GalaryDelete($id)
     {
 
         $galaries = Galary::findOrFail($id);
 
         $img = $galaries->image;
         
 
         Galary::findOrFail($id)->delete();
 
         $notification = array(
             'message' =>  'Slider Delete Successfully',
             'alert-type' => 'info'
         );
 
         return redirect()->back()->with($notification);
     } // end method
}
