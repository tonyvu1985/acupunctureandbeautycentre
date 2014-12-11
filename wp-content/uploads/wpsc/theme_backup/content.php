            <div id="right-column">
                <div id="splash">
                    <div id="slider" style="width:764px;height:304px;">
<?php/*
query_posts( 'p=181' );
while ( have_posts() ) : the_post();
$datas = get_group('img');
pr($datas);
$i = 0;
foreach($datas as $data) {
$i++;
$link = get_permalink($data['img_page_link'][1]); ?>
<img src="<?php echo $data['img_slide'][1]['o']; ?>" data-caption="#caption<?php echo $i; ?>" />
<span id="caption<?php echo $i; ?>"><?php echo $data['img_description'][1]; ?><a href="<?php echo $link; ?>">Read More</a></span>
<?php }
endwhile;
wp_reset_query();*/
?>

<img data-caption="#caption1" src="http://acupunctureandbeauty.com.au/wp/wp-content/files_mf/dulltiredlookingskin9735.jpg">
<span id="caption1">We offer a range of beauty facial services your skin concerns. We also use skincare products to suit your skin type. <a href="http://acupunctureandbeauty.com.au/beauty-treatments">Read More</a></span>

<img data-caption="#caption2" src="http://acupunctureandbeauty.com.au/wp/wp-content/files_mf/traditionalchinesemedicine70.jpg" >
<span id="caption2">Chinese Herbal Medicine has been used for thousands of years to effectively treat many ailments. We also offer various Traditional Chinese Medicine treatments to assist with your health concerns. <a href="http://acupunctureandbeauty.com.au/chinese-medicine/chinese-herbal-medicine">Read More</a></span>
<img data-caption="#caption3" src="http://acupunctureandbeauty.com.au/wp/wp-content/files_mf/stressedandtired58.jpg" >

<span id="caption3">Acupuncture has been used for over 5000 years. See how it can help you with your health and reduce stress, increase energy and help you sleep better. <a href="http://acupunctureandbeauty.com.au/acupuncture/what-is-acupuncture">Read More</a></span>

<img data-caption="#caption4" src="http://acupunctureandbeauty.com.au/wp/wp-content/files_mf/04.jpg">
<span id="caption4">Using Acupuncture and massage, we can assist tight neck and shoulder muscles and lower back pain, so you can be painfree without the need for drugs. <a href="http://acupunctureandbeauty.com.au/acupuncture/musculoskeletal">Read More</a></span>

<img data-caption="#caption5" src="http://acupunctureandbeauty.com.au/wp/wp-content/files_mf/flower.jpg" >
<span id="caption5">We treat a range of women’s and men’s health issues including infertility, IVF Support and menstrual irregularities. <a href="http://acupunctureandbeauty.com.au/acupuncture/infertility">Read More</a></span>

<img data-caption="#caption6" src="http://acupunctureandbeauty.com.au/wp/wp-content/files_mf/facialcosmeticacupuncture93.jpg" >
<span id="caption6">Look 10 years younger in 10 months! Facial Acupuncture is effective in reducing lines and wrinkles without the need for botox. Feel healthier and look younger today. <a href="http://acupunctureandbeauty.com.au/acupuncture/cosmetic-acupuncture">Read More</a></span>

</div>
<div id="frame">
</div>
                </div><!--end splash-->
<div id="title">
<?php query_posts('posts_per_page=1&post_type=page&p=150');
if(have_posts()) : the_post(); ?>

                	<h1><!--Welcome to Acupuncture &amp; Beauty Center! --> <?php the_title() ?></h1>
<?php the_content(); ?>
                    <!-- <span>Your journey to better health and inner beauty begins here...</span><br />
                    <p>Treat your body, mind and spirit to a complete reviving, de-stressing and total relaxing experience.</p><br />
                    <span>Why choose Acupuncture &amp; Beauty Center?</span><br />
                    <p>At Acupuncture &amp; Beauty Center we offer professional Acupuncture, Traditional Chinese Medicine, Massage and Beauty Services to allow you to tap into your body’s natural healing and regenerative ability to improve your health, well-being and skincare needs. We provide individualised treatments to alleviate the true cause of your problems and achieve a better sense of health and well-being.<br /> -->
                    <br /><a href="<?php the_permalink(); ?>" class="read-more">Read more</a></p>
<? 
endif; 
wp_reset_query();
?>
                </div>
            </div><!--end right-column-->
