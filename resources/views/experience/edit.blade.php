@extends('layouts.app')

@section('content')

   
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
   


    <!-- Main content -->
    <section class="content">
    
        <div class="row">
          <!-- left column --> 
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Your Experience </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" action="{{ route($routeName.'update', $experience->id) }}" method="POST" >
              @csrf
              @method('PUT')
                <div class="card-body">

                <div class="form-group">
                    <label class = "require-input">Job Role</label>
                    <input type="text" name="job_role" class="form-control"  placeholder="Enter Your Role" value="{{ old('job_role',$experience->job_role) }}">
                    @error('job_role')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                  </div>

                <div class="form-group">
                    <label class = "require-input">Job Description</label>
                    <input type="text" name="job_description" class="form-control" placeholder="Enter Job Description" value="{{ old('job_description',$experience->job_description)}}">
                  
                    @error('job_description')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                </div>

                <div class="form-group">
                    <label class = "require-input">Organisation</label>
                    <input type="text" name="org_name" class="form-control" placeholder="Enter your organisation" value="{{ old('org_name',$experience->org_name)}}">
                  
                    @error('org_name')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                  </div>
                
                  <div class="form-group">
                    <label class = "require-input">Currently Working</label>
                    <select  name="is_current_working" class="form-control" value="{{ old('is_current_working')}}">
                    <option value="0" {{old("is_current_working")==0?'selected':''}}>No</option>
                    <option value="1" {{old("is_current_working")==1?'selected':''}}>Yes</option>
                    </select>
                    @error('is_current_working')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label class = "require-input">Start Date</label>
                    <input type="date" name="start_date" class="form-control"  value="{{ old('start_date',$experience->start_date)}}" >
                    @error('start_date')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class = "require-input">End Date</label>
                    <input type="date" name="end_date" class="form-control"  value="{{ old('end_date',$experience->end_date)}}" >
                    @error('end_date')
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