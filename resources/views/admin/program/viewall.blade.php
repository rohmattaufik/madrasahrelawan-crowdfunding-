@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Program
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Program</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Program</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <a href="{{url('admin/create/program')}}" type="button" class="btn btn-info btn-sm" data-toggle="tooltip"
                        title="Tambah Program">
                  <i class="fa fa-plus">Tambah Program</i></a>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Program</th>
                            <th width="50%">Program Info</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($programs as $program)
                        <tr>
                            <td>{{$program->name}}</td>
                            <td>{!! strip_tags(substr($program->program_info,0,1000)) !!} . . .</td>
                            <td>@if($program->flag_active == 1) 
                                    Aktif 
                                @else 
                                    Non Aktif
                                @endif    
                            </td>
                            <td> 
                                <a href="{{url('admin/program/'.$program->id)}}" class="btn btn-info" data-toggle="tooltip"
                                    title="Lihat Program"><i class="fa fa-eye"></i></a>
                                <a href="{{url('admin/program/edit/'.$program->id)}}" class="btn btn-warning" data-toggle="tooltip"
                                    title="Update Program"><i class="fa fa-edit"></i></a>
                                @if($program->flag_active == 0)
                                <a href="{{url('admin/program/activate/'.$program->id)}}" class="btn btn-success" data-toggle="tooltip"
                                    title="Aktifkan Program"><i class="fa fa-check-circle"></i></a>
                                @else
                                <a href="{{url('admin/program/nonactivate/'.$program->id)}}" class="btn btn-danger" data-toggle="tooltip"
                                    title="Nonaktifkan Program"><i class="fa fa-times"></i></a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>   
    </section>
    <!-- /.content -->

@endsection

@section('script')
<script>
  $(function () {
    $('#table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
@endsection
