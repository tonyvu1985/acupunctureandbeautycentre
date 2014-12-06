<?php
$pages = get_posts('orderby=title&order=ASC&numberposts=-1&post_type=page&post_parent='.$post->ID); // Get the suburb pages

if ($pages):  // If there are pages returned, process them
                $numPages = count($pages);
                $i = 0;
?>
                <ul style='float: left; padding-right: 10px; list-style-type: none; font-size: 11px;'>
                
                <?php while ($i < ($numPages / 3)): // Get the first third of the pages and make them one list ?>              
                
                                                <li><a href="<?php echo get_page_link($pages[$i]->ID) ?>"><?php echo $pages[$i]->post_title; ?></a></li>
                                
                <?php $i++;
                endwhile; ?>
                
                </ul><ul style='list-style-type: none; float: left; padding-right: 10px; font-size: 11px;'>

                <?php while ($i < $numPages / 3 * 2): // Get the second third of the pages and make them another list ?>
                
                                <li><a href="<?php echo get_page_link($pages[$i]->ID) ?>"><?php echo $pages[$i]->post_title; ?></a></li>
                
                <?php $i++;
                endwhile; ?>
                
                </ul><ul style='list-style-type: none; font-size: 11px;'>
                
                <?php while ($i < $numPages): // Get the last third of the pages and make them another list ?>
                
                                <li><a href="<?php echo get_page_link($pages[$i]->ID) ?>"><?php echo $pages[$i]->post_title; ?></a></li>
                
                <?php $i++;
                endwhile; ?>
                
                </ul>
                
<?php endif; ?>