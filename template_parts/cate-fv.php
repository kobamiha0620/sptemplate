
<section class="cate__fv" id="cateTop">
    <div class="cate__fv--inner">
<h1 class="fontM"><?php single_cat_title(); ?></h1>
<?php if(is_category('pms')) : ?>
<!-- pms生理 -->
  <p class="catephp__txt">
月経が始まる3～10日前の排卵後に訪れる身体的・精神的な不調であるPMS。そして、その症状は人それぞれ。毎月訪れる不調と、上手に付き合っていくための方法をお届けします。</p>

<a href="/pms-upset/" target="_blank" class="catephp__link" rel="noopener">もっと詳しく</a>

<!-- フェムテック -->
<?php elseif(is_category('femtech')) : ?>
    <p class="catephp__txt">女性が抱える健康課題を解決するためのプロダクトやサービス全般を指すフェムテックと紐付け、女性の健康について、様々な角度からアプローチしていきます。</p>
<p><a class="catephp__link" href="/femtech01/" rel="noopener">もっと詳しく</a></p>

<!-- 性 -->
<?php elseif(is_category('well')) : ?>
    <p class="catephp__txt">“セクシュアリティに対して身体的、感情的、精神的、社会的にも健康な状態であること”(世界保健機関(WHO))。女性の性の健康について、多角度から考えていきます。</p>
<p><a class="catephp__link" href="/news18/" rel="noopener">もっと詳しく</a></p>


<!-- メンズ -->
<?php elseif(is_category('mens')) : ?>
    <p class="catephp__txt">男性向けフェムテック情報ページです。生理や出産など男性には体験できないことだからこそ、女性の体について、少しずつ理解を深めることから始めてみませんか？</p>
<p><a href="https://femtech.tv/aboutformens/" class="catephp__link" rel="noopener">もっと詳しく</a></p>

<!-- みんなのリアル -->
<?php elseif(is_category('resarch')) : ?>
    <p class="catephp__txt">20〜40代の男女各300名を対象に、独自のアンケート調査を実施。女性の体にまつわる現代の「リアル」を、調査結果データをもとに紐解いていきます。</p>
<a href="https://femtech.tv/about_marketresearch/" rel="noopener" class="catephp__link">アンケートデータの使用について</a>


<?php elseif(is_category('serial')) : ?>
    <p class="catephp__txt">各ジャンルのプロフェッショナルによる、フェムテック、生理、PMSなど女性のココロと体の健康にまつわるストーリー。現代女性を温かく後押しします。</p>

<?php endif; ?>

</div>
</section>