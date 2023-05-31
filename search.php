<?php get_header();?>

<section class="searchresult">
    <div class="container">
        <h2 class="title">Search: <?php echo get_search_query(); ?></h2>
        <div class="searchresult__wrapper">
            <div class="result">
                <ul>
                    <?php
                        $searchItem = get_search_query();
                        $current_tag = single_tag_title('',false);
                        $category = get_the_category();

                        $args = array(
                            'post_type'         => 'post',
                            'post_per_page'     => -1,
                            's'                 => $searchItem, $current_tag,
                        );
                        $newQuery = new WP_Query($args)
                     ?>
                        <?php if (!empty($searchItem)){?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>


                    <li>
                        <a href=""><h2><?php the_title();?></h2></a>
                        <p><?php the_content();?> <a href="<?php echo get_the_permalink();?>">read more</a></p>
                    </li>

                    <?php 
                
                    endwhile;
                    else:
                        echo "no available post";
                    endif;
                    wp_reset_postdata();       
                    ?>

                    <?php } else {
                        echo "no available content yet";
                    }
                    
                    ?>

                </ul>
            </div>
            <div class="recentpost">
                <h3>Recent Post</h3>
                <ul>
                    <li>
                    <i class="fa-solid fa-angle-right"></i>
                        <a href="">
                            <h4>Overview of the revision of the Japan-U.S. tax treaty</h4>
                            <p>On August 30, 2019, the instruments of ratification pertaining to the protocol amending the Japan-U.S. tax treaty were exchanged and entered into force. We will inform you of the outline of the revised points.</p>
                        </a>
                    </li>
                    <li>
                    <i class="fa-solid fa-angle-right"></i>
                        <a href="">
                            <h4>depreciation of a car used for business</h4>
                            <p>This question is well received. In this regard, the actual cost of the vehicle will be divided between "personal use" and "business use" by the number of miles traveled.</p>
                        </a>
                    </li>
                    <li>
                    <i class="fa-solid fa-angle-right"></i>
                        <a href="">
                            <h4>Tax rate for 2022</h4>
                            <p>The income tax rate for 2022 is as follows. Filing is required federally and in the state of residence or income.</p>
                        </a>
                    </li>
                    <li>
                    <i class="fa-solid fa-angle-right"></i>
                        <a href="">
                            <h4>
                                    Regarding Section 965 of the Internal Revenue Code “Transition tax on territorial taxation”</h4>
                            <p>This tax reform was enacted on December 22, 2017. A tax rule that significantly broadens the scope of the tax provisions (Sub Part F Income) for certain income of traditional non-U.S. corporations. The gist is as follows.</p>
                        </a>
                    </li>
                    <li>
                    <i class="fa-solid fa-angle-right"></i>
                        <a href="">
                            <h4>What is transfer pricing?</h4>
                            <p>Part 1: What is the Transfer Pricing Issue?</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>