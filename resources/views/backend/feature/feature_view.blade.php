@extends('admin.admin_master')

@section('admin')

<div class="row">

    <div class="col-lg-8">
  
        <div class="box">
          <div class="box-header with-border">
           <h3 class="box-title"> Features Details View</h3>
          </div>
         <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
  
                      <th>Image</th>
                      <th>Title</th>
                      <th>Content</th>
                      <th>Action</th>
                                   
                    </tr>
                  </thead>
                      <tbody>
  
                        @foreach ($features as $feature)
                          <tr>					
  
                   
                            <td>
  
                              <img src="{{ asset($feature->image) }}" height="80px;" width="80px;">
              
              
                            </td>

                            <td>{{ $feature->title }}</td>
  
                            <td>{{ $feature->content }}</td>
                            
  
                            <td>
  
                            <a href="{{ route('feature.edit', $feature->id)  }}"><i class="fa fa-edit btn btn-success"></i> </a>
                            <a href="{{ route('feature.delete', $feature->id ) }}"> <i class="fa fa-trash btn btn-danger"></i></a> 
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
            <h3 class="box-title">Add Features Details</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <div class="table-responsive">
       
                <form  method="POST" action="{{ route('feature.store') }}" enctype="multipart/form-data">
       
                   @csrf
       
                        <div class="form-group">
                             <h5>Features Image<span class="text-danger">*</span></h5>
                            <div class="controls">
                             <input type="file" id="image" name="image" class="form-control" >
       
                             @error('image')
                             <span class="text-danger">{{ $message }}</span>
                             @enderror
       
       
                            </div>
                        </div>

                        <div class="form-group">
                            <h5>Features Title<span class="text-danger">*</span></h5>
                          <div class="controls">
                            <input type="text"  id="title" name="title" class="form-control" >

                            {{-- <label for="Description">Description:</label>
                            <textarea name="Description" id="Description"></textarea> --}}
       
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
       
                        <div class="form-group">
                            <h5>Features Content<span class="text-danger">*</span></h5>
                          <div class="controls">
                            <input type="text"  id="content" name="content" class="form-control" >

                            {{-- <label for="Description">Description:</label>
                            <textarea name="Description" id="Description"></textarea> --}}
       
                            @error('content')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
    
       
                      </div>
                      <br>
       
                      <div class="text-xs-right">
                         <input type="submit" class="btn btn-rounded btn-info" value="Add Slider">
                      </div> 
       
                 </form>
               
                </div> <!-- table res.. end -->
            </div>  <!-- box body end -->
        </div>      <!-- box end -->
    </div> 
  </div>
    
@endsection