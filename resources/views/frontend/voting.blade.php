@extends('layouts.frontend')
@section('content')

<div class="container col-md-8 pb-4 luar">
	<div class="bg-white batas"></div>
	<div  class="border pb-4">
		<div class="surat-header">
			<img src="{{ asset('bupati/background-merahputih.png') }}" class="bg-bendera">

			<div class="d-flex justify-content-between header-surat">
				<img src="{{ asset('bupati/logo-kpu.png') }}">
				<div  class="tengah">
					<div>CONTOH SURAT</div>
					<div>SUARA PEMILIHAN</div>
				</div>
				<img src="{{ asset('bupati/Pemkab_Ponorogo.png') }}">
			</div>
			<div class="text-header-surat">
				<div>BUPATI DAN WAKIL BUPATI</div>
				<div>KABUPATEN PONOROGO</div>
				<div>TAHUN 2020</div>
			</div>
		</div>
		<div class="content-surat">
			<div class="container">
				<div class="row pb-10">
			<div class="col-6">
				<form method="post" action="/">
					{{csrf_field()}}
                	<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="pilihan" value="1">
					<button class="p-0" style="border: none;">
						<div class="my-card card">
							<div class="card-header text-center bg-transparent py-0">
								<span>01</span>
							</div>



							<div class="card-body">
								<div class="cover-kandidat">
									<img src="{{ asset('partai2/paslon.jpg') }}" style="width: 100%">
									<div class="row mt-2">
										<div class="col-md-6 kandidat">
											<div>CALON BUPATI</div>
											<b>SUGIRI SANCOKO, S.E.,M.M</b>
										</div>
										<div class="col-md-6 kandidat">
											<div>CALON WAKIL BUPATI</div>
											<b>Hj. LISDYARITA, S.H</b>
										</div>
									</div>
								</div>
								<div class="">
									<div class="title-partai"><b>GABUNGAN PARTAI POLITIK PENGUSUL</b></div>
									<div  class="cover-partai">
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
					</button>
				</form>
			</div>
			<div class="col-6">
				<form method="post" action="/">
					{{csrf_field()}}
                	<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="pilihan" value="2">
					<button class="p-0" style="border: none;">
						<div class="my-card card">
							<div class="card-header text-center bg-transparent py-0">
								<span>02</span>
							</div>
							<div class="card-body">
								<div class="cover-kandidat">
									<img src="{{ asset('partai2/paslon.jpg') }}" style="width: 100%">
									<div class="row mt-2">
										<div class="col-md-6 kandidat">
											<div>CALON BUPATI</div>
											<b>H. IPONG MUCHLISSONI</b>
										</div>
										<div class="col-md-6 kandidat">
											<div>CALON WAKIL BUPATI</div>
											<b>BAMBANG TRI WAHONO</b>
										</div>
									</div>
								</div>
								<div class="">
									<div class="title-partai"><b>GABUNGAN PARTAI POLITIK PENGUSUL</b></div>
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
					</button>
				</form>
			</div>
				</div>	
			</div>
		</div>
	</div>
</div>
<footer class="mb-4">
	<center>
		<div style="margin: 10px 0;">
			&copy<span>2020 by <a href="https://www.instagram.com/dwiki_san">dwiki_san</a></span>
		</div>
	</center>
</footer>
@endsection

@section('css')
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
@endsection