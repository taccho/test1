<footer id="footer">

<?php if(is_mobile()) { ?>
<!-- 追加ウィジェット ここから-->
<div id="footer_w">
     <div class="footer_s">
     <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(8) ) : else : ?>
        <p></p>
     <?php endif; ?>
     </div>
  </div>
  <div class="clear"></div>
<!-- 追加ウィジェット ここまで-->
<?php } else { ?>
<!-- 追加ウィジェット ここから-->


<div id="footer_w">
     <div class="footer_l">
     <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(5) ) : else : ?>
        <p></p>
     <?php endif; ?>
     </div>
     <div class="footer_c">
     <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(6) ) : else : ?>
        <p></p>
     <?php endif; ?>
     </div>
     <div class="footer_r">
     <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(7) ) : else : ?>
        <p></p>
     <?php endif; ?>
     </div>
  </div>
  <div class="clear"></div>
<!-- 追加ウィジェット ここまで-->
<?php } ?>



  <h3>
    <?php if (is_home()) { ?>
    <?php bloginfo( 'name' ); ?>
    <?php } else { ?>
    <?php wp_title(''); ?>
    <?php } ?>
  </h3>

  <p>
    <?php bloginfo('description'); ?>
  </p>
  <p class="copy">Copyright&copy;
    <?php bloginfo('name');?>
    ,
    <?php the_date('Y');?>
    All Rights Reserved.</p>
</footer>
</div>

<!-- /#wrapper --> 
<!-- ページトップへ戻る -->
<div id="page-top"><a href="#wrapper" class="fa fa-angle-up"></a></div>
<!-- ページトップへ戻る　終わり -->
<?php  wp_enqueue_script('base',get_bloginfo('template_url') . '/js/base.js', array()); ?>

<?php if(is_mobile()) { //PCのみ追尾広告のjs読み込み ?>
<?php } else { ?>
<?php  wp_enqueue_script('scroll',get_bloginfo('template_url') . '/js/scroll.js', array()); ?>
<?php } ?>

<?php wp_footer(); ?>
</body></html>