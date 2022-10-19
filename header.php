<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<!--エンコードがUTF-8であることを指定-->

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--viewportの設定-->

	<!--スタイルシートの呼び出し-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
		integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!--font-awesomeのスタイルシートの呼び出し-->

	<!-- </div>end container -->

	<!-- TOPページのみ -->
	<?php if ( is_home() || is_front_page() ) : ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"
		media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"
		media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/top.css" media="screen" />
	<?php endif; ?>


	<!--システム・プラグイン用-->
	<?php wp_head(); ?>

</head>

<body <?php body_class( ['drawer', 'drawer--left'] ) ; ?> style="background-color:#FFF; ">
<div id="navigation"></div>
	<header>
		<!-- ヘッダーここから -->
		<!-- ナビゲーションの中身 -->
		<nav class="drawer-nav newHeader__drawer" role="navigation" >
			<div class="newHeader__drawer--inner">
				<!-- メニューの読み込み -->
				<?php wp_nav_menu( array(
						'theme_location' => 'top_menu',
						'menu' => 'メイン',
						'menu_class' => 'drawer-menu',
						'depth' => 2,
					));
				?>

				<button type="button" class="drawer-toggle drawer-hamburger" id="navopen">
					<div class="hamburger">
						<span class="hamburger__line hamburger__line--1"></span>
						<span class="hamburger__line hamburger__line--2"></span>
						<span class="hamburger__line hamburger__line--3"></span>
					</div>
				</button>


				<ul class="newHeader__drawer--sns">
					<li><a href="https://www.instagram.com/femtechtv_official/" target="_blank"
							class="snsInsta">Instagram</a></li>

					<li><a href="https://www.tiktok.com/@femtechtv_official" target="_blank"
							class="snsTiktok">Tiktok</a></li>
					<li><a href="https://twitter.com/femtechtv_" target="_blank" class="snsTwitter">Twitter</a></li>
				</ul>

				<div class="newHeader__drawer--about">
					<figure class="logo"></figure>
					<p>生理、PMS、セクシャルな問題など自分のカラダについて、たった1人で悩んでいる皆さんへ。大切なのは、「知る」「共有する」こと。このフェムテックtvは、自分のカラダについての“知らなかった”をなくすためのフェムテック情報共有サイトです。毎日をイキイキと、自分らしく過ごすために。正しい情報を知って、話して、整える輪を広め、悩める女性がいなくなる世の中を目指します。
					</p>
				</div>

				<div class="newHeader__drawer--doctor">
					<p class="newHeader__drawer--doctor-ttl">Doctor</p>
					<div class="newHeader__drawer--doctor-intro">
						<div class="newHeader__drawer--doctor-introimg">池田先生</div>
						<p class="newHeader__drawer--doctor-name">池田 裕美枝 （いけだ ゆみえ）</p>
					</div>
					<div class="newHeader__drawer--doctor-resume">
						<p>・医師（京都大学大学院医学研究科社会健康医学系専攻健康情報学分野博士課程）</p>
						<p>・NPO法人女性医療ネットワーク副理事長</p>
						<p>・京都大学リプロダクティブヘルス＆ライツライトユニット代表</p>
						<p>・ソーシャルワークプラットフォームKYOTO SCOPE事務局代表</p>
					</div>
					<p class="newHeader__drawer--doctor-txt">
						京都大学医学部卒業後、産婦人科として勤務。現在、博士課程にて女性の社会的孤立や月経前症候群による社会的インパクトなどを研究している。</p>
				</div>

				<ul class="newHeader__drawer--otherlink">
					<li><a href="/company-information/">会社概要</a></li>
					<li><a href="/ad/">メディア関係者・取材依頼</a></li>
					<li><a href="/privacy/">プライバシーポリシー</a></li>
					<li><a href="/contact-us/">お問い合わせ</a></li>
				</ul>

			</div>
		</nav>
		<!-- /ナビゲーションの中身 -->

		<div id="header">

		<section class="header__topcon" id="js-headertop">
			<div class="header__topleft">
				<button type="button" class="drawer-toggle drawer-hamburger" id="navClose">
					<div class="hamburger" style="position: relative;">
						<span class="hamburger__line hamburger__line--1"></span>
						<span class="hamburger__line hamburger__line--2"></span>
						<span class="hamburger__line hamburger__line--3"></span>
					</div>
				</button>
				<h1 class="header__logo"><a href="/">フェムテックtv</a></h1>
			</div>
			<div class="header__topright">
				<a class="header__search" id="js-searchBtn">検索</a>

				<ul class="newHeader__htop--sns">
					<li><a href="https://www.instagram.com/femtechtv_official/" target="_blank"
							class="snsInsta">Instagram</a></li>
					<li><a href="https://www.tiktok.com/@femtechtv_official" target="_blank"
							class="snsTiktok">Tiktok</a></li>
					<li><a href="https://twitter.com/femtechtv_" target="_blank" class="snsTwitter">Twitter</a></li>
				</ul>
			</div>

		</section>
		<div class="header__btm newHeader__wrapper">
			<div class="newHeader__cate--wrapper">
				<!--ヘッダーメニュー-->
				<?php wp_nav_menu( array(
				'theme_location' => 'top_menu',
				'menu' => 'メイン',
				'container' => 'nav',
				'depth' => 1,
				'container_class' => 'newHeader__cate',
				'container_id' => 'newHeader__cate'
			) ); ?>
			</div>
		</div>
		<!-- ヘッダーここまで -->

		</div>



	</header>


	<div class="search__bg hide" id="js-searchBg"></div>
	<div class="search__blc hide" id="js-searchBlc">
		<?php get_template_part('template_parts/search'); ?>
	</div>

<!-- カテゴリーページの場合 category.phpに移動予定 -->
<?php if( is_category() ) : ?>
	<?php  get_template_part('template_parts/cate-fv');?>

<?php endif; ?>
<!-- カテゴリーページの場合 -->


	<div class="container__wrapper">