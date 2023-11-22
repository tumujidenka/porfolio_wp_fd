<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header(); ?>
</head>
<body>
    <?php get_template_part('/includes/header'); ?>
    <main class="product">
		<div class="product__headline">
			Products
		</div>
		<div class="inner-main">
            <?php 
                $loop_counter = 0; 
                $args = array(
                    'post_type' => 'post',  // 投稿タイプ。通常の投稿の場合は'post'
                    'category_name' => 'products', //カテゴリの名称
                    'posts_per_page' => 12, // 表示する投稿数
                    'orderby' => 'date',    // 日付でソート
                    'order' => 'ASC',        // 昇順（古い投稿から順）
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1 // 現在のページ番号
                );
                $query = new WP_Query($args);
            ?>
            <?php if($query -> have_posts()): ?>
                <?php while($query -> have_posts()): $query -> the_post();
                    $loop_counter++;
                    $post_id = get_the_ID(); //現在の投稿のIDを取得
                ?>

                    <a class="contents" href="<?php the_permalink(); ?>">
                    <div class="contents__figcontainer">
                        <img alt="<?php the_title(); ?>" src="<?php echo get_stylesheet_directory_uri(); ?>/img/item<?php echo $loop_counter ?>.jpg"></div>
                    <div class="contents__description">
                        <p><?php the_title();?></p>
                        <p>¥<?php echo get_post_meta($post_id,'price',true)?> + tax</p>
                    </div></a>

                    <?php endwhile; ?>
            <?php endif;?>
		</div>

        <?php wp_reset_postdata(); ?>

		<div class="product__pagination">

        <?php
            if (function_exists("pagination")){
                pagination($wp_query -> max_num_pages);
            }
        ?>
        <!-- php
            echo paginate_links(array(
                'total' => $query->max_num_pages,
                'current' => max(1, get_query_var('paged')),
                'format' => 'page/%#%',
                'prev_text' => __('&laquo; Previous'),
                'next_text' => __('Next &raquo;'),
            ));
         -->

        <!-- <ul class="pages">
				<li class="pages__page">
					<a href="#">1</a>
				</li>
				<li class="pages__page">
					<a href="php echo esc_url(home_url('/category/products/page/2')); ?>">2</a>
				</li>
			</ul> -->
		</div>
	</main>

    <?php get_template_part('/includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>