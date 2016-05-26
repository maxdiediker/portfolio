$(document).ready(function(){
  // $('.shad').hide();
  // $('#sun').hide();
  // $('.shad').fadeIn(2000);
  // $("#tools").hide();



$("#sun").animate({
    "top": "+=250px",
    "opacity": ".5"
    },
        2500,function(){
          $("#sun").animate({
              "opacity": "1"
            },1000, function(){
                $(".shad").animate({
                    "opacity": "1"
                  },1000);
              });
    });


// start of dev - helper

    // var three = $("#three");
    var startwidth = $(window).width();
    $( ".width" ).html( startwidth);

    // turn on dev tools
    // $("#intro").click(function(){
    //   $("#tools").show();
    // });


    $( window ).resize(function() {
      $( ".width" ).html( $( window ).width());
    });
 });
