
<?php get_header(); ?>

<div class="container">


    <!-- TOPのみ -->
    <section class="slideTop">
    <div style="font-size: 20px;" id="herourl">
    <?php
     $urlherobnr = get_field('herourl'); 
     $postidHero = url_to_postid( $urlherobnr );   
      ?>

    </div>
    <!-- トップページにだけ表示 -->
    <div class="slide">
      <ul class="slick">

      <!-- 対談記事の指定 -->
      <?php 

        //１件目毎月変更するよー
        $postId01 = $postidHero;
        $user_id01 = get_post_field( 'post_author', $postId01 );
        $post_date01 = get_the_date( 'Y.m.d', $postId01 );

      ?>


      <li>
        <a href="https://biyoshinkyu.net/yuragi/" target="_blank" rel="noopener noreferrer" class="slide__wrap--link">
          <div class="slide__img">
            <img src="https://femtech.tv/wp-content/uploads/2022/11/femtec_yuragi.jpg" alt="yuragi　鍼灸院" width="100%">
          </div><!--  slide__img -->
        </a>
      </li>

      <li>
        <div class="slide__wrap">
          <a href="<?php echo get_permalink($postId01); ?>" class="slide__wrap--link">
            <!--画像を追加-->
            <div class="slide__img">
              <?php echo get_the_post_thumbnail( $postId01 ) ?>

            </div><!--  slide__img -->

            <!--whiteを追加-->
            <div class="slide__white"></div>

            <div class="slide__txtblc">
              <div class="slide__txtwrap">

                <div class="slide__cate">

                  <?php $postcat = get_the_category($postId01); for($i = 0; count($postcat) > $i; $i++){
                      $postName = $postcat[$i]->name;
                      $postId = $postcat[$i]->slug;
                  ?>
                  <p class="cat-data cate-<?php echo $postId; ?>"><?php echo $postName; ?></p>

                <?php } ?>

                </div><!-- slide__cate -->

                <!--投稿日を表示-->
                <span class="cate__date">
                  <time datetime="<?php echo $post_date01; ?>">
                    <?php echo $post_date01; ?>
                  </time>
                </span>

                <!--著者を表示-->
                <span class="cate__author">by <?php echo get_the_author_meta( 'display_name', $user_id01 ); ?></span>

              </div>

              <p class="slide__excerpt"><?php echo get_the_title( $postId01 ); ?></p>
            </div>
          </a>
        </div>
      </li>




        <?php
        $urlherobnr2 = get_field('herourl2');
        $postId02 = url_to_postid( $urlherobnr2 );
        $user_id02 = get_post_field( 'post_author', $postId02 );
        $post_date02 = get_the_date( 'Y.m.d', $postId02 );
        ?>
      <li>
        <div class="slide__wrap">
          <a href="<?php echo get_permalink($postId02); ?>" class="slide__wrap--link">
            <!--画像を追加-->
            <div class="slide__img">
              <?php echo get_the_post_thumbnail( $postId02 ) ?>

            </div><!--  slide__img -->

            <!--whiteを追加-->
            <div class="slide__white"></div>

            <div class="slide__txtblc">
              <div class="slide__txtwrap">

                <div class="slide__cate">

                  <?php $postcat = get_the_category($postId02); for($i = 0; count($postcat) > $i; $i++){
                      $postName = $postcat[$i]->name;
                      $postId = $postcat[$i]->slug;
                  ?>
                  <p class="cat-data cate-<?php echo $postId; ?>"><?php echo $postName; ?></p>

                <?php } ?>

                </div><!-- slide__cate -->

                <!--投稿日を表示-->
                <span class="cate__date">
                  <time datetime="<?php echo $post_date02; ?>">
                    <?php echo $post_date02; ?>
                  </time>
                </span>

                <!--著者を表示-->
                <span class="cate__author">by <?php echo get_the_author_meta( 'display_name', $user_id02 ); ?></span>

              </div>

              <p class="slide__excerpt"><?php echo get_the_title( $postId02 ); ?></p>
            </div>
          </a>
        </div>
      </li>

      <?php $value = get_field('herourl3') ; if(empty($value)) : else:?>
	    <!-- 入力がある場合に表示させる -->
      <?php
        $urlherobnr3 = get_field('herourl3');
        $postId03 = url_to_postid( $urlherobnr3 );
        $user_id03 = get_post_field( 'post_author', $postId03 );
        $post_date03 = get_the_date( 'Y.m.d', $postId03 );
        ?>
      <li>
        <div class="slide__wrap">
          <a href="<?php echo get_permalink($postId03); ?>" class="slide__wrap--link">
            <!--画像を追加-->
            <div class="slide__img">
              <?php echo get_the_post_thumbnail( $postId03 ) ?>

            </div><!--  slide__img -->

            <!--whiteを追加-->
            <div class="slide__white"></div>

            <div class="slide__txtblc">
              <div class="slide__txtwrap">

                <div class="slide__cate">

                  <?php $postcat = get_the_category($postId03); for($i = 0; count($postcat) > $i; $i++){
                      $postName = $postcat[$i]->name;
                      $postId = $postcat[$i]->slug;
                  ?>
                  <p class="cat-data cate-<?php echo $postId; ?>"><?php echo $postName; ?></p>

                <?php } ?>

                </div><!-- slide__cate -->

                <!--投稿日を表示-->
                <span class="cate__date">
                  <time datetime="<?php echo $post_date03; ?>">
                    <?php echo $post_date03; ?>
                  </time>
                </span>

                <!--著者を表示-->
                <span class="cate__author">by <?php echo get_the_author_meta( 'display_name', $user_id03 ); ?></span>

              </div>

              <p class="slide__excerpt"><?php echo get_the_title( $postId03 ); ?></p>
            </div>
          </a>
        </div>
      </li>
      <?php endif;?>

      </ul>
    </div>
  </section>




  <!-- EDITOR'S CHOICE ------------------------------------------------->
  <div class="index__inner">
    <?php get_template_part('/template_parts/echoice'); ?>
  </div><!-- index__inner -->
  <!-- EDITOR'S CHOICE ------------------------------------------------->
  <div class="index__inner">

    <!-- TOP最新記事 -->
    <section id="toparticles">
      <div class="articles" id="js-newest">
        <h2 class="articles__ttl">
          <span class="articles__ttl--en">NEW ARRIVAL</span>
          <span class="articles__ttl--jp">最新記事</span>
        </h2>

        <ul class="newest">
          <!-- //EditorsPickを除外 -->
          <?php query_posts('post_type=post&posts_per_page=5&cat=-278, -430'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php get_template_part('template_parts/newestArticle'); ?>

          <?php endwhile; else : ?>
          <?php endif; ?>


        </ul>

        <a href="/latest-all/" class="articles__link">最新の記事を全て見る ＞</a>

      </div> <!-- #js-newest -->

    </section><!-- #toparticles -->
  </div><!-- index__inner -->


  <!-- EDITOR'S PICK ------------------------------------------------->
  <?php get_template_part('/template_parts/epick'); ?>
  <!-- EDITOR'S PICK ------------------------------------------------->

  <!-- KEYWORD -->
  <!-- <#?php get_template_part('template_parts/keyword'); ?> -->
  <!-- ランキング記事 -->
  <?php get_template_part('template_parts/ranking'); ?>
  <!-- HOT TAG -->
  <!-- <#?php get_template_part('template_parts/hottag'); ?> -->
  <!-- バナー設定 -->


  <?php get_template_part('template_parts/bnrs'); ?>
  <!-- SERIES -->
  <?php get_template_part('template_parts/series'); ?>






  

  <div class="index__inner">
      <section class="spbtm">
        <div class="spbtm__inner">
        <h2 class="spbtm__ttl">フェムテックtv</h2>
        <p class="spbtm__txt">生理、PMS、セクシャルな問題など自分のカラダについて、たった1人で悩んでいる皆さんへ。<br>
          大切なのは、「知る」「共有する」こと。<br>
          このフェムテックtvは、自分のカラダについての“知らなかった”をなくすためのフェムテック情報共有サイトです。<br>
          毎日をイキイキと、自分らしく過ごすために。<br>正しい情報を知って、話して、整える輪を広め、悩める女性がいなくなる世の中を目指します。</p>
          </div>
      </section>
  </div><!-- index__inner -->

  <!-- EDITOR Introduce ------------------------------------------------->
  <div class="index__inner">

      <?php get_template_part('/template_parts/editorsIntro'); ?>

  </div><!-- index__inner -->
  <!-- EDITOR Introduce ------------------------------------------------->


</div>
<!--end contents-->




<?php get_footer(); ?>



<?php
/*
Template Name: Hometemplate
Template Post Type: post,page,works
*/
?>