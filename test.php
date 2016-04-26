<input type="hidden" name="post_type[]" value="articles" />
<input type="hidden" name="post_type[]" value="post" />
<input type="hidden" name="post_type[]" value="videos" /> 
<input type="hidden" name="post_type[]" value="books" />  

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
<input type="text" name="s" id="s" <?php if(is_search()) { ?>value="<?php the_search_query(); ?>" <?php } else { ?>value="Enter keywords &hellip;" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"<?php } ?> /><br />
	
<?php $query_types = get_query_var('post_type'); ?>
    
<input type="checkbox" name="post_type[]" value="articles" <?php if (in_array('articles', $query_types)) { echo 'checked="checked"'; } ?> /><label>Articles</label>
<input type="checkbox" name="post_type[]" value="post" <?php if (in_array('post', $query_types)) { echo 'checked="checked"'; } ?> /><label>Blog</label>
<input type="checkbox" name="post_type[]" value="books" <?php if (in_array('books', $query_types)) { echo 'checked="checked"'; } ?> /><label>Books</label>
<input type="checkbox" name="post_type[]" value="videos" <?php if (in_array('videos', $query_types)) { echo 'checked="checked"'; } ?> /><label>Videos</label>
    
<input type="submit" id="searchsubmit" value="Search" />
</form>

<table class="table-custom">
	<tbody>

		<tr>
		<td>PROPERTY TYPE:</td><td><?php echo get_the_term_list( $post->ID, 'property-type', '<li class="area_item"> ', ', ', '</li>' ) ?></td>
		<td>AREA:</td><td><?php echo get_the_term_list( $post->ID, 'area', '<li class="area_item"> ', ', ', '</li>' ) ?></td>
		<td>TENURE:</td><td><?php echo get_the_term_list( $post->ID, 'tenure', '<li class="area_item"> ', ', ', '</li>' ) ?></td>
		</tr>

		<tr>
		<td>BEDROOMS:</td><td><?php echo get_the_term_list( $post->ID, 'bedroom', '<li class="area_item"> ', ', ', '</li>' ) ?></td>
		<td>PRICE:</td><td><?php echo get_the_term_list( $post->ID, 'price', '<li class="area_item"> ', ', ', '</li>' ) ?></td>
		<td>SIZE:</td><td><?php echo get_the_term_list( $post->ID, 'size', '<li class="area_item"> ', ', ', '</li>' ) ?>
		</td>
		</tr>

	</tbody>
</table>


<?php echo get_the_term_list( $post->ID, 'property-type', '<li class="area_item"> ', ', ', '</li>' ) ?>
<?php echo get_the_term_list( $post->ID, 'tenure', '<li class="area_item"> ', ', ', '</li>' ) ?>
<?php echo get_the_term_list( $post->ID, 'area', '<li class="area_item"> ', ', ', '</li>' ) ?>
<?php echo get_the_term_list( $post->ID, 'bedroom', '<li class="area_item"> ', ', ', '</li>' ) ?>
<?php echo get_the_term_list( $post->ID, 'price', '<li class="area_item"> ', ', ', '</li>' ) ?>
<?php echo get_the_term_list( $post->ID, 'size', '<li class="area_item"> ', ', ', '</li>' ) ?>

<table class="table-custom">
	<tbody>

		<tr>
		<td>PROPERTY TYPE:</td><td><?php echo get_the_term_list( $post->ID, 'property-type', '<li class="area_item"> ', ', ', '</li>' ) ?></td>
		<td>AREA:</td><td><?php echo get_the_term_list( $post->ID, 'area', '<li class="area_item"> ', ', ', '</li>' ) ?></td>
		</tr>
			
		<tr>
		<td>TENURE:</td><td><?php echo get_the_term_list( $post->ID, 'tenure', '<li class="area_item"> ', ', ', '</li>' ) ?></td>
		<td>BEDROOMS:</td><td><?php echo get_the_term_list( $post->ID, 'bedroom', '<li class="area_item"> ', ', ', '</li>' ) ?></td>
		</tr>

		<tr>
		<td>PRICE:</td><td><?php echo get_the_term_list( $post->ID, 'price', '<li class="area_item"> ', ', ', '</li>' ) ?></td>
		<td>SIZE:</td><td><?php echo get_the_term_list( $post->ID, 'size', '<li class="area_item"> ', ', ', '</li>' ) ?>
		</td>
		</tr>

	</tbody>
</table>


	 <ul><?php echo get_the_term_list( $post->ID, 'property-type', '<li class="area_item">Type: ', ', ', '</li>' ) ?></ul>
	 <ul><?php echo get_the_term_list( $post->ID, 'tenure', '<li class="area_item">Tenure: ', ', ', '</li>' ) ?></ul>
	 <ul><?php echo get_the_term_list( $post->ID, 'area', '<li class="area_item">Area: ', ', ', '</li>' ) ?></ul>











							$output .= '<table class="table table-condensed">';
							$output .= '<tr>' . get_the_term_list( $post->ID, 'property-type', '<td>Type: ', ', ', '</td>' ) . '</tr>';
							$output .= '<tr>' . get_the_term_list( $post->ID, 'area', '<td>Area: ', ', ', '</td>' ) . '</tr>';
							$output .= '<tr>' . get_the_term_list( $post->ID, 'tenure', '<td>Tenure: ', ', ', '</td>' ) . '</tr>';
							$output .= '<tr>' . get_the_term_list( $post->ID, 'bedroom', '<td>Bedrooms: ', ', ', '</td>' ) . '</tr>';
							$output .= '<tr>' . get_the_term_list( $post->ID, 'size', '<td>Size: ', ', ', '</td>' ) . '</tr>';
							$output .= '<tr>' . get_the_term_list( $post->ID, 'price', '<td>Price: ', ', ', '</td>' ) . '</tr>';
							$output .= '</table>';

<div class="image_wrapper"><a href="http://serene.local/overseas/"><div class="mask"></div><img width="900" height="700" src="http://serene.local/wp-content/uploads/2016/04/Gem-Residences-Facade.jpg" class="scale-with-grid wp-post-image" alt="Gem-Residences-Facade" itemprop="image" srcset="http://serene.local/wp-content/uploads/2016/04/Gem-Residences-Facade-300x233.jpg 300w, http://serene.local/wp-content/uploads/2016/04/Gem-Residences-Facade-768x597.jpg 768w, http://serene.local/wp-content/uploads/2016/04/Gem-Residences-Facade-188x146.jpg 188w, http://serene.local/wp-content/uploads/2016/04/Gem-Residences-Facade.jpg 900w" sizes="(max-width: 900px) 100vw, 900px"></a><div class="image_links double"><a href="http://serene.local/wp-content/uploads/2016/04/Gem-Residences-Facade.jpg" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="http://serene.local/overseas/" class="link"><i class="icon-link"></i></a></div></div>

/**
 *
 * Image Widget
 *
 */

FEATURED MIXED DEV 

<div class="image_frame image_item scale-with-grid aligncenter has_border">
	<div class="image_wrapper">
		<a href="#">
			<div class="mask"></div>
			<img class="scale-with-grid" src="/wp-content/uploads/2016/04/Gem-Residences-Facade.jpg" alt="beauty_portfolio_1" width="1200" height="800"></a>
			<div class="image_links double">
				<a href="/wp-content/uploads/2016/04/Gem-Residences-Facade.jpg" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
				<a href="/mixed-dev-1-2/" class="link"><i class="icon-link"></i></a>
			</div>
	</div>
</div>

FEATURED EX-CONDOS

<div class="image_frame image_item scale-with-grid aligncenter has_border">
	<div class="image_wrapper">
		<a href="#">
			<div class="mask"></div>
			<img class="scale-with-grid" src="/wp-content/uploads/2016/04/EX-CONDOS-1.jpg" alt="beauty_portfolio_1" width="1200" height="800"></a>
			<div class="image_links double">
				<a href="/wp-content/uploads/2016/04/EX-CONDOS-1.jpg" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
				<a href="/ex-condo-1-2/" class="link"><i class="icon-link"></i></a>
			</div>
	</div>
</div>

FEATURED CONDOS

<div class="image_frame image_item scale-with-grid aligncenter has_border">
	<div class="image_wrapper">
		<a href="#">
			<div class="mask"></div>
			<img class="scale-with-grid" src="/wp-content/uploads/2016/04/CONDOS-1.jpg" alt="beauty_portfolio_1" width="1200" height="800"></a>
			<div class="image_links double">
				<a href="/wp-content/uploads/2016/04/CONDOS-1.jpg" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
				<a href="/condo-1-2/" class="link"><i class="icon-link"></i></a>
			</div>
	</div>
</div>

FEATURED OVERSEAS

<div class="image_frame image_item scale-with-grid aligncenter has_border">
	<div class="image_wrapper">
		<a href="#">
			<div class="mask"></div>
			<img class="scale-with-grid" src="/wp-content/uploads/2016/04/Gem-Residences-Facade.jpg" alt="beauty_portfolio_1" width="1200" height="800"></a>
			<div class="image_links double">
				<a href="/wp-content/uploads/2016/04/Gem-Residences-Facade.jpg" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
				<a href="/overseas/" class="link"><i class="icon-link"></i></a>
			</div>
	</div>
</div>




































