<?php
// Template Name: Apply Now
get_header(); ?>

<article class="md:px-44 md:py-10 px-5 py-10">
    <div>
        <header class="space-y-5 mb-5">
            <p>
                Thank you for your interest in the Michigan Ross CXO Leadership Programme.
                <br>
                <br>
                Please provide your details below. The admissions team will review your credentials and contact you shortly.
                <br>
                <br>
            </p>
        </header>
        <div class="container mx-auto">
            <?php echo do_shortcode('[wpforms id="536" title="false"]'); ?>
        </div>
    </div>
</article>

<?php get_footer();
?>