@extends('admin.admin_master')

@section('admin')

  

    <div class="container-full">
        <section class="content">

            <div class="row">

                <div class="col-lg-3"></div>

                <!--================================ Header Update ======================================- -->

                <div class="col-lg-6">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Features Details Update</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">


                                <form method="POST" action="{{ route('feature.update', $features->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <h5>Image <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" id="image" name="image"
                                                class="form-control">

                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <img src="{{asset($features->image)}}" alt="" width="100" height="70">
                                    </div>

                                    <div class="form-group">
                                        <h5>Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" id="title" name="title"
                                                class="form-control" value="{{$features->title}}">

                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                     
                                    </div>

                                    <div class="form-group">
                                        <h5>Content <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" id="content" name="content"
                                                class="form-control" value="{{$features->content}}">

                                            @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                  
                                    <br>
                                   
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info" value="Update Features Details">
                                    </div>

                                </form>





                            </div> <!-- table res.. end -->
                        </div> <!-- box body end -->
                    </div> <!-- box end -->
                </div> <!-- col end -->

            </div> <!--  row end-->
        </section> <!--  content end-->
    </div> <!--  row end-->

    <div class="col-lg-3"></div>










@endsection