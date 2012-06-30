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
        <p id="description"><?php bloginfo( 'description' ); ?></p>
      </div><!-- header -->

	<article>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
				<?php if ( !is_singular() && get_the_title() == '' ) : ?>
					<a href="<?php the_permalink(); ?>">(more...)</a>
				<?php endif; ?>
				<?php if ( is_singular() ) : ?>
					<div class="pagination"><?php wp_link_pages(); ?></div>
				<?php endif; ?>
 			</div>

			<?php if ( is_singular() ) : ?>
				<div class="meta">
					<p>—<a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></p>
				</div>

				<?php comments_template(); ?>

			<?php endif; ?>

        <?php endwhile; else: ?>
			<div class="hentry"><h2>Sorry, the page you requested cannot be found</h2></div>

        <?php endif; ?>

        </div>
        
        <?php if ( is_singular() || is_404() ) : ?>
          <div class="left"><a href="<?php bloginfo( 'url' ); ?>">&laquo; Home page</a></div>
        <?php else : ?>
          	<nav>
		<?php next_posts_link( '&laquo; Äldre' ); ?>
          	<?php previous_posts_link( 'Nyare &raquo;' ); ?>
		</nav>
        <?php endif; ?>
    
    </article>
  </body>
</html>