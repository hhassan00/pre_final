@extends('layouts.app')

@section('content')


@section('style')
<title>BizzConnect</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{ URL::asset('css/layout.css') }}" rel="stylesheet" type="text/css" media="all">
<link href="{{ URL::asset('css/fontawesome-4.5.0.min.css') }}" rel="stylesheet" type="text/css" media="all">
<link href="{{ URL::asset('css/framework.css') }}" rel="stylesheet" type="text/css" media="all">
<style> 
input[type=text] {
    width: 1000px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 204%;
}
</style>
@stop

<body id="top" style="padding: 0px; ">

<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('{{URL::asset('/images/download.jpg')}}'); background-repeat: no-repeat;"> 
  <!-- ################################################################################################ -->
  <!-- <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      
      <div id="logo" class="fl_left">
        <h1><a href="index.html">BizConnect</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">Business Category</a>
            <ul>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">Upload Business Idea</a></li>
                </ul>
          </li>
          <li><a href="#footer">Contact</a></li>
          <li><a href="#">Log in</a></li>
          <li><a href="#">Register</a></li>
        </ul>
      </nav>
      
    </header>
  </div> -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h2 class="heading">Search Business Category</h2>
      <form>
  <input class="fa fa-search" type="text" name="search" placeholder="Search..">
</form>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Submit</a></li>
          
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
    <br>
      <h3 class="font-x2 nospace">Business Categories</h3>
      
    <br>
    <ul class="nospace group elements">
      <li class="one_third first">
        <figure><img src="{{URL::asset('images/airline.png')}}" alt="">
          <figcaption><a href="#">Airline</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="{{URL::asset('images/media.png')}}" alt="">
          <figcaption><a href="#">Media</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="{{URL::asset('images/Textiles.png')}}" alt="">
          <figcaption><a href="#">Textile</a></figcaption>
        </figure>
      </li>
      <li class="one_third first">
        <figure><img src="{{URL::asset('images/bank.png')}}" alt="">
          <figcaption><a href="#">Bank</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="{{URL::asset('images/trans.png')}}" alt="">
          <figcaption><a href="#">TransPort</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="{{URL::asset('images/cloth.png')}}" alt="">
          <figcaption><a href="#">Clothing</a></figcaption>
        </figure>
      </li>
    </ul>
    
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<br>
<br>

<!-- JAVASCRIPTS -->
@section('scripts')
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.backtotop.js') }}"></script>
<script src="{{ URL::asset('js/jquery.mobilemenu.js') }}"></script>
</body>

@stop

@stop