<!DOCTYPE html>
<html lang="en">
<head>
  <title>Poster Maker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style media="screen">
    .active-middle {
      color: blue !important;
      font-size: 16px !important;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TeTeTa</a>
    </div>
    <ul class="nav navbar-nav navbar-right" style="color:white;font-size:30px;position:absolute;right:50px;">
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
          <select class="form-control" id="template" name="template" onchange="generate_image()">
            <option value="" selected disabled>Select a template</option>
            <option value="images/red.jpg">Red</option>
            <option value="images/green.jpg">Green</option>
            <option value="images/blue.jpg">Blue</option>
            <option value="images/yellow.jpg">Yellow</option>
            <option value="images/grey.jpg">Grey</option>
          </select>
        </div>
        <div class="well">
          <h4 style="display:inline;">Poster Details</h4>
          <button onclick="displayCurrImg()" style="margin-top:-5px;" class="btn btn-default pull-right" type="button">Render</button>
        </div>
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="name" name="name" oninput="generate_image()"><br>
          <select class="form-control" id="nameFontSize" name="nameFontSize" onchange="changeFontSizeName(this.value)">
            <option value="" selected disabled>Select font size for name</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
            <option value="60">60</option>
            <option value="70">70</option>
            <option value="80">80</option>
          </select>
        </div>
        <label for="">Story</label>
        <div class="form-group">
          <!-- <i class="fas fa-align-center" id="centerAlignIcon"></i> -->
          <p>
            <button id="middleText" class="btn btn-default" onclick="toggleCenter(event)">Middle</button>
          </p>
          <textarea id="story" name="story" rows="5" style="width:100%;" oninput="generate_image()" onblur="generate_image()"></textarea>
          <select class="form-control" id="storyFontSize" name="storyFontSize" onchange="changeFontSizeStory(this.value)">
            <option value="" selected disabled>Select font size for story</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
            <option value="60">60</option>
            <option value="70">70</option>
            <option value="80">80</option>
          </select>
        </div><br>
        <div class="form-group text-center">
          <a href="save-images/download.jpg" class="btn btn-primary" value="Save Image" id="" download>Save Image</a>
        </div>
      </form>
    </div>

    <!-- Shoing the template -->
    <div class="col-md-8" style="background-color:black;" id="imgContainer">
      <img id="poster" src="save-images/download.jpg" style="width:100%" alt="">
    </div>
  </div>
</div>

<script>
  var align = 'left';
  var position = 'top';
  var nameFontSize = 40;
  var storyFontSize = 40;
  // calling this function after every change in input field...
  function generate_image() {
    var name = $("#name").val();
    var story = $("#story").val();
    var template = $("#template").val();

    var fd = new FormData();
    fd.append('name', name);
    fd.append('story', story);
    fd.append('template', template);
    fd.append('align', align);
    fd.append('position', position);
    fd.append('nameFontSize', nameFontSize);
    fd.append('storyFontSize', storyFontSize);

    // console.log(name);
    // console.log(story);
    // console.log(template);

    // sending ajax request with inputs to generate an image...
    $.ajax({
      url: 'generate_image.php',
      type: 'POST',
      data: fd,
      contentType: false,
      processData: false,
      success: function(data) {
        console.log(data);
        document.getElementById('poster').src = template;
      }
    })
  }

  // after clicking the middle button...
  function toggleCenter(e) {
    e.preventDefault();
    $("#middleText").toggleClass('active-middle');
    if (position == 'top') {
      align = 'left';
      position = 'center';
    } else {
      align = 'left';
      position = 'top';
    }

    generate_image();
  }

  // shows current condition of the image after clicking render button...
  function displayCurrImg() {
    d = new Date();
    // query string helps to clear the cached image...
    $("#poster").attr("src", "save-images/download.jpg?"+d.getTime());
  }

  // changing font size for name field...
  function changeFontSizeName(fontSize) {
    nameFontSize = fontSize;
    console.log(fontSize);
    generate_image();
  }

  // changing font size for story field...
  function changeFontSizeStory(fontSize) {
    storyFontSize = fontSize;
    console.log(fontSize);
    generate_image();
  }
</script>

</body>
</html>
