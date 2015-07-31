
		<footer>

		</footer>

<script type="text/javascript">
 	$(document).ready(function() {
 		$('.fancybox').fancybox();

      $('.flexslider').flexslider({
        animation: "fade",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });

    });


  $(window).load(function() {

    $(function(){

      var $container = $('#container');

      $container.isotope({
        itemSelector : '.work-item'
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
    });

});
</script>


	<!-- JavaScript -->
	<script src="/_assets/js/isotope.jquery.min.js"></script>
  <script src="/_assets/js/main.js"></script>
	<script src="/_assets/js/flexslider.jquery.js"></script>
	<script src="/_assets/js/fancybox.jquery.js"></script>

	</body>
</html>