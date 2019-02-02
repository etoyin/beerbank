var page = 1;
var working = false;
//I dont want to make several api calls
var data = [];
$(document).ready(function(){
  $.ajax({
    type: "GET",
    url: "https://api.punkapi.com/v2/beers?page="+page,
    processData: false,
    contentType: "application/json",
    data: '',
    success: function (d) {
      //var d = JSON.parse(d);
      for (var i = 0; i < d.length; i++) {
        $('.flex-container').append("<div class='nopad'><label class='image-checkbox'><span class='star glyphicon glyphicon-star-empty'></span><input type='checkbox' name='image_check[]' value="+ d[i].id +" /></label><img id='beer-img' alt='"+d[i].name+"' class='img-responsive' src='"+d[i].image_url+"'/><h5 style='color:#23ef38; font-size:1.4em;'>"+d[i].name+"</h5><h6 style='font-size:1.1em;'>"+d[i].tagline+"</h6></div>");
        //$('.flex-container').append("<option data-img-src='"+ d[i].image_url +"' value='"+ d[i].id +"'>"+d[i].name+"</option>");
      }
      page += 1;
      data = data.concat(d);

    },
    error: function (d) {
      console.log("Something not right!")
    }
  });

  $(".flex-container").on('click', '.star.glyphicon', function() {
    $(this).toggleClass("glyphicon-star glyphicon-star-empty");
  });

  $('#search').on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".flex-container .nopad, .flex-container-2 .nopad").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  //when I click on the image, it should bring a popup
  $('.flex-container').on('click', 'img', function() {
    var index = data.findIndex(x=> x.name == $(this).attr('alt'));
    //alert('yeshhhhhh'+' '+index);
    $('.overlay').addClass('active');
    var headpopup = "<p style='color:#23ef38; font-size: 2.5vw'>"+data[index].name+"</p>";
    var tagline = "<p style='font-size: 1.5vw'>"+data[index].tagline+"</p>";
    var servedWith = "<ul style='font-size: 1.3vw;'><li>"+data[index].food_pairing[0]+"</li><li>"+data[index].food_pairing[1]+"</li><li>"+data[index].food_pairing[2]+"</li></ul>";
    var description = "<p style='font-size: 1.3vw;'>"+data[index].description+"</p>";
    var specs = "<p style='font-size: 1.3vw'><strong>IBU</strong>: "+data[index].ibu+"  <strong>ABV</strong>: "+data[index].abv+"  <strong>EBC</strong>: "+data[index].ebc+"</p>";
    var drink_img = "<div class='col-xs-3'><img class='img-responsive' id='popup-img' src='"+data[index].image_url+"'/></div>";
    var about_pop = "<div class='about_pop col-xs-9'>"+headpopup+tagline+specs+description+"<p style='color:#23ef38;'><strong>Best served with: </strong></p>"+servedWith+"</div>";
    $('.selected-img').append(drink_img+about_pop);

    var yeast = data[index].ingredients.yeast.split(" ").join("_");
    $.ajax({
      type: "GET",
      url: "https://api.punkapi.com/v2/beers?yeast="+yeast,
      processData: false,
      contentType: "application/json",
      data: '',
      success: function(d) {
        for (var i = 0; i < 3; i++) {
          $('.alike-row').append('<div id="alike" class="text-center col-xs-3"><img id="beer-img" class="img-responsive" src="'+d[i].image_url+'"/><p style="font-size: 1.2em">'+d[i].name+'</p></div>');
          //alert(alike[i].name);
        }
      },
      error: function() {
        console.log("There's an error!");
      }
    });


  });


  $('.close').on('click', function(){
    $('.overlay').removeClass('active');
    $('.selected-img, .alike-row').empty();
  });

  $('#favorite').click(function() {
    $('form').submit();
  });
  $(document).ajaxStart(function(){
    $(".waitLoader").css("display", "block");
  });
  $(document).ajaxComplete(function(){
    $(".waitLoader").css("display", "none");
  });

});
