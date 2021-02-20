@extends('layouts.frontend')
@section('content')
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="d-flex">
									<img src="{{ asset('bupati/logo-kpu.png') }}" alt="Klorofil Logo" style="height: 65px;">
									<div style="text-align: left;">
										<div style="font-size: 20px; height: 18px; vertical-align: middle; font-weight: 600;">Pemerintah</div>
										<div style="font-size: 30px; vertical-align: middle; font-weight: 600;">Ponorogo</div>
									</div>
								</div>
							</div>
							<form class="form-auth-small" action="/" method="post">
								{{csrf_field()}}
								<div class="form-group" style="text-align: left;">
									<label for="signin-email" class="control-label m-0">Inputkan Email Anda</label>
									<input type="email" class="form-control" id="signin-email" placeholder="Email" name="email">
              @if(Session::has('notif'))
                <center>
                  <span class="text-danger" style="font-size: 12px;"><b>x </b>{{Session::get('notif')}}</span>
                </center>
              @endif
								</div>
									<button type="submit" class="btn btn-primary">Masuk</button>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text" style="width: 99%;">
							<div class="logo text-center">
								<img src="{{ asset('bupati/logo-kpu.png') }}" alt="logo-kpu" style="height: 90px;">
								<div style="display: inline-block; vertical-align: middle; text-align: left;">
									<div style="font-size: 25px; font-weight: 600; height: 30px;">Pemilihan Kepala Daerah</div>
									<div>Kab. Ponorogo 2020</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('css')
    <link href="{{ asset('css/validasi.css') }}" rel="stylesheet">
    <style>
    	.control-label{
    		font-size: 13px;
    		color: #6f6f6f;
    		font-weight: 600;
    	}
    </style>
@endsection