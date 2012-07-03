<?php if ( $comments ) : ?>
  <div id="comments">
    <h2>Kommentarer</h2>
    <?php wp_list_comments('avatar_size=100'); ?>
    <div class="pagination"><?php paginate_comments_links(); ?></div>
  </div><!-- comments -->
<?php endif; ?>
<?php if ( comments_open() || pings_open() ) : ?>
  <?php comment_form( 'comment_notes_before=&comment_notes_after=' ); ?>
<?php elseif ( $comments ) : ?>
  <div id="respond"><p id="closed">Kommentarsfunktionen är stängd</p></div>
<?php endif; ?>