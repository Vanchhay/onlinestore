<!DOCTYPE html>
<html lang="en">
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
</html>
