@extends('admin.layouts.admin_layout')

@section('content')

   
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.includes.breadcrumbs', ['title'=>$pageName, 'breadCrumbs'=>$breadCrumbs])
    



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      @include('admin.includes.flashmessage')   
        <div class="row">
          <!-- left column --> 
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Settings </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-five-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-five-overlay-tab" data-toggle="pill" href="#custom-tabs-five-overlay" role="tab" aria-controls="custom-tabs-five-overlay" aria-selected="true">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-five-overlay-dark-tab" data-toggle="pill" href="#custom-tabs-five-overlay-dark" role="tab" aria-controls="custom-tabs-five-overlay-dark" aria-selected="false">Address</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-five-normal-tab" data-toggle="pill" href="#custom-tabs-five-normal" role="tab" aria-controls="custom-tabs-five-normal" aria-selected="false">Social</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-five-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-five-overlay" role="tabpanel" aria-labelledby="custom-tabs-five-overlay-tab">
                    <div class="overlay-wrapper">
                      <!-- <div class="overlay"><i class="fas fa-3x fa-sync-alt fa-spin"></i><div class="text-bold pt-2">Loading...</div></div> -->
                      <form role="form" id="quickForm" action="{{ route($routeName.'update') }}" method="POST" >
              @csrf
              @method('PUT')
                <div class="card-body">

                @foreach ($website_setting_home as $ws)

                    <div class="form-group">
                    <label class = "{{($ws->is_require==1)?'require-input':''}}">{{$ws->label_name}}</label>
                    @if($ws->input_type=='textarea')
                    <textarea name="setting[{{$ws->id}}]" class="form-control" {{ $ws->is_require==1?'required':'' }}>{{$ws->input_value}} </textarea>
                    @else
                    <input type="{{$ws->input_type}}" name="setting[{{$ws->id}}]" class="form-control"   value="{{$ws->input_value}}"   {{ $ws->is_require==1?'required':'' }}> 
                    @endif
                    @error('$ws->label_name')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                   </div>
              
                @endforeach


                </div> 
                <!-- /.card-body -->
                  <div class="card-footer"> 
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-five-overlay-dark" role="tabpanel" aria-labelledby="custom-tabs-five-overlay-dark-tab">
                    <div class="overlay-wrapper">
                      <!-- <div class="overlay dark"><i class="fas fa-3x fa-sync-alt fa-spin"></i><div class="text-bold pt-2">Loading...</div></div> -->
                      <form role="form" id="quickForm" action="{{ route($routeName.'update') }}" method="POST" >
              @csrf
              @method('PUT')
                <div class="card-body">

                @foreach ($website_setting_address as $ws)

                    <div class="form-group">
                    <label class = "{{($ws->is_require==1)?'require-input':''}}">{{$ws->label_name}}</label>
                    @if($ws->input_type=='textarea')
                    <textarea name="setting[{{$ws->id}}]" class="form-control" {{ $ws->is_require==1?'required':'' }}>{{$ws->input_value}} </textarea>
                    @else
                    <input type="{{$ws->input_type}}" name="setting[{{$ws->id}}]" class="form-control"   value="{{$ws->input_value}}"   {{ $ws->is_require==1?'required':'' }}> 
                    @endif
                    @error('$ws->label_name')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                   </div>
              
                @endforeach


                </div> 
                <!-- /.card-body -->
                  <div class="card-footer"> 
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-five-normal" role="tabpanel" aria-labelledby="custom-tabs-five-normal-tab">
                  <form role="form" id="quickForm" action="{{ route($routeName.'update') }}" method="POST" >
              @csrf
              @method('PUT')
                <div class="card-body">

                @foreach ($website_setting_social as $ws)

                    <div class="form-group">
                    <label class = "{{($ws->is_require==1)?'require-input':''}}">{{$ws->label_name}}</label>
                    @if($ws->input_type=='textarea')
                    <textarea name="setting[{{$ws->id}}]" class="form-control" {{ $ws->is_require==1?'required':'' }}>{{$ws->input_value}} </textarea>
                    @else
                    <input type="{{$ws->input_type}}" name="setting[{{$ws->id}}]" class="form-control"   value="{{$ws->input_value}}"   {{ $ws->is_require==1?'required':'' }}> 
                    @endif
                    @error('$ws->label_name')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                   </div>
              
                @endforeach


                </div> 
                <!-- /.card-body -->
                  <div class="card-footer"> 
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>



             
            </div> 
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div> 
      <!-- /.container-fluid -->
    </section> 
    <!-- /.content -->
@endsection 

@section('script')

<style>.require-input:after {
font-weight: bold;
color: red;
content: " *";
}</style>
<!-- jquery-validation -->
<script src="{{ url('admin_assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ url('admin_assets/plugins/jquery-validation/additional-methods.min.js')}}"></script>


<script type="text/javascript">

  $('#quickForm').validate({
    rules: {
      name: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      dob: {
        required: true,
      },
      password: {
        required: true,
        minlength: 6,
      },
      
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long"
      },
     
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });

</script>

@endsection

