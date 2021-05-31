@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <div class="container">
      <div class="row">
          <div class="col-lg-12 margin-tb">
              
              <div class="pull-right">
                  <a class="btn btn-success ml-3" href="{{ route($routeName.'create') }}" > Create Education</a>
              </div>
              <br>
          </div>
      </div>
    </div>
   




    <section class="content mt-4">
      <div class="container">
      @include('admin.includes.flashmessage')
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>School/College/University</th>
                    <th>Board</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                   
                    
                    
                    <th data-orderable="false">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($education as $edu)
                
                  
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$edu->institute}} </td>
                   
                    <td>{{$edu->board}}</td>
                    
                    <td>{{$edu->start_date}}</td>
                    <td>{{$edu->end_date}}</td>
                  
                    
 
                  <td>
                    <form onsubmit="return confirm('Are you sure?')" action="{{ route($routeName.'destroy',$edu->id) }}" method="POST">
                    <a class="btn btn-info" title = "Edit" href="{{ route($routeName.'edit',$edu->id) }}">Edit</a> 
                     
                    @csrf
                    @method('DELETE')      
                    <button type="submit" title = "Delete" class="btn btn-danger" >Delete</button>
                    </form>
                    </td>
                    
                  </tr>
                 
                  @endforeach
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection



@section('script')
 <!-- DataTables -->
<script src="{{url('admin_assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('admin_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('admin_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
     
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true
    });
  });
</script>

@endsection