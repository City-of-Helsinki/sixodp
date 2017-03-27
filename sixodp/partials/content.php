<?php
  /**
  * More links template
  */
?>

<div class="article__wrapper">
  <h1 class="heading--main" style="margin-top: 0;"><?php the_title(); ?></h1>
  <article class="article" role="article">
    <?php the_content(); ?>
  </article>
  <div class="article__footer">
    <div class="author">
      <div class="author__img">
        <?php echo get_avatar( get_the_author_meta('user_email'), $size = '50'); ?>  
      </div>
      <div class="author__body">
        <p class="author__text">Kirjoittaja</p>
        <p class="author__name">
          <?php the_author(); ?>
        </p>
        <p class="post__meta">
          <?php the_date(); ?>
        </p>
      </div>
    </div>
  </div>
</div>