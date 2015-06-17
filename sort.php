<?php require_once __DIR__ . '/utils.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sortable List Demo</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Slabo+27px' rel='stylesheet' type='text/css'>
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/fonts/stylesheet.css">
    <link rel="stylesheet" href="/css/dropzone.min.css">
    <link rel="stylesheet" href="/css/starter.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sortable List Demo</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="#">Home</a></li> -->
            <!-- <li><a href="#about">About</a></li> -->
            <!-- <li><a href="#contact">Contact</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="content">
        <button id="enable" class="btn btn-sm btn-default pull-right">Edit</button>
        <h1>
          <a href="#" id="username" class="editable" data-type="text" data-title="Portfolio Title">Portfolio Title</a>
        </h1>
        <p>
          <a href="#" id="description" class="editable" data-type="textarea" data-title="Portofolio Description" data-placement="bottom">Portfolio Description</a>
        </p>
        <input id="portfolio_token" type="hidden" value="<?php echo $token = quickRandom(32) ?>">
      </div>

      <div class="content">
        <p class="lead">Click or drag &amp; drop images to upload.</p>
        <form action="/twitto.php?c=upload" class="dropzone"></form>
      </div>

      <div class="content">
  
        <button id="refresh_gallery" class="btn btn-sm btn-default pull-right">
          <i class="fa fa-refresh"></i>
          Refresh
        </button>
        <p class="lead">Drag &amp; drop the images below to reorder them.</p>
        <p>Open the browser JS console to watch the AJAX request/response</p>

        <ul id="gallery" class="sortable inline">
          <li id="img_00"><img src="/img/05702fcc2fa610620e344966c937c3b9.jpg"></li>
          <li id="img_01"><img src="/img/1f8d7fbe01dbc795a41eabf989da9740.jpg"></li>
          <li id="img_02"><img src="/img/32ea877e728ed3b0e925f99798bdc751.jpg"></li>
          <!-- 
          <li id="img_03"><img src="/img/4c8c220d0886de1091fcdfe5582c34ea.jpg"></li>
          <li id="img_04"><img src="/img/58d9b8e7bd741b65d317562d8278715b.jpg"></li>
          <li id="img_05"><img src="/img/59873d6c69db71378a89fc8eb0430d1c.jpg"></li>
          <li id="img_06"><img src="/img/74b17ffa401659baee49c260056f7b7b.jpg"></li>
          <li id="img_07"><img src="/img/809476c2a8754f31331dc1a0d4405509.jpg"></li>
          <li id="img_08"><img src="/img/df8731966a4babba183e6cc77ee330d7.jpg"></li>
          <li id="img_09"><img src="/img/f59f502b4d388d2d9359a70885040cc8.jpg"></li>
           -->
        </ul>
      </div>

    </div><!-- /.container -->

    <script>
      var php = { portfolio_token: '<?php echo $token ?>' };
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="/js/sortable.js"></script>
    <script src="/js/editable.js"></script>
    <script src="/js/refresh.js"></script>
    <script src="/js/dropzone.js"></script>
  </body>
</html>
