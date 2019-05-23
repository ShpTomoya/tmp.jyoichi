<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/style.css">
	<title><?= $selected_product['product_title'] ?> | EXCELLENT RELAXATION SALON JYOICHI（ジョーイチ）</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="icon" href="/img/favicon.ico">
	<link rel="apple-touch-icon" href="/img/apple-touch-icon-152x152.png" sizes="152x152">
	<link rel="icon" href="/img/android-chrome-192x192.png" sizes="192x192" type="image/png">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-22521619-9"></script>
	<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-22521619-9');
	</script>
</head>
<body>
	<?php include('header-product.php'); ?>
	<div class="wrap">
		<section class="u-mb64">
			<div class="product_info_container u-product_content">
				<img class="product_img" src="<?= $selected_product['img_url'] ?>" alt="商品画像">
				<div class="product_info">
					<h1 class="product_name font-mincho">
							<?= $selected_product['product_name'] ?>
					</h1>
					<div class="product_value">
						<?php
						if(isset($selected_product['product_amount_price'])):
							foreach($selected_product['product_amount_price'] as $productValue):?>
								<div class="product_value_list">
									<div class="product_amont">
										<?= $productValue['product_amount'] ?>
									</div>
									<div class="product_price">
										本体価格 <?= $productValue['product_price'] ?>円 + 税
									</div>
								</div>
						<?php
							endforeach;
						endif;
						?>
					</div>
					<div class="product_description">
						<?= $selected_product['product_description'] ?>
					</div>
					<div class="product_detail">
						<?php if(isset($selected_product['information_detail'])):
							foreach($selected_product['information_detail'] as $info):?>
							<p><?= $info ?></p>
						<?php
							endforeach;
						endif;
						?>
					</div>
				</div>
			</div>
		</section>
		<section class="u-mb128">
			<div class="u-product_content u-product_list_container">
				<h2 class="h-type1">商品一覧</h2>
				<div class="u-product_list">
					<?php foreach($products[$get_category] as $product): ?>
						<div class="u-product_item">
							<form action="/product/product_item.php" method="get">
							<img src="<?= $product['img_url'] ?>" alt="商品画像">
								<input type="hidden" name="id" value="<?= $product['id'] ?>">
								<input type="hidden" name="category" value="<?= $get_category ?>" >
								<input type="submit" value="">
								<h3><?= $product['product_name'] ?></h3>
							</form>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	</div>
	<?php include('../footer.php') ?>
</body>
</html>
