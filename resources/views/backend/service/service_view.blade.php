@extends('admin.admin_master')

@section('css')
{{-- <link href="{{asset('wordform')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css"> --}}
<!-- Icons Css -->
<link href="{{asset('wordform')}}/css/icons.min.css" rel="stylesheet" type="text/css">
<!-- App Css-->
<link href="{{asset('wordform')}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
@endsection


@section('admin')

<div class="row">

    <div class="col-lg-8">
  
        <div class="box">
          <div class="box-header with-border">
           <h3 class="box-title"> Service Package View</h3>
          </div>
         <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
  
                      <th>Title</th>
                      <th>Amount</th>
                      <th>Content</th>
                      <th>Action</th>
                                   
                    </tr>
                  </thead>
                      <tbody>
  
                        @foreach ($services as $service)
                          <tr>					
  
                   
                            <td>  {{$service->title}} </td>
                            <td>  {{$service->number}} </td>
  
                            <td>  {!! $service->content !!} </td>
                            
  
                            <td>
  
                            <a href="{{ route('service.edit', $service->id)  }}"><i class="fa fa-edit btn btn-success"></i> </a>
                            <a href="{{ route('service.delete', $service->id ) }}"> <i class="fa fa-trash btn btn-danger"></i></a> 
                            </td>
  
                               
                          </tr>
  
                        @endforeach	
  
                      </tbody>
                </table>
              </div>
            </div>
              <!-- /.box-body -->
          </div>
               <!-- /.box -->        
    </div>
    
  
    <div class="col-lg-4">
    
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Add Service Package</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <div class="table-responsive">
       
                <form  method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data">
       
                   @csrf
       
                        <div class="form-group">
                            <h5>Service Title<span class="text-danger">*</span></h5>
                          <div class="controls">
                            <input type="text"  id="title" name="title" class="form-control" >
       
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group">
                            <h5>Services Amount<span class="text-danger">*</span></h5>
                          <div class="controls">
                            <input type="number"  id="number" name="number" class="form-control" >
       
                            @error('number')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                        <br>
                        {{-- <div class="form-group">
                            
                          <div class="controls">
                            <textarea type="text" id="content" name="content" style="width: 100%"></textarea>
                            <input type="text-area"  id="content" name="content" class="form-control" >
       
                            @error('content')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div> --}}
                        <div class="form-group">
                          <div class="row">
                            <div class="col-12">
                                <div class="card">
                                  <h5>Service Content<span class="text-danger">*</span></h5>
                                    <div class="card-body">

                                       
                                      <textarea id="elm1" name="content" style="width: 100%"></textarea>
                                        

                                    </div>
                                </div>
                            </div> <!-- end col -->
                          </div> 
                        </div>
    
       
                      </div>
                      <br>
       
                      <div class="text-xs-right">
                         <input type="submit" class="btn btn-rounded btn-info" value="Add Service Package">
                      </div> 
       
                 </form>
               
                </div> <!-- table res.. end -->
            </div>  <!-- box body end -->
        </div>      <!-- box end -->
    </div> 
  </div>
    
@endsection

@section('script')
<script>
  console.log('here');
</script>
<script src="assets/libs/jquery/jquery.min.js"></script>
        {{-- <script src="{{asset('wordform')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
        {{-- <script src="{{asset('wordform')}}/libs/metismenu/metisMenu.min.js"></script> --}}
        {{-- <script src="{{asset('wordform')}}/libs/simplebar/simplebar.min.js"></script> --}}
        {{-- <script src="{{asset('wordform')}}/libs/node-waves/waves.min.js"></script> --}}

        <!--tinymce js-->
        <script src="{{asset('wordform')}}/libs/tinymce/tinymce.min.js"></script>

        <!-- init js -->
        <script src="{{asset('wordform')}}/js/pages/form-editor.init.js"></script>

        <script src="{{asset('wordform')}}/js/app.js"></script>
    
@endsection