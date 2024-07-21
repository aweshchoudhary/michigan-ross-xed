<?php
// Template Name: Eligibility Form
get_header(); ?>

<article class="md:px-44 md:py-10 px-5 py-10">
    <div>
        <header class="space-y-5 mb-5">
            <h1>Program Eligibility</h1>
            <p>
                Please provide your details. The Admissions Team will review your credentials and get back to you shortly.
            </p>
        </header>
        <div class="container mx-auto">
            <?php echo do_shortcode('[wpforms id="540" title="false"]'); ?>
        </div>
    </div>
</article>

<?php get_footer();
?>