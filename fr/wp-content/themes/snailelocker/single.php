<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>



<section class="container blog pdg clearfix">
    	
        <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
        	<div class="col-lg-8 col-md-12 col-sm-12">



           

           
         			   
<?php
			// Get the ID of a given category
			$category_news = get_cat_ID( 'news' );
			$category_best = get_cat_ID( 'best-practices' );
		
		
			// Get the URL of this category
			$category_news_link = get_category_link($category_news );
            $category_best_link  = get_category_link( $category_best );
            
        ?>
        
       
		
		<!-- Print a link to this category -->


		
	


            
                <ul class="page-menu clearfix">
                    <li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">All Posts</a></li>
                    <li><a href="<?php echo esc_url( $category_news_link ); ?>">News / Nouvelles</a></li>
                    <li><a href="	<?php echo esc_url( $category_best_link ); ?>">Best Practices</a></li>
                    <li><a href="#">Les meilleures pratiques</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
            	 <a href="#" class="login">Login / Sign up</a>
                <div class="search-container clearfix">
                    <form action="/action_page.php">
                      <input type="text" placeholder="Search.." name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
              </div>
             
            </div>
        </div>



<section class="container blog pdg clearfix">
	
<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();?>
    	
        <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
        	<div class="post clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="box-content clearfix">
					<div class="title"><?php  the_title(); ?></div>
					<?php the_post_thumbnail(); ?>
                    <p> <?php the_content(); ?></p>
                    
					</div>
					
					<?php	endwhile; // End of the loop.
							?>

			





                    <ul class="smo">
                    	<li><a href="<?php ?>"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <li><a href="#">News / Nouvelles</a></li>
                    </ul>
                </div>
                <a href="#" class="share"><i class="fa fa-ellipsis-v"></i></a>
            </div>
            
            
            <section class="news news-p pdg resent-post clearfix">
    	<div class="container">
            <ul>
			<?php

// $category = get_the_category();
// $firstCategory = $category[0]->cat_name;
// // echo $firstCategory;
// // die();




    $query = new WP_Query( array ( 'orderby' => 'date', 'order' => 'ASC','category_name' => $firstCategory, 'post_status' => 'publish', 'post_type' => 'post', 'posts_per_page' => 3, ) );



    while ( $query->have_posts() ) :
	$query->the_post();?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <figure>
                        
						<?php the_post_thumbnail( array( 306, 196 ) ); // Other resolutions (height, width) ?>
                            <figcaption><?php echo wp_trim_words( get_the_title(), 5 ); ?></figcaption>
                        </figure>
                    </a>
                </li><?php endwhile;
?>
      
               
            </ul>
        </div>
    </section>
                        
            
        </div>
    </section>


<?php
get_footer();
