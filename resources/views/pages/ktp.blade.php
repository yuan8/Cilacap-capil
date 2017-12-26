@extends('layouts.app')


@section('content')
<div class="content" style="background: #fff;">
	<div class="col-md-12"  style="background: #fff; padding: 15px;">
		<div class="col-md-12">
			<table id="ktp" class="display table table-bordered" cellspacing="0" width="100%" style="margin-top: 20px;">
				<thead>
					<tr>
						<th>Nama</th>
						<th>No.KTP</th>
						<th>Alamat</th>
						<th>Jenis Klamin</th>
						<th>Agama</th>
						<th>Status Perkerjaan</th>
						<th>Action</th>

					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Nama</th>
						<th>No.KTP</th>
						<th>Alamat</th>
						<th>Jenis Klamin</th>
						<th>Agama</th>
						<th>Status Perkerjaan</th>
						<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					@foreach($ktps as $ktp)
						<tr>
							<td>{{$ktp->name}}</td>
							<td>{{$ktp->no_ktp}}</td>
							<td>{{$ktp->fromDesa->nama}}, {{$ktp->fromDesa->fromKecamatan->nama}}, {{$ktp->fromDesa->fromKecamatan->fromKabupaten->nama}}, {{$ktp->fromDesa->fromKecamatan->fromKabupaten->fromProvinsi->nama}} </td>
							<td>laki laki</td>
							<td>{{$ktp->fromReligion->content}}</td>
							<td>{{$ktp->work_status}}</td>
							<td><a href="{{url('ktp/'.$ktp->id)}}" class="btn btn-primary  btn-xs">Detail</a></td>

						</tr>
					@endforeach

				</div>
			</tbody>
		</div>
	</table>
</div>
</div>


<script type="text/javascript">
	$('#ktp').DataTable();
</script>
@stop