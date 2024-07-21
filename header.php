<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo the_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/global.css">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="bg-background">
        <div class="border-b flex items-center justify-between border-gray-600 md:px-28 px-5 py-4 md:gap-0 gap-20">
            <a aria-label="goto home page" href="/">
                <figure class="md:w-[300px]  sm:w-[180px] w-[180px]">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/michigan-ross.png" class="image-contain" alt="">
                </figure>
            </a>
            <a aria-label="goto home page" href="/">
                <figure class="md:w-[100px] sm:w-[60px] w-[60px]">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/xed.png" class="image-contain" alt="">
                </figure>
            </a>
        </div>
        <div class="py-3 text-center">
            <h2 class="capitalize mb-0 font-semibold text-white">michigan ross CXO leadership program</h2>
        </div>
    </header>

    <main>