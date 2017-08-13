<?php
  $url_encode=urlencode(get_permalink());
  $title_encode=urlencode(get_the_title());
?>

<div class="share">

<?php if(is_mobile()) {  //以下スマホの場合 ?>
<div class="sns">
<ul class="clearfix">
<!--ツイートボタン-->
<li class="twitter"> 
<a href="http://twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&via=【●ツイッターアカウント名（＠なし）●】&tw_p=tweetbutton"><i class="fa fa-twitter"></i>Twitter&nbsp;<?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'':scc_get_share_twitter(); ?></a>
</li>

<!--Facebookボタン-->      
<li class="facebook">
<a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>"><i class="fa fa-facebook"></i>
Facebook&nbsp;<?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':scc_get_share_facebook(); ?></a>
</li>

<!--Google+1ボタン-->
<li class="googleplus">
<a href="https://plus.google.com/share?url=<?php echo $url_encode;?>" ><i class="fa fa-google-plus"></i>Google+&nbsp;<?php if(function_exists('scc_get_share_gplus')) echo (scc_get_share_gplus()==0)?'':scc_get_share_gplus(); ?></a>
</li>

<!--はてブボタン-->  
<li class="hatebu">       
<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode ?>"><i class="fa fa-hatena"></i>はてブ&nbsp; <?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'':scc_get_share_hatebu(); ?></a>
</li>


<?php } else { //以下PCの場合?> 

<div class="sns">
<ul class="clearfix">
<!--ツイートボタン-->
<li class="twitter"> 
<a href="http://twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&via=【●ツイッターアカウント名（＠なし）●】&tw_p=tweetbutton"><i class="fa fa-twitter"></i>Twitter&nbsp;<?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'':scc_get_share_twitter(); ?></a>
</li>

<!--Facebookボタン-->      
<li class="facebook">       
<a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-facebook"></i>Facebook&nbsp; <?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':scc_get_share_facebook(); ?></a>
</li>
      
<!--Google+1ボタン-->
<li class="googleplus">
<a href="https://plus.google.com/share?url=<?php echo $url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;"><i class="fa fa-google-plus"></i>Google+&nbsp;<?php if(function_exists('scc_get_share_gplus')) echo (scc_get_share_gplus()==0)?'':scc_get_share_gplus(); ?></a>
</li>

<!--はてブボタン-->  
<li class="hatebu"> 
<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;" ><i class="fa fa-hatena"></i>はてブ&nbsp; <?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'':scc_get_share_hatebu(); ?></a>
</li>


</ul>  
</div>
<?php } ?>
</div>