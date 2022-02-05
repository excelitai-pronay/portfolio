<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Service;

class ServiceController extends Controller
{
    //service package view

      public function ServiceView()
      {
          $services = Service::all();
          return view('backend.service.service_view', compact('services'));
      } // end method

      //service package store

      public function ServiceStore(Request $request)
    {

        

        $request->validate(
            [
                'title' => 'required',
            ],
            [

                'number' => 'required',
            ],
            [
                'content' => 'required'
            ],
        );
   

        Service::insert([

        'title'      => $request->title,
        'number'     => $request->number,
        'content'    => $request->content,
        ]);


        $notification = array(
        'message' => 'Service Package Create sucessfully',
        'alert-type' => 'success'
        );

        return redirect()->route('service.view')->with($notification);
    
    }

    // service package edit
    public function ServiceEdit($id)
    {

        $services = Service::findOrFail($id);

        return view('backend.service.service_edit', compact('services'));
    } // end method


    //service package update

     
       public function ServiceUpdate(Request $request, $id)
       {

        
           $service = Service::find($id);
   
           
           $service->title = $request->title;
          
           $service->number = $request->number;
           $service->content = $request->content;

           $service->save();
   
     
   
           $notification = array(
               'message' =>  'Service package update Successfully',
               'alert-type' => 'success'
           );
   
           return redirect()->route('service.view')->with($notification);
       }

       public function ServiceDelete($id)
       {
   
           $services = Service::findOrFail($id);

           
   
           Service::findOrFail($id)->delete();
   
           $notification = array(
               'message' =>  'Service package Delete Successfully',
               'alert-type' => 'info'
           );
   
           return redirect()->back()->with($notification);
       } // end method

}
