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
			<h2 class="site-description">{{ __('lang.mess') }}</h2>
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
				
				<article class="hentry">
				<header class="entry-header">
				<h1 class="entry-title">{{ __('lang.about1')}}</h1>	
				</header>
				<!-- .entry-header -->

				<div class="entry-content">
				<div alt="bg5" style="width: 420px; height: 200px" class="alignright"><canvas id="myChart1" width="400" height="200"></canvas></div>
				<p style="font-size: 14px">{{ __('lang.text1')}}</p>
				<p style="font-size: 14px">{{ __('lang.text2')}}</p>
				<p style="font-size: 14px">{{ __('lang.text3')}}</p>
				<p style="font-size: 14px">{{ __('lang.text4')}}</p>
				<p style="font-size: 14px">{{ __('lang.text5')}}</p>
				<p style="font-size: 14px">{{ __('lang.text6')}}</p>
				<p style="font-size: 14px">{{ __('lang.text7')}}</p>
				<div alt="bg5" style="width: 410px; height: 230px" class="alignleft"><canvas id="myChart2" width="400" height="200"></canvas>
					<p style="font-size: 15px; text-align: center; color: grey"><b>{{ __('lang.type')}}</b></p></div>
e				<p style="font-size: 17px"><b>{{ __('lang.text8')}}</b></p>
				<p style="font-size: 14px"><b><i>{{ __('lang.text9')}}</i></b><br>
				{{ __('lang.text10') }}
				</p>
				<p style="font-size: 14px"><b><i>{{ __('lang.text11')}}</i></b><br>
				{{ __('lang.text12')}}<br>
				<b><i>{{ __('lang.text13')}}</i></b><br>
				{{ __('lang.text14')}}<br>
				<b><i>{{ __('lang.text15')}}</i></b><br>
				{{ __('lang.text16')}}
				</p>
				<p style="font-size: 14px">{{ __('lang.text17')}}</p>
				<div alt="bg5" style="width: 410px; height: 200px" class="alignright"><canvas id="myChart3" width="400" height="200"></canvas></div>
				<p style="font-size: 14px">{{ __('lang.text18')}}
				<br>{{ __('lang.text19')}}
				</p>
				<p style="font-size: 14px">{{ __('lang.text20')}}<br>
					{{ __('lang.text20')}}
				</p>
				</div><!-- .entry-content -->
				</article>
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->
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
	var ctx = document.getElementById("myChart3");
	var myChart = new Chart(ctx, {
		"type": "line",
		"data": {
		"labels": ["November","December","January", "February" , "March"],	
		"datasets":[{"label":"number of books sold", "data":[1740, 4470, 3520,3200,4000],
		"fill":false,"borderColor":"rgb(75,192,192)", "lineTension":0.1}]},
		"options":{}});
</script>
<script type="text/javascript">
var ctx = document.getElementById("myChart1");
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: ["EKSMO", "MYTH" , "Ventana-Graf" , "Bustard", "AST"],
datasets: [
{ label: 'Number of books from the publisher',
data: [1600,500,250,700,1900],
backgroundColor :['rgba(255, 129, 102, 1)',
'rgba(234, 162, 235, 1)',
'rgba(255, 206, 36, 1)',
'rgba(75, 192, 192, 1)',
'rgba(153, 102, 255, 1)',
],
}
]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero:true
}
}]
}
}
});
</script>

<script type="text/javascript">
var ctx = document.getElementById("myChart2");
var myChart = new Chart(ctx, {
type: 'pie',
data: {
labels: ["Fiction", "Educational publications." , "Products for children" , "Books on hobbies and hobbies."],
datasets: [
{ label: 'Pie',
data: [50,25,10,15],
backgroundColor :['rgba(255, 129, 102, 1)',
'rgba(234, 162, 235, 1)',
'rgba(255, 206, 36, 1)',
'rgba(75, 192, 192, 1)',
],
}
]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero:true
}
}]
}
}
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>