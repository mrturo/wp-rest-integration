<?php get_header(); ?>

<main class='container'>
    <div class="row">
        <div class="col-12">
            <a href="<?php echo get_home_url()?>/..">(←Volver)</a> | 
			<strong>API REST - Wordpress - Javascript</strong><BR /><BR />
        </div>
    </div>
    <div class="row">
        <div class="col-12">
			<ul id="resultado"></ul>
        </div>
    </div>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/currency.js"></script>
</main>

<?php get_footer(); ?>