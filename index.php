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
	<script src="http://hertze.nfshost.com/mint/?js" type="text/javascript"></script>
  </head>

  <body>
      <div id="header">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        
      </div>

	<article>
		<?php if ( is_search() ) : ?>
			<h2>Du har sökt efter &#8221;<?php the_search_query(); ?>&#8221;&#8230;</h2>
    	<?php endif; ?>
    	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post" class="<?php $category = get_the_category(); echo $category[0]->cat_name; ?>" >
				<?php if ( the_title('','',false)<>'Untitled' ) : ?>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php endif; ?>
				<?php the_content(); ?>
				<?php if ( !is_page() ) : ?>
					<p class="datestamp">&mdash; <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></span></a></p>
				<?php endif; ?>
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
        	<p><span class="asterisk">&#10045;</span> skrivs av Joakim Hertze och publiceras med Wordpress. Innehåll från <em>Instagram</em> och <em>Readability</em> aggregeras med hjälp av <a href="http://ifttt.com"><em>IFTTT</em></a>. All text är satt i <a href="http://www.myfonts.com/fonts/anatoletype/acuta-medium/"><em>Acuta</em></a>. Kontakta mig via gärna via <span id="obf"><script>document.getElementById("obf").innerHTML="<n uers=\"znvygb:fbpvny@uregmr.pbz\" >rcbfg</n>".replace(/[a-zA-Z]/g,function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);});</script>
<noscript><span style="unicode-bidi:bidi-override;direction:rtl;">moc.eztreh@laicos</span></noscript></span>, eller <a href="http://twitter.com/hertze">Twitter</a>.</p>
        </div>
        <?php get_search_form(); ?>
    </div>
  </body>
</html>