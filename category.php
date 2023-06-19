<?php get_header(); ?>

<div class="container">
  <main class="catephp">


    <?php if (is_category('serial')) : ?>
    <div class="catephp__disc">

      <ul class="series__blc">
        <li><a href="/category/yummy/">

            <div class="series__imgwrap"><img class="series__img"
                src="https://femtech.tv/wp-content/uploads/2022/10/femtec_release22.jpg" alt="" width="100%" />
            </div>
            <div class="series__r">
              <p class="cat-data cate-yummy">やみちゃん保健室</p>
              <p class="series__excerpt">やみちゃんが、女性のカラダやココロにまつわる様々な疑問にお答えします。</p>
              <p class="series__catelink"><span>view All</span></p>
            </div>
          </a>

        </li>
        <li><a href="/category/aoki/">

            <div class="series__imgwrap"><img class="series__img"
                src="https://femtech.tv/wp-content/uploads/2021/11/femtec_release_funakisan8.jpg" alt="" width="100%" />
            </div>
            <div class="series__r">
              <p class="cat-data cate-aoki">月と運気のはなし</p>
              <p class="series__excerpt">青木良文さんによる、月のめぐりと共に歩む連載コラム。</p>
              <p class="series__catelink"><span>view All</span></p>
            </div>
          </a>
        </li>
        <li><a href="/category/veda/">
            <div class="series__imgwrap"><img class="series__img"
                src="https://femtech.tv/wp-content/uploads/2023/06/banner-26-3.jpg" alt="" width="100%" /></div>
            <div class="series__r">
              <p class="cat-data cate-veda">VEDAの処方箋</p>
              <p class="series__excerpt">アーユルヴェーダ専門家・MOTOKOさんが教える、最古なのに最新のカラダのお話。</p>
              <p class="series__catelink"><span>view All</span></p>
            </div>
          </a>
        </li>
        <li><a href="/category/assistant/">
            <div class="series__imgwrap"><img class="series__img"
                src="https://femtech.tv/wp-content/uploads/2022/03/image_onayami2.png" alt="" width="100%" /></div>
            <div class="series__r">
              <p class="cat-data cate-aoki">お悩み相談</p>
              <p class="series__excerpt">産婦人科医ゆみえ先生のお悩み相談室</p>
              <p class="series__catelink"><span>view All</span></p>
            </div>
          </a>
        </li>
        <li><a href="/category/femcoto/">

            <div class="series__imgwrap"><img class="series__img"
                src="https://femtech.tv/wp-content/uploads/2022/05/serieseimg_femcoto.png" alt="フェムコト" width="100%" />
            </div>
            <div class="series__r">
              <p class="cat-data cate-aoki">フェムコト</p>
              <p class="series__excerpt">様々なライフスタイルを送る女性達とウェルビーイングを考える</p>
              <p class="series__catelink"><span>view All</span></p>
            </div>
          </a>
        </li>
        <li><a href="/category/personf/">
            <div class="series__imgwrap"><img class="series__img"
                src="https://femtech.tv/wp-content/uploads/2022/05/serieseimg_persong.png" alt="Fな人" width="100%" />
            </div>
            <div class="series__r">
              <p class="cat-data cate-aoki">今月のFな人</p>
              <p class="series__excerpt">旬な著名人が専門家にお悩み相談。対談形式でお届けします。</p>
              <p class="series__catelink"><span>view All</span></p>
            </div>
          </a>

        </li>
        <li><a href="/category/kokoro/">
            <div class="series__imgwrap"><img class="series__img"
                src="https://femtech.tv/wp-content/uploads/2021/11/5b20e9220284a5a2bf358f18630f0be1-2.jpg" alt=""
                width="100%" /></div>
            <div class="series__r">
              <p class="cat-data cate-aoki">ココロの処方箋</p>
              <p class="series__excerpt">メンタルケアの観点から紐解く、現代女性の心とカラダ。</p>
              <p class="series__catelink"><span>view All</span></p>

            </div>
          </a>

        </li>
      </ul>
    </div>
    <?php endif; ?>

    <!-- おすすめ -->
    <div id="js-newest"></div>
    <section id="categoryNew" class="articlesWrapper">
      <div class="articles" id="articles">
        <h2 class="articles__ttl">
          <span class="articles__ttl--en">NEW ARRIVAL</span>
          <span class="articles__ttl--jp"><?php single_cat_title(); ?>最新記事</span>
        </h2>
        <ul class="articles__list" id="newArrival">
          <?php 
          $cat = get_queried_object();
          $cat_name = $cat -> name;
          $cat_slug = $cat -> slug;
      ?>

          <?php  if(have_posts()): while(have_posts()):the_post(); ?>
          <?php  get_template_part('template_parts/loop-content');?>
          <?php endwhile; endif; ?>

        </ul>

        <a href="/page-<?php echo $cat_slug; ?>/" class="articles__link"><?php echo  $cat_name; ?> の記事を全て見る ＞</a>

      </div><!-- articles -->

    </section><!-- categoryNew -->
    <!-- おすすめ -->


    <!-- EDITOR'S CHOICE ------------------------------------------------->
    <?php get_template_part('template_parts/cate-echoice'); ?>
    <!-- EDITOR'S CHOICE ------------------------------------------------->



  </main>
  <!-- ランキング記事 -->
  <div id="cateRanking"></div>
  <?php get_template_part('template_parts/ranking'); ?>

  <?php get_template_part('template_parts/bnrs'); ?>



  <div class="index__inner">
    <!-- SP用padding Blc -->
    <section class="catephp__anchor">
      <ul class="catephp__anchor--list">
        <li><a href="#cateTop">・<?php single_cat_title(); ?>について</a></li>
        <li><a href="#categoryNew">・<?php single_cat_title(); ?>最新記事</a></li>
        <li><a href="#editors">・エディターおすすめ記事</a></li>
        <li><a href="#cateRanking">・ランキング</a></li>
      </ul>
    </section>
  </div>

</div>
<!--end contents-->

</div>
<!--end container-->
<?php get_footer(); ?>