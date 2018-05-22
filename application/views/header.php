<!DOCTYPE html><!--[if lt IE 7]><html lang="es" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]--><!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]--><!--[if IE 8]><html class="no-js lt-ie9"><![endif]--><!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="content-language" content="es-ES" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php /* ?>
	<link rel="shortcut icon" href="<?php echo $this->config->item('favicon'); ?>">
	<?php */ ?>
	<title><?php echo $title; ?></title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
		<link href="<?php echo base_url('vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/fontastic.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendor/@fancyapps/fancybox/jquery.fancybox.min.css'); ?>" rel="stylesheet">

	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.default.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">

 <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">

	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	
	  <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand --><a href="/" class="navbar-brand">Bootstrap Blog</a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="/" class="nav-link active ">Home</a>
              </li>
              <li class="nav-item"><a href="/blog" class="nav-link ">Blog</a>
              </li>
              <?php echo (isset($auth_username)) ? '<li class="nav-item"><a href="/blog/create" class="nav-link ">Crear artículo</a>
              </li>' : "" ?> 
              <li class="nav-item"><a href="#" class="nav-link ">Contacto</a>
              </li>
            </ul>
            <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
            <ul class="langs navbar-text"><a href="#" class="active">EN</a><span>           </span><a href="#">ES</a></ul>
          </div>
        </div>
      </nav>
    </header>