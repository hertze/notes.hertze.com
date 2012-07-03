<!doctype html>
<html lang="sv">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '&mdash;' ); ?></title>
    <?php if ( is_singular() && get_option( 'thread_comments') ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
	<script type="text/javascript" src="http://use.typekit.com/uod8oex.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  </head>

  <body>
      <div id="header">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        
      </div>

	<article>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<?php if ( the_title('','',false)<>'Untitled' ) : ?>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php endif; ?>
				<?php the_content(); ?>
				<?php if ( !is_singular() && get_the_title() == '' ) : ?>
					<a href="<?php the_permalink(); ?>">(more...)</a>
				<?php endif; ?>
				<p class="datestamp">&mdash; <a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></p>
 			</div>

			<?php if ( is_singular() ) : ?>
				<?php comments_template(); ?>
			<?php endif; ?>

        <?php endwhile; else: ?>
			<div class="hentry"><h1>Ledsen, men sidan du efterfrågar verkar inte finnas.</h1></div>

        <?php endif; ?>

        </div>
        
    </article>
    <div id="footer">
    	<?php if ( is_singular() || is_404() ) : ?>
    		<nav><a href="<?php bloginfo( 'url' ); ?>">&laquo; Till första sidan</a></nav>
        <?php else : ?>
          	<nav>
	          	<?php next_posts_link( '&laquo; Äldre' ); ?>
	          	<?php previous_posts_link( 'Nyare &raquo;' ); ?>
	        </nav>
        <?php endif; ?>
        <div id="description">
        	<?php bloginfo( 'description' ); ?>
        </div>
        <?php get_search_form(); ?>
    </div>
  </body>
</html>