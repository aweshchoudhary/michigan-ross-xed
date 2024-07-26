<?php
// Template Name: Home Page

get_header();
?>

<article>

    <?php
    $hero_section = get_field("hero_section");
    if ($hero_section) :
    ?>
        <section class="flex md:flex-row flex-col">
            <div class="flex-1">
                <?php if (!empty($hero_section["hero_image"])) : ?>
                    <figure class="h-full w-full">
                        <?php echo wp_get_attachment_image($hero_section["hero_image"], "large", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($hero_section["hero_image"]) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                <?php endif; ?>
            </div>
            <div class="flex-1 md:p-10 p-5 bg-light-gray">
                <?php if (!empty($hero_section["form_id"])) : ?>
                    <?php if (!empty($hero_section["form_title"])) : ?>
                        <h2>
                            <?php
                            echo $hero_section["form_title"];
                            ?>
                        </h2>
                    <?php endif; ?>
                    <?php
                    $form_id = $hero_section['form_id'];
                    echo do_shortcode("[wpforms id='$form_id']");
                    ?>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $program_overview = get_field("program_overview");
    if ($program_overview) :
    ?>
        <section class="section">
            <div>
                <?php echo wp_kses_post($program_overview) ?>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $program_details = get_field("program_details");
    if ($program_details) :
    ?>
        <section class="section bg-background text-white">
            <div class="flex flex-wrap md:gap-10 md:justify-between gap-5">
                <?php if (!empty($program_details["details"])) :
                    foreach ($program_details["details"] as $item) :
                ?>
                        <div class="lg:basis-auto sm:basis-1/3 basis-full">
                            <?php if (!empty($item["sub_heading"])) : ?>
                                <h3 class="text-third md:mb-3 mb-0"><?php echo wp_kses_post($item["sub_heading"]) ?></h3>
                            <?php endif; ?>
                            <?php if (!empty($item["heading"])) : ?>
                                <p class="mb-0 md:text-3xl text-xl font-semibold"><?php echo wp_kses_post($item["heading"]) ?></p>
                            <?php endif; ?>

                            <?php if ($item["modal"]["modal_name"] && !empty($item["modal"]["modal_name"])) : ?>
                                <button onclick="<?php echo str_replace(' ', '_', $item["modal"]["modal_name"]); ?>.showModal()"><?php echo $item["modal"]["modal_name"] ?></button>
                                <dialog id="<?php echo str_replace(' ', '_', $item["modal"]["modal_name"]); ?>" class="modal">
                                    <div class="modal-box rounded-none md:p-10 p-5 md:max-w-[60%]">
                                        <?php echo $item["modal"]["modal_content"]; ?>
                                        <?php
                                        $form_id = $item["modal"]["modal_id"];
                                        echo do_shortcode("[wpforms id='$form_id']"); ?>
                                    </div>
                                    <form method="dialog" class="modal-backdrop">
                                        <button>Close</button>
                                    </form>
                                </dialog>
                            <?php endif; ?>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>

                <?php if (!empty($program_details["disclaimer"])) : ?>
                    <div class="basis-full text-xs text-gray-300">
                        <?php echo wp_kses_post($program_details["disclaimer"]); ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $program_alumni_benefits = get_field("program_alumni_benefits");
    if ($program_alumni_benefits) :
    ?>
        <section class="section">
            <?php if (!empty($program_alumni_benefits["description"])) : ?>
                <div>
                    <?php echo wp_kses_post($program_alumni_benefits["description"]) ?>
                </div>
            <?php endif; ?>
        </section>
    <?php endif; ?>

    <?php
    $michigan_ross_advantage = get_field("michigan_ross_advantage");
    if ($michigan_ross_advantage) :
    ?>
        <section class="section bg-light-gray">
            <?php if (!empty($michigan_ross_advantage["section_heading"])) : ?>
                <h2><?php echo wp_kses_post($michigan_ross_advantage["section_heading"]); ?></h2>
            <?php endif; ?>

            <div class="flex md:flex-row flex-col justify-between md:gap-20 gap-5">
                <div class="flex-1">
                    <?php echo wp_kses_post($michigan_ross_advantage["main_description"]); ?>

                    <ul class="text-2xl list-none pl-0 flex gap-2 flex-wrap font-medium">
                        <?php if (!empty($michigan_ross_advantage["bottom_benefits"]) && count($michigan_ross_advantage["bottom_benefits"])) :
                            foreach ($michigan_ross_advantage["bottom_benefits"] as $item) : ?>
                                <li class="flex items-center gap-3 border py-2 px-3 bg-white md:basis-auto basis-full">
                                    <?php if (!empty($item["icon"])) : ?>
                                        <figure class="md:w-[40px] w-[30px]">
                                            <?php echo wp_get_attachment_image($item["icon"], "large", false, [
                                                "loading" => "lazy",
                                                "class" => "image-cover",
                                            ]); ?>
                                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($item["icon"]) ?? "Michigan Ross or XED website image"; ?></figcaption>
                                        </figure>
                                    <?php endif; ?>
                                    <?php echo $item["heading"]; ?>
                                </li>
                        <?php endforeach;
                        endif; ?>
                    </ul>
                </div>
                <?php
                $ranking_division = $michigan_ross_advantage["ranking_division"];
                if ($ranking_division) : ?>
                    <div class="shrink-0 flex md:gap-10 gap-5">
                        <div class="flex-1">
                            <?php if (!empty($ranking_division["division_heading"])) : ?>
                                <h3><?php echo $ranking_division["division_heading"] ?></h3>
                            <?php endif; ?>
                            <div class="w-fit space-y-3 text-white">
                                <?php if (count($ranking_division["rankings"])) {
                                    foreach ($ranking_division["rankings"] as $item) {
                                ?>
                                        <div class="flex bg-primary md:gap-5 gap-3 p-3">
                                            <p style="font-family: Atkinson Hyperlegible;" class="text-third text-3xl font-bold mb-0">
                                                <?php echo wp_kses_post($item["ranking"])  ?>
                                            </p>
                                            <p class="mb-0">
                                                <span class="font-medium"><?php echo wp_kses_post($item["heading"]) ?></span> <br>
                                                <span class="text-sm"><?php echo wp_kses_post($item["sub_description"]) ?></span>
                                            </p>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $program_highlight = get_field("program_highlight");
    if ($program_highlight) :
    ?>
        <section class="section">
            <div>
                <?php if (!empty($program_highlight["section_heading"])) : ?>
                    <h2><?php echo wp_kses_post($program_highlight["section_heading"]) ?></h2>
                <?php endif; ?>
                <br>
                <ul class="flex pl-0 md:gap-10 gap-5 flex-wrap list-none text-center">
                    <?php if ($program_highlight["features_list"] && count($program_highlight["features_list"])) {
                        foreach ($program_highlight["features_list"] as $item) { ?>
                            <li class="space-y-5 md:basis-1/4 sm:basis-1/3 basis-full flex-1">
                                <figure class="w-28 mx-auto aspect-square">
                                    <?php echo wp_get_attachment_image($item["icon"], "medium", false, [
                                        "loading" => "lazy",
                                        "class" => "image-contain",
                                    ]); ?>
                                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($item["icon"]) ?? "Michigan Ross or XED website image"; ?></figcaption>
                                </figure>
                                <div>
                                    <?php if (!empty($item["heading"])) : ?>
                                        <h4><?php echo wp_kses_post($item["heading"]) ?></h4>
                                    <?php endif; ?>
                                    <div>
                                        <?php if (!empty($item["description"])) : ?>
                                            <?php echo wp_kses_post($item["description"]) ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                    <?php }
                    } ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $curriculum = get_field("curriculum");
    if ($curriculum) :
    ?>
        <section class="section bg-light-gray">
            <div>

                <?php if (!empty($curriculum["section_heading"])) : ?>
                    <h2><?php echo wp_kses_post($curriculum["section_heading"]) ?></h2>
                <?php endif; ?>
                <?php if (!empty($curriculum["section_heading"])) : ?>
                    <div>
                        <?php echo wp_kses_post($curriculum["description"]) ?>
                    </div>
                <?php endif; ?>

                <div class="space-y-3">
                    <?php if ($curriculum["accordion"] && count($curriculum["accordion"])) {
                        foreach ($curriculum["accordion"] as $item) { ?>
                            <div class="collapse collapse-arrow bg-white border-border group border rounded-none">
                                <input type="checkbox" />
                                <div class="collapse-title text-xl font-medium group-focus:text-primary">
                                    <?php if (!empty($item["heading"])) :  ?>
                                        <h3 class="mb-0 text-inherit"><?php echo wp_kses_post($item["heading"]) ?></h3>
                                    <?php endif; ?>
                                </div>
                                <?php if (!empty($item["description"])) :  ?>
                                    <div class="collapse-content">
                                        <?php echo wp_kses_post($item["description"]) ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $days_of_coaching = get_field("100_days_of_coaching");
    if ($days_of_coaching) :
    ?>
        <section class="section">
            <div>
                <?php if (!empty($days_of_coaching["section_heading"])) :  ?>
                    <h2><?php echo wp_kses_post($days_of_coaching["section_heading"]) ?></h2>
                <?php endif; ?>
                <?php if (!empty($days_of_coaching["sub_heading"])) :  ?>
                    <h3><?php echo wp_kses_post($days_of_coaching["sub_heading"]) ?></h3>
                <?php endif; ?>

                <?php if ($days_of_coaching["yt_video"] && $days_of_coaching["yt_video"]["video_id"]) : ?>
                    <div class="md:w-4/5 w-full my-5">
                        <figure class="cursor-pointer relative group bg-light-gray aspect-video" onclick="lazyLoadVideo('<?php echo $days_of_coaching['yt_video']['video_id'] ?>', this)">
                            <?php echo wp_get_attachment_image($days_of_coaching["yt_video"]["thumbnail"], "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($days_of_coaching["yt_video"]["thumbnail"]) ?? "Michigan Ross or XED website image"; ?></figcaption>

                            <div class="play-btn group-hover:scale-110 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-6xl sm:text-4xl text-3xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                <?php endif; ?>

                <?php if (!empty($days_of_coaching["imagine"])) : ?>
                    <div>
                        <?php echo wp_kses_post($days_of_coaching["imagine"]) ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($days_of_coaching["course_testimonials"])) : ?>
                    <div class="bg-light-gray md:p-10 p-5">
                        <?php echo wp_kses_post($days_of_coaching["course_testimonials"]) ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $faculty = get_field("faculty");
    if ($faculty) :
    ?>
        <section class="section-y">
            <div class="section-x">
                <?php if (!empty($faculty["section_heading"])) :  ?>
                    <h2><?php echo wp_kses_post($faculty["section_heading"]) ?></h2>
                <?php endif; ?>
                <?php if (!empty($faculty["description"])) :  ?>
                    <div><?php echo wp_kses_post($faculty["description"]) ?></div>
                <?php endif; ?>
            </div>

            <div class="relative">
                <button name="slide previous" aria-label="slide previous" class="faculty-slick-prev md:left-32 left-2 slick-btn">
                    <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                        <g transform="translate(608 0) scale(-1 1)">
                            <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                        </g>
                    </svg>
                </button>
                <button name="slide next" aria-label="slide next" class="faculty-slick-next md:right-32 right-2 slick-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                        <g transform="translate(608 0) scale(-1 1)">
                            <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                        </g>
                    </svg>
                </button>

                <div class="slick-slider-faculty md:px-44 px-5 relative z-0">
                    <?php if ($faculty["faculty_list"] && count($faculty["faculty_list"])) {
                        foreach ($faculty["faculty_list"] as $item) { ?>
                            <div class="p-6 h-full">
                                <figure class="bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                                    <?php if (!empty($item["profile_image"])) : ?>
                                        <?php echo wp_get_attachment_image($item["profile_image"], "medium", false, [
                                            "loading" => "lazy",
                                            "class" => "image-cover",
                                        ]); ?>
                                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($item["profile_image"]) ?? "Michigan Ross or XED website image"; ?></figcaption>
                                    <?php endif; ?>
                                </figure>
                                <?php if (!empty($item["title"])) : ?>
                                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0"><?php echo wp_kses_post($item["title"]) ?></p>
                                <?php endif; ?>
                                <?php if (!empty($item["title"])) : ?>
                                    <p class="mb-2 text-left text-sm"><?php echo wp_kses_post($item["title"]) ?></p>
                                <?php endif; ?>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $experts = get_field("global_industry_experts");
    if ($experts) :
    ?>
        <section class="section-y">
            <div class="section-x">
                <?php if (!empty($experts["section_heading"])) :  ?>
                    <h2><?php echo wp_kses_post($experts["section_heading"]) ?></h2>
                <?php endif; ?>
            </div>

            <div class="relative">
                <button name="slide previous" aria-label="slide previous" class="global-experts-slick-prev md:left-32 left-2 slick-btn">
                    <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                        <g transform="translate(608 0) scale(-1 1)">
                            <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                        </g>
                    </svg>
                </button>
                <button name="slide next" aria-label="slide next" class="global-experts-slick-next md:right-32 right-2 slick-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                        <g transform="translate(608 0) scale(-1 1)">
                            <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                        </g>
                    </svg>
                </button>

                <div class="slick-slider-global-experts md:px-44 px-5 relative z-0">
                    <?php if ($experts["experts_list"] && count($experts["experts_list"])) {
                        foreach ($experts["experts_list"] as $item) { ?>
                            <div class="p-6 h-full">
                                <figure class="bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                                    <?php if (!empty($item["profile_image"])) : ?>
                                        <?php echo wp_get_attachment_image($item["profile_image"], "medium", false, [
                                            "loading" => "lazy",
                                            "class" => "image-cover",
                                        ]); ?>
                                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($item["profile_image"]) ?? "Michigan Ross or XED website image"; ?></figcaption>
                                    <?php endif; ?>
                                </figure>
                                <?php if (!empty($item["title"])) : ?>
                                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0"><?php echo wp_kses_post($item["title"]) ?></p>
                                <?php endif; ?>
                                <?php if (!empty($item["title"])) : ?>
                                    <p class="mb-2 text-left text-sm"><?php echo wp_kses_post($item["title"]) ?></p>
                                <?php endif; ?>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $certificate = get_field("certificate");
    if ($certificate) :
    ?>
        <section>
            <div>
                <div class="section-x">
                    <?php if (!empty($certificate["section_heading"])) :  ?>
                        <h2><?php echo wp_kses_post($certificate["section_heading"]) ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($certificate["description"])) :  ?>
                        <div><?php echo wp_kses_post($certificate["description"]) ?></div>
                    <?php endif; ?>
                </div>
                <div class="relative md:min-h-[600px] min-h-[400px]">
                    <div class="md:w-1/2 w-4/5 md:h-[80%] h-[60%] absolute bg-light-gray left-1/2 top-5 z-20 -translate-x-1/2">
                        <figure class="h-full border-2 border-secondary bg-white">
                            <?php if (!empty($certificate["certificate_image"])) : ?>
                                <?php echo wp_get_attachment_image($certificate["certificate_image"], "large", false, [
                                    "loading" => "lazy",
                                    "class" => "image-contain",
                                ]); ?>
                                <figcaption class="sr-only"><?php echo wp_get_attachment_caption($certificate["certificate_image"]) ?? "Michigan Ross or XED website image"; ?></figcaption>
                            <?php endif; ?>
                        </figure>
                    </div>
                    <?php if (!empty($certificate["lower_description"])) :  ?>
                        <div class="h-[50%] text-xs text-gray-300 w-full bg-primary flex flex-col justify-end section-x absolute z-10 bottom-0 left-0">
                            <?php echo wp_kses_post($certificate["lower_description"]) ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>


    <?php
    $a_world_class_experience = get_field("a_world_class_experience");
    if ($a_world_class_experience) :
    ?>
        <section class="section">
            <div>
                <?php if (!empty($a_world_class_experience["section_heading"])) :  ?>
                    <h2><?php echo wp_kses_post($a_world_class_experience["section_heading"]) ?></h2>
                <?php endif; ?>

                <?php if (!empty($a_world_class_experience["description"])) :  ?>
                    <div><?php echo wp_kses_post($a_world_class_experience["description"]) ?></div>
                <?php endif; ?>


                <?php if (!empty($a_world_class_experience["sub_heading"])) :  ?>
                    <div><?php echo wp_kses_post($a_world_class_experience["sub_heading"]) ?></div>
                <?php endif; ?>

                <ul class="list-none mt-5 pl-0 flex flex-wrap gap-3">
                    <?php
                    if (isset($a_world_class_experience["designation_list"]) && is_array($a_world_class_experience["designation_list"]) && !empty($a_world_class_experience["designation_list"])) {
                        foreach ($a_world_class_experience["designation_list"] as $item) { ?>
                            <li class="px-5 py-3 border md:w-fit w-full border-secondary"><?php echo wp_kses_post($item["designation"]); ?></li>
                    <?php }
                    }
                    ?>

                </ul>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $michigan_ross_about = get_field("michigan_ross_about");
    if ($michigan_ross_about) :
    ?>
        <section class="section flex md:gap-10 gap-5 md:flex-row flex-col-reverse">
            <div class="flex-1">
                <?php if (!empty($michigan_ross_about["section_heading"])) :  ?>
                    <h2><?php echo wp_kses_post($michigan_ross_about["section_heading"]) ?></h2>
                <?php endif; ?>

                <?php if (!empty($michigan_ross_about["description"])) :  ?>
                    <div><?php echo wp_kses_post($michigan_ross_about["description"]) ?></div>
                <?php endif; ?>

                <ul class="list-none pl-0 divide-y divide-third">
                    <?php
                    if (isset($michigan_ross_about["fact_and_figures"]) && is_array($michigan_ross_about["fact_and_figures"]) && !empty($michigan_ross_about["fact_and_figures"])) {
                        foreach ($michigan_ross_about["fact_and_figures"] as $item) { ?>
                            <li class="flex gap-5 py-6">
                                <?php if (!empty($item["ranking"])) : ?>
                                    <span style="font-family: Atkinson Hyperlegible;" class="text-primary font-bold md:text-6xl text-5xl"><?php echo wp_kses_post($item["ranking"]) ?></span>
                                <?php endif; ?>

                                <p class="mb-0">
                                    <?php if (!empty($item["heading"])) : ?>
                                        <span class="block font-medium">
                                            <?php echo wp_kses_post($item["heading"]) ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if (!empty($item["sub_heading"])) : ?>
                                        <span class="block">
                                            <?php echo wp_kses_post($item["sub_heading"]) ?>
                                        </span>
                                    <?php endif; ?>
                                </p>
                            </li>
                    <?php }
                    }
                    ?>
                </ul>
            </div>
            <div class="flex-1">
                <?php if (!empty($michigan_ross_about["main_image"])) : ?>
                    <figure class="w-full">
                        <?php echo wp_get_attachment_image($michigan_ross_about["main_image"], "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($michigan_ross_about["main_image"]) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $who_is_this_program_for = get_field("who_is_this_program_for");
    if ($who_is_this_program_for) :
    ?>
        <section class="section bg-light-gray">
            <div>
                <?php if (!empty($who_is_this_program_for["section_heading"])) :  ?>
                    <h2><?php echo wp_kses_post($who_is_this_program_for["section_heading"]) ?></h2>
                <?php endif; ?>

                <?php if (!empty($who_is_this_program_for["description"])) :  ?>
                    <div><?php echo wp_kses_post($who_is_this_program_for["description"]) ?></div>
                <?php endif; ?>

                <ul class="list-none space-y-2 pl-0 font-medium">
                    <?php
                    if (isset($who_is_this_program_for["requirement_list"]) && is_array($who_is_this_program_for["requirement_list"]) && !empty($who_is_this_program_for["requirement_list"])) {
                        foreach ($who_is_this_program_for["requirement_list"] as $item) { ?>
                            <li class="flex md:items-center gap-2">
                                <figure class="md:size-[40px] md:text-lg size-[30px] shrink-0">
                                    <?php echo wp_get_attachment_image($item["icon"], "thumbnail", false, [
                                        "loading" => "lazy",
                                        "class" => "image-cover",
                                    ]); ?>
                                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($item["icon"]) ?? "Michigan Ross or XED website image"; ?></figcaption>
                                </figure>
                                <?php echo wp_kses_post($item["heading"]) ?>
                            </li>
                    <?php }
                    } ?>
                </ul>

                <?php if ($who_is_this_program_for["main_action"] && $who_is_this_program_for["main_action"]["url"] && $who_is_this_program_for["main_action"]["title"]) : ?>
                    <a href="<?php echo $who_is_this_program_for["main_action"]["url"] ?>" class="cbtn-primary"><?php echo $who_is_this_program_for["main_action"]["title"] ?></a>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $inquire_for_your_organisation = get_field("inquire_for_your_organisation");
    if ($inquire_for_your_organisation) :
    ?>
        <section class="section bg-light-gray">
            <div>
                <?php if (!empty($inquire_for_your_organisation["section_heading"])) :  ?>
                    <h2><?php echo wp_kses_post($inquire_for_your_organisation["section_heading"]) ?></h2>
                <?php endif; ?>

                <?php if (!empty($inquire_for_your_organisation["description"])) :  ?>
                    <div><?php echo wp_kses_post($inquire_for_your_organisation["description"]) ?></div>
                <?php endif; ?>

                <?php if ($inquire_for_your_organisation["main_action"] && $inquire_for_your_organisation["main_action"]["url"] && $inquire_for_your_organisation["main_action"]["title"]) : ?>
                    <a href="<?php echo $inquire_for_your_organisation["main_action"]["url"] ?>" class="cbtn-outline"><?php echo $inquire_for_your_organisation["main_action"]["title"] ?></a>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

</article>

<?php get_footer(); ?>