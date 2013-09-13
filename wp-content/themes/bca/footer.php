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

	<footer id="colophon" class="site-footer row" role="contentinfo">
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
              $photobutton = $('.menu-item a[href^="http://bca:4421/#photography"]'),
              $videobutton = $('.menu-item a[href^="http://bca:4421/#video"]'),
              $shortfilmbutton = $('.menu-item a[href^="http://bca:4421/#short-film"]'),
              $commercialbutton = $('.menu-item a[href^="http://bca:4421/#commercial"]'),
              $fashionbutton = $('.menu-item a[href^="http://bca:4421/#fashion"]'),
              $designbutton = $('.menu-item a[href^="http://bca:4421/#design"]'),
              $interactivebutton = $('.menu-item a[href^="http://bca:4421/#interactive"]'),
              $360mediabutton = $('.menu-item a[href^="http://bca:4421/#360media"]');

          $container.imagesLoaded( function(){

          // initialize isotope

          $container.isotope({
            masonry: {
              columnWidth: 20
            },
            sortBy: 'number',
            getSortData: {
              number: function( $elem ) {
                var number = $elem.hasClass('element') ? 
                  $elem.find('.number').text() :
                  $elem.attr('data-number');
                return parseInt( number, 10 );
              },
              alphabetical: function( $elem ) {
                var name = $elem.find('.name'),
                    itemText = name.length ? name : $elem;
                return itemText.text();
              }
            }
          });
        
          
          var $optionSets = $('#options .option-set'),
              $optionLinks = $optionSets.find('a');

          $optionLinks.click(function(){
            var $this = $(this);
            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
              return false;
            }
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');
      
            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[ key ] = value;
            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
              // changes in layout modes need extra logic
              changeLayoutMode( $this, options )
            } else {
              // otherwise, apply new options
              $container.isotope( options );
            }
            
            return false;
          });    
          
          $photobutton.click( function(){
            hideSlider();
            $container.isotope({ filter: '.photography' });
            return false;
          } );

          $videobutton.click( function(){
            hideSlider();
            $container.isotope({ filter: '.videos' });
            return false;
          } );

          $shortfilmbutton.click( function(){
            hideSlider();
            $container.isotope({ filter: '.short-film' });
            return false;
          } );

          $commercialbutton.click( function(){
            hideSlider();
            $container.isotope({ filter: '.commercial' });
            return false;
          } );

          $fashionbutton.click( function(){
            hideSlider();
            $container.isotope({ filter: '.fashion' });
            return false;
          } );

          $designbutton.click( function(){
            hideSlider();
            $container.isotope({ filter: '.design' });
            return false;
          } );

          $interactivebutton.click( function(){
            hideSlider();
            $container.isotope({ filter: '.interactives' });
            return false;
          } );

          $360mediabutton.click( function(){
            hideSlider();
            $container.isotope({ filter: '.360_media' });
            return false;
          } );
          
        
        });

      });
    
    });

  }(jQuery));

  function hideSlider(){
    if (jQuery('#slide-case').css("visibility", "hidden")){
      jQuery('#slide-case').slideUp();
    }
  };

  
</script>

</body>
</html>