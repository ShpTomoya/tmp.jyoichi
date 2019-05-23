<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $category[$get_category]['series_name_title'] ?> 商品一覧 | EXCELLENT RELAXATION SALON JYOICHI（ジョーイチ）</title>
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/style.css">
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
			<div class="u-product_mv <?= $get_category ?>">
				<div class="product_mv_textarea">
					<h2 class="product_mv_textarea_heading font-mincho"><?= $category[$get_category]['mainvisual_text_headline'] ?></h2>
					<?php if(!empty($category[$get_category]['mainvisual_text'])): ?>
						<p class="product_mv_textarea_text font-mincho"><?= $category[$get_category]['mainvisual_text'] ?></p>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<section class="u-mb64">
			<div class="u-product_content series_description">
				<?php if(!empty($category[$get_category]['series_description'])): ?>
					<h1 class="h-type1 font-mincho"><?= $category[$get_category]['series_name_html'] ?></h1>
				<?php endif; ?>
				<p><?= $category[$get_category]['series_description'] ?></p>
			</div>
		</section>
		<section class="u-mb80">
			<div class="u-product_content u-product_list_container">
				<div class="u-product_list">
					<?php foreach($products[$get_category] as $product): ?>
		  			<div class="u-product_item">
		  				<form action="/product/product_item.php" method="get">
							<img src="<?= $product['img_url'] ?>" alt="商品画像">
		  					<input type="hidden" name="id" value="<?= $product['id'] ?>">
		  					<input type="hidden" name="category" value="<?= $get_category ?>" >
		  					<input type="submit" value="">
		  					<h3 class="font-mincho"><?= $product['product_name'] ?></h3>
		  				</form>
		  			</div>
		  		<?php endforeach; ?>
				</div>
	    </div>
		</section>
		<?php include('../footer.php') ?>
	</div>
</body>
</html>
