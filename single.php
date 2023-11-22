<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header(); ?>
</head>
<body>
    <?php get_template_part('/includes/header'); ?>

	<main class="main">
		<div class="inner-main--item">
        <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
			<div class="inner-main--item__headline">
				<?php the_title();?>
			</div>
			<div class="inner-main--item__contents">
				<div class="item-detail">
					<div class="item-detail__figure"><img alt="<?php the_title();?>" src="<?php the_post_thumbnail_url('full') ?>"></div>
					<div class="item-right">
						<div class="item-right__description">
                            <?php the_content(); ?>

						</div>
						<div class="item-right__price">
                            <?php $post_id = get_the_ID(); //現在の投稿のIDを取得 ?>
							¥<?php echo get_post_meta($post_id,'price',true);?> + tax
						</div>
						<div class="item-right__supplement">
							<table>
								<tr>
									<th>SIZE：</th>
									<td><?php echo get_post_meta($post_id,'size',true);?></td>
								</tr>
								<tr>
									<th>COLOR：</th>
									<td><?php echo get_post_meta($post_id,'color',true);?></td>
								</tr>
								<tr>
									<th>MATERIAL：</th>
									<td><?php echo get_post_meta($post_id,'material',true);?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="inner-main--item__back">
				<a href="<?php echo esc_url(home_url('/category/products')); ?>">Back To Product</a>
			</div>
            <?php endwhile; ?>
            <?php endif; ?>
		</div>
	</main>




    <?php get_template_part('/includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>