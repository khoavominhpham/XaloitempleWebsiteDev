<?php
/**
 * Template Name: This is the default HomePage
 *
 *Full-width , One columm
 *Big Caroussel Slideshow on top
 */
?>




<?php get_header( ); ?>

<!-- Carousel-->
	<div class="container border-frame">
		<!-- The Query and the Loop for featured posts -->
		<?php $the_query = new WP_Query(array(
												'post_type' => 'post',
												'category_name' => 'featured',
												'posts_per_page' => 3 )); ?>
	
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">

			<?php if ($the_query -> have_posts()) : while ($the_query -> have_posts())
				: $the_query -> the_post(); ?>

			<li data-target="#myCarousel" 
				data-slide-to="<?php echo $the_query -> current_post; ?>" 
				<?php if($the_query -> current_post == 0): ?>
				class="active"
				<?php endif; ?>></li>

			<?php endwhile; endif; ?>	
			</ol>

			<!--  Rewind the loop post in order to re use the 
			same query in different location -->
			<?php rewind_posts(); ?>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">

			<?php if ($the_query -> have_posts()) : 
					while ($the_query -> have_posts()) :
					$the_query -> the_post(); ?>

				<div class="item <?php if($the_query -> current_post == 0) : ?>active<?php endif; ?>">

					<?php 
						$thumbnail_id = get_post_thumbnail_id();
						$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, '', true );
						$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
					?>
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"
					</a>
					
					<div class="carousel-caption">
						<a href="<?php the_permalink(); ?>"><h3 class="subtitle"><?php the_title(); ?></h3></a>
					</div>
				</div>

			<?php endwhile; endif; ?>

				
			</div>
			
			<!-- Controls -->        
			<!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>  -->
			</div>
		
		</div>
	</header>

	 
	<!-- Main Section -->
	<section class="container white-background">
		<div class="row center-row">
			<div class="col-sm-4">
				<span class="col-icon flaticon-kamakura1"></span>
				<a href="#">
					<h3 class="title">Gautama Buddha</h3>
					<h4 class="subtitle">Đức Phật Thích Ca Mâu Ni</h4>
				</a>
				<blockquote class="blockquote-reverse">
  					<p>"No one saves us but ourselves. No one can and no one may. We ourselves must walk the path."</p>
  					<footer>Gautama Buddha</footer>
				</blockquote>
				<a type="button" class="btn btn-default read-btn"><span class="flaticon-relaxing4 btn-icon"></span>Read more</a>
			</div>
			<div class="col-sm-4">
				<span class="col-icon flaticon-religion78"></span>
				<a href="#">
					<h3 class="title">Buddhism</h3>
					<h4 class="subtitle">Đạo Phật</h4>
				</a>
				<p>Buddhism is a nontheistic religion or philosophy that encompasses a variety of traditions, beliefs and spiritual practices largely based on teachings attributed to Gautama Buddha, commonly known as the Buddha ("the awakened one").</p>
				<a type="button" class="btn btn-default read-btn"><span class="flaticon-relaxing4 btn-icon"></span>Read more</a>
			</div>
			<div class="col-sm-4">
				<span class="col-icon flaticon-monument39"></span>
				<h3 class="title">Sarira: Buddhist Human Pearls </h3>
				<h4 class="subtitle">Xá Lợi Phật </h4>
				<p>Buddhism is a nontheistic religion or philosophy that encompasses a variety of traditions, beliefs and spiritual practices largely based on teachings attributed to Gautama Buddha, commonly known as the Buddha ("the awakened one").</p>
				<a type="button" class="btn btn-default read-btn"><span class="flaticon-relaxing4 btn-icon"></span>Read more</a>
			</div>
		</div>
		
		<div class="row topBottom-border center-row">
			<div class="col-sm-6">
				<a href="#">
					<h2 class="title"><span class="flaticon-buddhism9 title-icon"></span>Xá Lợi temple</h2>
				</a>
				<p>Xá Lợi Temple is in the line of the tradition of Nga Mi Sơn Phật Gia Quyền.</p>
				<img class="img-responsive center-block" src="img/temple-front01.jpg">
				<p>In order to make this ancient tradition more accessible to many people, we have divided the practice into three different sections; a martial arts school, spiritual meditation practice, and educational community activities.Xá Lợi Temple is a peaceful place open to anyone for contemplation meditation, prayer, study and practice. </p>
	
				<a type="button" class="btn btn-default read-btn"><span class="flaticon-flowers56 btn-icon"></span>View Details</a>
			</div>
			<div class="col-sm-6 left-border">
					<a href="#">
					<h2 class="title"><span class="flaticon-pagoda1 title-icon "></span>Dharma Talks</h2>
					</a>
					<p>Pháp Thoại của Thượng Toạ Thích Bảo Thành,tại Tổ Đình Minh Đăng Quang,đêm 11 tháng 1 năm 2014</p>
					
					<a data-toggle="modal" href="#videoModal">
				       <img class="img-responsive center-block" src="img/dhamatalk-thumnail.png">
				    </a>
					<blockquote class="blockquote-reverse">
  						<p>"A Dharma talk must always be appropriate in two ways: it must accord perfectly with the spirit of the Dharma and it must also respond perfectly to the situation in which it is given. If it only corresponds perfectly with the teachings but does not meet the needs of the listeners, it's not a good Dharma talk; it's not appropriate."</p>
  						<footer>Zen Master Thich Nhat Hanh in <cite title="Source Title">Plum Village</cite></footer>
					</blockquote>
					<a type="button" class="btn btn-default read-btn"><span class="flaticon-flowers56 btn-icon"></span>View Details</a>
			</div>
		</div>

		<div class="row center-row">
			<div class="col-sm-4">
				<a href="#">
					<img class="img-responsive center-block img-circle" src="img/profile-masterBaoThank.png">
				</a>
				<h3 class="subtitle">Venerable <span class="title">Thích Bảo Thành</span></h3>
				<dl class="text-left">
					<dt>Description lists</dt>
  					<dd>A description list is perfect for defining terms.</dd>
  					<dt>Euismod</dt>
  					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.Donec id elit non mi porta gravida at eget metus.</dd>
  					<dt>Malesuada porta</dt>
  					<dd>Etiam porta sem malesuada magna mollis euismod</dd>
				</dl>
				<a type="button" class="btn btn-default read-btn"><span class="flaticon-religion40 btn-icon"></span>View Profile</a>
			</div>
			<div class="col-sm-4">
				<a href="#">
					<img class="img-responsive center-block img-circle" src="img/profile-SuCo.png">
				</a>
				<h3 class="subtitle">Master <span class="title">Sư Cô</span></h3>
				<dl class="text-left">
					<dt>Description lists</dt>
  					<dd>A description list is perfect for defining terms.</dd>
  					<dt>Euismod</dt>
  					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.Donec id elit non mi porta gravida at eget metus.</dd>
  					<dt>Malesuada porta</dt>
  					<dd>Etiam porta sem malesuada magna mollis euismod</dd>
				</dl>
				<a type="button" class="btn btn-default read-btn"><span class="flaticon-religion40 btn-icon"></span>View Profile</a>
			</div>
			<div class="col-sm-4">
				<a href="#">
					<img class="img-responsive center-block img-circle" src="img/profile-masterBaoMinh.png">
				</a>
				<h3 class="subtitle">Master <span class="title">Thích Bảo Minh</span></h3>
				<dl class="text-left">
					<dt>Description lists</dt>
  					<dd>A description list is perfect for defining terms.</dd>
  					<dt>Euismod</dt>
  					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.Donec id elit non mi porta gravida at eget metus.</dd>
  					<dt>Malesuada porta</dt>
  					<dd>Etiam porta sem malesuada magna mollis euismod</dd>
				</dl>
				<a type="button" class="btn btn-default read-btn"><span class="flaticon-religion40 btn-icon"></span>View Profile</a>
			</div>
		</div>		
	 </section>
   <!-- Modal  for Donation -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Donate to Xa Loi Temple</h4>
				</div>

				<div class="modal-body">
					<form class="form-horizontal">
						<h4>Please fill out this form: </h4>
						<div class="form-group">
							<label for="inputName" class="col-sm-2 control-label">Name: </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputName" placeholder="First Middle Last">
							</div>
						</div>
						<div class="form-group">
    					<label for="inputEmail" class="col-sm-2 control-label">Email: </label>
    					<div class="col-sm-8">
      				<input type="email" class="form-control" id="inputEmail" placeholder="jane.doe@example.com">
    					</div>
  					</div>
  					<div class="form-group">
    					<label class="col-sm-2 control-label" for="inputAmount">Amount: </label>
    					<div class="col-sm-8">
    						<div class="input-group">
    					    <div class="input-group-addon">$</div>
    					    <input type="text" class="form-control" id="inputAmount" placeholder="100">
    					    <div class="input-group-addon">.00</div>
    					  </div>
    					</div>
  					</div>
					</form>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-success">Donate</button>
				</div>
			</div>
		</div>
	</div>   
	<!-- Video Modal -->
    <div class="modal fade" id="videoModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Pháp Thoại của Thượng Toạ Thích Bảo Thành</h4>
          </div>
          <div class="modal-body">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/D6GpV9VhO1w" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>    
    <!-- End Video Modal -->

<?php get_footer( ); ?>