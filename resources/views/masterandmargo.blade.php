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
                <main id="main" class="site-main">
                
                <article class="hentry">
                <header class="entry-header">
                <h1 class="entry-title">{{ __('lang.about1')}}</h1> 
                </header>
                <!-- .entry-header -->

                <div class="entry-content">
                <div alt="bg5" ><img  style="width: 250px; height: 300px" class="alignright" src="<?php echo url('/'); ?>/images/masterandmargo.jpg"></canvas></div>
                <h2>The Master and Margarita #0852</h2>
                <h3>by Mikhail Bulgakov,</h3>
                <h4>An audacious revision of the stories of Faust and Pontius Pilate, The Master and Margarita is recognized as one of the essential classics of modern Russian literature. The novel's vision of Soviet life in the 1930s is so ferociously accurate that it could not be published during its author's lifetime and appeared only in a censored edition in the 1960s. Its truths are so enduring that its language has become part of the common Russian speech.One hot spring, the devil arrives in Moscow, accompanied by a retinue that includes a beautiful naked witch and an immense talking black cat with a fondness for chess and vodka. The visitors quickly wreak havoc in a city that refuses to believe in either God or Satan. But they also bring peace to two unhappy Muscovites: one is the Master, a writer pilloried for daring to write a novel about Christ and Pontius Pilate; the other is Margarita, who loves the Master so deeply that she is willing literally to go to hell for him. What ensues is a novel of inexhaustible energy, humor, and philosophical depth, a work whose nuances emerge for the first time in Diana Burgin's and Katherine Tiernan O'Connor's splendid English version.
                </h4>
                <h3 style="margin-top: 50px; margin-bottom: 30px">Amount: 1200 tg</h3>
                <a href="buyform"><button class="btn btn-dark" style="width: 70px">BUY</button></a>
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