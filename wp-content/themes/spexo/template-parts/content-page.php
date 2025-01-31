<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Spexo
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php tmpcoder_post_thumbnail(); ?>

	<div class="entry-content page-content">
		<?php
        // temprary testing purpose only
        if ( isset($_GET['starter-content']) && $_GET['starter-content'] == 'dev' ){
            $tmpcoder_starter_content = new Spexo_Starter_Content();
            $previewArr = $tmpcoder_starter_content->get();
            echo $previewArr['posts']['home']['post_content'];

        }else{
            
        if ( has_blocks() ) {
            the_title( '<h1 class="entry-title">', '</h1>' );
        }

		
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:','spexo' ),
				'after'  => '</div>',
			)
		);
        }
		?>
		
		<?php comments_template(); ?>

	</div>

	<!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
