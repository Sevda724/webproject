<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ __('lang.title') }}</title>

 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700" type='text/css' media='all'/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
        <div id="content" class="site-content">
            <div id="primary" class="content-area column full">
                <main id="main" class="site-main">
                
                <article class="hentry">
                <header class="entry-header">
                <h1 class="entry-title">{{ __('lang.about1')}}</h1> 
                </header>
                <!-- .entry-header -->

                <div class="entry-content">
                <div alt="bg5" ><img  style="width: 250px; height: 300px" class="alignright" src="<?php echo url('/'); ?>/images/notebook.jpg"></canvas></div>
                <h2>{{ __('lang.notebooktitle')}} #0654</h2>
                <h3>{{ __('lang.notebookauthor')}}</h3>
                <h4>{{ __('lang.notebookdes')}}</h4>
                <h3 style="margin-top: 50px; margin-bottom: 30px">{{ __('lang.amount')}}: 2000 {{ __('lang.tg')}}</h3>
                <a href="buyform"><button class="btn btn-dark" style="width: 70px" >{{ __('lang.buy')}}</button></a>
                </div><!-- .entry-content -->
                </article>
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
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

<script src="<?php echo url('/'); ?>/js/jquery.js"></script>
<script src="<?php echo url('/'); ?>/js/plugins.js"></script>
<script src="<?php echo url('/'); ?>/js/scripts.js"></script>
<script src="<?php echo url('/'); ?>/js/masonry.pkgd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>