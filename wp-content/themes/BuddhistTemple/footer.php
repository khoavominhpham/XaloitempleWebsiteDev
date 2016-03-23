<!-- Footer -->
	<footer class="main-footer">
		<nav class="navbar navbar-default">
  			<div class="container">
    			<div class="row">
					<div class="col-sm-4">
                		<a class="navbar-brand" href="#">
							<img src="img/logo1-xs.png" class="hidden-xs">
						</a>
                  		<h3><?php bloginfo('name' ); ?></h3>
                		<p><?php bloginfo('description' ); ?></p>
                  		
                    <p>
                      <span class="glyphicon glyphicon-envelope">
                      <?php bloginfo('admin_email' );?>
                    </p>

                    <p class="copyright">&copy;<?php bloginfo('name' ); ?> - <?php echo date('Y'); ?></p>
                	</div>
                	
                	<div class="col-sm-4">
                  		<ul class="link-list">
                    	<li class="heading"><a href="#">Start learning free &rarr;</a></li>
                    	<li><a href="#">About Treehouse</a></li>
                    	<li><a href="#">Treehouse Blog</a></li>
                    	<li><a href="#">Treehouse Shop</a></li>
                    	<li><a href="#">Privacy Policy</a></li>
                    	<li><a href="#">Terms &amp; Conditions</a></li>
                  		</ul>            
                	</div>
                
                	<div class="col-sm-4">
                  		<ul class="link-list">
                    		<li class="heading"><a href="#">Get in touch &rarr;</a></li>
                    		<li><a href="mailto:hi@teamtreehouse.com">hi@teamtreehouse.com</a></li>
                    		<li>1(888)555-1234</li>
                  		</ul>
                	</div>
            	</div>
  			</div>
		</nav>
 	</footer>
    <!-- End footer -->


	 <?php wp_footer(); ?>
	</body>
</html>