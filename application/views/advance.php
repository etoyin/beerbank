<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Favorites</title>
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
      <header>
        <div class="navb">
          <a href="<?= site_url('/') ?>">Home</a>
        </div>
        <div class="head">
          <div class="text-center">
            <h2>The Drink Bank</h2>
            <h4>Find your favorite bear here</h4>
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
                      <input type="number" class="date" name="before_year" id="before_year" value="">
                    </div>
                    <div class="col-xs-6">
                      <input type="number" class="date" name="before_month" id="before_month" value="">
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
                      <input type="number" name="after_year" class="date" id="after_year" value="">
                    </div>
                    <div class="col-xs-6">
                      <input type="number" name="after_month" class="date" id="after_month" value="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" id="advance_search" class="btn btn-primary" name="button">Search</button>
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
            url: "https://api.punkapi.com/v2/beers?="+result,
            processData: false,
            contentType: "application/json",
            data: '',
            success:
          })
        })
      })
    </script>
  </body>
</html>
