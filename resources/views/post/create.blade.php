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
					<h3 class="card-title">Create Post </h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form role="form" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
					<div id="dynamicTable">

						<div class="form-group">
							<label class = "require-input">Title</label>
							<input type="text" name="name" class="form-control"  placeholder="Title" value="{{ old('name')}}">
							@error('name')
							<div class="custom-error">{{ $message }}</div>
							@enderror
						  
						</div>

						<div class="form-group">
							<label class = "require-input">Description</label>
							<input type="text" name="description" class="form-control" placeholder="Description" value="{{ old('description')}}">
						  
							@error('description')
							<div class="custom-error">{{ $message }}</div>
							@enderror
						  
						</div>

						<div class="form-group">
							<label>Choose Image</label>
							<input type="file" name="post_image" value="" class="form-control">
							@error('post_image')
							<div class="custom-error">{{ $message }}</div>
							@enderror
						</div>
						
						<div class="form-group">
							<label>Choose Video</label>
							<input type="file" name="post_video" value="" class="form-control"> 
							@error('post_video')
							<div class="custom-error">{{ $message }}</div>
							@enderror 
						</div>

						<div class="form-group">
							<label>Interest</label>
							<?php $topic = topics(); ?> 

							<select id="interest" name="interest[]" multiple class="form-control">	
								@foreach($topic as $key => $value)
									<option value="{{$key}}">{{$value}}</option>
								@endforeach
							</select>	
							@error('interest')
								<div class="custom-error">{{ $message }}</div>
							@enderror
						</div>
						
						<div class="form-group">
							<label class = "require-input">Post Type</label>

							<select id="is_public" name="is_public" class="form-control">
								<option value="1">Public</option>
								<option value="0">Private</option>
							</select>
						</div>
						
						<div class="form-group">
							<label>Publish To Group</label>

							<select id="is_publish_group" name="is_publish_group" class="form-control">
								<option value="1">Yes</option>
								<option selected value="0">No</option>
							</select>
						</div>
						<div class="form-group choose_group d-none">
							<label>Choose Group</label>
							<?php $groups = user_groups(); ?> 

							<select id="group" name="group_id" class="form-control">
								<option value="">Choose Group</option>							
								@if (!empty($groups)) 
									@foreach($groups as $group_id => $group_name)
										<option value="{{ $group_id }}">{{ $group_name }}</option>
									@endforeach
								@endif	
							</select>
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
<script>
$(document).ready(function() {       
	$('#interest').multiselect({		
		nonSelectedText: 'Select Your Interest'				
	});
});

$(document).on('change', '#is_publish_group', function() {
	if ($(this).val() == 1) {
		$('.choose_group').removeClass('d-none');
	}
	else {
		$('.choose_group').removeClass('d-none').addClass('d-none');
	}
})
</script>
@endsection