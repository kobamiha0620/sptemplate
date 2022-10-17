jQuery(function ($) {
	$(window).on('scroll', function () {
		const height = $(window).scrollTop();
		const $head = $('#header');
  		let headH = $head.height();

		if (height > headH) {
			$head.addClass('fixed');
		} else {
			$head.removeClass('fixed');
		}

	});

	function sideBar() {
		//ランキング記事
		let categoryName = new Array('ALL', 'FEMTECH', 'PMS', 'SEXUAL', 'for MEN', '月と運気の話', 'resarch');
		let slugname = new Array('news', 'pms', 'femtech', 'news', 'mens', 'well', 'resarch', 'aoki', 'echoice', 'personf', 'kokoro');
		let slugnameSelected = new Array('news', 'pms', 'femtech', 'news', 'mens', 'well', 'resarch', 'serial');
		let className = new Array('cate-pms', 'cate-femtech', 'cate-news', 'cate-mens', 'cate-well', 'cate-resarch', 'cate-aoki', 'cate-echoice', 'cate-personf', 'cate-kokoro', 'cate-serial');
		let withOut = new Array('cate-pms', 'cate-femtech', 'cate-news', 'cate-mens', 'cate-well', 'cate-resarch', 'cate-echoice', 'cate-serial', 'cate-uncategorized', 'cate-beauty');
		let cateFemech = $('#carousel__slide-femtech .cat-data');
		let catePms = $('#carousel__slide-pms .cat-data');
		let cateWell = $('#carousel__slide-well .cat-data');
		let cateMens = $('#carousel__slide-mens .cat-data');
		let cateResarch = $('#carousel__slide-resarch .cat-data');
		let cateSerial = $('#carousel__slide-serial .cat-data');



		//タブ切り替え
		$.each(slugnameSelected, function (index, value) {
			if ($('body').hasClass('category-' + value)) {
				$(".active").removeClass('active');
				$('.carousel__navigation-' + value).each(function () {
					$('.carousel__navigation-' + value).addClass('active');
				});
				$(".carousel__slide").removeClass("show");
				$('.carousel__slide-' + value).each(function () {
					$('.carousel__slide-' + value).addClass('show');
				});
			} else if ($('body').hasClass('page-' + value)) {
				$(".active").removeClass('active');
				$('.carousel__navigation-' + value).each(function () {
					$('.carousel__navigation-' + value).addClass('active');
				});
				$(".carousel__slide").removeClass("show");
				$('.carousel__slide-' + value).each(function () {
					$('.carousel__slide-' + value).addClass('show');
				});

			} else {
				$('.carousel__slide1').addClass('show');
				$('.carousel__navigation-home').addClass('active');
			}
		});


		cateFemech.removeClass(className).addClass('cate-femtech').text('フェムテック/ケア');
		catePms.removeClass(className).addClass('cate-pms').text('PMS／生理');
		cateWell.removeClass(className).addClass('cate-well').text('性');
		cateMens.removeClass(className).addClass('cate-mens').text('メンズ');
		cateResarch.removeClass(className).addClass('cate-resarch').text('みんなのリアル');

		for (i = 0; i < (withOut.length); i++) {
			cateSerial.each(function () {
				if ($(this).hasClass(withOut[i])) {
					$(this).css('display', 'none');
				}
			});

		}



		let tabs = $(".carousel__navigation-item"); // carousel__navigation-itemのクラスを全て取得し、変数tabsに配列で定義
		$(".carousel__navigation-item").on("click", function () { // tabをクリックしたらイベント発火
			$(".active").removeClass("active"); // activeクラスを消す
			$(this).addClass("active"); // クリックした箇所にactiveクラスを追加
			const index = tabs.index(this); // クリックした箇所がタブの何番目か判定し、定数indexとして定義
			$(".carousel__slide").removeClass("show").eq(index).addClass("show"); // showクラスを消して、contentクラスのindex番目にshowクラスを追加
		})

		//スクロール挙動
		let prev = $('.js-prevscroll');
		let next = $('.js-nextscroll');


		$(".js-nextscroll").click(function () {

			$(this).prev($(".js-scrollArea")).animate({
					scrollLeft: $(".js-scrollArea").scrollLeft() + 500,
				},
				300
			)
			return false
		});
		//ボタンを押すと左に0.3秒かけて300px移動

		$(".js-prevscroll").click(function () {

			$(this).next($(".js-scrollArea")).animate({
					scrollLeft: $(".js-scrollArea").scrollLeft() - 500,
				},
				300
			)
			return false
		});

	}
	sideBar();


	//スマホ画面で検索ボタン挙動
	function search() {
		let spbtn = $('#js-searchBtn');
		let spBg = $('#js-searchBg');
		let blc = $('#js-searchBlc');
		let body = $('body');
		spbtn.on('click', function () {
			if (spBg.hasClass('hide')) {
				spBg.removeClass('hide');
				body.css('overflow', 'hidden');
				blc.removeClass('hide');
			} else {
				spBg.addClass('hide');
				blc.addClass('hide');
				body.css('overflow', 'auto');
			}
		});
		spBg.on('click', function(){
			spBg.addClass('hide');
			blc.addClass('hide');

			body.css('overflow', 'auto');
		});

	}

	search();


	//ページ内スクロール
	function anchorScroll() {
		$('a[href^="#"]').click(function () {
			let href = $(this).attr("href");
			let target = $(href == "#" || href == "" ? 'html' : href);
			let position = target.offset().top;
			let positionPlus = position - 130;
			let speed = 300;

			console.log(positionPlus);
			$("html, body").animate({
				scrollTop: positionPlus
			}, speed, "swing");
			return false;
		});
	}

	anchorScroll();


	//コメント部分	
	jQuery(function ($) {
		let comBtn = $('#js-comment');
		let comCon = $('#js-commCont');
		comBtn.on('click', function () {
			comBtn.toggleClass('active');
			comCon.slideToggle();
		});
	});

	jQuery('.slick').slick({
		autoplay: true, // 自動再生
		autoplaySpeed: 2000, // 自動再生で切り替えをする時間
		speed: 800, // 自動再生でスライドさせるスピード
		arrows: false, // 左右の次へ、前へボタンを表示
		dots: true // 画像下のドット（ページ送り）を表示
	});

	jQuery('#epickList').slick({
		autoplay: true, // 自動再生
		autoplaySpeed: 3000, // 自動再生で切り替えをする時間
		speed: 200, // 自動再生でスライドさせるスピード
		arrows: true, // 左右の次へ、前へボタンを表示
		dots: false, // 画像下のドット（ページ送り）を表示
		slidesToShow: 5,
		slidesToScroll: 1,
		centerPadding: '6%',

		responsive: [{
			breakpoint: 768,　
			settings: {
				autoplay: true, // 自動再生
				autoplaySpeed: 3000, // 自動再生で切り替えをする時間
				speed: 800, // 自動再生でスライドさせるスピード
				arrows: false, // 左右の次へ、前へボタンを表示
				dots: false, // 画像下のドット（ページ送り）を表示
				slidesToShow: 1,
				slidesToScroll: 1,
				centerMode: true,
				centerPadding: '25%'
			 }
		 }]
	});

	jQuery('.epicShop__list').slick({
		autoplay: true, // 自動再生
		autoplaySpeed: 3000, // 自動再生で切り替えをする時間
		speed: 800, // 自動再生でスライドさせるスピード
		arrows: false, // 左右の次へ、前へボタンを表示
		dots: true // 画像下のドット（ページ送り）を表示
	});
	




	$('.drawer-nav').css('display', 'block');
	$('.drawer').drawer();


	//あなたの体とこころお悩み募集
	$('#consultation select').addClass('is-empty');
	// $('form').attr('autocomplete', 'off');
	// $('.wpcf7-form').attr('name', 'resettxt');
	// document.resettxt.reset();
	// let textForm = document.getElementById("onayamiTxt");
	// textForm.value = '';

	$('#consultation select').each(function () {
		// $('#consultation select').find('option:selected').prop('selected', false);
		$(this).on('focus, change', function () {
			if ($(this).val() !== "") {
				$(this).removeClass('is-empty');
			} else {
				$(this).addClass('is-empty');
			}
		});
	});



});



//JSの追加 ＋ 月星座のリンク自動更新
window.onload = function () {
	let now = new Date();
	let setDate = new Date();
	setDate.setHours(now.getHours() - 9);
	const year = setDate.getFullYear();
	const month = setDate.getMonth() + 1;

	let monthNum = ('00' + month).slice(-2);
	let splitYear1 =  ('0000' + year).slice(-2);
	let splitYear2 =  ('0000' + year).slice(-1);
	
	let splitYear1a = Math.floor(splitYear1 / 10);

	var linkNum = '/horoscope' + splitYear1a + splitYear2  + monthNum;


	const menuHoroscope = document.getElementsByClassName('js-luna');
	const linkLuna = menuHoroscope.children;
	// linkLuna.setAttribute('href', linkNum);
	const alinkTag = $('.js-luna a');
	alinkTag.attr("href", linkNum);

}


