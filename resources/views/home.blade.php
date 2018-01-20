@extends('master')

@section('content')
<!--header-->
<header class="main-header" id="header">   <!--en style.css está la imagen a cambiar-->
    <div class="bg-color">
        <!--nav-->
        <nav class="nav navbar-default navbar-fixed-top">
            <div class="container">
                <div class="col-md-12">
                    <div class="navbar-header">
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#header">Inicio</a></li>
                            <li><a href="#productos">Productos</a></li>
                            <li><a href="#Amigos">Amigos</a></li>
                            <li><a href="#contact">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!--/ nav-->
        <div class="container text-center">
            <div class="wrapper wow fadeInUp delay-05s">
                <h2 class="top-title">Regalos con Diseño</h2>
                <h3 class="title">Gala Estampas</h3>
                <h4 class="sub-title">Objetos personalizados que te acompañan día a día</h4>
                <button type="submit" class="btn btn-submit">Promociones</button>
            </div>
        </div>
    </div>
</header>
<section class="section-padding wow fadeInUp delay-02s" id="productos">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="section-title">
                    <h2 class="head-title">Productos</h2>
                    <hr class="botm-line">
                    <p class="sec-para">Personalizamos tus regalos para que sean más tuyos. Cuidamos la calidad de nuestros
                        productos controlando cada detalle.</p>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="col-md-4 col-sm-6 padding-right-zero">
                    <div class="portfolio-box design">
                        <img src="img/Mereces_lo_que_sueñas.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 padding-right-zero">
                    <div class="portfolio-box design">
                        <img src="img/set_lata_yerba_azucar.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 padding-right-zero">
                    <div class="portfolio-box design">
                        <img src="img/port03.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 padding-right-zero">
                    <div class="portfolio-box design">
                        <img src="img/port04.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 padding-right-zero">
                    <div class="portfolio-box design">
                        <img src="img/port05.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 padding-right-zero">
                    <div class="portfolio-box design">
                        <img src="img/port06.jpg" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding parallax bg-image-2 section wow fadeIn delay-08s" id="cta-2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="cta-txt">
                    <h3>Seguinos por las redes</h3>
                    <p>Enterate de las novedades, productos destacados, promociones y participá de sorteos.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <a href="#" class="btn btn-submit">Subscribite</a>
            </div>
        </div>
    </div>
</section>
<!---->
<!---->
<section id="Amigos" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 wow fadeInLeft delay-05s">
                <div class="section-title">
                    <h2 class="head-title">Amigos</h2>
                    <hr class="botm-line">
                    <p class="sec-para">Consulta las fechas y lugares de las próximas expos y encuentros y ya que estás podes
                        visitar las páginas de quienes nos quieren y apoyan.</p>
                </div>
            </div>
            <div class="col-md-9">
                <div class="col-md-6 wow fadeInRight delay-02s">
                    <div class="icon">
                        <i class="fa fa-diamond" aria-hidden="true"></i>
                    </div>
                    <div class="icon-text">
                        <a href="http://www.berazategui.gov.ar/emprender/"> <img src="img/emprenderImg.png" class="img-responsive"> </a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight delay-02s">
                    <div class="icon">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="icon-text">
                        <a href="https://milacalcabrini.mitiendanube.com/como-comprar/"> <img src="img/milaLogo.png" class="img-responsive" width=66%> </a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight delay-04s">
                    <div class="icon">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="icon-text">
                        <h3 class="txt-tl">Responsive Design</h3>
                        <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight delay-04s">
                    <div class="icon">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="icon-text">
                        <h3 class="txt-tl">No Coding, No Shortcodes</h3>
                        <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight delay-06s">
                    <div class="icon">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="icon-text">
                        <h3 class="txt-tl">High Coversion</h3>
                        <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight delay-06s">
                    <div class="icon">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="icon-text">
                        <h3 class="txt-tl">Save Tons of Time</h3>
                        <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---->
<!---->
<section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
        <div class="row white">
            <div class="col-md-8 col-sm-12">
                <div class="section-title">
                    <h2 class="head-title black">Contacto</h2>
                    <hr class="botm-line">
                    <p class="sec-para black">Completa tus datos y nos pondremos en contacto a la brevedad.</p>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="col-md-4 col-sm-6" style="padding-left:0px;">
                    <h3 class="cont-title">Email</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <p class="alert-danger"> Completa correctamente los campos requeridos.</p>
                        </div>
                    @endif
                    @if (Session::has('form-success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ Session::get('form-success') }}</strong>
                        </div>
                    @endif
                    <div id="error-message"></div>
                    <div class="contact-info">
                        <form action="/contacto" method="post" role="form" class="contactForm">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       id="name"
                                       placeholder="Nombre"
                                       value="{{ old('name') }}"/>
                                <div class="validation">{{ $errors->has('name') ? $errors->first('name') :'' }}</div>
                            </div>
                            <div class="form-group">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       id="email"
                                       placeholder="Mail"
                                       value="{{ old('email') }}">
                                <div class="validation">{{ $errors->has('email') ? $errors->first('email') : '' }}</div>
                            </div>

                            <div class="form-group">
                                <input type="text"
                                       class="form-control"
                                       name="subject"
                                       id="subject"
                                       placeholder="Asunto"
                                       value="{{ old('subject') }}"/>
                                <div class="validation">{{ $errors->has('subject') ? $errors->first('subject'):'' }}</div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control"
                                          name="message"
                                          rows="5"
                                          placeholder="Mensaje"
                                          valuue="{{ old('message') }}"></textarea>
                                <div class="validation">{{ $errors->has('message') ? $errors->first('message'):'' }}</div>
                            </div>
                            <button type="submit" class="btn btn-send">Enviar</button>
                        </form>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">
                </div>
                <div class="col-md-4">
                    <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
                        <span aria-hidden="true" class="fa fa-envelope-o"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---->
@endsection