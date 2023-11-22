<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header(); ?>
</head>
<body>
    <?php get_template_part('/includes/header'); ?>
	<section class="<?php echo get_post(get_the_ID()) -> post_name; ?>">
		<div class="<?php echo get_post(get_the_ID()) -> post_name; ?>__headline">
            <?php the_title(); ?>
		</div>

        <?php the_content(); ?>
    </section> 

    <?php get_template_part('/includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>