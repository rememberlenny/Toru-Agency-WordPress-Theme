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
      <a href="http://bullettmedia.com">
        <div class="logo"></div>
      </a>
    </div>
    <div class="row text-center">
      <ul class="inline-list text-center privacy-links" style="">
        <li>
          <a href="http://shop.bullettmedia.com/privacy-policy/">Privacy</a>
        </li>
        <li>|</li>
        <li>
          <a href="http://shop.bullettmedia.com/store-policy/">Store Policy</a>
        </li>
      </ul>
    </div>
    

  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<script>



  function hideSlider(){
    if (jQuery('#slide-case').css("visibility", "hidden")){
     // jQuery('#slide-case').slideUp();
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
    else {

(function($){


    $(window).load(function(){      

        $.Isotope.prototype._getCenteredMasonryColumns = function() {
          this.width = this.element.width();
          
          var parentWidth = this.element.parent().width();
          
                        // i.e. options.masonry && options.masonry.columnWidth
          var colW = this.options.masonry && this.options.masonry.columnWidth ||
                        // or use the size of the first item
                        this.$filteredAtoms.outerWidth(true) ||
                        // if there's no items, use size of container
                        parentWidth;
          
          var cols = Math.floor( parentWidth / colW );
          cols = Math.max( cols, 1 );

          // i.e. this.masonry.cols = ....
          this.masonry.cols = cols;
          // i.e. this.masonry.columnWidth = ...
          this.masonry.columnWidth = colW;
        };
        
        $.Isotope.prototype._masonryReset = function() {
          // layout-specific props
          this.masonry = {};
          // FIXME shouldn't have to call this again
          this._getCenteredMasonryColumns();
          var i = this.masonry.cols;
          this.masonry.colYs = [];
          while (i--) {
            this.masonry.colYs.push( 0 );
          }
        };

        $.Isotope.prototype._masonryResizeChanged = function() {
          var prevColCount = this.masonry.cols;
          // get updated colCount
          this._getCenteredMasonryColumns();
          return ( this.masonry.cols !== prevColCount );
        };
        
        $.Isotope.prototype._masonryGetContainerSize = function() {
          var unusedCols = 0,
              i = this.masonry.cols;
          // count unused columns
          while ( --i ) {
            if ( this.masonry.colYs[i] !== 0 ) {
              break;
            }
            unusedCols++;
          }
          return {
            height : Math.max.apply( Math, this.masonry.colYs ),
            // fit container to columns that have been used;
            width : (this.masonry.cols - unusedCols) * this.masonry.columnWidth
          };
        };

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

              // initialize isotope

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
              masonry: {
                columnWidth: 20
              }
            });  

            $photobutton.click( function(){
              hideSlider();
              if(!location.hash == ''){
                forceReload(photographyLoad);
              } else{
                photographyLoad();
              }
              });

            $videobutton.click( function(){
              hideSlider();
              if(!location.hash == ''){
                forceReload(videoLoad);
              } else{
                videoLoad();
              }
            });

            $shortfilmbutton.click( function(){
              hideSlider();
              if(!location.hash == ''){
                forceReload(shortfilmLoad);
              } else{
                shortfilmLoad();
              }
            });

            $commercialbutton.click( function(){ 
              hideSlider();
              if(!location.hash == ''){
                forceReload(commercialLoad);
              }  else{
                commercialLoad();
              }
            });

            $fashionbutton.click( function(){
              hideSlider();
              if(!location.hash == ''){
                forceReload(fashionLoad);
              } else{
                fashionLoad();
              }
            });

            $designbutton.click( function(){ 
              hideSlider();
              if(!location.hash == ''){
                forceReload(designLoad);
              } else{
                designLoad();
              }
            });

            $interactivebutton.click( function(){
              hideSlider();
              if(!location.hash == ''){
                forceReload(interactiveLoad);
              } else{
                interactiveLoad();
              }
              });

            $360mediabutton.click( function(){ 
              hideSlider();
              if(!location.hash == ''){
                forceReload(package360Load);
              } else{
                package360Load();
              }
              });

            $homebutton.click( function(){
              hideSlider();
              homeLoad();
            });

        });
      
      });

    }(jQuery));

    }
  }
  this.hashCheck = hashCheck();
  window.onload = window.hashCheck;
</script>
</body>
</html>