<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beer Bank</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/index.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script-->
    <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
		<script src="<?=base_url()?>public/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?=base_url()?>public/js/index.js" type="text/javascript"></script>
    <script src="<?=base_url()?>public/js/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="<?=base_url()?>public/js/jquery-1.7.js" type="text/javascript"></script>



  </head>
  <body class="container-fluid">
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
            <h2>The Drink Bank</h2>
            <h4>Find your favorite bear here</h4>
            <div class="search-div">
              <input id="search" type="text" name="search" value=""/>
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
  </body>
</html>
