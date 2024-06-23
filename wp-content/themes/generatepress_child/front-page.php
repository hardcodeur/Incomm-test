<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

$args = array(
	'post_type' => 'recipe',
	'posts_per_page' => 5, 
	'orderby' => 'date',
	'order' => 'DESC',
);

$recipe_query = new WP_Query($args);

get_header(); 
?>
<section class="recipe_cards">
	<?php if ($recipe_query->have_posts()) : ?>
	<h1>Nos dernières recettes</h1>
	<div class="grid">
		<?php while ($recipe_query->have_posts()) : $recipe_query->the_post(); ?>
		<article class="recipe-card">
			<header>
				<a class="card-link" href="<?= the_permalink(); ?>" target="_blank">
					<img class="card-img" src="<?= get_field('recipe_pict') ?>" alt="image <?= the_title() ?>">
				</a>
			</header>
			<h2 class="card-title"><?= the_title() ?></h2>
            <p class="card-description"><?= get_field('recipe_description') ?></p>
		</article>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
</section>

<?php
get_footer();