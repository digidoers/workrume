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
                <h3 class="card-title">Create Your Experience </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route($routeName.'store') }}" method="POST" >
              @csrf
                <div   id="dynamicTable">

                <div class="form-group">
                    <label class = "require-input">Job Role</label>
                    <input type="text" name="addmore[0][job_role]" class="form-control"  placeholder="Enter Your Role" value="{{ old('job_role')}}">
                    @error('job_role')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                </div>

                <div class="form-group">
                    <label class = "require-input">Job Description</label>
                    <input type="text" name="addmore[0][job_description]" class="form-control" placeholder="Enter Job Description" value="{{ old('job_description')}}">
                  
                    @error('job_description')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                </div>

                <div class="form-group">
                    <label class = "require-input">Organisation</label>
                    <input type="text" name="addmore[0][org_name]" class="form-control" placeholder="Enter your organisation" value="{{ old('org_name')}}">
                  
                    @error('org_name')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  
                  </div>
                
                  <div class="form-group">
                    <label class = "require-input">Currently Working</label>
                    <select  name="addmore[0][is_current_working]" class="form-control" value="{{ old('is_current_working')}}">
                    <option value="0" {{old("is_current_working")==0?'selected':''}}>No</option>
                    <option value="1" {{old("is_current_working")==1?'selected':''}}>Yes</option>
                    </select>
                    @error('is_current_working')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label class = "require-input">Start Date</label>
                    <input type="date" name="addmore[0][start_date]" class="form-control"  value="{{ old('start_date')}}" >
                    @error('start_date')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class = "require-input">End Date</label>
                    <input type="date" name="addmore[0][end_date]" class="form-control"  value="{{ old('end_date')}}" >
                    @error('end_date')
                    <div class="custom-error">{{ $message }}</div>
                    @enderror
                </div>

                </div> 

                <div><button type="button" name="add" id="add" class="btn btn-success">Add More</button> 
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>





<script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<div class="card-body"><div class="form-group"><label class = "require-input">Job Role</label><input type="text" name="addmore['+i+'][job_role]" class="form-control"  placeholder="Enter Your Role"></div><div class="form-group"><label class = "require-input">Job Description</label><input type="text" name="addmore['+i+'][job_description]" class="form-control" placeholder="Enter Job Description"></div> <div class="form-group"><label class = "require-input">Organisation</label><input type="text" name="addmore['+i+'][org_name]" class="form-control" placeholder="Enter your organisation"></div><div class="form-group"> <label class = "require-input">Currently Working</label><select  name="addmore['+i+'][is_current_working]" class="form-control"><option value="0">No</option><option value="1">Yes</option></select></div><div class="form-group"><label class = "require-input">Start Date</label><input type="date" name="addmore['+i+'][start_date]" class="form-control"></div><div class="form-group"><label class = "require-input">End Date</label><input type="date" name="addmore['+i+'][end_date]" class="form-control"></div><div><button type="button" class="btn btn-danger remove-tr">Remove</button></div></div>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('.card-body').remove();
    }); 
   
</script>

@endsection