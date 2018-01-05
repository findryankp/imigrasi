@extends('master.master')
@section('title') Pelaporan
@stop
@section('head')
@stop

@section('content')
    <div class="agile-movies w3layouts-content" id="hehe">
        <div class="container">
    <div class="now-showing-movies">
        <h3 class="m-head">List Laporan</h3>
        @foreach($data as $datas)
        <div class="col-md-4 movie-preview">
            <a href="select-show.html" class="mask">
                <img src="{{asset('/uploads/resources/'.$datas->foto)}}" class="img-responsive zoom-img" style="height: 25vh; width: 100%;" alt="" />
                <div class="m-movie-title">
                    <a class="m-movie-link" href="select-show.html">{{$datas->keterangan}}</a>
                    <div class="clearfix"></div>
                    <div class="m-r-date">
                        <p><i class="fa fa-calendar-o"></i>{{$datas->created_at->format('M d,Y h:i a')}}</p>
                        <a href="select-show.html">Detail</a>
                    </div>
                     <div class="clearfix"></div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    </div>
    </div>
@stop

@section('script')
@stop