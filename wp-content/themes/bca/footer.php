<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package bullettshop
 */
?>

  <?php atr_footer_pre(); ?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div id="back-to-top-button" class="row text-center" style="margin-bottom:1em; opacity: .5;">
      <a href="#back-top">▲ Back to Top</a>
    </div>
    <div class="foot">
      <div class="logocase">
        <a href="http://bullettmedia.com">
          <div class="logo"></div>
        </a>
        <a href="http://shop.bullettmedia.com">
          <div class="shoplogo" style="background: url('<?php the_field('shoplogo','options')?>')"></div>
        </a>
      </div>
    </div>


  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<script>

  function hideSlider(){
    if (jQuery('#slide-case').css("visibility", "visible")){
     jQuery('#slide-case').slideUp();
    }
  };
  function showSlider(){
    if (jQuery('#slide-case').css("visibility", "hidden")){
     jQuery('#slide-case').slideDown();
    }
  };

  function hashCheck(){
    if(location.hash == '#photography'){
      jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){
        jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope({ filter: '.photography' });
      });
    }
    else if(location.hash == '#video'){
      jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){
        jQuery('#isotopin').isotope('shuffle').isotope({ filter: '.short-films, .fashions, .commercials' });
      } );
    }
    else if(location.hash == '#short-film'){
      jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){
        jQuery('#isotopin').isotope('shuffle').isotope({ filter: '.short-films' });
      } );
    }
    else if(location.hash == '#commercial'){
      jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){
        jQuery('#isotopin').isotope('shuffle').isotope({ filter: '.commercials' });
      } );
    }
    else if(location.hash == '#fashion'){
      jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){
        jQuery('#isotopin').isotope('shuffle').isotope({ filter: '.fashions' });
      } );
    }
    else if(location.hash == '#design'){
      jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){
        jQuery('#isotopin').isotope('shuffle').isotope({ filter: '.designs' });
      });
    }
    else if(location.hash == '#interactive'){
      jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){
        jQuery('#isotopin').isotope('shuffle').isotope({ filter: '.interactive' });
      });
    }
    else if(location.hash == '#360media'){
      jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){
        jQuery('#isotopin').isotope('shuffle').isotope({ filter: '.360_media' });
      });
    } 
    (function($){

      var circle = $('.site-title');
      var circleCenterX = circle.width() / 2;
      var circleCenterY = circle.height() / 2;
      var offset = circle.offset();

      function mouse(e) {

            var center_x = (offset.left) + ( circleCenterX );
            var center_y = (offset.top) + ( circleCenterY );
            var mouse_x = e.pageX; 
            var mouse_y = e.pageY*25;

            var radians = 2*Math.atan2(mouse_x - center_x, center_y - mouse_y);

            circle.css('-moz-transform', 'rotate('+radians+'rad)');
            circle.css('-webkit-transform', 'rotate('+radians+'rad)');
            circle.css('-o-transform', 'rotate('+radians+'rad)');
            circle.css('-ms-transform', 'rotate('+radians+'rad)');

          }

      window.addEventListener('mousemove', mouse, false);

    $(window).load(function(){      

        $(function(){
        
          var $container = $('#isotopin'),
              $photobutton = $('.menu-item a[href^="<?php bloginfo('url') ?>/#photography"]'),
              $videobutton = $('.menu-item a[href^="<?php bloginfo('url') ?>/#video"]'),
              $shortfilmbutton = $('.menu-item a[href^="<?php bloginfo('url') ?>/#short-film"]'),
              $commercialbutton = $('.menu-item a[href^="<?php bloginfo('url') ?>/#commercial"]'),
              $fashionbutton = $('.menu-item a[href^="<?php bloginfo('url') ?>/#fashion"]'),
              $designbutton = $('.menu-item a[href^="<?php bloginfo('url') ?>/#design"]'),
              $interactivebutton = $('.menu-item a[href^="<?php bloginfo('url') ?>/#interactive"]'),
              $360mediabutton = $('.menu-item a[href^="<?php bloginfo('url') ?>/#360media"]'),
              $homebutton = $('a.logo-head');

            function forceReload( contentsReload ){
              jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){
                contentsReload();
              });
            }

            function photographyLoad(){
              jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope({ filter: '.photography' });
            }

            function videoLoad(){
              jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope({ filter: '.short-films, .fashions, .commercials'  });
            }

            function shortfilmLoad(){
              jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope({ filter: '.short-films' });
            }

            function commercialLoad(){
              jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope({ filter: '.commercials' });
            }

            function fashionLoad(){
              jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope({ filter: '.fashions' });
            }

            function designLoad(){
              jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope({ filter: '.designs' });
            }

            function interactiveLoad(){
              jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope({ filter: '.interactives' });
            }

            function package360Load(){
              jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope({ filter: '.360_media' });
            }

            function homeLoad(){
              jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope({ filter: '' });
            }

            $container.isotope({
              itemSelector : '.element',
              masonry : {
                columnWidth : 120
              },
              masonryHorizontal : {
                rowHeight: 120
              },
              cellsByRow : {
                columnWidth : 240,
                rowHeight : 240
              },
              cellsByColumn : {
                columnWidth : 240,
                rowHeight : 240
              }
            });  
            if(location.hash == '' || location.hash == '#'){
              jQuery('#isotopin').isotope('shuffle');
            }

            $photobutton.click( function(){
              hideSlider();
              photographyLoad();
              });

            $videobutton.click( function(){
              hideSlider();
              videoLoad();
            });

            $shortfilmbutton.click( function(){
              hideSlider();
              shortfilmLoad();
            });

            $commercialbutton.click( function(){ 
              hideSlider();
              commercialLoad();
            });

            $fashionbutton.click( function(){
              hideSlider();
              fashionLoad();
            });

            $designbutton.click( function(){ 
              hideSlider();
              designLoad();
            });

            $interactivebutton.click( function(){
              hideSlider();
              interactiveLoad();
            });

            $360mediabutton.click( function(){ 
              hideSlider();
              package360Load();
            });

            $homebutton.click( function(){
              if(!location.hash == ''){
                showSlider();
                jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope( 'reLayout', function(){
                  jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){});
                });
              } else {
                hideSlider();
                jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope( 'reLayout', function(){
                  jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){});
                });
              }

            });

        });
      
      });

    }(jQuery));
  }
  this.hashCheck = hashCheck();
  window.onload = window.hashCheck;


</script>
</body>
</html>