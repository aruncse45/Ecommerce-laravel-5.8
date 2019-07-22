

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Techshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="{{URL::asset('admin/themes/bootshop/bootstrap.min.css')}}" media="screen"/>
    <link href="{{URL::asset('admin/themes/css/base.css')}}" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive --> 
    <link href="{{URL::asset('admin/themes/css/bootstrap-responsive.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('admin/themes/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->   
    <link href="{{URL::asset('admin/themes/js/google-code-prettify/prettify.css')}}" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{URL::asset('admin/themes/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::asset('admin/themes/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::asset('admin/themes/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::asset('admin/themes/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::asset('admin/themes/images/ico/apple-touch-icon-57-precomposed.png')}}">
    <style type="text/css" id="enject"></style>
  </head>
<body>
    <div id="header">
        @include('user.include.header')
    </div>
<!-- Header End====================================================================== -->
    <div id="carouselBlk">
        @include('user.include.slider')
    </div>
    <div id="mainBody">
        
        <div class="container">
            <div class="row">
                @include('user.include.sidebar')
                <div class="span9">
                    @yield('maincontent')
                </div>
            </div>
        </div>  
    </div>
        
<!-- Footer ================================================================== -->
    <div  id="footerSection">
        @include('user.include.footer')
    </div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
    <script src="{{URL::asset('admin/themes/js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('admin/themes/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('admin/themes/js/google-code-prettify/prettify.js')}}"></script>
    
    <script src="{{URL::asset('admin/themes/js/bootshop.js')}}"></script>
    <script src="{{URL::asset('admin/themes/js/jquery.lightbox-0.5.js')}}"></script>
    
    <!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="{{URL::asset('admin/themes/switch/themeswitch.css')}}" type="text/css" media="screen" />
<script src="{{URL::asset('admin/themes/switch/theamswitcher.js')}}" type="text/javascript" charset="utf-8"></script>
    <div id="themeContainer">
    <div id="hideme" class="themeTitle">Style Selector</div>
    <div class="themeName">Oregional Skin</div>
    <div class="images style">
    <a href="{{URL::asset('admin/themes/css/#')}}" name="bootshop"><img src="{{URL::asset('admin/themes/switch/images/clr/bootshop.png')}}" alt="bootstrap business templates" class="active"></a>
    <a href="{{URL::asset('admin/themes/css/#')}}" name="businessltd"><img src="{{URL::asset('admin/themes/switch/images/clr/businessltd.png')}}" alt="bootstrap business templates" class="active"></a>
    </div>
    <div class="themeName">Bootswatch Skins (11)</div>
    <div class="images style">
        <a href="{{URL::asset('admin/themes/css/#')}}" name="amelia" title="Amelia"><img src="{{URL::asset('admin/themes/switch/images/clr/amelia.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="spruce" title="Spruce"><img src="')}}{{URL::asset('admin/themes/switch/images/clr/spruce.png')}}" alt="bootstrap business templates" ></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="superhero" title="Superhero"><img src="{{URL::asset('admin/themes/switch/images/clr/superhero.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="cyborg"><img src="{{URL::asset('admin/themes/switch/images/clr/cyborg.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="cerulean"><img src="{{URL::asset('admin/themes/switch/images/clr/cerulean.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="journal"><img src="{{URL::asset('admin/themes/switch/images/clr/journal.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="readable"><img src="{{URL::asset('admin/themes/switch/images/clr/readable.png')}}" alt="bootstrap business templates"></a> 
        <a href="{{URL::asset('admin/themes/css/#')}}" name="simplex"><img src="{{URL::asset('admin/themes/switch/images/clr/simplex.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="slate"><img src="{{URL::asset('admin/themes/switch/images/clr/slate.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="spacelab"><img src="{{URL::asset('admin/themes/switch/images/clr/spacelab.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="united"><img src="{{URL::asset('admin/themes/switch/images/clr/united.png')}}" alt="bootstrap business templates"></a>
        <p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
    </div>
    <div class="themeName">Background Patterns </div>
    <div class="images patterns">
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern1"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern1.png')}}" alt="bootstrap business templates" class="active"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern2"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern2.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern3"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern3.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern4"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern4.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern5"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern5.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern6"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern6.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern7"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern7.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern8"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern8.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern9"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern9.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern10"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern10.png')}}" alt="bootstrap business templates"></a>
        
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern11"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern11.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern12"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern12.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern13"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern13.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern14"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern14.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern15"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern15.png')}}" alt="bootstrap business templates"></a>
        
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern16"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern16.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern17"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern17.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern18"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern18.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern19"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern19.png')}}" alt="bootstrap business templates"></a>
        <a href="{{URL::asset('admin/themes/css/#')}}" name="pattern20"><img src="{{URL::asset('admin/themes/switch/images/pattern/pattern20.png')}}" alt="bootstrap business templates"></a>
         
    </div>
    </div>
</div>
<span id="themesBtn"></span>
</body>
</html>