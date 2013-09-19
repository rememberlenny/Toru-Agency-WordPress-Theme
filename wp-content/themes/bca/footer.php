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
    if (jQuery('#slide-case').css("visibility", "hidden")){
     jQuery('#slide-case').slideUp();
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
        jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope({ filter: '.designs' });
      });
    }
    else if(location.hash == '#interactive'){
      jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){
        jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope({ filter: '.interactive' });
      });
    }
    else if(location.hash == '#360media'){
      jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){
        jQuery('#isotopin').isotope({ filter: '' }).isotope('shuffle').isotope({ filter: '.360_media' });
      });
    } 
    (function($){

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

            $photobutton.click( function(){
              hideSlider();
              if(!location.hash == ''){
                forceReload(photographyLoad);
              } else{
                photographyLoad();
              }
              return false;
              });

            $videobutton.click( function(){
              hideSlider();
              if(!location.hash == ''){
                forceReload(videoLoad);
              } else{
                videoLoad();
              }
              return false;
            });

            $shortfilmbutton.click( function(){
              hideSlider();
              if(!location.hash == ''){
                forceReload(shortfilmLoad);
              } else{
                shortfilmLoad();
              }
              return false;
            });

            $commercialbutton.click( function(){ 
              hideSlider();
              if(!location.hash == ''){
                forceReload(commercialLoad);
              }  else{
                commercialLoad();
              }
              return false;
            });

            $fashionbutton.click( function(){
              hideSlider();
              if(!location.hash == ''){
                forceReload(fashionLoad);
              } else{
                fashionLoad();
              }
              return false;
            });

            $designbutton.click( function(){ 
              hideSlider();
              if(!location.hash == ''){
                forceReload(designLoad);
              } else{
                designLoad();
              }
              return false;
            });

            $interactivebutton.click( function(){
              hideSlider();
              if(!location.hash == ''){
                forceReload(interactiveLoad);
              } else{
                interactiveLoad();
              }
              return false;
              });

            $360mediabutton.click( function(){ 
              hideSlider();
              if(!location.hash == ''){
                forceReload(package360Load);
              } else{
                package360Load();
              }
              return false;
              });

            $homebutton.click( function(){
              jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){
                jQuery('#isotopin').isotope({ filter: '' }).isotope( 'reLayout', function(){});
              });
              return false;
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