@extends('layouts.frontend')
@section('content')

        	<div style="height: 90%;width: 100%; display: table; position: absolute;">
				<div style="vertical-align: middle; display: table-cell;">

						<div class="container">
							<div class="row">
								<div class="my-col-md-6">
									<img src="{{ asset('bupati/voting.svg') }}" class="vektor">
								</div>
								<div class="my-col-md-6">
									<div class="cover-tulisan">
										<div class="kecil">ANDA TELAH MELAKUKAN PEMILIHAN</div>
										<div class="besar">Terimakasih Atas Partisipasi Anda</div>
									</div>
								</div>
							</div>
						</div>

				</div>
			</div>

@endsection
@section('css')
    <link href="{{ asset('css/sudah.css') }}" rel="stylesheet">
@endsection