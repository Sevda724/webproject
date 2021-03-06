<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ __('lang.title') }}</title>

 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<style type="text/css">
    .imagestyle{
        width: 30px;
        height: 20px
    }
</style>
</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
			<div id="app">
    <div style="background-color: white">
        <nav class="navbar navbar-expand-lg navbar-light  container">
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

              <div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('ru')
                                <img src="{{asset('images/ru.jpg')}}" class = 'imagestyle'>  Русский
                                @break
                                @case('kz')
                                <img src="{{asset('images/kz.png')}}" class = 'imagestyle'>  Қазақ тілі
                                @break
                                @case('fr')
                                <img src="{{asset('images/fr.png')}}" class = 'imagestyle'>  Français
                                @break
                                @default
                                <img src="{{asset('images/en.png')}}" class = 'imagestyle'>  English
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="en"><img src="{{asset('images/en.png')}}" class = 'imagestyle'> English</a>
                            <a class="dropdown-item" href="kz"><img src="{{asset('images/kz.png')}}" class = 'imagestyle'>Қазақ тілі</a>
                            <a class="dropdown-item" href="fr"><img src="{{asset('images/fr.png')}}" class = 'imagestyle'> Français</a>
                            <a class="dropdown-item" href="ru"><img src="{{asset('images/ru.jpg')}}" class = 'imagestyle'> Русский</a>
                        </div>
                    </li>
                    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
        
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Logout</span>
    </a>    
    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    </li> 
                </ul>
            </div>
        </nav>
    </div>
		<div class="site-branding">
			<h1 class="site-title"><p rel="home">{{ __('lang.title') }}</p></h1>
			<h2 class="site-description">{{ __('lang.mess') }}  !!!!</h2>
		</div>
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">Menu</button>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">
				<li><a href="home">{{ __('lang.home') }}</a></li>
				<li><a href="aboutus">{{ __('lang.about') }}</a></li>
                <li><a href="shop">{{ __('lang.shop') }}</a></li>
				<li><a href="contact-form">{{ __('lang.contact') }}</a></li>
			</ul>

		</div>
		</nav>
		</header>
		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				<article id="post-39" class="post-39 page type-page status-publish hentry">
				<header class="entry-header">
				<h1 class="entry-title">{{ __('lang.contact') }}</h1>
				</header>
				<!-- .entry-header -->
				<div class="entry-content">
						
					<p><script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
					<div style='overflow:hidden;height:380px;width:100%;'>
					<div id='gmap_canvas' style='height:380px;width:100%;'></div>
					<div>embed google maps</a></div>
					<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
					</div>
					<p><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(43.227367, 76.922153),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(43.227367, 76.922153)});infowindow = new google.maps.InfoWindow({content:'<strong>World books</strong><br />Almaty<br />'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script></p>
					<!-- END MAP -->
						
					<div class="wpcmsdev-columns">
						<div class="column column-width-one-half">
							<div style="width: 400px">
                            <h4>{{ __('lang.mail') }}</h4>
							@if (count($errors) > 0)
							<div class="alert alert-danger">
    							<strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
    							<ul>
     								 @foreach ($errors->all() as $error)
         							 <li>{{ $error }}</li>
    								  @endforeach
    							</ul>
							</div>
							@endif
  
							@if(session('success'))
							<div class="alert alert-success">
  							{{ session('success') }}
							</div> 
							@endif
							<form class = "wpcf7"  method="POST" action="{{ route('contact-form.store') }}">
                  
                            {{ csrf_field() }}
                            <div class="form">
                                <div class="col-md-30">
                                    <div class="form-group">
                                        <input type="text" style="width: 400px; font-size: 14px" name="name" class="form-control" placeholder="{{ __('lang.name') }}" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-30">
                                    <div class="form-group">
                                        <input type="text" name="email" style="width: 400px; font-size: 14px" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            
                                <div class="col-md-15">
                                    <div class="form-group">
                                        <textarea name="message" rows="5" style="width: 400px; font-size: 14px" class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>
                   
                            <div class="form-group text-center">
                                <input type="submit"  class="btn clearfix btn-submit" value="{{ __('lang.send') }}">

                            </div>
                        </form>							
							<form class="wpcf7" method="post" action="{{url('file')}}" id="contactform" enctype="multipart/form-data">
								@csrf
                                <h4>{{ __('lang.upmess') }}</h4>
									<div class="input-group hdtuto control-group lst increment" style="margin-top:20px">
      									<input type="file" name="filenames[]" class="myfrm form-control" style="width: 300px; font-size: 14px">
      									<div class="input-group-btn"> 
        									<button class="btn clearfix btn-submit" type="button" style="width: 50px;height: 40px;" ><i class="fldemo glyphicon glyphicon-plus"></i>+</button>
      									</div>
    								</div>
    							<div class="clone hide">
      							<div class="hdtuto control-group lst input-group" style="margin-top:10px">
        							<input type="file" name="filenames[]" class="myfrm form-control" style="width: 300px; font-size: 14px" >
        							<div class="input-group-btn"> 
          								<button class="btn clearfix btn-submit" type="button" style="width: 50px;height: 40px;"><i class="fldemo glyphicon glyphicon-remove"></i>-</button>
        							</div>
      							</div>
    							</div>
    								<input type="submit" class="btn btn-dark" value="{{ __('lang.upload') }}" style="margin-top: 20px">

    								
							</form>
						</div>
					</div></div>   
				</div>
				</article>
				</main>
			</div>
		</div>
	</div>
	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">{{ __('lang.title') }}</h1>

		</div>
	</div>
	</footer>
        <a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>
<!-- #page -->
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });
    });
</script>
<script src="js/jquery.js" defer></script>
<script src="js/plugins.js" defer></script>
<script src="js/scripts.js" defer></script>
<script src="js/masonry.pkgd.min.js" defer></script>
<script src="<?php echo url('/'); ?>/js/jquery.js"></script>
<script src="<?php echo url('/'); ?>/js/plugins.js"></script>
<script src="<?php echo url('/'); ?>/js/scripts.js"></script>
<script src="<?php echo url('/'); ?>/js/masonry.pkgd.min.js"></script>
<script src="<?php echo url('/'); ?>/js/validate.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>