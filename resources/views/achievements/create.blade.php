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
                <h3 class="card-title">Create Your Achievements </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route($routeName.'store') }}" method="POST" >
              @csrf
                <div id="dynamicTable">

                <div class="form-group">
                    <label class = "require-input">Title</label>
                    <input type="text" name="title" class="form-control"  placeholder="Enter Title" value="{{ old('job_role')}}">
                    @error('title')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                </div>

                <div class="form-group">
                    <label class = "require-input">Associated With</label>
                    <input type="text" name="associated_with" class="form-control" placeholder="Write Association" value="{{ old('job_description')}}">
                  
                    @error('associated_with')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                </div>

                <div class="form-group">
                    <label class = "require-input">Issuer</label>
                    <input type="text" name="issuer" class="form-control" placeholder="Name Of Issuer" value="{{ old('issuer')}}">
                  
                    @error('issuer')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                </div>

                  <div class="form-group">
                    <label class = "require-input">Issue Date</label>
                    <input type="date" name="issue_date" class="form-control"  value="{{ old('issue_date')}}" >
                    @error('issue_date')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class = "require-input">Descripton</label>
                    <input type="text" name="description" class="form-control" placeholder="Write Description" value="{{ old('description')}}" >
                    @error('description')
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

<style>.require-input:after {
font-weight: bold;
color: red;
content: " *";
}</style>
<!-- jquery-validation -->
<!-- <script src="{{ url('admin_assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script> -->
<!-- <script src="{{ url('admin_assets/plugins/jquery-validation/additional-methods.min.js')}}"></script> -->
<!-- <script src="{{ url('admin_assets/plugins/summernote/summernote-bs4.min.js')}}"></script> -->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->





<!-- <script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<div class="card-body"><div class="form-group"> <label class = "require-input">Title</label><input type="text" name="addmore['+i+'][title]" class="form-control"  placeholder="Enter Title"></div><div class="form-group"><label class = "require-input">Associated With</label><input type="text" name="addmore['+i+'][associated_with]" class="form-control" placeholder="Write Association"></div> <div class="form-group"> <label class = "require-input">Issuer</label><input type="text" name="addmore['+i+'][issuer]" class="form-control" placeholder="Name Of Issuer"></div><div class="form-group"><label class = "require-input">Issue Date</label><input type="date" name="addmore['+i+'][issue_date]" class="form-control"></div><div class="form-group"><label class = "require-input">Descripton</label><input type="text" name="addmore['+i+'][description]" class="form-control" placeholder="Write Description"></div><div><button type="button" class="btn btn-danger remove-tr">Remove</button></div></div>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('.card-body').remove();
    }); 
   
</script> -->

@endsection