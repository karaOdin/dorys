@extends('layouts.app')


@section('content')

     <!-- ******************** Slider Starts Here ******************* -->



    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-1.jpg" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">We Care More than 1000 Students Education</h1>
                                    <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">It's time for better help.</h1>
                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">Sponser a Child Today</h1>
                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

     <!-- ******************** About US Starts Here ******************* -->

    <div class="about-us">
        <div class="container">
            <div class="session-title">

            <h2>{{ __("drepanocytose") }}</h2>
            </div>
            <div class="about-row row">
                <div class="col-md-8">
                    <div class="abut-detail">
                         <h4>BUILDING SCHOOL IN AFRICAN COMMUNITIES.</h4>
                        <p>Integer vulputate vehicula dolor a eleifend. Duis aliquam condimentum sapien, eget tempor justo. Aenean porttitor nibh metus, sollicitudin egestas metus posuere et . Fusce egestas volutpat metus, in sodales sem bibendum porta. Nunc hendrerit nunc sit </p> <p> Amet tellus posuere, at malesuada sem gravida. Integer maximus ultricies augue, at dapibus elit bibendum consequat. Cras faucibus tellus eleifend, fermentum purus in, dapibus sapien. Praesent nec ornare risus. Etiam iaculis, ligula vel gravida vestibulum, urna justo posuere ante, id pretium massa arcu sed mi. Nunc a sollicitudin sem. Duis tempus</p>
                    </div>



                </div>
                <div class="col-md-4">
                    <img src="assets/images/about_img.png" alt="">
                </div>
            </div>
        </div>
    </div>
{{--  --}}
<div class="we-are-making container-fluid">
    <div class="row">
        <div class="col-lg-6 imag-part">
            <img src="assets/images/count.jpg" alt="">
        </div>
        <div class="col-lg-6 text-part">
            <h3>{{ __('Symptomes') }}</h3>
            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>


        </div>
    </div>
</div>

     <!-- ******************** Services Starts Here ******************* -->

     <section class="services container-fluid">
         <div class="container">
            <div class="session-title">
                <p>approfondir</p>
                <h2>parlons plus de ca</h2>
            </div>
            <div class="service-row row">
                <div class="col-md-4">
                    <div class="servic-col">
                        <a href="#">
                        <div class="servic-round">
                           <p>probleme</p>
                        </a>
                        </div>
                        <h4>les complications de  la drépanocytose</h4>
                        <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking </p>
                    </div>
                </div>
                 <div class="col-md-4">

                    <div class="servic-col">
                        <a href="#">
                        <div class="servic-round">
                            <p>traitement</p>
                        </a>

                        </div>

                        <h4> voir les traitments</h4>
                        <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking </p>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="servic-col">
                        <a href="#">
                        <div class="servic-round">
                            <p>depistage</p>
                            <a>
                        </div>
                        <h4>comment reconnaitre la drepanocytose</h4>
                        <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking </p>
                    </div>
                </div>
            </div>
         </div>
     </section>

     <section class="services container-fluid">
           <div class="service-row row">
               <div class="col-md-4">
                   <div class="servic-col">
                    <a href="#">
                       <div class="servic-round">
                          <p>Glossaire</p>
                       </a>
                       </div>
                       <h4>votre petit dectionaire</h4>
                       <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking </p>
                   </div>
               </div>
                <div class="col-md-4">
                   <div class="servic-col">
                    <a href="#">
                       <div class="servic-round">
                           <p>histoire</p>
                       </a>
                       </div>
                       <h4>historique de drepanocytose</h4>
                       <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking </p>
                   </div>
               </div>
                <div class="col-md-4">
                   <div class="servic-col">
                    <a href="#">
                       <div class="servic-round">
                           <p>conseils</p>
                       </a>
                       </div>
                       <h4>Conseils de prévention</h4>
                       <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking </p>
                   </div>
               </div>
           </div>
        </div>
    </section>



     <!-- ******************** Services Starts Here ******************* -->


     <section class="container-fluid causes">
        <div class="container">
            <div class="session-title row">
            <p>un peu plus?</p>
            <h2>suivi nous</h2>
        </div>
        <div class="cuses-row row">
            <div class="col-md-4">
                <div class="causen-ccover">


                <div class="caus-img">
                    <img src="assets/images/causes/c1.jpg" alt="">
                </div>

                <div class="caus-detail">
                    <h4>vivre avec la drepanocytose</h4>
                    <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>

                <div class="donat-btn">
                    <a href="#" class="btn btn-danger">voire</a>
                </div>

            </div>

            </div>

            <div class="col-md-4">
                <div class="causen-ccover">


                <div class="caus-img">
                    <img src="assets/images/causes/c2.jpg" alt="">
                </div>
                <div class="caus-detail">
                    <h4>greffe de moelle</h4>
                    <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>

                <div class="donat-btn">
                    <a href="#" class="btn btn-danger">voire</a>
                </div>

            </div>

            </div>

            <div class="col-md-4">
                <div class="causen-ccover">


                <div class="caus-img">
                    <img src="assets/images/causes/c3.jpg" alt="">
                </div>

                <div class="caus-detail">
                    <h4>les nouvelles recherches</h4>
                    <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>

                <div class="donat-btn">
                    <a href="#" class="btn btn-danger">voire</a>
                </div>

            </div>

            </div>
        </div>
        </div>

     </section>

@endsection



