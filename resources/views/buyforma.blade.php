<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>World books</title>

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
                                <img src="<?php echo url('/'); ?>/images/ru.jpg" class = 'imagestyle'> <a> Русский</a>>
                                @break
                                @case('kz')
                                <img src="<?php echo url('/'); ?>/images/kz.png" class = 'imagestyle'>  Қазақ тілі
                                @break
                                @case('fr')
                                <img src="<?php echo url('/'); ?>/images/fr.png" class = 'imagestyle'>  Français
                                @break
                                @default
                                <img src="<?php echo url('/'); ?>/images/en.jpg" class = 'imagestyle'>   <a>English</a>
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="lang/en"><img src="<?php echo url('/'); ?>/images/en.png" class = 'imagestyle'> English</a>
                            <a class="dropdown-item" href="lang/bn"><img src="<?php echo url('/'); ?>/images/kz.png" class = 'imagestyle'>Қазақ тілі</a>
                            <a class="dropdown-item" href="lang/in"><img src="<?php echo url('/'); ?>/images/fr.png" class = 'imagestyle'> Français</a>
                            <a class="dropdown-item" href="lang/in"><img src="<?php echo url('/'); ?>/images/ru.jpg" class = 'imagestyle'> Русский</a>
                        </div>
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
                                    <div class="wpcmsdev-columns">
                        <div class="column column-width-one-half">
                            <h4>Fill-in form</h4>
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
                                    <h4>Write your full name:</h4>
                                    <div class="form-group">
                                        <input type="text" style="width: 400px; font-size: 14px" name="fullname" class="form-control" placeholder="Full name " value="{{ old('fullname') }}">
                                        @if ($errors->has('fullname'))
                                            <span class="text-danger">{{ $errors->first('fullname') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-30">
                                    <h4>Write your  email:</h4>
                                    <div class="form-group">
                                        <input type="text" name="emailForm" style="width: 400px; font-size: 14px" class="form-control" placeholder="Email" value="{{ old('emailForm') }}">
                                        @if ($errors->has('emailForm'))
                                            <span class="text-danger">{{ $errors->first('emailForm') }}</span>
                                        @endif
                                    </div>
                                </div>
                            
                                <div class="col-md-30">
                                    <h4>Write your address:</h4>                                    
                                    <div class="form-group">
                                        <input type="text" name="address" style="width: 400px; font-size: 14px" class="form-control" placeholder="Adress" value="{{ old('address') }}">
                                        @if ($errors->has('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-30">
                                    <h4>Write your telephon number:</h4>                                    
                                    <div class="form-group">
                                        <input type="text" name="telephon" style="width: 400px; font-size: 14px" class="form-control" placeholder="Telephon number" value="{{ old('telephon') }}">
                                        @if ($errors->has('telephon'))
                                            <span class="text-danger">{{ $errors->first('telephon') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-30">
                                    <h4>Write book title that you want ti buy. 
                                    (Ex: Around the<br> World in Eighty Days #125)</h4>                                    
                                    <div class="form-group">
                                        <input type="text" name="book" style="width: 400px; font-size: 14px" class="form-control" placeholder="book" value="{{ old('book') }}">
                                        @if ($errors->has('book'))
                                            <span class="text-danger">{{ $errors->first('book') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-30">
                                    <h4>Write count of book:</h4>                                    
                                    <div class="form-group">
                                        <input type="text" name="count" style="width: 400px; font-size: 14px" class="form-control" placeholder="count" value="{{ old('count') }}">
                                        @if ($errors->has('count'))
                                            <span class="text-danger">{{ $errors->first('count') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- #primary -->
        </div>
</div>
    <footer id="colophon" class="site-footer">
    <div class="container">
        <div class="site-info">
            <h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">World books</h1>

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