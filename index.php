<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TeTeTe</a>
    </div>
    <ul class="nav navbar-nav navbar-right" style="color:white;font-size:24px;font-weight:bold;right:30px;">
      Creative Center
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <form class="">
        <div class="form-group">
          <label for="sel1">Select Template:</label>
          <select class="form-control" id="template" name="template">
            <option value="images/template_1.jpg">Template 1</option>
            <option value="images/template_2.jpg">Template 2</option>
            <option value="images/template_3.jpg">Template 3</option>
            <option value="images/template_4.jpg">Template 4</option>
            <option value="images/template_5.jpg">Template 5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <label for="">Story</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <textarea id="story" name="story" rows="5" style="width:100%;"></textarea>
        </div><br>
        <div class="form-group text-center">
          <input type="submit" class="btn btn-primary" value="Save Image" id="">
        </div>
      </form>
    </div>
    <div class="col-md-8" style="background-color:black;">
      <img src="save-images/download.jpg" style="width:100%" alt="">
    </div>
  </div>
</div>

</body>
</html>
