@extends('layouts.app')


@section('content')

<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{env('MAPS_KEY')}}"></script>
    


<script type="text/javascript">
 

  var data=[
  @foreach($target as $key=>$data)
     <?php 
          $provinsi_count_capil=0;
      ?>

    {
      nama:"{{$data->nama}}",
      capil:"{{$provinsi_count_capil}}",
      deskripsi:"{{$data->deskripsi}}",
      url:"{{url('provinsi/'.$data->id)}}",
      location:null,
      windowContent:'<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<div id="bodyContent">'+
             '<h5 class="text-capitalize" >Provinsi :{{$data->nama}}</h5>'+
            '<h5 class="text-capitalize" >Negara : Indonesia</h5>'+

            '<h5>{{$provinsi_count_capil}} Dapil</h5>'+
            '</div>'+
            '<a href="{{url('provinsi/'.$data->id)}}" class="btn btn-primary btn-xs">Detail</a>'+
            '</div>',
      detail:{
        desa:null,
        kecamatan:null,
        kabupaten:null,
        provinsi:"{{$data->nama}}"
      }
    },
  @endforeach

  ];

  var data_content=data;

</script>

<style type="text/css">

</style>
	

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style=" background: #fff;" >
      <h5 class="text-center"><b>Indonesia ({{$total_capil}})</b></h5>
    </div>
  </div>

  

  <div class="row" style="border-bottom: 1px solid #efcf33;">
    <div class="col-md-8" style="height: 500px; background: #ebe8dd;">
      <div id="map" style="height:500px;"></div>
    </div>

    <div class="col-md-4" style="background: #fff;  height: 500px; border-top:1px solid #f1f1f1; ">
      <div class="row" style="position: absolute; top:0px; left:0px; padding: 5px 0px; " >
        <div class="col-md-12" >
          <div class="col-md-12" style="border-bottom: 1px solid #f1f1f1; ">
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

        @foreach($target as $provinsi)
          <div class="col-md-12" id="content-list-data-{{$provinsi->id}}" style="border-bottom: 1px solid #f1f1f1; padding: 10px 15px;">
            <div class="row">
              <div class="col-md-8">
                <h5 class="text-uppercase">Provinsi : <span id="title-{{$provinsi->id}}">{{$provinsi->nama}}</span></h5>
                <h5 class="text-capilatize">Capil : <span id="capil-{{$provinsi->id}}">0</span></h5>

              </div>
              <div class="col-md-4">
                <a href="{{url('provinsi/'.$provinsi->id)}}" class="btn btn-warning btn-xs col-md-12" style="background: #efcf33">Detail</a>
              </div>
            </div>
          
          </div>

        @endforeach
      </div>


    </div>

  </div>
</div>





<script type="text/javascript">


  function initialize() {
         map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: {lat:-0.3500737,lng:115.6355503}
      });

      for( var i in data){
        addMarker(i,(data[i].nama+',indonesia')); 
      }

  }


  function addMarker(key,location_name) {
        $.get("https://maps.googleapis.com/maps/api/geocode/json?address="+location_name+"&key=AIzaSyAXlzNymMNk7weE7jlhvfj8AOzr4C0z-ZY",{},function(data){
          
          if(data.status=='OK'){
              var location=data.results[0].geometry.location;

              marker = new google.maps.Marker({
              position: location,
              label:"",
              id:key,
              title:location_name,
              map: map,
              count_dapil:0
            });
            
            marker.addListener('click', function() {
              console.log(data_content[parseInt(this.id)]);
              map.setZoom(6);
              map.setCenter(marker.getPosition());
                 var infowindow = new google.maps.InfoWindow({
                      content: data_content[parseInt(this.id)].windowContent
              });
              infowindow.open(map, this);
              });

          } 



        });
        
  }


   google.maps.event.addDomListener(window, 'load', initialize);
</script>
@stop