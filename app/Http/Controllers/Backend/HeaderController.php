<?php

namespace app\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Header;
use Intervention\Image\Facades\Image;


class HeaderController extends Controller
{
    //Header View
    public function HeaderView()
    {
        $headers = Header::all();
        return view('backend.header.header_view', compact('headers'));
    } // end method

    //Header Store

    public function HeaderStore(Request $request)
    {

        $request->validate(
            [
                'image' => 'required|image|mimes:jpeg,png,jpg',
            ],
            [

                'menu' => 'required',
            ],
            [
                'sub_menu' => 'required'
            ],
        );

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->extension();
            $name = time() . '.' . $extension;
            $image->move(public_path('/upload/header_img'), $name);
            $save_url = '/upload/header_img/'.$name;
        }

        Header::insert([

            'menu'      => $request->menu,
            'sub_menu'  => $request->sub_menu,
            'image'     => $save_url,
        ]);


        $notification = array(
            'message' => 'Header Image Create sucessfully',
            'alert-type' => 'success'
        );

        return redirect()->route('header.view')->with($notification);
    } // end method


    // Edit Header
    public function HeaderEdit($id)
    {

        $headers = Header::findOrFail($id);

        return view('backend.header.header_edit', compact('headers'));
    } // end method


    // Update Header
    public function HeaderUpdate(Request $request, $id)
    {
        $header = Header::find($id);

        if ($request->file('image')) {

            $destination = public_path($header->image);

            if (file_exists($destination)) {
                unlink($destination);
            }
            $image = $request->file('image');
            $extension = $image->extension();
            $name = time() . '.' . $extension;
            $image->move(public_path('/upload/header_img/'), $name);
            $path = 'upload/header_img/' .$name;

            $header->image =  $path;
        }

        $header->sub_menu = $request->sub_menu;
        // $header->brand_slug = strtolower(str_replace(' ', '-', $request->brand_name));
        $header->menu = $request->menu;

        $header->save();

        $notification = array(
            'message' =>  'Header Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('header.view')->with($notification);
    }

 




    //============= Header Delete=================

    public function HeaderDelete($id)
    {

        $headers = Header::findOrFail($id);

        $img = $headers->image;
        //  unlink($img);

        Header::findOrFail($id)->delete();

        $notification = array(
            'message' =>  'Header Delete Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    } // end method


}//end main method
