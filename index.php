<?php get_header(); ?>

    <section class="mainPosts">
      <?php
        if(is_home()):
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          query_posts('posts_per_page=20&paged='.$paged);
          if(have_posts()):
            while (have_posts()):
                the_post();
      ?>
      <article class="mainPosts__list">
        <a class="mainPosts__wraplink" href="<?php the_permalink(); ?>">
          <div class="mainPosts__left">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="mainPosts__right">
            <h2><?php the_title(); ?></h2>
            <ul>
              <li>
                <span class="glyphicon glyphicon-calendar"></span>
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
              </li>
            </ul>
            <div class="mainPosts__socialCount">
              <span class="mainPosts__socialCount__twitter"><i class="fa fa-twitter"></i><?php if(function_exists('get_scc_twitter')) echo get_scc_twitter(); ?></span>
              <span class="mainPosts__socialCount__facebook"><i class="fa fa-facebook-official"></i><?php if(function_exists('get_scc_facebook')) echo get_scc_facebook(); ?></span>
            </div>
          </div>
        </a>
      </article>
      <?PHP
          endwhile;
        endif; // have_posts
      ?>
      <nav class="mainPosts__pageNavi">
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
      </nav>
      <?php
      endif; // is_home

      if(is_category()):
      ?>
      <div class="search">
        <p class="search__result">カテゴリー：<?php single_tag_title(); ?></p>
      </div>
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('posts_per_page=200&'.$query_string.'&paged='.$paged);
        if(have_posts()):
          while (have_posts()) : the_post();
      ?>
      <article class="mainPosts__list">
        <a class="mainPosts__wraplink" href="<?php the_permalink(); ?>">
          <div class="mainPosts__left">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="mainPosts__right">
            <h2><?php the_title(); ?></h2>
            <ul>
              <li>
                <span class="glyphicon glyphicon-calendar"></span>
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
              </li>
            </ul>
            <div class="mainPosts__socialCount">
              <span class="mainPosts__socialCount__twitter"><i class="fa fa-twitter"></i><?php if(function_exists('get_scc_twitter')) echo get_scc_twitter(); ?></span>
              <span class="mainPosts__socialCount__facebook"><i class="fa fa-facebook-official"></i><?php if(function_exists('get_scc_facebook')) echo get_scc_facebook(); ?></span>
            </div>
          </div>
        </a>
      </article>

      <?PHP
          endwhile;
      ?>
      <nav class="mainPosts__pageNavi">
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
      </nav>
      <?php
        endif; // have_posts
      endif; // is_category

      if(is_author()):
      ?>
      <div class="search">
        <p class="search__result">Author：<?php the_author(); ?></p>
      </div>
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('posts_per_page=200&'.$query_string.'&paged='.$paged);
        if(have_posts()):
          while (have_posts()) : the_post();
      ?>
      <article class="mainPosts__list">
        <a class="mainPosts__wraplink" href="<?php the_permalink(); ?>">
          <div class="mainPosts__left">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="mainPosts__right">
            <h2><?php the_title(); ?></h2>
            <ul>
              <li>
                <span class="glyphicon glyphicon-calendar"></span>
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
              </li>
            </ul>
            <div class="mainPosts__socialCount">
              <span class="mainPosts__socialCount__twitter"><i class="fa fa-twitter"></i><?php if(function_exists('get_scc_twitter')) echo get_scc_twitter(); ?></span>
              <span class="mainPosts__socialCount__facebook"><i class="fa fa-facebook-official"></i><?php if(function_exists('get_scc_facebook')) echo get_scc_facebook(); ?></span>
            </div>
          </div>
        </a>
      </article>

      <?PHP
          endwhile;
      ?>
      <nav class="mainPosts__pageNavi">
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
      </nav>
      <?php
        endif; // have_posts
      endif; // is_author
      ?>
    </section>
<?php get_footer(); ?>
