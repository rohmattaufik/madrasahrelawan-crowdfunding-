@extends('user.layout.layouts')
@section('content')

        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#home">
                                                <img src="{{URL::asset('LogicFree/assets/images/logo-madrasah-relawan.png')}}"/>
                                            </a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="{{url('/')}}">BERANDA</a></li>
                                                <li><a href="{{url('tentang-mr')}}">TENTANG</a></li>
                                                <li><a href="{{url('program')}}">PROGRAM</a></li>
                                                <li><a href="{{url('project')}}">PROJECT</a></li>
                                                <li><a href="{{url('news')}}">RUANG RELAWAN</a></li>
                                                <li><a href="{{url('daftar_relawan')}}">DAFTAR RELAWAN</a></li>
												<li><a href="#home">USULKAN PENERIMA MANFAAT</a></li>
                                                <li><a href="{{url('kontak')}}">KONTAK</a></li>
                                            </ul>


                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->




            <section id="home" class="home" style="padding-bottom:7em;">
            </section>
            
            <section id="contact" class="contact" style="padding-bottom:10em;">
                    <div class="container" >
                        <div class="head_title" style="padding-top:5em;">
                            <h3>USULKAN PENERIMA MANFAAT</h3>
                            <div class="separator"></div>
                        </div>
                        <div class="single_contant_left">
                            <form action="{{url('usulkan_penerima_manfaat')}}" method="post" id="formid">
                                <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->
                                {{ csrf_field() }}
                                <div class="row">   
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama_pengusul" placeholder="Nama Pengusul" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email_pengusul" placeholder="Email Pengusul" required="">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama_penerima" placeholder="Nama Penerima Manfaat" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Penerima Manfaat" required="">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <textarea class="form-control" name="alasan" rows="8" placeholder="Alasan mengusulkan penerima manfaat"></textarea>
                                </div>

                                <div class="">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                                <!--</div>--> 
                            </form>
                        </div>
                    </div>
                </section>  <!-- End of contact section -->
    
    

            

                @include('user.layout.footer')

        </div>

@endsection