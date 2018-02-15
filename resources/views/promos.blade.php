@extends('master')

<section class="section-padding wow fadeInUp delay-02s" id="productos">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="section-title">
                    <h2 class="head-title">Promociones</h2>
                    <hr class="botm-line">
                    <h3 class="headShake">SET DE JARDÍN PERSONALIZADOS</h3>
                    <p class="sec-para">Empiezan las clases y nuestros más peques se merecen un hermoso set personalizado para iniciar el jardín.</p>
                </div>
                <divv>
                    <a href="/">VOLVER</a>
                </divv>
            </div>

            <div class="col-md-9 col-sm-12">
                <div class="col-md-4 col-sm-6 padding-right-zero">
                    <div class="portfolio-box design">
                        <img src="img/SetJardinDragon.jpeg" alt="" class="img-responsive"
                             style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 padding-right-zero">
                    <div class="portfolio-box design">
                        <img src="img/SetJardinUnicornio.jpeg" alt="" class="img-responsive"
                             style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 padding-right-zero">
                    <div class="portfolio-box design">
                        <img src="img/SetJardinPJMask.jpeg" alt="" class="img-responsive"
                             style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 padding-right-zero">
                    <div class="portfolio-box design">
                        <img src="img/setJardinMinie.jpeg" alt="" class="img-responsive"
                             style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 padding-right-zero">
                    <div class="portfolio-box design">
                        <img src="img/SetJardinHulk.jpeg" alt="" class="img-responsive"
                             style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 padding-right-zero">
                    <div class="portfolio-box design">
                        <img src="img/SetJardinLittlePony.jpeg" alt="" class="img-responsive"
                             style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                    </div>
                </div>



                <!-- The Modal/Lightbox -->
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 6</div>
                            <img src="img/setJardinDragon_max.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 6</div>
                            <img src="img/setJardiUnicornio_max.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 6</div>
                            <img src="img/setJardinPJMask_max.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 6</div>
                            <img src="img/setJardinMinie_max.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">5 / 6</div>
                            <img src="img/setJardinHulk_max.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">6 / 6</div>
                            <img src="img/setJardinLittlePony_max.jpg" style="width:100%">
                        </div>

                        <!-- Next/previous controls -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <!-- Caption text -->
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
