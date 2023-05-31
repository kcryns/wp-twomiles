<?php get_header();?>

<?php
$homepage_id = get_option('page_on_front');
?>

<section class="single">
    <div class="container">
        <h1><?php the_title();?></h1>
        <div class="single__wrapper">
            <div class="single__left">
            <?php echo get_the_post_thumbnail();?>
                <ul>
                    <li>
                        <p>Categoty: </p><span><?php echo the_category(); ?></span>
                    </li>
                    <li>
                        <p>Tag: <span>
                        <?php
                        $posttags = get_the_tags();
                        if ($posttags) {
                        foreach($posttags as $tag) {
                            echo $tag->name . ' '; 
                        }
                        }
                         ?>        
                    </span></p>
                    </li>
                    <li>
                        <p>Date: <span><?php echo get_the_time('M-d-Y') ?></span></p>
                    </li>
                    <li>
                        <p>Author: <span><?php echo the_author_meta('display_name', $post->post_author );?></span></p>
                    </li>
                </ul>
                <div class="single__icon">
                    <a href=""><i class="fa-solid fa-envelope"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <div class="single__text">
                    <p>The income tax rate for 2022 is as follows. Filing is required federally and in the state of residence or income.</p>
                    <p>1. Commonwealth: Click here for more details in an Excel file. Non-U.S. singles will be charged the “Single” tax rate, and non-U.S. married individuals will be charged the Married filing separate rate.</p>
                    <p>2. State: You can check the details in the Excel file . Tax rates vary by state.</p>
                    <p>Contact: TEL 714-437-5823 (person in charge: Isogawa)</p>
                </div>
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


<section class="posts">
        <div class="container">
            <div class="wrapper">
                <h1>you might like it too</h1>
                <div class="Pcards lg:grid lg:grid-cols-3 lg:gap-[1rem] ">

                <?php

                $args = array(
                    'post_type' => 'Post',
                    'posts_per_page' => 3,
                );
                $newQuery = new WP_Query($args)
                ?>
                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                    <div class="cards mb-[2rem] bg-nlight rounded-md shadow-2xl hover:scale-[105%] overflow-hidden lg:w-[25rem]">
                        <?php echo get_the_post_thumbnail();?>
                        <div class="pcontent p-[1rem]">
                            <h3 class="text-tmblue text-[1.3rem] mb-[1rem] font-bold pt-[1rem] lg:text-[1.5rem] "><?php the_title();?></h3>
                            <p class="text-gray-500 mb-7 lg:text-[1rem]"><?php the_content();?></p>
                            <a href="" class="text-dark"><?php echo get_field('read_more')?></a>
                        </div>   
                    </div>
                <?php 
                
                endwhile;
                else:
                    echo "no available post";
                endif;
                wp_reset_postdata();       
                ?>
                </div>
                <a href="" class=" mt-[2.5rem] text-[1rem] text-oblue flex justify-center">すべて見る</a>
            </div>
        </div>
    </section>

<?php get_footer();?>