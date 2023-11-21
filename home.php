<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header(); ?>
</head>
<body>
    <?php get_template_part('/includes/header'); ?>

    <main class="main">
		<div class="inner-main">
		<?php 
			$loop_counter = 0; 
			$args = array(
				'post_type' => 'post',  // 投稿タイプ。通常の投稿の場合は'post'
				'posts_per_page' => 8, // 表示する投稿数
				'orderby' => 'date',    // 日付でソート
				'order' => 'ASC'        // 昇順（古い投稿から順）
			);
			$query = new WP_Query($args);
		?>
		<?php if (have_posts()) : ?>
        	<?php while ($query -> have_posts() && $loop_counter<8) : $query -> the_post();
				$loop_counter++;
				$post_id = get_the_ID(); //現在の投稿のIDを取得
			?>
				<a class="contents" href="<?php the_permalink(); ?>">
				<div class="contents__figcontainer"><img alt="chair" src="<?php echo get_stylesheet_directory_uri(); ?>/img/item<?php echo $loop_counter?>.jpg"></div>
				<div class="contents__description">
					<p><?php the_title();?></p>
					<p>¥<?php echo get_post_meta($post_id,'price',true)?> + tax</p>
				</div></a>
	        <?php endwhile; ?>
		<?php endif; ?>
		</div><a class="main__viewmore" href="<?php echo esc_url(home_url('/category/products')); ?>">View More</a>
	</main>

    <?php get_template_part('/includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>