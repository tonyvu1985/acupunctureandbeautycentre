<?php
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) {
if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { 
?>
<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
<?php
return;
}
}

$oddcomment = 'class="alt" ';
?>
<!-- You can start editing here. -->
<?php if ($comments) : ?>
<section class="comments">
<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>
<article>
<ol class="comments_list">
<?php wp_list_comments(); ?>
</ol>
<?php if ((int) get_option('page_comments') === 1 && get_comment_pages_count() > 1): ?>
<div class="next_previous_links_comments">
<span class="alignleft"><?php previous_comments_link(__('&laquo; Older Comments','TransBox')); ?></span>
<span class="alignright"><?php next_comments_link(__('Newer Comments &raquo;','TransBox')); ?></span>
<div class="clear"></div>
</div>
<?php endif; ?>
</article>
</section>
<?php else :  ?>
<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->
<?php else :  ?>
<!-- If comments are closed. -->
<p class="nocomments">Comment Closed</p>
<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
<div id="respond">
<div class="cancel-comment-reply">
 <small><?php cancel_comment_reply_link(); ?></small>
</div>
<?php comment_form(); ?>
</div>
<?php endif ?>