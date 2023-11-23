<header class="header">
		<div class="inner-header">
			<div class="inner-header__logo">
				<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
			</div>
			<div class="inner-header__hamburger-menu" id="hamburger_menu">
				<span class="inner-header__hamburger-menu--upper-line"></span> <span class="inner-header__hamburger-menu--lower-line"></span>
			</div>
		</div>
		<section class="navigation" id="navigation">
			<div class="inner-navigation">
				<nav class="inner-navigation__menu">
					<ul class="nav-menu" id="nav-menu">
                        <?php
                            $page_id_about = get_page_by_path('about');
                            $page_title_about = get_the_title($page_id_about);
                            $page_id_company = get_page_by_path('company');
                            $page_title_company = get_the_title($page_id_company);
                        ?>
						<li class="nav-menu__title">
							<a href="<?php echo esc_url(home_url('/category/products')); ?>">PRODUCT</a>
						</li>
						<li class="nav-menu__title">
							<a href="<?php echo get_permalink($page_id_about);?>"><?php echo $page_title_about ?></a>
						</li>
						<li class="nav-menu__title">
							<a href="<?php echo get_permalink($page_id_company);?>"><?php echo $page_title_company ?></a>
						</li>
						<li class="nav-menu__title">
							<a href="mailto:xxxxxx@xxx.xxx?subject=%E3%81%8A%E5%95%8F%E3%81%84%E5%90%88%E3%82%8F%E3%81%9B">CONTACT</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>
	</header>
