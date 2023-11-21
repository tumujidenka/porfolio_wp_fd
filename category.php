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
			<a class="contents" href="./item1.html">
			<div class="contents__figcontainer"><img alt="chair" src="./asset/media/chair.jpg"></div>
			<div class="contents__description">
				<p>chair</p>
				<p>¥10,000 + tax</p>
			</div></a>
			<div class="contents">
				<div class="contents__figcontainer"><img alt="chair_and_plant" src="./asset/media/chair_and_plant.jpg"></div>
				<div class="contents__description">
					<p>chair and plant</p>
					<p>¥25,000 + tax</p>
				</div>
			</div>
			<div class="contents">
				<div class="contents__figcontainer"><img alt="design_chair" src="./asset/media/design_chair.jpg"></div>
				<div class="contents__description">
					<p>designed chair</p>
					<p>¥18,000 + tax</p>
				</div>
			</div>
			<div class="contents">
				<div class="contents__figcontainer"><img alt="desk_and_chair" src="./asset/media/desk_and_chair.jpg"></div>
				<div class="contents__description">
					<p>desk and chair</p>
					<p>¥30,000 + tax</p>
				</div>
			</div>
			<div class="contents">
				<div class="contents__figcontainer"><img alt="diningtable_and_chair" src="./asset/media/diningtable_and%20_chair.jpg"></div>
				<div class="contents__description">
					<p>dining table and chair</p>
					<p>¥35,000 + tax</p>
				</div>
			</div>
			<div class="contents">
				<div class="contents__figcontainer"><img alt="diningtable_and_sofa" src="./asset/media/diningtable_and_sofa.jpg"></div>
				<div class="contents__description">
					<p>dining table and sofa</p>
					<p>¥80,000 + tax</p>
				</div>
			</div>
			<div class="contents">
				<div class="contents__figcontainer"><img alt="hanging_bench" src="./asset/media/hanging%20bench.jpg"></div>
				<div class="contents__description">
					<p>hanging bench</p>
					<p>¥25,000 + tax</p>
				</div>
			</div>
			<div class="contents">
				<div class="contents__figcontainer"><img alt="hard_chair" src="./asset/media/hard_chair.jpg"></div>
				<div class="contents__description">
					<p>hard chair</p>
					<p>¥15,000 + tax</p>
				</div>
			</div>
			<div class="contents">
				<div class="contents__figcontainer"><img alt="hard_chair" src="./asset/media/light_1.jpg"></div>
				<div class="contents__description">
					<p>hard chair</p>
					<p>¥15,000 + tax</p>
				</div>
			</div>
			<div class="contents">
				<div class="contents__figcontainer"><img alt="hard_chair" src="./asset/media/mirror.jpg"></div>
				<div class="contents__description">
					<p>hard chair</p>
					<p>¥15,000 + tax</p>
				</div>
			</div>
			<div class="contents">
				<div class="contents__figcontainer"><img alt="hard_chair" src="./asset/media/single_chair.jpg"></div>
				<div class="contents__description">
					<p>hard chair</p>
					<p>¥15,000 + tax</p>
				</div>
			</div>
			<div class="contents">
				<div class="contents__figcontainer"><img alt="hard_chair" src="./asset/media/single_sofa.jpg"></div>
				<div class="contents__description">
					<p>hard chair</p>
					<p>¥15,000 + tax</p>
				</div>
			</div>
		</div>
		<div class="product__pagination">
			<ul class="pages">
				<li class="pages__page">
					<a href="#">1</a>
				</li>
				<li class="pages__page">
					<a href="./product2.html">2</a>
				</li>
			</ul>
		</div>
	</main>
    
    <?php get_template_part('/includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>