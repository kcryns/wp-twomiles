<?php get_header(); ?>

<section class="banner bg-vector-pattern bg-center bg-cover py-[12.5rem] bg-no-repeat" style="background-image: url('<?php echo get_template_directory_uri();?>./img/tmBanner.webp');">
        <div class="container">
            <div class="banner__wrapper ">
                <h3 class="text-light font-bold text-[2rem] text-center">よくある質問</h3>
                <p class="text-light text-center mt-3">税務と会計</p>
            </div>
        </div>
    </section>

    <section class="overview py-[5rem]">
        <div class="container ">
            <div class="overview__wrapper">
                <div class="overview__content lg:flex lg:flex-row-reverse lg:gap-[5rem]">
                    <div class="view lg:mt-[10rem]">
                        <h2 class=" text-[47.55px] font-bold text-[#1f285b]"><?php echo get_field('overview_title');?></h2>
                        <p class=" mb-7 text-[#737373] lg:w-[65%]"><?php echo get_field('overview_paragraph');?></p>
                        <a href="" class="font-bold text-[#00b4da]">続きを読む</a>
                </div>
                <div class="over">
                    <img src="<?php echo get_template_directory_uri();?>./img/US-Japan-flags.jpg" alt="" class="w-[100%] h-[25rem] mt-10 object-cover">
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="posts">
        <div class="container">
            <div class="wrapper">
                <h2 class="text-tmblue text-[2.7rem] text-center mb-[1rem] font-bold lg:text-[3.3rem]">すべての投稿</h2>
                <div class="Pcards lg:grid lg:grid-cols-3 lg:gap-[1rem] ">

                <?php

                $args = array(
                    'post_type' => 'Post',
                    'posts_per_page' => 6,
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

    <section class="categs pt-[10rem]">
        <div class="container">
            <div class="wrapper">
                <h2 class="text-[#1f285b] text-[30px] text-center mb-[1rem] font-bold lg:text-[3.3rem]">すべてのカテゴリ</h2>
                <div class="border-b-[1px] mb-[2rem]">
                    <h3 class="bg-[#1f285b] w-[12rem] p-[.7rem] text-light">ビジネスアドバイス</h3>
                </div>
                <div class="Ccards lg:grid lg:grid-cols-3 lg:gap-[1rem] ">
                <?php

                $args = array(
                    'post_type' => 'Categoriespost',
                    'posts_per_page' => 6,
                );
                $newQuery = new WP_Query($args)
                ?>
                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                    <div class="cards mb-[2rem] bg-nlight rounded-md shadow-2xl hover:scale-[105%] overflow-hidden lg:w-[25rem]">
                        <?php echo get_the_post_thumbnail();?>
                        <div class="ccontent p-[1rem]">
                            <h3 class="text-tmblue text-[1.3rem] mb-[1rem] font-bold pt-[1rem] lg:text-[1.5rem] "><?php the_title();?></h3>
                            <p class="text-gray-500 mb-7 lg:text-[1rem]"><?php the_content();?></p>
                            <a href="" class="font-bold text-dark"><?php echo get_field('read_more')?></a>
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
                <a href="" class=" mt-[2.5rem] text-[1rem] text-[#00b4da] flex justify-center">すべて見る</a>
            </div>
        </div>
    </section>

    <?php get_footer();?>