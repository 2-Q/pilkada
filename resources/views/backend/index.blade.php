@extends('layouts.backend')
@section('dashboard')
active
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        	
<!--           <div class="col-md-5">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data</h3>
              </div>
              <div class="card-body py-5">
              	<div class="text-muted text-center">
              		Pemilihan akan dimulai dalam <br> 20:10:23
              	</div>
              </div>
            </div>
          </div> -->

          <div class="col-md-7">
          	<div class="card">
          		<div class="card-header">
          			<h3 class="card-title">
          				Kandidat
          			</h3>
          		</div>
          		<div class="card-body">
          			<table class="table table-hover table-bordered">
          				<thead>
          					<tr>
          						<th style="width: 10px;">No.</th>
          						<th>Paslon</th>
          						<th>Tools</th>
          					</tr>
          				</thead>
          				<tbody>
          					<tr>
          						<td>1</td>
          						<td>
          							SUGIRI SANCOKO, S.E.,M.M & Hj. LISDYARITA, S.H
          						</td>
          						<td>
          							<a href="#" data-toggle="modal" data-target="#modal-default-1">details</a><!--  |
          							<a href="#" class="text-warning">edit</a> -->
          						</td>
          					</tr>
          					<tr>
          						<td>2</td>
          						<td>
          							H. IPONG MUCHLISSONI & BAMBANG TRI WAHONO
          						</td>
          						<td>
          							<a href="#" data-toggle="modal" data-target="#modal-default-2">details</a><!--  |
          							<a href="#" class="text-warning">edit</a> -->
          						</td>
          					</tr>
          				</tbody>
          			</table>
          		</div>
          	</div>
          </div>
        </div>
      </div>
    </section>


	<div class="modal fade" id="modal-default-1">
		<div class="modal-dialog">
		  <div class="modal-content">
		    <div class="modal-header">
		      <h5 class="modal-title">PASLON NOMER URUT 01</h5>
		      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		      </button>
		    </div>



		    <div class="modal-body">
				<img src="{{ asset('partai2/paslon.jpg') }}" style="width: 100%">
				<div class="row mt-2">
					<div class="col-6 text-center">
						<div>CALON BUPATI</div>
						<b>SUGIRI SANCOKO, S.E.,M.M</b>
					</div>
					<div class="col-6 text-center">
						<div>CALON WAKIL BUPATI</div>
						<b>Hj. LISDYARITA, S.H</b>
					</div>
				</div>
				<div class="mt-5">
					<div class="text-center"><b>GABUNGAN PARTAI POLITIK PENGUSUL</b></div>
					<div class="cover-partai">
						<center>
							<img src="{{ asset('partai2/pdi.jpg') }}" class="partai">
							<img src="{{ asset('partai2/pan.jpg') }}" class="partai">
							<img src="{{ asset('partai2/PPP.png') }}" class="partai">
							<img src="{{ asset('partai2/hanura.png') }}" class="partai">
						</center>
					</div>
				</div>
		    </div>


		  </div>
		  <!-- /.modal-content -->
		</div>
	</div>


	<div class="modal fade" id="modal-default-2">
		<div class="modal-dialog">
		  <div class="modal-content">
		    <div class="modal-header">
		      <h5 class="modal-title">PASLON NOMER URUT 02</h5>
		      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		      </button>
		    </div>



		    <div class="modal-body">
				<img src="{{ asset('partai2/paslon.jpg') }}" style="width: 100%">
				<div class="row mt-2">
					<div class="col-6 text-center">
						<div>CALON BUPATI</div>
						<b>H. IPONG MUCHLISSONI</b>
					</div>
					<div class="col-6 text-center">
						<div>CALON WAKIL BUPATI</div>
						<b>BAMBANG TRI WAHONO</b>
					</div>
				</div>
				<div class="mt-5">
					<div class="text-center"><b>GABUNGAN PARTAI POLITIK PENGUSUL</b></div>
					<div class="cover-partai">
						<center>
							<img src="{{ asset('partai2/pkb.jpg') }}" class="partai">
							<img src="{{ asset('partai2/demokrat.png') }}" class="partai">
							<img src="{{ asset('partai2/golkar.jpg') }}" class="partai">
							<img src="{{ asset('partai2/pks.jpg') }}" class="partai">
							<img src="{{ asset('partai2/gerindra.jpg') }}" class="partai">
							<img src="{{ asset('partai2/nasdem.jpg') }}" class="partai">
						</center>
					</div>
				</div>
		    </div>


		  </div>
		  <!-- /.modal-content -->
		</div>
	</div>
@endsection
@section('css')
  <style>
    .partai{
      height: 45px;
      margin: 0 5px 10px 5px;
      display: inline-block;
    }
    .cover-partai{
      margin: 10px 30px 30px 30px;
    }
  </style>
@endsection