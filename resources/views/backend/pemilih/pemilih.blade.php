@extends('layouts.backend')
@section('pemilih')
	active
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<div class="card mt-3">
		<div class="card-body">
			<div class="pb-5">
				<h3 class="float-left">Table Data Pemilih</h3>
				<h5 class="float-right">Pemenang: paslon nomer urut

					@if(count($satu) > count($dua))
						01
					@else
						02
					@endif
				</h5>
			</div>

<div class="row">
	<div class="col-6">
		<table class="table table-bordered table-hover border-bottom">
			<thead>
				<tr>
					<th>Email</th>
					<th style="width: 100px;">Pilihan</th>
				</tr>
			</thead>
			<tbody>
				@foreach($satu as $s)
				<tr>
					<td>{{$s->email}}</td>
					<td>{{$s->pilihan}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>


	<div class="col-6">
		<table class="table table-bordered table-hover border-bottom">
			<thead>
				<tr>
					<th>Email</th>
					<th style="width: 100px;">Pilihan</th>
				</tr>
			</thead>
			<tbody>
				@foreach($dua as $d)
				<tr>
					<td>{{$d->email}}</td>
					<td>{{$d->pilihan}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</div>
		</div>
		<!-- <div class="card-footer clearfix">
		</div> -->
      	</div>
      </div>
    </section>
@endsection

@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('js')
<!-- DataTables -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection