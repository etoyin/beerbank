$(document).ready(function() {
  $("#favorite").click(function() {
      //$(".flex-container").
      var favorite = [];
      $.each($("input[name='image_check']:checked"), function(){
          favorite.push($(this).val());
      });
      $.ajax({
        type: "GET",
        url: "https://api.punkapi.com/v2/beers?ids="+favorite.join("|"),
        processData: false,
        contentType: "application/json",
        data: '',
        success: function (d) {
          alert("My favourite sports are: " + d);
          window.location = 'favorite.html';
          for (var i = 0; i < d.length; i++) {
            $('.flex-container-2').append("<div class='nopad'><label class='image-checkbox'><span class='star glyphicon glyphicon-star-empty'></span><img class='img-responsive' src='"+d[i].image_url+"'/><input type='checkbox' name='image_check' value="+ d[i].id +" /><h5>"+d[i].name+"</h5><h6>"+d[i].tagline+"</h6></label></div>");
            //$('.flex-container').append("<option data-img-src='"+ d[i].image_url +"' value='"+ d[i].id +"'>"+d[i].name+"</option>");
          }
        },
        error: function (d) {
          console.log("Something not right!")
        }
      })

  })

})
