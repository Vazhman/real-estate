<?php get_header(); ?>
<main style="padding-top:var(--nav-h);">
  <div class="container section-pad">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
      </article>
    <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
