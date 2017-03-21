$(document).ready(function(){

  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 60});

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 600, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });

    } // End if

  });

  //animate interests on hover (zoom-in like)
  $(".interests p").hover( 
    function() {
      $(this).animate({fontSize: '1.1em'}, "200");
    }, 
    function() {
      $(this).animate({fontSize: '1em'}, "200");
  });

  //Animate section titles on hover (slide left-right)
  $(".page-header .align-left").hover(
    function(){
      $(this).animate({left : "25px"},'slow');
    },
    function(){
      $(this).animate({left : "-=25px"}, 'slow');
  });

  //Animate section titles on hover (slide right-left)
  $(".page-header .align-right").hover(
    function(){
      $(this).animate({left : "-=25px"},'slow');
    },
    function(){
      $(this).animate({left : "+=25px"}, 'slow');
  });

});