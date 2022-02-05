<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminProfileUpdate extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $admin = Admin::find(Auth::guard('admin')->user()->id);


        return view('admin.admin_profile_view',compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
       
       
           $admins = Admin::find(Auth::guard('admin')->user()->id);

    
            if ($request->hasFile('profile_photo_path')) {
    
                $destination = public_path($admins->profile_photo_path);
    
                if (file_exists($destination)) {
                    unlink($destination);
                }

                $image = $request->file('profile_photo_path');
                $extension = $image->extension();
                $name = time() . '.' . $extension;
                $image->move(public_path('/upload/admin_img/'), $name);
                $path = 'upload/admin_img/' .$name;
    
                $admins->profile_photo_path =  $path;
            }
    
            $admins->name= $request->name;
            $admins->save();
    
            $notification = array(
                'message' =>  'Profile Update Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('admin.profile_update')->with($notification);
     
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
