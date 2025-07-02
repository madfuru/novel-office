<article class="testimonial">
  <?php if (has_post_thumbnail()) : ?>
    <div class="testimonial-thumbnail">
      <?php the_post_thumbnail('medium'); ?>
    </div>
  <?php endif; ?>

  <div class="testimonial-content">
    <h3><?php the_title(); ?></h3>
    <div class="testimonial-text">
      <?php the_content(); ?>
    </div>
  </div>
</article>
