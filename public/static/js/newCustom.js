/*--------------------
    * OwlSlider
    ----------------------*/

var owlslider = $("div.owl-carousel");
if (owlslider.length > 0) {
    owlslider.each(function () {
        var $this = $(this),
            $items = ($this.data('items')) ? $this.data('items') : 1,
            $loop = ($this.attr('data-loop')) ? $this.data('loop') : true,
            $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : false,
            $navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
            $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
            $autospeed = ($this.attr('data-autospeed')) ? $this.data('autospeed') : 5000,
            $smartspeed = ($this.attr('data-smartspeed')) ? $this.data('smartspeed') : 1000,
            $autohgt = ($this.data('autoheight')) ? $this.data('autoheight') : false,
            $CenterSlider = ($this.data('center')) ? $this.data('center') : false,
            $space = ($this.attr('data-space')) ? $this.data('space') : 30;

        $(this).owlCarousel({
            loop: $loop,
            items: $items,
            responsive: {
                0: { items: $this.data('xx-items') ? $this.data('xx-items') : 1 },
                480: { items: $this.data('xs-items') ? $this.data('xs-items') : 1 },
                768: { items: $this.data('sm-items') ? $this.data('sm-items') : 1 },
                980: { items: $this.data('md-items') ? $this.data('md-items') : 1 },
                1200: { items: $items }
            },
            dots: $navdots,
            autoplayTimeout: $autospeed,
            smartSpeed: $smartspeed,
            autoHeight: $autohgt,
            center: $CenterSlider,
            margin: $space,
            nav: $navarrow,
            navText: ["<i class='ti-arrow-left'></i>", "<i class='ti-arrow-right'></i>"],
            autoplay: $autoplay,
            autoplayHoverPause: true
        });
    });
};


    /*--------------------
        * Type It
    ----------------------*/
    mTypeIt = function() {
                  new TypeIt('#type-it', {
                  speed: 200,
                  loop:true,
                  strings: [
                    'Designer',
                    'Developer'
                  ],
                  breakLines: false
              }); 
          };
      mTypeIt();
      
  