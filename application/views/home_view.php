<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beer Bank</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/index.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script-->
    <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
		<script src="<?=base_url()?>public/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?=base_url()?>public/js/index.js" type="text/javascript"></script>
    <script src="<?=base_url()?>public/js/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="<?=base_url()?>public/js/jquery-1.7.js" type="text/javascript"></script>



  </head>
  <body class="container-fluid">

    <div class="waitLoader">
      <img class="waitLoaderImg" src="<?=base_url()?>public/img/loading.gif"/>
    </div>

    <!--Overlay popup-->
    <div class="overlay">
      <div class="overlayContent">
        <div class="selected-img-div ">
          <i style="color: #000;" class="close fa"><!--&#x2169;-->&#x2716;</i>
          <div class="row selected-img"></div>
        </div>
        <div class="alike-img">
          <div class="row alike-row">

          </div>
        </div>
      </div>
    </div>
    <form class="" action="<?= site_url('home/favorite') ?>" method="post">
      <header>
        <div class="navb">
          <a href="#" id="favorite">Favorite</a>
          <a href="<?= site_url('/') ?>">Home</a>
        </div>
        <div class="head">
          <div class="text-center">
            <h2>The Beer Bank</h2>
            <h4>Find your favorite beer here</h4>
            <div class="search-div">
              <input id="search" type="text" name="search"/>
            </div>
            <div class="">
              <h4><a href="<?= site_url('home/advance') ?>">Advance search</a></h4>
            </div>
          </div>
        </div>
      </header>

      <br/>
      <main>
        <div class="flex-container">
          <!--div class="nopad">
            <label class="image-checkbox">
              <img src="https://images.punkapi.com/v2/2.png" alt="fghjhgfg"/>
              <input type="checkbox" name="" value=""/>
              <i class="fa fa-check hidden"></i>
            </label>
          </div-->

        </div>
      </main>
    </form>
  	<script src="<?=base_url()?>public/js/index.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(window).scroll(function(){
      if ($(this).scrollTop() + 1 >= $('body').height() - $(window).height()) {
        if (working == false) {
          working = true;
          $.ajax({
            type: "GET",
            url: "https://api.punkapi.com/v2/beers?page="+page,
            processData: false,
            contentType: "application/json",
            data: '',
            success: function (d) {
              //var d = JSON.parse(d);
              for (var i = 0; i < d.length; i++) {
                $('.flex-container').append("<div class='nopad'><label class='image-checkbox'><span class='star glyphicon glyphicon-star-empty'></span><input type='checkbox' name='image_check[]' value="+ d[i].id +" /></label><img alt='"+d[i].name+"' id='beer-img' class='img-responsive' src='"+d[i].image_url+"'/><h5 style='color:#23ef38; font-size:1.4em;'>"+d[i].name+"</h5><h6 style='font-size:1.1em;'>"+d[i].tagline+"</h6></div>");
                //$('.flex-container').append("<option data-img-src='"+ d[i].image_url +"' value='"+ d[i].id +"'>"+d[i].name+"</option>");
              }
              page += 1;
              data = data.concat(d);
              setTimeout(function() {
                working = false;
              }, 2000)
            },
            error: function (d) {
              console.log("Something not right!")
            }
          })
        }
      }
    })

    </script>
  </body>
</html>
