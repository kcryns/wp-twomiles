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
                        <p><?php the_content();?> <a href="">read more</a></p>
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

                    <!-- <li>
                        <a href=""><h2>Tax saving measures that can be done at the end of 2022</h2></a>
                        <p>For individual or corporate business owners who will close in December, here is an example of tax planning for SMEs and sole proprietorships. <a href="">read more</a></p>
                    </li>
                    <li>
                        <a href=""><h2>Understanding the difference between employees and contractors</h2></a>
                        <p>It is important for a company to hire people to help with work, whether to hire them as employees or to conclude a contract as a subcontractor. <a href="">read more</a></p>
                    </li>
                    <li>
                        <a href=""><h2>Penalty provisions for tax returns</h2></a>
                        <p>Tax filing procedures are an obligation for people with income above a certain level, and for corporations regardless of income. Tax returns are due on April 15th for individuals and three and a half months after the end of the fiscal year for corporations (two and a half months after the fiscal year ends in June). <a href="">read more</a></p>
                    </li>
                    <li>
                        <a href=""><h2>Travel Expenses for Business Trips (Part 2)</h2></a>
                        <p>4. Business travel expenses this time as well as last time (1 to 4 in the table of contents below). This is about business trip expenses in Japan and other countries.
                            Last time, we introduced business travel expenses in the United States, but this time we will introduce business trip expenses overseas. (Part 2) <a href="">read more</a></p>
                    </li>
                    <li>
                        <a href=""><h2>Personal Tax Return ~Common Misconceptions~</h2></a>
                        <p>In order not to inadvertently receive penalties from the IRS or the state due to our own misunderstandings and assumptions, I think it would be good for us to have some knowledge of how taxes work. This time, we have prepared a collection of common misconceptions about individual tax returns. <a href="">read more</a></p>
                    </li>
                    <li>
                        <a href=""><h2>Obligation to disclose foreign financial account information</h2></a>
                        <p>Do you have a savings account in a country other than the United States, i.e. outside the United States? In fact, those who meet certain conditions are obliged to report on the information. As a matter of course, if the IRS finds out that you did not declare it, you will be penalized, so be careful. <a href="">read more</a></p>
                    </li>
                    <li>
                        <a href=""><h2>Tax return preparation information that is advantageous to know</h2></a>
                        <p>By the way, in this month's newsletter, I hope to provide useful information for creating a tax return for 2021. <a href="">read more</a></p>
                    </li>
                    <li>
                        <a href=""><h2>About Credit - Company Health Check</h2></a>
                        <p>Among corporate activities, operations related to the management and collection of accounts receivable are considered to be particularly important. account. Receivables is a general term for all accounts receivable other than those for which the terms and conditions of repayment are confirmed in writing by a note (promissory note) etc. <a href="">read more</a></p>
                    </li> -->
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