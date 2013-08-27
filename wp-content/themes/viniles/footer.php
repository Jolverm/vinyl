<footer>
   
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.history.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/lightbox-2.6.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/js-url.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquerypp.custom.js"></script>
		
<script>
    if (typeof jQuery == 'undefined'){
       document.write(unescape('%3Cscript src="scripts/jquery-min.js" %3E%3C/script%3E'));
    }
</script>


  <script type="text/javascript">
           $(function() {
               $('#menu a').stop().animate({'marginLeft':'-85px'},1000);

               $('#menu > li').hover(
                   function () {
                       $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
                   },
                   function () {
                       $('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
                   }
               );
           });
</script>

</footer>


		
</body>
</html>

















 