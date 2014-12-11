<?php

if(is_page('acupuncture')) {
get_header();
get_template_part('site','top');
get_sidebar();
get_template_part('content','acupuncture');
get_template_part('site','bottom');
get_footer();
}
else if(is_page('newslink')) {
get_header();
get_template_part('site','top');
get_sidebar();
get_template_part('content','news');
get_template_part('site','bottom');
get_footer();
}
else {
get_header();
get_template_part('site','top');
get_sidebar();
get_template_part('content','page');
get_template_part('site','bottom');
get_footer();
}

?>
