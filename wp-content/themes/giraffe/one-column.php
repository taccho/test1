<?php
/*
/* Template Name: ランディングページ*/

?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="i7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no" />
<?php if(is_category()): ?>
<?php elseif(is_archive()): ?>
<meta name="robots" content="noindex,follow">
<?php elseif(is_search()): ?>
<meta name="robots" content="noindex,follow">
<?php elseif(is_tag()): ?>
<meta name="robots" content="noindex,follow">
<?php elseif(is_paged()): ?>
<meta name="robots" content="noindex,follow">
<?php endif; ?>
<title>
<?php
global $page, $paged;
if(is_front_page()):
elseif(is_single()):
wp_title('|',true,'right');
elseif(is_page()):
wp_title('|',true,'right');
elseif(is_archive()):
wp_title('|',true,'right');
elseif(is_search()):
wp_title('|',true,'right');
elseif(is_404()):
echo'404 |';
endif;
bloginfo('name');
if($paged >= 2 || $page >= 2):
echo'-'.sprintf('%sページ',
max($paged,$page));
endif;
?>
</title>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/logo.ico" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
<![endif]-->
<?php wp_head(); ?>
<?php if(is_mobile()) { ?>
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.png" />
<?php } else { ?>
<?php } ?>
</head>
<body <?php body_class(); ?>>

<!? ここからアイキャッチ画像 ?>
<div class=“post-thumbnail”>
  <?php the_post_thumbnail(‘full’);?>
</div>
<!? ここまでアイキャッチ画像 ?>

<div id="wrapper">
<div id="content" class="clearfix">
  <div id="contentInner">
    <main>
      <div class="post"> 
 
        <article>
      
            <!--ループ開始 -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="entry-title">
              <?php the_title(); //タイトル ?>
            </h1>

            <?php the_content(); //本文 ?>

          <!--/section--> 
        </article>
        <?php wp_link_pages(); ?>

        <?php endwhile; else: ?>
        <p>記事がありません</p>
        <?php endif; ?>
        <!--ループ終了 --> 
        
      </div>
      <!--/post--> 
    </main>
  </div>
  <!-- /#contentInner -->

</div>
<!--/#content -->


<?php get_footer(); ?>