
<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DORYS drepanocytose</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="shortcut icon" href="/images/fav.jpg">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
    <header>
        <div class="container-fluid header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo-dv">

                        <a href="/"><img src="/storage/{{setting('site.logo')}}" alt=""></a>

                </div>
            </div>
        </div>
@foreach ($post as $item)
<?php
if( isset( $_POST['id'] ) ){
$tit=$_POST['id'];
if($title=$item ){
$tt=DB::table("Posts")
  ->select("posts.*")
  ->where("title","=","$tit")
  ->get();

}}

?>
@endforeach



@foreach ($tt as $ite)
<div class="card mb-12" style="max-width: auto">
    <div class="row no-gutters">

      <div class="col-md-4">
        <img src="{{ asset('/storage/'.$ite->image) }}"class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $ite->title }}</h5>
          <p class="card-text"> {{ $ite->body }}</p>
          <p class="card-text"><small class="text-muted">{{ $ite->updated_at }}</small></p>
        </div>
      </div>
    </div>
  </div>



@endforeach

<div class="footer-ablove">

</div>
<footer class="container-fluid footer-cont">
    <div class="container">
        <div class="footer-top row">
            <div class="col-md-6 foot-logo">
                <h1>{{ __(" DORYS ") }}</h1>
                <p>{{ __(" association de lutte contre la drépanocytose") }}</p>
            </div>
            <div class="col-md-6 foot-addr">

                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> 1a place des Orprhelins
                        67000 Strasbourg France</li>
                    <li><i class="fas fa-mobile-alt"></i>  00 33 (0) 6 68 51 90 68  </li>
                    <li><i class="far fa-envelope"></i> dorys.asso@gmail.com</li>
                </ul>
            </div>
        </div>



    </div>
</footer>

 <div class="copy">
    <div class="container">
        <a href="">2020 &copy; All Rights Reserved | Designed and Developed by LYNDA ALGANI</a>

        <span>
            <a href=""><i class="fab fa-github"></i></a>
            <a href=""><i class="fab fa-google-plus-g"></i>
                <span>dorys.asso@gmail.com</span></a>
           <a href=""><i class="fab fa-pinterest-p"></i></a>
            <a href="https://twitter.com/DORYS_Drepano"><i class="fab fa-twitter"></i></a>
            <a href="https://www.facebook.com/dorys.asso"><i class="fab fa-facebook-f"></i></a>
    </span>
    </div>

</div>

</body>

<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="/plugins/slider/js/owl.carousel.min.js"></script>
<script src="/js/script.js"></script>
{{--
<script src="{{asset('js/app.js')}}" defer></script> --}}
</html>
