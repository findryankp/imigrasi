@extends('master.master')
@section('title') Pelaporan
@stop
@section('head')
@stop

@section('content')


<p id="tampilkan"></p>
<p>Cek lokasi anda! >> <button onclick="getLocation()">Cek</button></p>
 
<div id="mapcanvas"></div>
</center>
{!! Mapper::render() !!}

<script>
var view = document.getElementById("tampilkan");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        view.innerHTML = "Yah browsernya ngga support Geolocation bro!";
    }
}
 
function showPosition(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    view.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
    latlon = new google.maps.LatLng(lat, lon)
    mapcanvas = document.getElementById('mapcanvas')
    mapcanvas.style.height = '500px';
    mapcanvas.style.width = '500px';
 
    var myOptions = {
    center:latlon,
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    }
     
    var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
    var marker = new google.maps.Marker({
        position:latlon,
        map:map,
        title:"You are here!"
    });
}
 
function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            view.innerHTML = "Yah, mau deteksi lokasi tapi ga boleh :("
            break;
        case error.POSITION_UNAVAILABLE:
            view.innerHTML = "Yah, Info lokasimu nggak bisa ditemukan nih"
            break;
        case error.TIMEOUT:
            view.innerHTML = "Requestnya timeout bro"
            break;
        case error.UNKNOWN_ERROR:
            view.innerHTML = "An unknown error occurred."
            break;
    }
 }
</script>

@stop

@section('script')
@stop