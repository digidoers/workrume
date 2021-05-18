@extends('admin.layouts.admin_layout')




@section('content')
<div>
  <h1>Dashboard</h1>
  <h1>Dashboard</h1>
  <h1>Dashboard</h1>
  <h1>Dashboard</h1>
  <h1>Dashboard</h1>
  <h1>Dashboard</h1>
  <h1>Dashboard</h1>
  <h1>Dashboard</h1>
  <h1>Dashboard</h1>
  <h1>Dashboard</h1>
  <h1>Dashboard</h1>
  <h1>Dashboard</h1>
  <h1>Dashboard</h1>
  <h1>Dashboard</h1>
  </div>
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