@extends('layouts.app')

@section('content')

   
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column --> 
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Create User Profile </h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form role="form" action="{{ route('user-profile.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
					<div id="dynamicTable">

						<div class="form-group">
							<label class = "require-input">About You</label>
							<input type="text" name="about" class="form-control"  placeholder="Title" value="{{ old('about')}}">
							@error('about')
							<div class="custom-error">{{ $message }}</div>
							@enderror
						  
						</div>

					
						<div class="form-group">
							<label>Choose Profile Image</label>
							<input type="file" name="profile_image" value="" class="form-control">
						  
						</div>
						
						<div class="form-group">
							<label>Choose Profile Banner</label>
							<input type="file" name="profile_banner" value="" class="form-control">  
						</div>

					</div> 
               
                <!-- /.card-body -->
            
             
              <div><button type="submit" class="btn btn-primary">Submit</button></div>
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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

@endsection