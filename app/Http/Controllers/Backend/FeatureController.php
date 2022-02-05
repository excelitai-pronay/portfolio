<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Feature;

class FeatureController extends Controller
{
    //Features View
      
    public function FeaturesView()
      {
          $features = Feature::all();
          return view('backend.feature.feature_view', compact('features'));
      } // end method


      
    public function FeaturesStore(Request $request)
    {

        $request->validate(
            [
                'image' => 'required|image|mimes:jpeg,png,jpg',
            ],
            [

                'title' => 'required',
            ],
            [

                'content' => 'required',
            ],
           
        );

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->extension();
            $name = time() . '.' . $extension;
            $image->move(public_path('/upload/feature_img'), $name);
            $save_url = '/upload/feature_img/'.$name;
        }

        Feature::insert([

          
            
            'image'     => $save_url,
            'title'   => $request->title,
            'content'   => $request->content,
        ]);


        $notification = array(
            'message' => 'Features Create sucessfully',
            'alert-type' => 'success'
        );

        return redirect()->route('feature.view')->with($notification);
    } // end method

    //Feature details edit

    public function FeaturesEdit($id)
    {

        $features = Feature::findOrFail($id);

        return view('backend.feature.feature_edit', compact('features'));
    } // end method

     // Features details update
     public function FeaturesUpdate(Request $request, $id)
     {
         $feature = Feature::find($id);
 
         if ($request->file('image')) {
 
             $destination = public_path($feature->image);
 
             if (file_exists($destination)) {
                 unlink($destination);
             }
             $image = $request->file('image');
             $extension = $image->extension();
             $name = time() . '.' . $extension;
             $image->move(public_path('/upload/feature_img/'), $name);
             $path = 'upload/feature_img/' .$name;
 
             $feature->image =  $path;
         }
 
         $feature->title= $request->title;
         $feature->content = $request->content;
 
         $feature->save();
 
         $notification = array(
             'message' =>  'Features Update Successfully',
             'alert-type' => 'success'
         );
 
         return redirect()->route('feature.view')->with($notification);
     }

     public function FeaturesDelete($id)
     {
 
         $features = Feature::findOrFail($id);
 
         $img = $features->image;
         //  unlink($img);
 
         Feature::findOrFail($id)->delete();
 
         $notification = array(
             'message' =>  'Features Details Delete Successfully',
             'alert-type' => 'info'
         );
 
         return redirect()->back()->with($notification);
     } // end method
}
