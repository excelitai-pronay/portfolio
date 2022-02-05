@extends('admin.admin_master')

@section('admin')



<!----========== Header add part   ===========--->
    
<div class="row">

  <div class="col-lg-8">

      <div class="box">
        <div class="box-header with-border">
         <h3 class="box-title"> Header View</h3>
        </div>
       <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>

                    <th>Image</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Action</th>
             
                  </tr>
                </thead>
                    <tbody>

                      @foreach ($headers as $item)
                        <tr>					

                 
                          <td>

                            <img src="{{ asset($item->image) }}" height="80px;" width="80px;">
            
            
                          </td>

                          <td>{{  $item->menu }}</td>
                          <td>{{  $item->sub_menu }}</td>

                          <td>

                            <a href="{{ route('header.edit', $item->id)  }}"><i class="fa fa-edit btn btn-success"></i> </a>
                            <a href="{{ route('header.delete', $item->id ) }}"> <i class="fa fa-trash btn btn-danger"></i></a> 
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
          <h3 class="box-title">Add Header</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
     
              <form  method="POST" action="{{ route('header.store') }}" enctype="multipart/form-data">
     
                 @csrf
     
                      <div class="form-group">
                           <h5> Header Image <span class="text-danger">*</span></h5>
                          <div class="controls">
                           <input type="file" id="image" name="image" class="form-control" >
     
                           @error('image')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
     
     
                          </div>
                      </div>
     
                      <div class="form-group">
                          <h5>Header Title <span class="text-danger">*</span></h5>
                        <div class="controls">
                          <input type="text"  id="menu" name="menu" class="form-control" >
     
                          @error('menu')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group">
                          <h5>Sub Title <span class="text-danger">*</span></h5>
                        <div class="controls">
                          <input type="text"  id="sub_menu" name="sub_menu" class="form-control" >
     
                          @error('sub_menu')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>

                     
     
                    </div>
                    <br>
     
                    <div class="text-xs-right">
                       <input type="submit" class="btn btn-rounded btn-info" value="Add Category">
                    </div> 
     
               </form>
             
              </div> <!-- table res.. end -->
          </div>  <!-- box body end -->
      </div>      <!-- box end -->
  </div> 
</div>

@endsection