@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form>
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
        </div>
    </div>
</div>
@endsection
