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
              <form role="form" action="{{ route('post.store') }}" method="POST" >
              @csrf
                <div   id="dynamicTable">

                <div class="form-group">
                    <label class = "require-input">Title</label>
                    <input type="text" name="post_title" class="form-control"  placeholder="Title" value="{{ old('post_title')}}">
                    @error('post_title')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                </div>

                <div class="form-group">
                    <label class = "require-input">Description</label>
                    <input type="text" name="post_description" class="form-control" placeholder="Description" value="{{ old('post_description')}}">
                  
                    @error('post_description')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                </div>

                <div class="form-group">
					<label class = "require-input">Choose Image</label>
					<input type="file" name="post_image" value="" class="form-control">
				  
				</div>
				
				<div class="form-group">
					<label class = "require-input">Choose Video</label>
					<input type="file" name="post_video" value="" class="form-control">  
				</div>

                <div class="form-group">
                    <label class = "require-input">Interest</label>
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
</script>
@endsection