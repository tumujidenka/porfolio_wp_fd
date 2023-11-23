<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header(); ?>
</head>
<body>
    <?php get_template_part('/includes/header'); ?>
    <main
        <?php 
            if(get_query_var('paged') == 0){
                echo 'class="product"';
            }else{
                echo 'class="product--product2"';
            };
        ?> 
    >
		<div 
            <?php 
                if(get_query_var('paged') == 0){
                    echo 'class="product__headline"';
                }else{
                    echo 'class="product--product2__headline"';
                };
            ?> 
        >
			Products
		</div>
		<div 
            <?php 
                if(get_query_var('paged') == 0){
                    echo 'class="inner-main"';
                }else{
                    echo 'class="inner-main--product2"';
                };
            ?> 
        >
            <?php 
                $loop_counter = 0; 
                $args = array(
                    'post_type' => 'post',  // 投稿タイプ。通常の投稿の場合は'post'
                    'category_name' => 'products', //カテゴリの名称
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
                        <img alt="<?php get_the_title(); ?>" src="<?php echo the_post_thumbnail_url(get_the_ID(),'full');?>" > 
                    </div>
                    <div class="contents__description">
                        <p><?php the_title();?></p>
                        <p>¥<?php echo get_post_meta($post_id,'price',true)?> + tax</p>
                    </div>
                    </a>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif;?>
		</div>

		<div class="product__pagination">

        <?php
            if (function_exists("pagination")){
                pagination($query -> max_num_pages);
            }
        ?>
		</div>
	</main>

    <?php get_template_part('/includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>