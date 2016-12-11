<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/js/core.js" charset="utf-8"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <form class="form-horizontal" action="upload" method="post" enctype="multipart/form-data">
<fieldset>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">

        </a>
      </div>
    </div>
  </nav>
  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="selectcategory">Select Category</label>
    <div class="col-md-4">
      <select id="selectcategory" name="selectcategory" class="form-control">
        <option value="Category A">Category A</option>
        <option value="Category B">Category B</option>
      </select>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Product Name</label>
    <div class="col-md-4">
    <input id="textinput" name="textinput" type="text" placeholder="Product Name" class="form-control input-md">
    </div>
  </div>
  <!-- Price input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="priceinput">Price</label>
    <div class="col-md-4">
    <input id="priceinput" name="priceinput" type="text" placeholder="Price" class="form-control input-md">
    </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textarea">Description</label>
    <div class="col-md-4">
      <textarea class="form-control" id="textarea" name="textarea">
  </textarea>
    </div>
  </div>

  <!-- File Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="img">Image</label>
    <div class="col-md-4">
      <input id="img" name="img" class="input-file" type="file">
      <img id="pic" >
    </div>
  </div>
  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton"></label>
    <div class="col-md-4">
      <input type="submit"  class="btn btn-success">
    </div>
  </div>
</fieldset>
</form>





  </body>
</html>
