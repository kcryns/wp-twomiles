

<?php
$homepage_id = get_option('page_on_front');
?>


<section class="footer bg-[#1f285b]">
        <div class="container">
            <div class="wrapper">
                <div class="footup pb-[3rem] border-b-[1px] border-light lg:grid lg:grid-cols-3 lg:gap-[5rem]">
                    <div class="inquiry text-white">
                        <h3 class="py-[2rem]">お問い合わせ</h3>
                        <ul class="text-[1rem]">
                            <li><?php echo get_field('address',$homepage_id ); ?></li>
                            <li class="my-[.5rem]"><?php echo get_field('cp_number',$homepage_id ); ?></li>
                            <li class="my-[.5rem]"><?php echo get_field('link_1',$homepage_id ); ?></li>
                            <li><?php echo get_field('link_2',$homepage_id ); ?></li>
                        </ul>
                    </div>
                    <div class="tag text-white">
                        <h3 class="py-[2rem]">タグ</h3>
                        <ul class="text-[1rem] ">
                            <li class="p-[0px] leading-10 inline-block ">
                            <?php

                            $args = array(
                                'post_type' => 'tags',
                                'posts_per_page' => 19,
                            );
                            $newQuery = new WP_Query($args)
                            ?>
                            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php the_title();?></a>
                                <?php 
                
                            endwhile;
                            else:
                                echo "no available post";
                            endif;
                            wp_reset_postdata();       
                            ?>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="subs text-white">
                        <h3 class="pt-[2rem] pb-[.5rem] font-bold">ニュースレターを購読します</h3>
                        <button class="bg-[#00b4da] text-white mb-[1rem] border-[2px] border-transparent py-[.6rem] px-[1.2rem] hover:bg-white hover:border-white hover:duration-[.5s] hover:ease-in-out lg:mb-0 hover:text-dark">Subscribe</button>
                    </div>
                </div>
                <div class="footdown text-white pt-[5rem] pb-[4.99rem] text-center lg:flex lg:justify-around lg:pt-[1rem] lg:items-center">
                    <h3>ブログ</h3>
                    <h4 class="mt-[5rem] mb-[3rem] text-[.8rem] font-semibold lg:mt-0 lg:mb-0">© Copyright Two Miles - All Rights Reserved</h4>
                    <button class="bg-[#00b4da]  text-[16px] text-white mb-[1rem] border-[2px] border-transparent py-[.7rem] px-[1.5rem] hover:bg-white hover:border-white hover:duration-[.5s] hover:ease-in-out lg:mb-0 hover:text-dark">Go to website</button>
                </div>
                
            </div>
        </div>
    </section>
    <?php wp_footer(); ?>