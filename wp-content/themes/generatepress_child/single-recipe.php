<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

get_header();

if (have_posts()) :
while (have_posts()) : the_post();

$ingredients=get_field('recipe_ingredients');
$steps=get_field('recipe_steps');
?>

<section class="recipe-article">
	<div class="article">
		<div class="article-title">
			<h1><?= the_title() ?></h1>
		</div>
		<div class="article-picture">
			<img src="<?= get_field('recipe_pict') ?>" alt="image <?= the_title() ?>">
		</div>
		<div class="article-metadata">
			<div class="metadata">
				<svg class="metadata-icon" data-slot="icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<path clip-rule="evenodd" fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"></path>
				</svg>
				<span class="metadata-data"><?= get_field('recipe_cooking_time') ?> min</span>
			</div>
			<div class="metadata">
				<svg class="metadata-icon" data-slot="icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<path d="M11.644 1.59a.75.75 0 0 1 .712 0l9.75 5.25a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0l-9.75-5.25a.75.75 0 0 1 0-1.32l9.75-5.25Z"></path>
					<path d="m3.265 10.602 7.668 4.129a2.25 2.25 0 0 0 2.134 0l7.668-4.13 1.37.739a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.71 0l-9.75-5.25a.75.75 0 0 1 0-1.32l1.37-.738Z"></path>
					<path d="m10.933 19.231-7.668-4.13-1.37.739a.75.75 0 0 0 0 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 0 0 0-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 0 1-2.134-.001Z"></path>
				</svg>
				<span class="metadata-data"><?= count($steps) ?> étapes</span>
			</div>
			<div class="metadata">
				<svg class="metadata-icon" data-slot="icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<path d="M11.644 1.59a.75.75 0 0 1 .712 0l9.75 5.25a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0l-9.75-5.25a.75.75 0 0 1 0-1.32l9.75-5.25Z"></path>
					<path d="m3.265 10.602 7.668 4.129a2.25 2.25 0 0 0 2.134 0l7.668-4.13 1.37.739a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.71 0l-9.75-5.25a.75.75 0 0 1 0-1.32l1.37-.738Z"></path>
					<path d="m10.933 19.231-7.668-4.13-1.37.739a.75.75 0 0 0 0 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 0 0 0-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 0 1-2.134-.001Z"></path>
				</svg>
				<span class="metadata-data"><?= count($ingredients) ?> ingrédients </span>
			</div>
		</div>
		<div class="article-element">
			<h2>Ingrédients</h2>
			<ul class="ingredients">
				<?php foreach($ingredients as $ingredient){ ?>
					<li><?= $ingredient ?></li>
				<?php } ?>
			</ul>
		</div>
		<div class="article-element">
			<h2>Etapes</h2>
			<ul class="steps">
				<?php for($i=1;$i<= count($steps);$i++){ ?>
					<li><span>Etape <?= $i ?></span></br><?= $steps["step_".$i] ?></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</section>



<?php
endwhile;
endif;

get_footer();