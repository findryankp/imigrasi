@extends('master.master')
@section('title') Pelaporan
@stop
@section('head')
    <style>
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body 
      {
        height: 100%;
      }
     
     #latlng {
        width: 225px;
      }
    </style>
@stop

@section('content')
@include('map')
   <div class="categories-section main-grid-border" id="mobilew3layouts">
        <div class="container">
            <div class="category-list">
                <div id="parentVerticalTab">
                    <div class="agileits-tab_nav">
                    <ul class="resp-tabs-list hor_1">
                        <li><i class="icon fa fa-mobile" aria-hidden="true"></i>Lapor</li>
                    </ul>
                    </div>
                    <div class="resp-tabs-container hor_1">
                        <!-- tab1 -->
                        <div>
                            <div class="tabs-box">
                 <div class="clearfix"> </div>
                 <div class="tab-grids">
                    <div id="tab1" class="tab-grid">  
                              <div class="login-form">  
                        <form action="{{URL::to('/')}}" enctype="data/multipart" method="POST" id="signup">
                        {{csrf_field()}}
                        <ol>
<<<<<<< Updated upstream
                            <li>
                                <h4><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#00CED1"></i>&nbsp;&nbsp;Keterangan</h4>
                                <textarea style="opacity: 0.7;" name="keterangan" class="form-control" rows="3" placeholder="Tulis Keterangan"></textarea>
                                <p class="validation01">
                                    <span class="invalid">Keterangan</span>
                                    <span class="valid">Benar</span>
                                </p>
=======
                            <li class="text-right">
                                <!-- <button type="button" class="submit">
                                    <span style="color:black;" class="icon fa fa-camera"></span>
                                </button> -->
                                <input class="submit" type="file" name="foto" accept="image/*" capture="camera">
                                <h4>Ambil gambar</h4>
>>>>>>> Stashed changes
                            </li>
                            <li>
                                <h4><i class="icon fa fa-phone-square" style="color:#00CED1;"></i>&nbsp;&nbsp;Nomer HP</h4>
                                <input type="number" id="tel" name="noTelp" pattern="\d{10}" placeholder="Nomor HP" required="required" />
                                <p class="validation01">
                                    <span class="invalid">Masukan nomor</span>
                                    <span class="valid">Benar</span>
                                </p>
                            </li>
<<<<<<< Updated upstream
                            
                            
                           
                            <li>
                                <h4><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#00CED1"></i>&nbsp;&nbsp;Lokasi</h4>
                                <input type="text" id="lokasi" name="lokasi" placeholder="Lokasi">
=======
                            <li>
                                <h4><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#00CED1"></i>&nbsp;&nbsp;Lokasi</h4>
                                <h4 id="lokasi2"></h4>
                                <input type="hidden" id="tel" name="lokasi" placeholder="Lokasi">
                                <input type="text" id="tel" name="ketlok"  placeholder="Keterangan Lokasi" required="required" />
>>>>>>> Stashed changes
                            </li>

                            <!-- <li>
                                <h4><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#00CED1"></i>&nbsp;&nbsp;Keterangan Lokasi</h4>
                                <input type="text" id="tel" name="ketlok"  placeholder="Keterangan Lokasi" required="required" />
                            </li> -->
                            <li>
<<<<<<< Updated upstream
                                <h4><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#00CED1"></i>&nbsp;&nbsp;Keterangan Lokasi</h4>
                                <input type="text" id="tel" name="ketlok"  placeholder="Keterangan Lokasi" required="required" />
                            </li>

                            <li class="text-right">
                                <!-- <button type="button" class="submit">
                                    <span style="color:black;" class="icon fa fa-camera"></span>
                                </button> -->
                                <input class="submit" type="file" name="foto" accept="image/*" capture="camera">
                                <h4>Ambil gambar</h4>
                            </li>


=======
                                <h4><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#00CED1"></i>&nbsp;&nbsp;Keterangan</h4>
                                <textarea style="opacity: 0.7;" name="keterangan" class="form-control" rows="3" placeholder="Tulis Keterangan"></textarea>
                                <p class="validation01">
                                    <span class="invalid">Keterangan</span>
                                    <span class="valid">Benar</span>
                                </p>
                            </li>
>>>>>>> Stashed changes
                            <li>
                                <input style="color: black;" type="submit" class="submit" value="Laporkan" />
                            </li>
                        </ol>
                        </form> 
                                                                                            
                        </div>  

                    </div>
                </div>
            
            <div class="clearfix"> </div>
        </div>
    <!-- script -->
        <script>
            $(document).ready(function() {
                $("#tab2").hide();
                $("#tab3").hide();
                $("#tab4").hide();
                $(".tabs-menu a").click(function(event){
                    event.preventDefault();
                    var tab=$(this).attr("href");
                    $(".tab-grid").not(tab).css("display","none");
                    $(tab).fadeIn("slow");
                });
                $('#cobahehe').click(function(){
                    $('#lokasi').val("Glenn Quagmire");
                });
            });
        </script>
                        
    </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
@stop