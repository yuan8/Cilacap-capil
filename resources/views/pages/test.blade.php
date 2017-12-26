@extends('layouts.app')


@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style=" background: #fff;" >
      <h5 class="text-center"><b>Bojonegoro</b></h5>
    </div>
  </div>

  <div class="row" style="border-bottom: 1px solid #efcf33;">
    <div class="col-md-8" style="height: 500px;">

    </div>

    <div class="col-md-4" style="background: #fff;  height: 500px; ">
      <div class="row" style="position: absolute; top:0px; left:0px; padding: 5px 0px; " >
        <div class="col-md-12" >
          <div class="col-md-12" style="border-bottom: 1px solid #f1f1f1; border-top: 1px solid #f1f1f1;">
             <div class="input-group input-group-md" style="margin: 5px 0px;">
                <input type="text" class="form-control" placeholder="search">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    Search
                  </button>
                </span>
              </div>
            </div>
        </div>
        
      </div>
      <div class="row" style=" margin-top: 50px; overflow: scroll; height: 450px;">

        <div class="col-md-12" style="border-bottom: 1px solid #f1f1f1; padding: 10px 15px;">
          <div class="row">
            <div class="col-md-8">
              <h5 class="text-capilatize">Kecamatan : <span id="data-list-header-1">Bojonegoro</span></h5>
              <h5 class="text-capilatize">Capil : <span id="data-list-capil-1">120</span></h5>

            </div>
            <div class="col-md-4">
              <a href="" class="btn btn-warning btn-xs col-md-12" style="background: #efcf33">Detail</a>
            </div>
          </div>
          
        </div>
      </div>


    </div>

  </div>
</div>

@stop