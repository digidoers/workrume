@extends('admin.layouts.admin_layout')

@section('content')

   
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.includes.breadcrumbs', ['title'=>$pageName, 'breadCrumbs'=>$breadCrumbs])
    



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column --> 
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit User </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" action="{{ route($routeName.'update', $user->id) }}" method="POST" >
              @csrf
              @method('PUT')
                <div class="card-body">

                <div class="form-group">
                    <label class = "require-input">Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter Name" value="{{ old('name',$user->name) }}">
                    @error('name')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                  </div>




                  <div class="form-group">
                    <label class = "require-input">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ old('email', $user->email)}}">
                    @error('email')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                  </div>


                  <div class="form-group">
                    <label class = "require-input">Status</label>
                    <select  name="status" class="form-control" >
                    <option value="0" {{$user->status==0?'selected':''}}>Inactive</option>
                    <option value="1" {{$user->status==1?'selected':''}}>Active</option>
                   
                    </select>
                  </div>
                   
                  <div class="form-group">
                    <label class = "require-input">Date Of Birth</label>
                    <input type="date" name="dob" class="form-control" value="{{ old('dob', $user->dob)}}">
                  
                    @error('dob')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label class = "require-input">Phone No</label>
                    <input type="number" name="phone_no" class="form-control" value="{{ old('phone_no', $user->phone_no)}}" >
                    @error('phone_no')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                  </div>

                  <div class="form-group">
                    <label class = "require-input">User Role</label>
                    <?php  
                    $user_role = role();
                    ?>
                    
                    <select name="user_role" id="user_role" class="form-control">
                    @foreach($user_role as $rl)
                    <option value="{{$rl}}">{{ $rl }}</option>
                    @endforeach
                    </select>
                    
                    @error('user_role')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                  </div>

                  <div class="form-group">
                  <label class = "require-input">Country</label>
                    <?php
                     $country = country();
                    ?>
                    <select id="country" name="country"  class="form-control" >
                     @foreach($country as $count)
                      <option value = "{{$count}}" >{{ $count }}</option>
                     @endforeach
                    </select>

                    @error('country')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                           
                    </div>

                    <div class="form-group">
                    <label class = "require-input">Interest</label>
                    <?php
                    $topic = topics();
                    ?> 

                    <select id="interest" name="interest[]" multiple class="form-control">	
                    					    @foreach($topic as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                  @endforeach
                                </select>	
                    @error('interest')
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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

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

<script>
$(document).ready(function() {       
	$('#interest').multiselect({		
		nonSelectedText: 'Select Your Interest'				
	});
});
</script>

@endsection