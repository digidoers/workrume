@extends('admin.layouts.admin_layout')

@section('content')

   
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.includes.breadcrumbs', ['title'=>$pageName, 'breadCrumbs'=>$breadCrumbs])



    <!-- Main content -->
    <section class="content">
    
        <div class="row">
          <!-- left column --> 
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Job </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" action="{{ route($routeName.'update', $ad->id) }}" method="POST" >
              @csrf
              @method('PUT')
                <div class="card-body">

                <div class="form-group">
                    <label class = "require-input">Title</label>
                    <input type="text" name="title" class="form-control"  placeholder="Enter Ad Title" value="{{ old('title',$ad->title)}}">
                    @error('title')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                </div>
                
                <div class="form-group">
                    <label class = "require-input">Content</label>
                    <input type="text" name="content" class="form-control"  placeholder="Enter Content" value="{{ old('content',$ad->content)}}">
                    @error('content')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                </div>

                <div class="form-group">
                    <label class = "require-input">Ad Type</label>
                    <input type="text" name="ad_type" class="form-control" placeholder="Enter Type of Ad" value="{{ old('ad_type',$ad->ad_type)}}">
                  
                    @error('ad_type')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                </div>

                
                <div class="form-group">
                    <label class = "require-input">Position</label>
                    <select  name="position" class="form-control" >
                    <option value="After Header" {{$ad->position=="After Header"?'selected':''}}>After Header</option>
                    <option value="Sidebar" {{$ad->position=="Sidebar"?'selected':''}}>Sidebar</option>
                    <option value="Before Footer" {{$ad->position=="Before Footer"?'selected':''}}>Before Footer</option>
                   
                    </select>
                    @error('status')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                  </div>
                 
                </div> 
                <!-- /.card-body -->
                  <div class="card-footer"> 
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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
<script src="{{ url('admin_assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<script type="text/javascript">
$(document).ready(function () {
//   $.validator.setDefaults({
//     submitHandler: function () {
//       alert( "Form successful submitted!" );
//     }
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