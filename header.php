<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/dist/output.css">
    <script src="https://kit.fontawesome.com/22756a8933.js" crossorigin="anonymous"></script>
    <?php wp_head();?>
</head>
<body>
    <div class="arjay absolute w-0 top-[4.7rem] h-[90vh] bg-dark opacity-[.7] z-[1]"></div>
    <header class="header relative">
        <div class="container">
            <div class="header__wrapper flex items-center justify-between -z-[1]">
                <div class="branding ">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>./img/mainLogo (1).png" alt="" class="w-[10rem] lg:w-[15rem]"></a>
                </div>
                <div class="header__nav ">
                    <ul class="bg-[unset]  items-center lg:flex ">
                        <li class="flex gap-[.5rem] items-center mb-[1rem] border-b-2 lg:border-none lg:pb-0 lg:mb-0">
                            <i class="fa-solid fa-magnifying-glass search "></i>
                            <p>
                                    <form action="<?php echo home_url('/'); ?> ">
                                        <input name="s" title="Search" class="searchField" type="search" name="" id="" placeholder="search" value ="<?php echo get_search_query() ?>" />
                                    </form>
                            </p>
                        </li>
                        <li class="text-black font-bold mx-[unset] mb-[1rem] text-[1rem] lg:font-semibold lg:text-[1.3rem] lg:mb-0"><a href="" >blog</a></li>
                        <li class="mx-0"><button class="bg-[#1F285B] text-white mb-[1rem] border-[2px] border-transparent p-[1rem] hover:bg-transparent hover:border-[#1F28B5] hover:duration-[.5s] hover:ease-in-out lg:mb-0 hover:text-dark">Go to Website</button></li>
                    </ul>    
                </div>
                <div class="toggle__menu z-[999] lg:hidden" >
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>