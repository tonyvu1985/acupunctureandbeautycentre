<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){

// VARIABLES
$themename = "SKTthemes";
$shortname = "skt";

// Populate siteoptions option in array for use in theme
global $of_options;
$of_options = get_option('of_options');
$GLOBALS['template_path'] = SKTTHEMES_FRAMEWORK;


//Access the WordPress Categories via an Array
$of_categories = array();  
$of_categories_obj = get_categories('hide_empty=0');
foreach ($of_categories_obj as $of_cat) {
$of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
$categories_tmp = array_unshift($of_categories, "Select a category:");    


//Access the WordPress Pages via an Array
$of_pages = array();
$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($of_pages_obj as $of_page) {
$of_pages[$of_page->ID] = $of_page->post_name; }
$of_pages_tmp = array_unshift($of_pages, "Select the Blog page:");       


// Image Alignment radio box
$options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 


// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 


//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('of_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");


//Footer Columns Array
$footer_columns = array("1","2","3","4","5","6");


//Paths for "type" => "images"
$url =  get_template_directory_uri() . '/sktthemes_framework/admin/images/color-schemes/';
$footerurl =  get_template_directory_uri() . '/sktthemes_framework/admin/images/footer-layouts/';
$fonturl =  get_template_directory_uri() . '/sktthemes_framework/admin/images/fonts/';
$framesurl =  get_template_directory_uri() . '/sktthemes_framework/admin/images/image-frames/';
$logourl =  get_template_directory_uri() . '/sktthemes_framework/admin/images/logo-builder/';
$recaptcha_themes = get_template_directory_uri() . '/sktthemes_framework/admin/images/recaptcha-themes/';//since version 2.6
$body_bg_url =  get_template_directory_uri() . '/sktthemes_framework/admin/images/body-backgrounds/';
$template_dir = get_template_directory_uri();


//Access the WordPress Categories via an Array
$exclude_categories = array();  
$exclude_categories_obj = get_categories('hide_empty=0');
foreach ($exclude_categories_obj as $exclude_cat) {
$exclude_categories[$exclude_cat->cat_ID] = $exclude_cat->cat_name;}


//array of all custom font types.
$font_types = array('nofont', 'Arial', 'Comic Sans MS', 'FreeSans', 'Georgia', 'Lucida Sans Unicode', 'Palatino Linotype', 'Symbol', 'Tahoma', 'Trebuchet MS', 'Verdana', 'ABeeZee', 'Abel', 'Abril Fatface', 'Aclonica', 'Acme', 'Actor', 'Adamina', 'Advent Pro', 'Aguafina Script', 'Akronim', 'Aladin', 'Aldrich', 'Alegreya', 'Alegreya SC', 'Alex Brush', 'Alfa Slab One', 'Alice', 'Alike', 'Alike Angular', 'Allan', 'Allerta', 'Allerta Stencil', 'Allura', 'Almendra', 'Almendra Display', 'Almendra SC', 'Amarante', 'Amaranth', 'Amatic SC', 'Amethysta', 'Anaheim', 'Andada', 'Andika', 'Annie Use Your Telescope', 'Anonymous Pro', 'Antic', 'Antic Didone', 'Antic Slab', 'Anton', 'Arapey', 'Arbutus', 'Arbutus Slab', 'Architects Daughter', 'Archivo Black', 'Archivo Narrow', 'Arimo', 'Arizonia', 'Armata', 'Artifika', 'Arvo', 'Asap', 'Asset', 'Astloch', 'Asul', 'Atomic Age', 'Aubrey', 'Audiowide', 'Autour One', 'Average', 'Average Sans', 'Averia Gruesa Libre', 'Averia Libre', 'Averia Sans Libre', 'Averia Serif Libre', 'Bad Script', 'Balthazar', 'Bangers', 'Basic', 'Baumans', 'Belgrano', 'Belleza', 'BenchNine', 'Bentham', 'Berkshire Swash', 'Bevan', 'Bigelow Rules', 'Bigshot One', 'Bilbo', 'Bilbo Swash Caps', 'Bitter', 'Black Ops One', 'Bonbon', 'Boogaloo', 'Bowlby One', 'Bowlby One SC', 'Brawler', 'Bree Serif', 'Bubblegum Sans', 'Bubbler One', 'Buda', 'Buenard', 'Butcherman', 'Butcherman Caps', 'Butterfly Kids', 'Cabin', 'Cabin Condensed', 'Cabin Sketch', 'Cabin', 'Caesar Dressing', 'Cagliostro', 'Calligraffitti', 'Cambo', 'Candal', 'Cantarell', 'Cantata One', 'Cantora One', 'Capriola', 'Cardo', 'Carme', 'Carrois Gothic', 'Carrois Gothic SC', 'Carter One', 'Caudex', 'Cedarville Cursive', 'Ceviche One', 'Changa One', 'Chango', 'Chau Philomene One', 'Chela One', 'Chelsea Market', 'Cherry Cream Soda', 'Cherry Swash', 'Chewy', 'Chicle', 'Chivo', 'Cinzel', 'Cinzel Decorative', 'Clicker Script', 'Coda', 'Codystar', 'Combo', 'Comfortaa', 'Coming Soon', 'Condiment', 'Contrail One', 'Convergence', 'Cookie', 'Copse', 'Corben', 'Courgette', 'Cousine', 'Coustard', 'Covered By Your Grace', 'Crafty Girls', 'Creepster', 'Creepster Caps', 'Crete Round', 'Crimson', 'Croissant One', 'Crushed', 'Cuprum', 'Cutive', 'Cutive Mono', 'Damion', 'Dancing Script', 'Dawning of a New Day', 'Days One', 'Delius', 'Delius Swash Caps', 'Delius Unicase', 'Della Respira', 'Denk One', 'Devonshire', 'Didact Gothic', 'Diplomata', 'Diplomata SC', 'Domine', 'Donegal One', 'Doppio One', 'Dorsa', 'Dosis', 'Dr Sugiyama', 'Droid Sans', 'Droid Sans Mono', 'Droid Serif', 'Duru Sans', 'Dynalight', 'EB Garamond', 'Eagle Lake', 'Eater', 'Eater Caps', 'Economica', 'Electrolize', 'Elsie', 'Elsie Swash Caps', 'Emblema One', 'Emilys Candy', 'Engagement', 'Englebert', 'Enriqueta', 'Erica One', 'Esteban', 'Euphoria Script', 'Ewert', 'Exo', 'Expletus Sans', 'Fanwood Text', 'Fascinate', 'Fascinate Inline', 'Faster One', 'Federant', 'Federo', 'Felipa', 'Fenix', 'Finger Paint', 'Fjalla One', 'Fjord One', 'Flamenco', 'Flavors', 'Fondamento', 'Fontdiner Swanky', 'Forum', 'Francois One', 'Freckle Face', 'Fredericka the Great', 'Fredoka One', 'Fresca', 'Frijole', 'Fruktur', 'Fugaz One', 'Gafata', 'Galdeano', 'Galindo', 'Gentium Basic', 'Gentium Book Basic', 'Geo', 'Geostar', 'Geostar Fill', 'Germania One', 'Gilda Display', 'Give You Glory', 'Glass Antiqua', 'Glegoo', 'Gloria Hallelujah', 'Goblin One', 'Gochi Hand', 'Gorditas', 'Goudy Bookletter 1911', 'Graduate', 'Grand Hotel', 'Gravitas One', 'Great Vibes', 'Griffy', 'Gruppo', 'Gudea', 'Habibi', 'Hammersmith One', 'Hanalei', 'Hanalei Fill', 'Handlee', 'Happy Monkey', 'Headland One', 'Henny Penny', 'Herr Von Muellerhoff', 'Holtwood One SC', 'Homemade Apple', 'Homenaje', 'IM Fell', 'Iceberg', 'Iceland', 'Imprima', 'Inconsolata', 'Inder', 'Indie Flower', 'Inika', 'Irish Growler', 'Istok Web', 'Italiana', 'Italianno', 'Jacques Francois', 'Jacques Francois Shadow', 'Jim Nightshade', 'Jockey One', 'Jolly Lodger', 'Josefin Sans', 'Josefin Sans', 'Josefin Slab', 'Joti One', 'Judson', 'Julee', 'Julius Sans One', 'Junge', 'Jura', 'Just Another Hand', 'Just Me Again Down Here', 'Kameron', 'Karla', 'Kaushan Script', 'Kavoon', 'Keania One', 'Kelly Slab', 'Kenia', 'Kite One', 'Knewave', 'Kotta One', 'Kranky', 'Kreon', 'Kristi', 'Krona One', 'La Belle Aurore', 'Lancelot', 'Lato', 'League Script', 'Leckerli One', 'Ledger', 'Lekton', 'Lemon', 'Libre Baskerville', 'Life Savers', 'Lilita One', 'Limelight', 'Linden Hill', 'Lobster', 'Lobster Two', 'Londrina Outline', 'Londrina Shadow', 'Londrina Sketch', 'Londrina Solid', 'Lora', 'Love Ya Like A Sister', 'Loved by the King', 'Lovers Quarrel', 'Luckiest Guy', 'Lusitana', 'Lustria', 'Macondo', 'Macondo Swash Caps', 'Magra', 'Maiden Orange', 'Mako', 'Marcellus', 'Marcellus SC', 'Marck Script', 'Margarine', 'Marko One', 'Marmelad', 'Marvel', 'Mate', 'Mate SC', 'Maven Pro', 'McLaren', 'Meddon', 'MedievalSharp', 'Medula One', 'Megrim', 'Meie Script', 'Merienda', 'Merienda One', 'Merriweather', 'Metal Mania', 'Metamorphous', 'Metrophobic', 'Michroma', 'Milonga', 'Miltonian', 'Miltonian Tattoo', 'Miniver', 'Miss Fajardose', 'Miss Saint Delafield', 'Modern Antiqua', 'Molengo', 'Molle', 'Monda', 'Monofett', 'Monoton', 'Monsieur La Doulaise', 'Montaga', 'Montez', 'Montserrat', 'Montserrat Alternates', 'Montserrat Subrayada', 'Mountains of Christmas', 'Mouse Memoirs', 'Mr Bedford', 'Mr Bedfort', 'Mr Dafoe', 'Mr De Haviland', 'Mrs Saint Delafield', 'Mrs Sheppards', 'Muli', 'Mystery Quest', 'Neucha', 'Neuton', 'New Rocker', 'News Cycle', 'Niconne', 'Nixie One', 'Nobile', 'Norican', 'Nosifer', 'Nosifer Caps', 'Noticia Text', 'Nova Round', 'Numans', 'Nunito', 'Offside', 'Oldenburg', 'Oleo Script', 'Oleo Script Swash Caps', 'Open Sans', 'Open Sans Condensed', 'Oranienbaum', 'Orbitron', 'Oregano', 'Orienta', 'Original Surfer', 'Oswald', 'Over the Rainbow', 'Overlock', 'Overlock SC', 'Ovo', 'Oxygen', 'Oxygen Mono', 'PT Mono', 'PT Sans', 'PT Sans Narrow', 'PT Serif', 'PT Serif Caption', 'Pacifico', 'Paprika', 'Parisienne', 'Passero One', 'Passion One', 'Patrick Hand', 'Patua One', 'Paytone One', 'Peralta', 'Permanent Marker', 'Petit Formal Script', 'Petrona', 'Philosopher', 'Piedra', 'Pinyon Script', 'Pirata One', 'Plaster', 'Play', 'Playball', 'Playfair Display', 'Playfair Display SC', 'Podkova', 'Poiret One', 'Poller One', 'Poly', 'Pompiere', 'Pontano Sans', 'Port Lligat Sans', 'Port Lligat Slab', 'Prata', 'Press Start 2P', 'Princess Sofia', 'Prociono', 'Prosto One', 'Puritan', 'Purple Purse', 'Quando', 'Quantico', 'Quattrocento', 'Quattrocento Sans', 'Questrial', 'Quicksand', 'Quintessential', 'Qwigley', 'Racing Sans One', 'Radley', 'Raleway Dots', 'Raleway', 'Rambla', 'Rammetto One', 'Ranchers', 'Rancho', 'Rationale', 'Redressed', 'Reenie Beanie', 'Revalia', 'Ribeye', 'Ribeye Marrow', 'Righteous', 'Risque', 'Roboto', 'Rochester', 'Rock Salt', 'Rokkitt', 'Romanesco', 'Ropa Sans', 'Rosario', 'Rosarivo', 'Rouge Script', 'Ruda', 'Rufina', 'Ruge Boogie', 'Ruluko', 'Rum Raisin', 'Ruslan Display', 'Russo One', 'Ruthie', 'Rye', 'Sacramento', 'Sail', 'Salsa', 'Sanchez', 'Sancreek', 'Sansita One', 'Sarina', 'Satisfy', 'Scada', 'Schoolbell', 'Seaweed Script', 'Sevillana', 'Seymour One', 'Shadows Into Light', 'Shadows Into Light Two', 'Shanti', 'Share', 'Share Tech', 'Share Tech Mono', 'Shojumaru', 'Short Stack', 'Sigmar One', 'Signika', 'Signika Negative', 'Simonetta', 'Sirin Stencil', 'Six Caps', 'Skranji', 'Slackey', 'Smokum', 'Smythe', 'Sniglet', 'Snippet', 'Snowburst One', 'Sofadi One', 'Sofia', 'Sonsie One', 'Sorts Mill Goudy', 'Sorts Mill Goudy', 'Source Code Pro', 'Source Sans Pro', 'Special Elite', 'Spicy Rice', 'Spinnaker', 'Spirax', 'Squada One', 'Stalemate', 'Stalinist One', 'Stardos Stencil', 'Stint Ultra Condensed', 'Stint Ultra Expanded', 'Stoke', 'Stoke', 'Strait', 'Sue Ellen Francisco', 'Sunshiney', 'Supermercado One', 'Swanky and Moo Moo', 'Syncopate', 'Tangerine', 'Telex', 'Tenor Sans', 'Terminal Dosis', 'Terminal Dosis Light', 'Text Me One', 'The Girl Next Door', 'Tienne', 'Tinos', 'Titan One', 'Titillium Web', 'Trade Winds', 'Trocchi', 'Trochut', 'Trykker', 'Tulpen One', 'Ubuntu', 'Ubuntu Condensed', 'Ubuntu Mono', 'Ultra', 'Uncial Antiqua', 'Underdog', 'Unica One', 'UnifrakturCook', 'UnifrakturMaguntia', 'Unkempt', 'Unlock', 'Unna', 'VT323', 'Vampiro One', 'Varela', 'Varela Round', 'Vast Shadow', 'Vibur', 'Vidaloka', 'Viga', 'Voces', 'Volkhov', 'Vollkorn', 'Voltaire', 'Waiting for the Sunrise', 'Wallpoet', 'Walter Turncoat', 'Warnes', 'Wellfleet', 'Wendy One', 'Wire One', 'Yanone Kaffeesatz', 'Yellowtail', 'Yeseva One', 'Yesteryear', 'Zeyada', 'Open Sans Narrow');


//auto generate font size array from 9px to 50px.
$font_sizes = array();
for($size = 9; $size < 125; $size ++){
	$font_sizes[] = $size."px";
}
array_unshift($font_sizes,"--select--");	


//color scheme array
$color_schemes = array('Default', 'Green', 'Magenta');


/*-----------------------------------------------------------------------------------*/
/* Create Site Options Array */
/*-----------------------------------------------------------------------------------*/
$options = array();
			
// BASIC SETTINGS

$options[] = array( "name" => __('Basic Settings','skthemes_localize'),
			"type" => "heading");

$options[] = array( "name" => __('Website Logo','skthemes_localize'),
		   "desc" => __('Upload a custom logo for your Website.','skthemes_localize'),
		   "id" => $shortname."_sitelogo",
		   "std" => get_bloginfo('template_url')."/images/logo.png",
		   "type" => "upload");
			
$options[] = array( "name" => __('Favicon','skthemes_localize'),
			"desc" => __('Upload a 16px x 16px image that will represent your website\'s favicon.<br /><br /><em>To ensure cross-browser compatibility, we recommend converting the favicon into .ico format before uploading. (<a href="http://www.favicon.cc/">www.favicon.cc</a>)</em>','skthemes_localize'),
			"id" => $shortname."_favicon",
			"std" => "",
			"type" => "upload");
			
$options[] = array( "name" => __('Textual Logo','skthemes_localize'),
			"desc" => __('Enter the text to be used for your logo.<br><br><em>note: you should only enter logo text if you won\'t be uploading a custom logo.</em>','skthemes_localize'),
			"id" => $shortname."_logo_text",
			"std" => "",
			"type" => "text");

$options[] = array( "name" =>  __('Textual Logo &rarr; Font Color','skthemes_localize'),
			"desc" => __('Select a font color for the textual logo.','skthemes_localize'),
			"id" => $shortname."_logo_font_color",
			"std" => "#669f00",
			"type" => "color");

$options[] = array( "name" =>  __('Textual Logo &rarr; Font Size','skthemes_localize'),
			"desc" => __('Select a font size for the for the textual logo.','skthemes_localize'),
			"id" => $shortname."_logo_font_size",
			"std" => "50px",
			"type" => "select",
			"options" => $font_sizes);

$options[] = array( "name" => __('Textual Logo &rarr; Font Family','skthemes_localize'),
			"desc" => __('Select a font face for your Textual logo text.','skthemes_localize'),
			"id" => $shortname."_logo_font",
			"std" => "Leckerli One",
			"type" => "select",
			"options" => $font_types);


$options[] = array( "name" => __('Breadcrumbs','skthemes_localize'),
			"desc" => __('Breadcrumbs are displayed by default. <em>Un-check this box to disable the breadcrumbs.</em>','skthemes_localize'),
			"id" => $shortname."_crumbs",
			"std" => "false",
			"type" => "checkbox");

$options[] = array( "name" => __('Breadcrumbs - Home Link Text','skthemes_localize'),
			"desc" => __('Customize the text for the homepage link in the breadcrumbs.','skthemes_localize'),
			"id" => $shortname."_breadcrumbs_home_text",
			"std" => "Home",
			"type" => "text");		

//filter to allow developer to add new options to general settings.			
$options = apply_filters('theme_option_general_settings',$options);	


// SOCIAL SETTINGS
$options[] = array( "name" => __('Social Settings','skthemes_localize'), "type" => "heading");	
$options[] = array( "name" => __('Facebook Link','skthemes_localize'),
			"desc" => __('Enter the Facebook Link that you would like to use for the social-networking icons. Note: Use http://','skthemes_localize'),
			"id" => $shortname."_social_facebook",
			"std" => "http://facebook.com/",
			"type" => "text");

$options[] = array( "name" => __('Twitter Link','skthemes_localize'),
			"desc" => __('Enter the Twitter Link that you would like to use for the social-networking icons. Use http://','skthemes_localize'),
			"id" => $shortname."_social_twitter",
			"std" => "http://twitter.com/",
			"type" => "text");
			
$options[] = array( "name" => __('LinkedIn Link','skthemes_localize'),
			"desc" => __('Enter the LinkedIn Link that you would like to use for the social-networking icons. Use http://','skthemes_localize'),
			"id" => $shortname."_social_linkedin",
			"std" => "https://in.linkedin.com/",
			"type" => "text");
	
$options[] = array( "name" => __('RSS Link','skthemes_localize'),
			"desc" => __('Enter the RSS Link that you would like to use for the icons. Use http://','skthemes_localize'),
			"id" => $shortname."_social_rss",
			"std" => "#",
			"type" => "text");

// FONT / TYPOGRAPHY SETTINGS
$options[] = array( "name" => __('Font Typography Settings','skthemes_localize'),"type" => "heading");

$options[] = array( "name" => __('General &rarr; Font Family','skthemes_localize'),
			"desc" => __('Select a font face for the general text.','skthemes_localize'),
			"id" => $shortname."_general_font",
			"std" => "Open Sans",
			"type" => "select",
			"options" => $font_types);
			
$options[] = array( "name" =>  __('General &rarr; Font Size','skthemes_localize'),
			"desc" => __('Select a font size for the for the general text.','skthemes_localize'),
			"id" => $shortname."_general_font_size",
			"std" => "13px",
			"type" => "select",
			"options" => $font_sizes);

$options[] = array( "name" =>  __('General &rarr; Font Color','skthemes_localize'),
			"desc" => __('Select a font color for the general text.','skthemes_localize'),
			"id" => $shortname."_general_font_color",
			"std" => "#282828",
			"type" => "color");

$options[] = array( "name" => __('Navigation &rarr; Font Family','skthemes_localize'),
			"desc" => __('Select a font face for the navigation text.','skthemes_localize'),
			"id" => $shortname."_nav_font",
			"std" => "Ubuntu",
			"type" => "select",
			"options" => $font_types);
			
$options[] = array( "name" =>  __('Navigation &rarr; Font Size','skthemes_localize'),
			"desc" => __('Select a font size for the for the navigation text.','skthemes_localize'),
			"id" => $shortname."_nav_font_size",
			"std" => "16px",
			"type" => "select",
			"options" => $font_sizes);

$options[] = array( "name" =>  __('Navigation &rarr; Font Color','skthemes_localize'),
			"desc" => __('Select a font color for the navigation text.','skthemes_localize'),
			"id" => $shortname."_nav_font_color",
			"std" => "#fff",
			"type" => "color");

$options[] = array( "name" =>  __('Paragraph &rarr; Font Family','skthemes_localize'),
			"desc" => __('Select a font face for all paragraphs.','skthemes_localize'),
			"id" => $shortname."_paragraph_font",
			"std" => "Open Sans",
			"type" => "select",
			"options" => $font_types);

$options[] = array( "name" =>  __('Paragraph &rarr; Font Size','skthemes_localize'),
			"desc" => __('Select a font size for all paragraphs.','skthemes_localize'),
			"id" => $shortname."_paragraph_font_size",
			"std" => "13px",
			"type" => "select",
			"options" => $font_sizes);
			
$options[] = array( "name" =>  __('Paragraph &rarr; Font Color','skthemes_localize'),
			"desc" => __('Select a font color for all paragraphs.','skthemes_localize'),
			"id" => $shortname."_paragraph_font_color",
			"std" => "#282828",
			"type" => "color");

$options[] = array( "name" =>  __('H1 Headings &rarr; Font Family','skthemes_localize'),
			"desc" => __('Select a font face for all &lt;h1&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h1_font",
			"std" => "Ubuntu",
			"type" => "select",
			"options" => $font_types);

$options[] = array( "name" =>  __('H1 Headings &rarr; Font Size','skthemes_localize'),
			"desc" => __('Select a font size for all &lt;h1&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h1_font_size",
			"std" => "40px",
			"type" => "select",
			"options" => $font_sizes);
			
$options[] = array( "name" =>  __('H1 Headings &rarr; Font Color','skthemes_localize'),
			"desc" => __('Select a font color for all &lt;h1&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h1_font_color",
			"std" => "#555",
			"type" => "color");

$options[] = array( "name" =>  __('H2 Headings &rarr; Font Family','skthemes_localize'),
			"desc" => __('Select a font face for all &lt;h2&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h2_font",
			"std" => "Leckerli One",
			"type" => "select",
			"options" => $font_types);

$options[] = array( "name" =>  __('H2 Headings &rarr; Font Size','skthemes_localize'),
			"desc" => __('Select a font size for all &lt;h2&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h2_font_size",
			"std" => "39px",
			"type" => "select",
			"options" => $font_sizes);

$options[] = array( "name" =>  __('H2 Headings &rarr; Font Color','skthemes_localize'),
			"desc" => __('Select a font color for all &lt;h2&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h2_font_color",
			"std" => "#558c20",
			"type" => "color");

$options[] = array( "name" =>  __('H3 Headings &rarr; Font Family','skthemes_localize'),
			"desc" => __('Select a font face for all &lt;h3&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h3_font",
			"std" => "Open Sans",
			"type" => "select",
			"options" => $font_types);

$options[] = array( "name" =>  __('H3 Headings &rarr; Font Size','skthemes_localize'),
			"desc" => __('Select a font size for all &lt;h3&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h3_font_size",
			"std" => "36px",
			"type" => "select",
			"options" => $font_sizes);

$options[] = array( "name" =>  __('H3 Headings &rarr; Font Color','skthemes_localize'),
			"desc" => __('Select a font color for all &lt;h3&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h3_font_color",
			"std" => "#fff",
			"type" => "color");		

$options[] = array( "name" =>  __('H4 Headings &rarr; Font Family','skthemes_localize'),
			"desc" => __('Select a font face for all &lt;h4&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h4_font",
			"std" => "Leckerli One",
			"type" => "select",
			"options" => $font_types);

$options[] = array( "name" =>  __('H4 Headings &rarr; Font Size','skthemes_localize'),
			"desc" => __('Select a font size for all &lt;h4&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h4_font_size",
			"std" => "30px",
			"type" => "select",
			"options" => $font_sizes);	

$options[] = array( "name" =>  __('H4 Headings &rarr; Font Color','skthemes_localize'),
			"desc" => __('Select a font color for all &lt;h4&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h4_font_color",
			"std" => "#558c20",
			"type" => "color");

$options[] = array( "name" =>  __('H5 Headings &rarr; Font Family','skthemes_localize'),
			"desc" => __('Select a font face for all &lt;h5&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h5_font",
			"std" => "Open Sans",
			"type" => "select",
			"options" => $font_types);

$options[] = array( "name" =>  __('H5 Headings &rarr; Font Size','skthemes_localize'),
			"desc" => __('Select a font size for all &lt;h5&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h5_font_size",
			"std" => "19px",
			"type" => "select",
			"options" => $font_sizes);	

$options[] = array( "name" =>  __('H5 Headings &rarr; Font Color','skthemes_localize'),
			"desc" => __('Select a font color for all &lt;h5&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h5_font_color",
			"std" => "#fff",
			"type" => "color");

$options[] = array( "name" =>  __('H6 Headings &rarr; Font Family','skthemes_localize'),
			"desc" => __('Select a font face for all &lt;h6&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h6_font",
			"std" => "Open Sans",
			"type" => "select",
			"options" => $font_types);

$options[] = array( "name" =>  __('H6 Headings &rarr; Font Size','skthemes_localize'),
			"desc" => __('Select a font size for all &lt;h6&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h6_font_size",
			"std" => "14px",
			"type" => "select",
			"options" => $font_sizes);

$options[] = array( "name" =>  __('H6 Headings &rarr; Font Color','skthemes_localize'),
			"desc" => __('Select a font color for all &lt;h6&gt; headings.','skthemes_localize'),
			"id" => $shortname."_h6_font_color",
			"std" => "#3e3e3e",
			"type" => "color");

//allow developer to add in new options to Additional settings.			
$options = apply_filters('theme_typography_font_settings',$options);


// COLOR SETTINGS
$options[] = array( "name" => __('Color Settings','skthemes_localize'), "type" => "heading");

/* $options[] = array( "name" => __('Theme Color Scheme','skthemes_localize'),
			"desc" => __('Select a theme color scheme.','skthemes_localize'),
			"id" => $shortname."_theme_color",
			"std" => "default",
			"type" => "select",
			"options" => $color_schemes); */

$options[] = array( "name" =>  __('Link Color','skthemes_localize'),
			"desc" => __('Select a link color for all links.','skthemes_localize'),
			"id" => $shortname."_link_color",
			"std" => "#669f00",
			"type" => "color");
			
$options[] = array( "name" =>  __('Link Hover Color','skthemes_localize'),
			"desc" => __('Select a link hover color for all links.','skthemes_localize'),
			"id" => $shortname."_link_hover_color",
			"std" => "#05344d",
			"type" => "color");

/*$options[] = array( "name" =>  __('Body - Background Color','skthemes_localize'),
			"desc" => __('Select a custom body background color for your website.','skthemes_localize'),
			"id" => $shortname."_body_bg_color",
			"std" => "", 
			"type" => "color");

$options[] = array( "name" =>  __('Top - Background Color','skthemes_localize'),
			"desc" => __('Select a custom background color for your website.','skthemes_localize'),
			"id" => $shortname."_top_bg_color",
			"std" => "", 
			"type" => "color");
			
$options[] = array( "name" =>  __('Top &rarr; Font Color','skthemes_localize'),
			"desc" => __('Select a font color for top area.','skthemes_localize'),
			"id" => $shortname."_top_font_color",
			"std" => "",
			"type" => "color");

$options[] = array( "name" =>  __('Middle - Background Color','skthemes_localize'),
			"desc" => __('Select a custom middle background color for your website.','skthemes_localize'),
			"id" => $shortname."_middle_bg_color",
			"std" => "", 
			"type" => "color");

$options[] = array( "name" =>  __('Middle &rarr; Font Color','skthemes_localize'),
			"desc" => __('Select a font color for middle area.','skthemes_localize'),
			"id" => $shortname."_middle_font_color",
			"std" => "",
			"type" => "color");

$options[] = array( "name" =>  __('Footer - Background Color','skthemes_localize'),
			"desc" => __('Select a custom footer background color for your website.','skthemes_localize'),
			"id" => $shortname."_footer_bg_color",
			"std" => "", 
			"type" => "color");

$options[] = array( "name" =>  __('Footer &rarr; Font Color','skthemes_localize'),
			"desc" => __('Select a font color for footer area.','skthemes_localize'),
			"id" => $shortname."_footer_font_color",
			"std" => "",
			"type" => "color");*/

//allow developer to add in new options to Additional settings.			
$options = apply_filters('theme_color_settings',$options);


// BACKGROUND IMAGE SETTINGS
$options[] = array( "name" => __('Background Image Settings','skthemes_localize'), "type" => "heading");

$options[] = array( "name" => __('Body - Background Image','skthemes_localize'),
			"desc" => __('Upload a custom body background image for your website.','skthemes_localize'),
			"id" => $shortname."_body_bg_image",
			"std" => "", 
			"type" => "upload");

$options[] = array( "name" => __('Body - Background Image Position','skthemes_localize'),
			"desc" => __('Use this section to set the background position of your custom body background image.','skthemes_localize'),
			"id" => $shortname."_body_bg_position",
			"std" => "",
			"type" => "select",
			"options" => array(
				'left top' => 'left top',
				'center top' => 'center top',
				'right top' => 'right top',
				'center center' => 'center center',
				'left bottom' => 'left bottom',
				'center bottom' => 'center bottom',
				'right bottom' => 'right bottom',
			));

$options[] = array( "name" => __('Body - Background Image Repeat','skthemes_localize'),
			"desc" => __('Use this section to set the repeat property for your custom body background image.','skthemes_localize'),
			"id" => $shortname."_body_bg_repeat",
			"std" => "",
			"type" => "select",
			"options" => array(
				'repeat' => 'repeat',
				'repeat-x' => 'repeat-x',
				'repeat-y' => 'repeat-y',
				'no-repeat' => 'no-repeat',
			));

/*$options[] = array( "name" => __('Top - Background Image','skthemes_localize'),
			"desc" => __('Upload a top background image for your website.','skthemes_localize'),
			"id" => $shortname."_top_bg_image",
			"std" => "", 
			"type" => "upload");

$options[] = array( "name" => __('Top - Background Image Position','skthemes_localize'),
			"desc" => __('Use this section to set the background position of your top background image.','skthemes_localize'),
			"id" => $shortname."_top_bg_position",
			"std" => "",
			"type" => "select",
			"options" => array(
				'left top' => 'left top',
				'center top' => 'center top',
				'right top' => 'right top',
				'center center' => 'center center',
				'left bottom' => 'left bottom',
				'center bottom' => 'center bottom',
				'right bottom' => 'right bottom',
			));

$options[] = array( "name" => __('Top - Background Image Repeat','skthemes_localize'),
			"desc" => __('Use this section to set the repeat property for your top background image.','skthemes_localize'),
			"id" => $shortname."_top_bg_repeat",
			"std" => "",
			"type" => "select",
			"options" => array(
				'repeat' => 'repeat',
				'repeat-x' => 'repeat-x',
				'repeat-y' => 'repeat-y',
				'no-repeat' => 'no-repeat',
			));

$options[] = array( "name" => __('Middle - Background Image','skthemes_localize'),
			"desc" => __('Upload a middle background image for your website.','skthemes_localize'),
			"id" => $shortname."_middle_bg_image",
			"std" => "", 
			"type" => "upload");

$options[] = array( "name" => __('Middle - Background Image Position','skthemes_localize'),
			"desc" => __('Use this section to set the background position of your middle background image.','skthemes_localize'),
			"id" => $shortname."_middle_bg_position",
			"std" => "",
			"type" => "select",
			"options" => array(
				'left top' => 'left top',
				'center top' => 'center top',
				'right top' => 'right top',
				'center center' => 'center center',
				'left bottom' => 'left bottom',
				'center bottom' => 'center bottom',
				'right bottom' => 'right bottom',
			));

$options[] = array( "name" => __('Middle - Background Image Repeat','skthemes_localize'),
			"desc" => __('Use this section to set the repeat property for your middle background image.','skthemes_localize'),
			"id" => $shortname."_middle_bg_repeat",
			"std" => "",
			"type" => "select",
			"options" => array(
				'repeat' => 'repeat',
				'repeat-x' => 'repeat-x',
				'repeat-y' => 'repeat-y',
				'no-repeat' => 'no-repeat',
			));

$options[] = array( "name" => __('Footer - Background Image','skthemes_localize'),
			"desc" => __('Upload a footer background image for your website.','skthemes_localize'),
			"id" => $shortname."_footer_bg_image",
			"std" => "", 
			"type" => "upload");

$options[] = array( "name" => __('Footer - Background Image Position','skthemes_localize'),
			"desc" => __('Use this section to set the background position of your footer background image.','skthemes_localize'),
			"id" => $shortname."_footer_bg_position",
			"std" => "",
			"type" => "select",
			"options" => array(
				'left top' => 'left top',
				'center top' => 'center top',
				'right top' => 'right top',
				'center center' => 'center center',
				'left bottom' => 'left bottom',
				'center bottom' => 'center bottom',
				'right bottom' => 'right bottom',
			));

$options[] = array( "name" => __('Footer - Background Image Repeat','skthemes_localize'),
			"desc" => __('Use this section to set the repeat property for your footer background image.','skthemes_localize'),
			"id" => $shortname."_footer_bg_repeat",
			"std" => "",
			"type" => "select",
			"options" => array(
				'repeat' => 'repeat',
				'repeat-x' => 'repeat-x',
				'repeat-y' => 'repeat-y',
				'no-repeat' => 'no-repeat',
			));*/

//allow developer to add in new options to Additional settings.			
$options = apply_filters('theme_background_image_settings',$options);


// HOME PAGE SETTINGS
/*$options[] = array( "name" => __('Homepage Settings','skthemes_localize'),
			"type" => "heading");
			
$options[] = array( "name" => __('Show Slider on Homepage','skthemes_localize'),
			"desc" => __('This will show slider on a homepage.<br /><em>Please uncheck this box if you prefer to disable slider on homepage.</em>','skthemes_localize'),
			"id" => $shortname."_slider_show",
			"std" => "true",
			"type" => "checkbox");

//allow developer to add in new options to homepage settings.			
$options = apply_filters('theme_option_home_settings',$options);*/


// UTILITY PAGES SETTINGS
$options[] = array( "name" => __('Utility Pages','skthemes_localize'),
			"type" => "heading");
			
$options[] = array( "name" => __('404 Page Banner Text','skthemes_localize'),
			"desc" => __('Set the page title that is displayed in the banner area of the 404 Error Page.','skthemes_localize'),
			"id" => $shortname."_404title",
			"std" => "Page not Found",
			"type" => "text");
			
$options[] = array( "name" => __('404 Message','skthemes_localize'),
			"desc" => __('Set the message that is displayed on the 404 Error Page.','skthemes_localize'),
			"id" => $shortname."_404message",
			"std" => "Our Apologies, but the page you are looking for could not be found. Here are some links that you might find useful:
			<ul>
			<li><a href=\"http://www.\">Home</a></li>
			<li><a href=\"http://www.\">Sitemap</a></li>
			<li><a href=\"http://www.\">Contact Us</a></li>
			</ul>",
			"type" => "textarea");
			
$options[] = array( "name" => __('Search Results Banner Text','skthemes_localize'),
			"desc" => __('Set the page title that is displayed in the banner area of the Search Results Page.','skthemes_localize'),
			"id" => $shortname."_results_title",
			"std" => "Search Results",
			"type" => "text");
			
$options[] = array( "name" => __('Search Results Fallback Message','skthemes_localize'),
			"desc" => __('Set the message that is displayed when a search comes back with no results.','skthemes_localize'),
			"id" => $shortname."_results_fallback",
			"std" => "<p>Our Apologies, but your search did not return any results. Please try using a different search term.</p>",
			"type" => "textarea");
			
//allow developer to add in new options to forms.				
$options = apply_filters('theme_option_forms_settings',$options);


// CONTACT PAGE SETTINGS
$options[] = array( "name" => __('Contact Page Details','skthemes_localize'),
			"type" => "heading");
			
 $options[] = array( "name" => __('Company Title','skthemes_localize'),
			"desc" => __('Set the company title that is displayed on contact Page.','skthemes_localize'),
			"id" => $shortname."_contact_title",
			"std" => "Contact Person",
			"type" => "text");  

$options[] = array( "name" => __('Street Address 1','skthemes_localize'),
			"desc" => __('Set the street address 1 that is displayed on contact Page.','skthemes_localize'),
			"id" => $shortname."_contact_address_1",
			"std" => "Office Blvd No. 000-000",
			"type" => "text");
			
$options[] = array( "name" => __('Street Address 2','skthemes_localize'),
			"desc" => __('Set the street address 2 that is displayed on contact Page.','skthemes_localize'),
			"id" => $shortname."_contact_address_2",
			"std" => "Farmville Town, LA 12345",
			"type" => "text");
			
/*$options[] = array( "name" => __('State','skthemes_localize'),
			"desc" => __('Set the state that is displayed on contact Page.','skthemes_localize'),
			"id" => $shortname."_contact_state",
			"std" => "",
			"type" => "text");
			
$options[] = array( "name" => __('City','skthemes_localize'),
			"desc" => __('Set the city that is displayed on contact Page.','skthemes_localize'),
			"id" => $shortname."_contact_city",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Zip','skthemes_localize'),
			"desc" => __('Set the zip that is displayed on contact Page.','skthemes_localize'),
			"id" => $shortname."_contact_zip",
			"std" => "",
			"type" => "text"); 
			
$options[] = array( "name" => __('Country','skthemes_localize'),
			"desc" => __('Set the country that is displayed on contact Page.','skthemes_localize'),
			"id" => $shortname."_contact_country",
			"std" => "US",
			"type" => "text"); */
			
$options[] = array( "name" => __('Phone Number','skthemes_localize'),
			"desc" => __('Set the phone number that is displayed on contact Page.','skthemes_localize'),
			"id" => $shortname."_contact_phone",
			"std" => "987 654 3210",
			"type" => "text");

 $options[] = array( "name" => __('Fax Number','skthemes_localize'),
			"desc" => __('Set the fax number that is displayed on contact Page.','skthemes_localize'),
			"id" => $shortname."_contact_fax",
			"std" => "987 654 3210",
			"type" => "text"); 
			
/* $options[] = array( "name" => __('Toll Free Number','skthemes_localize'),
			"desc" => __('Set the toll free number that is displayed on contact Page.','skthemes_localize'),
			"id" => $shortname."_contact_tollfree",
			"std" => "",
			"type" => "text"); */

$options[] = array( "name" => __('Email','skthemes_localize'),
			"desc" => __('Set the email that is displayed on contact Page.','skthemes_localize'),
			"id" => $shortname."_contact_email",
			"std" => "testmail@yourdomain.com",
			"type" => "text");

$options[] = array( "name" => __('Recipient(s) Email','skthemes_localize'),
			"desc" => __('Set the Recipent email where you want to receive contact enquiry.','skthemes_localize'),
			"id" => $shortname."_contact_recipient_email",
			"std" => "test@testmail123.com",
			"type" => "text");
			
$options[] = array( "name" => __('Google Map Code','skthemes_localize'),
			"desc" => __('Set the google map code that is displayed on contact page.','skthemes_localize'),
			"id" => $shortname."_google_map_code",
			"std" => "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d310740.15739477734!2d-2.1609489403745967!3d52.52153750655604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870942d1b417173%3A0xca81fef0aeee7998!2sBirmingham%2C+West+Midlands%2C+UK!5e0!3m2!1sen!2sin!4v1389092365148' width='100%' height='180' frameborder='0' style='border:0'></iframe>",
			"type" => "textarea");

$options[] = array( "name" => __('Disable Contact Form','skthemes_localize'),
			"desc" => __('This functionality will disable contact form on contact page. <em>Check this box to disable contact form.</em>','skthemes_localize'),
			"id" => $shortname."_contact_disable_form",
			"std" => "false",
			"type" => "checkbox");

//allow developer to add in new options to forms.				
$options = apply_filters('theme_contact_page_settings',$options);


// BLOG SETTINGS
$options[] = array( "name" => __('Blog Settings','skthemes_localize'), "type" => "heading");

$options[] = array( "name" => __('Blog Page','skthemes_localize'),
			"desc" => __('Create your blog page from pages and apply the template "Blog Posts".','skthemes_localize'),
			"id" => $shortname."_blogpage",
			"std" => "",
			"type" => "infotext",
			"options" => $of_pages);

$options[] = array( "name" => __('Exclude Categories','skthemes_localize'),
			"desc" => __('Check off any post categories that you\'d like to exclude from the blog.','skthemes_localize'),
			"id" => $shortname."_blog_exclude_cat",
			"std" => "",
			"type" => "multicheck",
			"options" => $exclude_categories);

$options[] = array( "name" => __('Excerpt Length','skthemes_localize'),
			"desc" => __('Set number of word that is display on each blog post excerpt.','skthemes_localize'),
			"id" => $shortname."_blog_excerpt_length",
			"std" => "35",
			"type" => "text");

$options[] = array( "name" => __('Read More Link Text','skthemes_localize'),
			"desc" => __('These links are displayed after each blog post excerpt.','skthemes_localize'),
			"id" => $shortname."_blog_more_button",
			"std" => "Read More &rarr;",
			"type" => "text");

$options[] = array( "name" => __('Sidebar Position','skthemes_localize'),
			"desc" => __('Use this section to set the sidebar position on blogpage.','skthemes_localize'),
			"id" => $shortname."_blog_sidebar_position",
			"std" => "Right",
			"type" => "select",
			"options" => array(
				'Left' => 'Left',
				'Right' => 'Right',
				'No Sidebar' => 'No Sidebar',
			));

$options[] = array( "name" => __('Show Post Author','skthemes_localize'),
			"desc" => __('<em>Un-Check this box</em> to disable the "Posted by" information located under each Blog Post Title.</em>','skthemes_localize'),
			"id" => $shortname."_posted_by",
			"std" => "true",
			"type" => "checkbox");

$options[] = array( "name" => __('Post Date and Comments','skthemes_localize'),
			"desc" => __('<em>Un-check this box</em> to disable the posted date and comments count located next to each Blog Post Title.</em>','skthemes_localize'),
			"id" => $shortname."_post_date",
			"std" => "true",
			"type" => "checkbox");
			
$options[] = array( "name" => __('Post Categories','skthemes_localize'),
			"desc" => __('<em>Un-check this box</em> to disable the post categories located under each Blog Post.</em>','skthemes_localize'),
			"id" => $shortname."_post_cats",
			"std" => "true",
			"type" => "checkbox");

$options[] = array( "name" => __('Post Tags','skthemes_localize'),
			"desc" => __('<em>Un-check this box</em> to disable the post tags located under each Blog Post.</em>','skthemes_localize'),
			"id" => $shortname."_post_tags",
			"std" => "true",
			"type" => "checkbox");

$options[] = array( "name" => __('Featured Image','skthemes_localize'),
			"desc" => __('Featured imaage are displayed at each blog post by default. <em>Un-check this box to disable the featured image on posts.</em>','skthemes_localize'),
			"id" => $shortname."_post_thumb",
			"std" => "true",
			"type" => "checkbox");
			
$options[] = array( "name" => __('Featured Image - Single Blog Post','skthemes_localize'),
			"desc" => __('Featured imaage are displayed at each single blog post by default. <em>Un-check this box to disable the featured image on single blog post.</em>','skthemes_localize'),
			"id" => $shortname."_single_post_thumb",
			"std" => "true",
			"type" => "checkbox");
			
$options[] = array( "name" => __('Featured Image Alignment','skthemes_localize'),
			"desc" => __('Use this section to set the featured image position on each posts.','skthemes_localize'),
			"id" => $shortname."_post_thumb_align",
			"std" => "Left",
			"type" => "select",
			"options" => array(
				'Left' => 'Left',
				'Center' => 'Center',
				'Right' => 'Right',
				'None' => 'None',
			));

$options[] = array( "name" => __('Image Width','skthemes_localize'),
			"desc" => __('Enter the image width for post featured image.','skthemes_localize'),
			"id" => $shortname."_post_thumb_width",
			"std" => "226",
			"type" => "text");

$options[] = array( "name" => __('Image Height','skthemes_localize'),
			"desc" => __('Enter the image height for post featured image.','skthemes_localize'),
			"id" => $shortname."_post_thumb_height",
			"std" => "226",
			"type" => "text");

$options[] = array( "name" => __('Force Image Dimension','skthemes_localize'),
			"desc" => __('Use Timthumb Script to resize and crop the image and disabled by default. <em>Check this box to enable timthumb on all blog posts.</em>','skthemes_localize'),
			"id" => $shortname."_post_timthumb",
			"std" => "false",
			"type" => "checkbox");

//allow developer to add in new options to blog settings.			
$options = apply_filters('theme_option_blog_settings',$options);


update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);

}	// function of_options(){
}	// if (!function_exists('of_options'))
?>