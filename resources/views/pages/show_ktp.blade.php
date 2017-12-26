@extends('layouts.app')


@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="padding: 15px;">
			<div class="col-md-12">
				<a href="{{url('ktp')}}" class="btn btn-xs btn-primary">Back</a>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12" style="background: #fff; min-height: 300px;">
						@if($data->ktp_picture!=null)
							<img src="{{asset($data->ktp_picture)}}" class="img-responsive">

						@else

						@endif
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12">
						<h4>No : {{$data->no_ktp}}</h4>
						<h4>Nama : {{$data->name}}</h4>
						<h4>Desa : {{$data->fromDesa->nama}}</h4>
						<h4>Kecamatan : {{$data->fromDesa->fromKecamatan->nama}}</h4>
						<h4>Kabupaten : {{$data->fromDesa->fromKecamatan->fromKabupaten->nama}}</h4>
						<h4>Provinsi : {{$data->fromDesa->fromKecamatan->fromKabupaten->fromProvinsi->nama}}</h4>
						<h4>Tempat Tanggal Lahir : {{$data->birthLocation->nama}} {{$data->birthday}}</h4>
						<h4>Status Perkawinan : {{$data->fromStatusMerital->content}} </h4>
						<h4>Perkerjaan : {{$data->work_status}} </h4>
						<h4>Agama : {{$data->fromReligion->content}} </h4>

					</div>
				</div>
			</div>
		</div>
	</div>


</div>

@stop