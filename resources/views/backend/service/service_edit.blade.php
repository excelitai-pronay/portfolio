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
                            <h3 class="box-title">Service Package Update</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">


                                <form method="POST" action="{{ route('service.update', $services->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-group">
                                        <h5>Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" id="title" name="title"
                                                class="form-control" value="{{$services->title}}">

                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                     
                                    </div>
                                    <div class="form-group">
                                        <h5>Amount <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" id="number" name="number"
                                                class="form-control" value="{{$services->number}}">

                                            @error('number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                     
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                          <div class="col-12">
                                              <div class="card">
                                                <h5>Service Content<span class="text-danger">*</span></h5>
                                                  <div class="card-body">
              
                                                     
                                                    <textarea id="elm1" name="content" value="{!!$services->content!!}"style="width: 100%"></textarea>
                                                      
              
                                                  </div>
                                              </div>
                                          </div> <!-- end col -->
                                        </div> 
                                      </div>

                                    {{-- <div class="form-group">
                                        <h5>Content <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" id="content" name="content"
                                                class="form-control" value="{{$services->content}}">

                                            @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                   --}}
                                    <br>
                                   
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info" value="Update Service Package">
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
@section('script')
<script>
  console.log('here');
</script>
<script src="assets/libs/jquery/jquery.min.js"></script>

        <!--tinymce js-->
        <script src="{{asset('wordform')}}/libs/tinymce/tinymce.min.js"></script>

        <!-- init js -->
        <script src="{{asset('wordform')}}/js/pages/form-editor.init.js"></script>

        <script src="{{asset('wordform')}}/js/app.js"></script>
    
@endsection