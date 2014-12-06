<?php
if(is_home()) {
get_header();
get_template_part('site','top');
get_sidebar();
get_template_part('content');
get_template_part('site','bottom');
get_footer();
}
else {

get_header();
get_template_part('site','top');
get_sidebar();
get_template_part('content','categories');
get_template_part('site','bottom');
get_footer();

}
?>