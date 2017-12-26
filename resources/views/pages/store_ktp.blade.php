@extends('layouts.app')


@section('content')

<div class="box box-primary">
	<div class="box-body">

		<form action="" method="post" enctype="multypart/form-data">
			<div class="form-group">
				<label>No KTP</label>
				<input type="text" name="no_ktp" class="form-control">
			</div>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label>Tanggal lahir</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Jenis Klamin</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Agama</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Satus Perkawinan</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Perkerjaan</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Kewarganegaraan</label>
				<input type="text" name="name" class="form-control">
			</div>


		</form>
		
	</div>
</div>


@stop