@extends('master.master')
@section('title') Pelaporan
@stop
@section('head')
@stop

@section('content')
    <div id="main-wrapper">
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="static-slider10" style="background-image:url(assets/images/slide_12_1463126003.png)">
                    <div class="container">
                        <!-- Row  -->
                        <div class="row fade-left-content-center ">
                            
                            <h5 class="title responsive">  Pelaporan</h5>
                            <form data-aos="fade-left" data-aos-duration="1200">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-8">
                                        <div class="form-group m-t-15">
                                            <img src="assets/images/team/t3.jpg" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-8">
                                        <div class="form-group m-t-15">
                                            <input style="opacity: 0.7;" class="form-control" type="text" placeholder="nomer HP">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-8">
                                        <div class="form-group m-t-15">
                                            <input style="opacity: 0.7;" class="form-control" type="text" placeholder="alamat" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-8">
                                        <div class="form-group m-t-15">
                                            <textarea style="opacity: 0.7;" class="form-control" rows="3" placeholder="keterangan"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-8">
                                        <button type="submit" class="btn btn-success-gradiant font-17 btn-arrow"><span> Laporkan <i class="ti-arrow-right"></i></span></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <a class="bt-top btn btn-circle btn-lg btn-info" href="#top"><i class="ti-arrow-up"></i></a>
        </div>
    </div>
@stop

@section('script')
@stop