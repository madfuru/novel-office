<?php get_header(); ?>

<main>

<header class="hero-section">
  <div class="hero-content">
    <h1>
      <span>OFFICES</span>
      <span>WITH</span>
      <span>NOVEL</span>
    </h1>
    <p class="scroll-text">Scroll to know more</p>
  </div>
</header>



  <section class="testimonials">

    <div class="testimonial-grid">
      <?php
        $testimonials = new WP_Query(array(
          'post_type' => 'testimonial',
          'posts_per_page' => 3
        ));
        while ($testimonials->have_posts()) : $testimonials->the_post();
          get_template_part('template-parts/content', 'testimonial');
        endwhile;
        wp_reset_postdata();
      ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
