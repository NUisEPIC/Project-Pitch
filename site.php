<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico'/>

    <title>NU EPIC</title>

    <!-- CSS Files -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">    
    <link href="css/fonts.css" rel="stylesheet">       
    <link href="css/team.css" rel="stylesheet">   
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
	$('.navbar-nav a').click(function(e) {
        e.preventDefault(); // we'll get the pages via ajax.

        var url = $(this).attr('href'); // use href as url to loag
       
        $.ajax({
            url: url,
            success: function(data) {
                // when ajax is done, fade old content out
                $('#content').fadeOut(function() {
                    $(this).html(data); // replace contents

                    // fade new content in
                    $(this).fadeIn();
                });
            }
        });
    });
})</script> 

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home-page">Home</a></li>
            <li><a href="#mission-page">About</a></li>
            <li><a href="#team-page">Team</a></li>                     
            <li><a href="#events-page">Events</a></li>
            <li><a href="pp.html">Blosg</a></li>      
            <li><a href="PP/index.html">Contasct</a></li>
          </ul>
        </div>
      </div>
    </div>
<div style="height:5000px" id="content">
    <?php
    // load home by default - the rest will be loaded via AJAX
     include("index.html"); ?>
</div>​

</body>
</html>