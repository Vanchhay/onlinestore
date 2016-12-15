<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
    <head>
        <title>Online store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
        <script src="/js/libs.js"></script>
        <script>window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><\/script>')</script>
        <script src="/js/scripts.js"></script>
        <!--[if lt IE 9]>
        <script src="js/html5shiv-printshiv.js"></script>
        <script src="js/selectivizr-min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Header -->
        <div class="header">
            <div class="container">
                <div class="logo">
                    <div class="logo_inner">
                        <a href="/">
                            L
                        </a>
                    </div>
                </div>

                <div class="navbar">
                    <ul class="global_nav">
                        <li>
                            <a href="">Store</a>
                        </li>

                        <li>
                            <a href="">About us</a>
                        </li>

                        <li>
                            <a href="">Privacy</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /Header -->

        <!-- Search bar -->
        <div class="searchbar">
            <div class="container">
                
            </div>
        </div>
        <!-- /Search bar -->

        <!-- Features -->
        <div class="features">
            <div class="container">
                <div class="grid_12">
                    
                </div>
            </div>
        </div>
        <!-- /Features -->

        <!-- Contents -->
        <div class="contents">
            <div class="container">
                
            </div>
        </div>
        <!-- /Contents -->

        <!-- Footer -->
        <div class="footer">
            <div class="container">
                
            </div>
        </div>
        <!-- /Footer -->
    </body>
=======
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
		<link rel="stylesheet" href="/css/main.css">
  </head>
  <body>

  <div class="container" style="margin-top:50px;">
<div class="row">
  @foreach ($products as $product)
<div class="col-xs-12 col-sm-6 col-md-3">
          <div class="col-item">
              <div class="photo">
                  <img src="/images/{{ $product->img }}"  class="img-responsive" alt="a" />
                  <hr>
              </div>
              <div class="info">
                  <div class="row">
                      <div class="price col-md-6">
                          <h5> {{ $product->product_name }}</h5>
                          <h5 class="price-text-color">${{ $product->price }}</h5>
                      </div>

                  </div>
                  <div class="separator clear-left">
                      <p>{{ $product->description }}</p>
                  </div>
                  <div class="clearfix">
                  </div>
              </div>
          </div>
      </div>
      @endforeach
</div>
</div>


  </body>
>>>>>>> 1142322950f89e8c3010977225d80c2db1bf5d5f
</html>
