@extends('layouts.app')


@section('content')

<script type="text/javascript">
	

	function provinsiId(){
		var id=$('#provinsi').val();
		$('#kabupaten').val('');
		$('#kecamatan').val('');
		$('#desa').val('');

		var html="<label>Kabupaten</label>"+
			"<select class='chosen-select form-control' id='kabupaten' onchange='kabupatenId()'>"+
			"<option value=''>-- select --</option>";

		if(id!=''){
			$.get(('{{url("kabupaten-data/provinsi")}}/'+id),{},function(data){

			
				for(var i in data){


					html=html+'<option value="'+data[i].id+'">'+data[i].nama+'</option>';
					
				}
			html=html+"</select>";

			$('#dom-kabupaten').html(html);
			createChosen();


			});
			
		}else{

			html=html+"</select>";

			$('#dom-kabupaten').html(html);
			createChosen();

		}

		

	}

	function kabupatenId(){
		var id=$('#kabupaten').val();
		$('#kecamatan').val('');
		$('#desa').val('');

		var html="<label>Kecamatan</label>"+
			"<select class='chosen-select form-control' id='kecamatan' onchange='kecamatanId()'>"+
			"<option value=''>-- select --</option>";

		if(id!=''){
			$.get(('{{url("kecamatan-data/kabupaten")}}/'+id),{},function(data){

			
				
				for(var i in data){


					html=html+'<option value="'+data[i].id+'">'+data[i].nama+'</option>';
					
				}
			html=html+"</select>";

			$('#dom-kecamatan').html(html);
			createChosen();


			});
			
		}else{

			html=html+"</select>";

			$('#dom-kecamatan').html(html);
			createChosen();

		}

		

	}

	function kecamatanId(){
		var id=$('#kecamatan').val();
		$('#desa').val('');

		var html="<label>Desa</label>"+
			"<select class='chosen-select form-control' id='desa' name='desa_kelurahan_id'>"+
			"<option value=''>-- select --</option>";

		if(id!=''){
			$.get(('{{url("desa-data/kecamatan")}}/'+id),{},function(data){

			
				
				for(var i in data){


					html=html+'<option value="'+data[i].id+'">'+data[i].nama+'</option>';
					
				}
			html=html+"</select>";

			$('#dom-desa').html(html);
			createChosen();


			});
			
		}else{

			html=html+"</select>";

			$('#dom-desa').html(html);
			createChosen();

		}

		

	}




</script>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="box">
				<div class="box-body">
					<form action="{{url('ktp')}}" method="post"  enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="col-md-6">
							<div class="form-group">
								<label>Priview Picture</label>
								<div class="col-md-12" style="min-height:  300px; background: #fff;">
								</div>
							</div>


							<div class="form-group">
								<label>Picture Ktp</label>
								<input type="file" class="form-control" name="ktp_picture" accept="image/*">
							</div>
						</div>

						<div class="col-md-6">

							<div class="col-md-6">
								<div class="form-group">
									<label>No KTP</label>
									<input required  type="text" name="no_ktp" class="form-control">
								</div>
								<div class="form-group">
									<label>Name</label>
									<input required type="text" name="name" class="form-control">
								</div>

								<div class="form-group">
									<label>Tempat Lahir</label>
									<select required type="number" name="birthday_location_id" class="form-control  chosen-select form-control">
										@foreach($place_birth as $data)
										<option value="{{$data->id}}">{{$data->nama.'-'.$data->fromProvinsi->nama}}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group">
									<label>Tanggal lahir</label>
									<input required type="date" name="birthday" class="form-control">
								</div>
								<div class="form-group">
									<label>Jenis Klamin</label>
									<select required  type="number" name="sex" class="form-control  chosen-select form-control">
										@foreach($sex as $data)
										<option value="{{$data->id}}">{{$data->content}}</option>
										@endforeach
									</select>
								</div>

							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Agama</label>
									<select required type="number" name="religion_id" class="form-control  chosen-select form-control">
										@foreach($agama as $data)
										<option value="{{$data->id}}">{{$data->content}}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group">
									<label>Blood</label>
									<select  type="number" name="blood_type_id" class="form-control  chosen-select form-control">
										<option value="">-</option>

										@foreach($blood as $data)
										<option value="{{$data->id}}">{{$data->content}}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group">
									<label>Satus Perkawinan</label>
									<select required type="number" name="status_merital_id" class="form-control  chosen-select form-control">
										@foreach($merital as $data)
										<option value="{{$data->id}}">{{$data->content}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Perkerjaan</label>
									<input required type="text" name="work_status" class="form-control">
								</div>
								<div class="form-group">
									<label>Kewarganegaraan</label>
									<select required type="text" name="citizenship_id" class="form-control  chosen-select form-control">
										@foreach($warga_negara as $data)
										<option value="{{$data->id}}">{{$data->content}}</option>
										@endforeach
									</select>
								</div>


							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Provinsi</label>
									<select class=" chosen-select form-control" id="provinsi" onchange="provinsiId();" required>
										<option value="">-- select --</option>
										@foreach($provinsi as $data)
										<option value="{{$data->id}}">{{$data->nama}}</option>
										@endforeach
									</select>

								</div>

								<div class="form-group" id="dom-kabupaten">
									<label>Kabupaten</label>
									<select class=" chosen-select form-control" id="kabupaten" onchange="kabupatenId();" required>
										<option value="">-- select --</option>

									</select>

								</div>


								<div class="form-group" id="dom-kecamatan">
									<label>Kecamatan</label>
									<select class=" chosen-select form-control" id="kecamatan" onchange="kecamatanId();" required>
										<option value="">-- select --</option>

									</select>

								</div>

								<div class="form-group" id="dom-desa">
									<label>Desa</label>
									<select class=" chosen-select form-control" id="desa"  name="desa_kelurahan_id	" onchange="desaId();" required>
										<option value="">-- select --</option>

									</select>

								</div>

								<button type="submit"  class="btn btn-primary col-md-12">Submit</button>
							</div>



						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

</div>




@stop