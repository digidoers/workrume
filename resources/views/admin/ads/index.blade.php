@extends('admin.layouts.admin_layout')




@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   



    @include('admin.includes.breadcrumbs', ['title'=>$pageName, 'breadCrumbs'=>$breadCrumbs]) 
    
    
   
    <!-- Main content -->

    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success ml-3" href="{{ route($routeName.'create') }}" > Create New Advertisement</a>
            </div>
            <br>
        </div>
    </div>
   

    


    <section class="content">
      <div class="container-fluid">
      @include('admin.includes.flashmessage')
      
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Ad Type</th>
                    <th>Position</th>
                   
                   
                    <th data-orderable="false">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($ad as $ads)
                
                  
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$ads->title}} </td>
                    <td>{{$ads->content}} </td>
                    <td>{!!$ads->ad_type!!}</td>
                    <td>{!!$ads->position!!}</td>
                  
                    <td>
                    <form onsubmit="return confirm('Are you sure?')" action="{{ route($routeName.'destroy',$ads->id) }}" method="POST">
                    <a class="btn btn-info" title="Edit" href="{{ route($routeName.'edit',$ads->id) }}">Edit</a> 
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger" title="Delete">Delete</button>
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