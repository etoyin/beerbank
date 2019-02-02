<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Favorites</title>
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
              <input id="search" type="text" name="search" value=""/>
            </div>
          </div>
        </div>
      </header>
      <br/>
      <main>
        <h2 class="text-center result-hidden" id="result"><?php echo $favorite  ?></h2>
        <div class="flex-container-2">

        </div>

      </main>
    </form>
  	<script src="<?=base_url()?>public/js/index.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        var result = $('#result').text();
        if (result != 'No Favorites selected') {
          $.ajax({
            type: "GET",
            url: "https://api.punkapi.com/v2/beers?ids="+result,
            processData: false,
            contentType: "application/json",
            data: '',
            success: function (d) {
              //var d = JSON.parse(d);
              for (var i = 0; i < d.length; i++) {
                $('.flex-container-2').append("<div class='nopad'><label class='image-checkbox'><span class='star glyphicon glyphicon-star'></span><input type='checkbox' name='image_check[]' checked value="+ d[i].id +" /></label><img alt='"+d[i].name+"' id='beer-img' class='img-responsive' src='"+d[i].image_url+"'/><h5 style='color: #23ef38;font-size:1.4em;'>"+d[i].name+"</h5><h6 style='font-size:1.1em;'>"+d[i].tagline+"</h6></div>");
                //$('.flex-container').append("<option data-img-src='"+ d[i].image_url +"' value='"+ d[i].id +"'>"+d[i].name+"</option>");
              }
            },
            error: function (d) {
              console.log("Something not right!")
            }

          });


        }
        else {
          $('#result').removeClass('result-hidden');
        }
        $(".flex-container-2").on('click', '.star.glyphicon', function() {
          $(this).toggleClass("glyphicon-star-empty glyphicon-star");

          $('input[type="checkbox"]').click(function(){
              if($(this).prop("checked") == false){

                // we can use this as a submit button to submit the form to the same location as the home page form.
                $('form').submit();
                  //console.log("Checkbox is unchecked."+ $(this).val()+ result_array);
              }

          });
        });


      })
    </script>
  </body>
</html>
