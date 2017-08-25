<?php
/* Template Name: Блог */ 
?><?php
?><?php get_header(); ?>
        <div class="content-padding blog">
  <?php

  $args = array(
  'post_type' => 'post',
  'publish' => true,
  'paged' => get_query_var('paged'),
  //'posts_per_page' => '1'
  );
  query_posts($args);
    if (have_posts()){
      while (have_posts()) : the_post();

      ?>
        <div class="blog-post">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow bounceIn page">
              <div class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <div class="blog-desc" style="">
                <?php //the_excerpt(); 
                  echo get_short_post_content('',200,'Читать далее...',0);
                ?>

              </div>
            </div>
          </div>
        </div>
        <?php

      endwhile;
      if($single_status!='1'){if(function_exists('wp_pagenavi')){ wp_pagenavi(); }elseif(function_exists('wp_corenavi')){ wp_corenavi(); }}
    }
  ?>
        </div>

<style type="text/css">
.blog {
  padding: 50px 0;
 /* border: 1px solid red;*/
  width: 100%;
  display: inline-block;
  min-width: 100%;
}
.blog-post {
  /*border-bottom:1px solid #ccc;*/
}

.blog .blog-title {
  font-size: 24px; font-weight: bold;
  line-height: 24px;
  width: 100%;
  padding: 0 0 0 0;
  min-width: 100%;
}

.blog .blog-title a {
  color:#000 !important;
  text-decoration: none;
}

.blog .blog-title a:hover {
  text-decoration: underline;
}
.blog .blog-desc {
  min-width:100%;
  width:100%;
  padding:10px 0 25px 0;
}
</style>
<?php get_footer(); ?>