<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Advance Search</title>
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


      <header>
        <div class="navb">
          <a href="<?= site_url('/') ?>">Home</a>
        </div>
        <div class="head">
          <div class="text-center">
            <h2>The Beer Bank</h2>
            <h4>Find your favorite beer here</h4>
          </div>
        </div>
      </header>
      <br/>
      <main>
        <div class="form_advance">
          <div class="row">
            <div class="col-xs-6">
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <label for="">Max IBU</label>
                </div>
                <div class="col-md-8 col-xs-12">
                  <input type="number" name="max_ibu" id="max_ibu" value="">
                </div>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <label for="">Min IBU</label>
                </div>
                <div class="col-xs-12 col-md-8">
                  <input type="number" name="min_ibu" id="min_ibu" value="">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6">
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <label for="">Max ABV</label>
                </div>
                <div class="col-xs-12 col-md-8">
                  <input type="number" name="max_abv" id="max_abv" value="">
                </div>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <label for="">Min ABV</label>
                </div>
                <div class="col-xs-12 col-md-8">
                  <input type="number" name="min_abv" id="min_abv" value="">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <label for="">Max EBC</label>
                </div>
                <div class="col-xs-12 col-md-8">
                  <input type="number" name="max_ebc" id="max_ebc" value="">
                </div>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <label for="">Min EBC</label>
                </div>
                <div class="col-xs-12 col-md-8">
                  <input type="number" name="min_ebc" id="min_ebc" value="">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6">
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <label for="">Brewed Before</label>
                </div>
                <div class="col-xs-12 col-md-8">
                  <div class="row">
                    <div class="col-xs-6">
                      <input type="number" class="date" min="1900" max="2019" maxlength="4" placeholder="YYYY" name="before_year" id="before_year" value="">
                    </div>
                    <div class="col-xs-6">
                      <input type="number" class="date" min="1" max="12" maxlength="4" name="before_month" id="before_month" placeholder="MM" value="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <label for="">Brewed After</label>
                </div>
                <div class="col-xs-12 col-md-8">
                  <div class="row">
                    <div class="col-xs-6">
                      <input type="number" name="after_year" maxlength="4" class="date" max="2019" min="1900" placeholder="YYYY" id="after_year" value="">
                    </div>
                    <div class="col-xs-6">
                      <input type="number" maxlength="4" max="12" min="1" placeholder="MM" name="after_month" class="date" id="after_month" value="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" id="advance_search" class="btn btn-primary" name="button">Search</button>
        </div>

        <div class="flex-container-3">
          <!--div class="nopad">
            <label class="image-checkbox">
              <img src="https://images.punkapi.com/v2/2.png" alt="fghjhgfg"/>
              <input type="checkbox" name="" value=""/>
              <i class="fa fa-check hidden"></i>
            </label>
          </div-->

        </div>
      </main>
  	<script src="<?=base_url()?>public/js/index.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#advance_search').click(function(){
          var max_ibu = $('#max_ibu').val();
          var min_ibu = $('#min_ibu').val();
          var max_abv = $('#max_abv').val();
          var min_abv = $('#min_abv').val();
          var max_ebc = $('#max_ebc').val();
          var min_ebc = $('#min_ebc').val();
          var before_year = $('#before_year').val();
          var after_year = $('#after_year').val();
          var before_month = $('#before_month').val();
          var after_month = $('#after_month').val();

          $.ajax({
            type: "GET",
            url: "https://api.punkapi.com/v2/beers?brewed_before="+before_month+"-"+before_year+"&brewed_after="+after_month+"-"+after_year+"&abv_gt="+min_abv+"&abv_lt="+max_abv+"&ibu_gt="+min_ibu+"&ibu_lt="+max_ibu+"&ebc_gt="+min_ebc+"&ebc_lt="+max_ebc,
            processData: false,
            contentType: "application/json",
            data: '',
            success: function (d) {
              for (var i = 0; i < d.length; i++) {
                $('.flex-container-3').append("<div class='nopad'><label class='image-checkbox'><span class='star glyphicon glyphicon-star-empty'></span><input type='checkbox' name='image_check[]' value="+ d[i].id +" /></label><img id='beer-img' alt='"+d[i].name+"' class='img-responsive' src='"+d[i].image_url+"'/><h5 style='font-size:1.4em; color:#23ef38;'>"+d[i].name+"</h5><h6 style='font-size:1.1em;'>"+d[i].tagline+"</h6></div>");

              }
            },

          });


        })
      })
    </script>
  </body>
</html>
