@extends('layouts.app')

@section('content')

   
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
       <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      @include('admin.includes.flashmessage')
        <div class="row">
          <!-- left column --> 
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="login_box">
              <div class="login_header">
                Change Password
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="login_body">
                <form id="form-change-password" role="form" method="POST" action="{{ route('change-password.update')}}" novalidate class="form-horizontal">
                  <div class="row">             
                    <!-- <label for="current-password" class="col-sm-4 control-label">Current Password</label> -->
                    <div class="col-12">
                      <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Current Password">
                        @error('current-password')
                        <div class="custom-error">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <!-- <label for="password" class="col-sm-4 control-label">New Password</label> -->
                    <div class="col-12">
                      <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
                        @error('password')
                        <div class="custom-error">{{ $message }}</div>
                        @enderror
                      </div>

                    </div>
                    <!-- <label for="password_confirmation" class="col-sm-4 control-label">Re-enter Password</label> -->
                    <div class="col-12">
                      <div class="form-group">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
                        @error('password_confirmation')
                        <div class="custom-error">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group row mb-0">
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </div>

                  </div>
                </form>
              </div>
            </div> 
            <!-- /.card -->
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
$(document).ready(function () {

  });
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