<?php
/*
Template Name: 診断投稿
Template Post Type: post
*/
?>
<?php get_header(); ?><?php get_header(); ?>
<div class="container">


  <?php if(have_posts()): the_post(); ?>

  <article <?php post_class( 'article-content' ); ?>>

    <div class="single" id="single">
      <section class="single__topimg">
        <!--アイキャッチ取得-->
        <?php if( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail('large'); ?>
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img" />
        <?php endif; ?>
      </section>

      <section class="single__linkto">
        <?php previous_post_link('%link', '&lt; &nbsp;前の記事'); ?>
        <?php next_post_link('%link', '次の記事 &nbsp; &gt;'); ?>
      </section>

      <section class="single__fv">
        <div class="single__fv--index">
          <!--カテゴリ-->
          <?php if (has_category()): ?>
          <?php $postcat = get_the_category(); for($i = 0; count($postcat) > $i; $i++){
					$postName = $postcat[$i]->name;
					$postId = $postcat[$i]->slug;?>
          <span class="cat-data cate-<?php echo $postId; ?>"><?php echo $postName; ?></span> <?php } ?>
          <?php endif; ?>

          <!--投稿日を表示-->
          <span class="cate__date">
            <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
              <?php echo get_the_date(); ?>
            </time>
          </span>
          <!--著者を表示-->
          <span class="cate__author">by <?php the_author( ); ?></span>
        </div>

        <!--タイトル-->
        <h2 class="single__fv--ttl"><?php the_title(); ?></h2>

        <ul class="single__fv--cate">
          <?php
        $tags = get_the_tags();
          foreach( $tags as $tag) { 
        echo '<li><a href="'. get_tag_link($tag->term_id) .'">#' . $tag->name . '</a></li>';
        }
        ?>
        </ul>
      </section>
      
      <!-- sns共有 -->
      <?php get_template_part('/template_parts/sharesns'); ?>
      <!-- sns共有 -->

      <div class="single__contents">
        <!--本文取得-->
        <div class="single__contentsinner">


        <div class="checktrue" id="checktrue">
        <p>
            カラダについて、わかっているつもりでもわかっていないことって意外と多く、常識だと思って信じていたことが、実は間違っていた！　なんてこともよくあるもの。女性のカラダのウソ・ホントを、19の質問に答えて理解度をチェックしてみましょう！
        </p>

    <div class="checktrue__contents">



        <div class="checktrue__inputs">
            <form id="checktrueForm" name="checktrueForm">
                <ul class="checktrue__inputs--list" id="checktrue__inputs--list">
                    <li id="check1">
                        <p class="checktrue__inputs--quest">Check1. 男性と女性で肌質が違う</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check1t" type="radio" name="check1" value="1">
                            <label for="check1t" class="checktrue__true">ホント</label>

                            <input id="check1f" type="radio" name="check1" value="0">
                            <label for="check1f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>

                    </li>
                    <li id="check2">
                        <p class="checktrue__inputs--quest">Check2. 貧血は女性に多い</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check2t" type="radio" name="check2" value="1">
                            <label for="check2t" class="checktrue__true">ホント</label>

                            <input id="check2f" type="radio" name="check2" value="0">
                            <label for="check2f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>

                    </li>
                    <li id="check3">
                        <p class="checktrue__inputs--quest">Check3. 子宮は冷える</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check3t" type="radio" name="check3" value="0">
                            <label for="check3t" class="checktrue__true">ホント</label>

                            <input id="check3f" type="radio" name="check3" value="1">
                            <label for="check3f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>

                    </li>
                    <li id="check4">
                        <p class="checktrue__inputs--quest">Check４.女性は味に敏感</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check4t" type="radio" name="check4" value="1">
                            <label for="check4t" class="checktrue__true">ホント</label>

                            <input id="check4f" type="radio" name="check4" value="0">
                            <label for="check4f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>

                    </li>
                    <li id="check5">
                        <p class="checktrue__inputs--quest">Check５.女性は寒がり</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check5t" type="radio" name="check5" value="1">
                            <label for="check5t" class="checktrue__true">ホント</label>

                            <input id="check5f" type="radio" name="check5" value="0">
                            <label for="check5f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>

                    </li>
                    <li id="check6">
                        <p class="checktrue__inputs--quest">Check６.うつ病になるのが多いのは男性</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check6t" type="radio" name="check6" value="0">
                            <label for="check6t" class="checktrue__true">ホント</label>

                            <input id="check6f" type="radio" name="check6" value="1">
                            <label for="check6f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>

                    </li>
                    <li id="check7">
                        <p class="checktrue__inputs--quest">Check７.女性ホルモンを持ってるのは女性だけ</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check7t" type="radio" name="check7" value="0">
                            <label for="check7t" class="checktrue__true">ホント</label>

                            <input id="check7f" type="radio" name="check7" value="1">
                            <label for="check7f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>

                    </li>
                    <li id="check8">
                        <p class="checktrue__inputs--quest">Check８. 女性ホルモンは増やせる</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check8t" type="radio" name="check8" value="0">
                            <label for="check8t" class="checktrue__true">ホント</label>

                            <input id="check8f" type="radio" name="check8" value="1">
                            <label for="check8f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>

                    </li>
                    <li id="check9">
                        <p class="checktrue__inputs--quest">Check９.生まれた時から女性は卵子を持っている</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check9t" type="radio" name="check9" value="1">
                            <label for="check9t" class="checktrue__true">ホント</label>

                            <input id="check9f" type="radio" name="check9" value="0">
                            <label for="check9f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>

                    </li>
                    <li id="check10">
                        <p class="checktrue__inputs--quest">Check10. ダイエットをはじめるのは、生理後がいい。</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check10t" type="radio" name="check10" value="1">
                            <label for="check10t" class="checktrue__true">ホント</label>

                            <input id="check10f" type="radio" name="check10" value="0">
                            <label for="check10f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>

                    </li>
                    <li id="check11">
                        <p class="checktrue__inputs--quest">Check11. 女性ホルモンは増やせる</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check11t" type="radio" name="check11" value="0">
                            <label for="check11t" class="checktrue__true">ホント</label>

                            <input id="check11f" type="radio" name="check11" value="1">
                            <label for="check11f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>

                    </li>
                    <li id="check12">
                        <p class="checktrue__inputs--quest">Check12. 生理痛で、病院に行く必要はない</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check12t" type="radio" name="check12" value="0">
                            <label for="check12t" class="checktrue__true">ホント</label>

                            <input id="check12f" type="radio" name="check12" value="1">
                            <label for="check12f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>
                    </li>
                    <li id="check13">
                        <p class="checktrue__inputs--quest">Check13. タンポンを入れたまま放置するのは危険</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check13t" type="radio" name="check13" value="1">
                            <label for="check13t" class="checktrue__true">ホント</label>

                            <input id="check13f" type="radio" name="check13" value="0">
                            <label for="check13f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>

                    </li>
                    <li id="check14">
                        <p class="checktrue__inputs--quest">Check14. コンドームをすれば、妊娠はしない</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check14t" type="radio" name="check14" value="0">
                            <label for="check14t" class="checktrue__true">ホント</label>

                            <input id="check14f" type="radio" name="check14" value="1">
                            <label for="check14f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>
                    </li>
                    <li id="check15">
                        <p class="checktrue__inputs--quest">Check15. 生理中に性行為をしても妊娠はしない</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check15t" type="radio" name="check15" value="0">
                            <label for="check15t" class="checktrue__true">ホント</label>

                            <input id="check15f" type="radio" name="check15" value="1">
                            <label for="check15f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>
                    </li>
                    <li id="check16">
                        <p class="checktrue__inputs--quest">Check16. 避妊しなくても妊娠しない「安全日」がある</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check16t" type="radio" name="check16" value="0">
                            <label for="check16t" class="checktrue__true">ホント</label>

                            <input id="check16f" type="radio" name="check16" value="1">
                            <label for="check16f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>
                    </li>
                    <li id="check17">
                        <p class="checktrue__inputs--quest">Check17. 性行為中にトイレに行きたくなるのは異常ではない</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check17t" type="radio" name="check17" value="1">
                            <label for="check17t" class="checktrue__true">ホント</label>

                            <input id="check17f" type="radio" name="check17" value="0">
                            <label for="check17f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>
                    </li>
                    <li id="check18">
                        <p class="checktrue__inputs--quest">Check18. セルフプレジャーをしすぎるのは、カラダに悪い</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check18t" type="radio" name="check18" value="0">
                            <label for="check18t" class="checktrue__true">ホント</label>

                            <input id="check18f" type="radio" name="check18" value="1">
                            <label for="check18f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>
                    </li>
                    <li id="check19">
                        <p class="checktrue__inputs--quest">Check19. 男女でオーガズムの感じ方が違う</p>
                        <div class="checktrue__inputs--btns">
                            <input id="check19t" type="radio" name="check19" value="1">
                            <label for="check19t" class="checktrue__true">ホント</label>

                            <input id="check19f" type="radio" name="check19" value="0">
                            <label for="check19f" class="checktrue__false">ウソ</label>
                        </div>
                        <p class="checktrue__notice">※選択してください。</p>
                    </li>
                </ul>

                <p class="checktrue__submit--wrapper">
                    <a class="checktrue__submit" id="submitBtn">
                        チェックする
                    </a>
                </p>
                <p id="sumit__alert">全て選択してください。</p>

            </form>
        </div>


        <!--本文取得-->
        <?php if(have_posts()): the_post(); ?>
        <div class="infoPage__contentsinner infoPage-privacy">
            <?php the_content(); ?>
        </div>
        <?php endif; ?>

    </div><!-- /.page__contents -->
</div><!-- /#page -->


        
      <section class="single__paging">          
        <?php 
                // $pageLink = get_post_meta( $post->ID, 'nextpagetext', true );
        
                // wp_link_pages( 'before=<p>&after=</p>&next_or_number=next&nextpagelink=$pageLink' ); 
                
                wp_link_pages( array(
                  'before' => '<div class="split-page-nav">',
                  'after' => '</div>',
                  'link_before' => '',
                  'link_after' => '',
                  'next_or_number' => 'next_and_number',
                  'nextpagelink'  => get_post_meta( $post->ID, 'nextpagetext', true ),    // カスタムフィールドのデータを渡す
                  'echo' => 1,
                )
                );
                
                
                ?>
        </section>
        <section class="single__btmpaging">
          <?php
          wp_link_pages( array(
            'before' => '',
            'after' => '',
            'link_before' => '<span class="page-number_wraper"><span class="page-number">',
            'link_after' => '</span></span>',
            'next_or_number' => 'next_and_number',
            // 'nextpagelink'  => get_post_meta( $post->ID, 'nextpagetext', true ),    // カスタムフィールドのデータを渡す
            'nextpagelink'     => __( 'Next page' ),
            'previouspagelink' => __( 'Previous page' ),
            'pagelink'         => '%',        
            'echo' => 1,
          )
          );
          
          ?>

        </section>




        <!-- コメント部分 -->
        <section class="single__come">
          <p class="single__come--ttl" id="js-comment"><span>コメントを書く / 読む</span><span
              class="single__come--ttlicon">&#9660;</span></p>

          <div class="single__come--con" id="js-commCont">
            <?php //comment_form($args, $post_id); ?>

            <?php comments_template(); ?>


          </div>



        </section>
        <!-- コメント部分 -->



        <!-- おすすめ -->
        <section id="recomArticle" class="articlesWrapper">
          <div class="articles" id="articles">
            <h2 class="articles__ttl">この記事を読んだあなたにおすすめ</h2>
            <ul class="blclist">

             <?php  get_template_part('template_parts/relatedarticles');?>

            </ul>
          </div><!-- articles -->
        </section><!-- recomArticle -->
        <!-- おすすめ -->


        <!-- 著者情報 -->
        <section class="single__author">
          <div class="single__author--img">
            <?php echo get_avatar(get_the_author_meta( 'ID' ), 198 ); ?>
          </div>
          <span><?php the_author_meta("display_name"); ?><span><br><?php the_author_meta("description"); ?></span></span>

        </section><!-- single__author -->
        <!-- 著者情報 -->

      </div><!-- /.single__contents -->
    </div><!-- /#single -->
  </article>

  <?php endif; ?>

  <div class="index__inner">
    <!-- SP用padding Blc -->


    <!-- 最新記事 -->
    <section id="latestArticle" class="articlesWrapper">
      <div class="articles" id="articles">
        <h2 class="articles__ttl">
          <span class="articles__ttl--en">NEW ARRIVAL</span>
          <span class="articles__ttl--jp">最新記事</span>
        </h2>
        <ul class="varticle">
          <?php
                //$argsのプロパティを変えていく
                $args = array(
                    'post_type' => 'post', 
                    'post_status'   => 'publish',
                    'posts_per_page' => 5,
                    'cat' => -430, //星占いカテゴリ

                    'no_found_rows' => true,  //ページャーを使う時はfalseに。
                );

                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) : $the_query->the_post();
                    get_template_part('template_parts/newestArticleVertical');

                  endwhile;
                endif;
                wp_reset_postdata();
                ?>
        </ul>
      </div>
    </section>
    <!-- 最新記事 -->

  </div>
  <!--end index__inner-->

  <?php get_template_part('template_parts/bnrs'); ?>

</div>
<!--end contents-->



<?php get_footer(); ?>


<script src="<?php echo get_template_directory_uri(); ?>/js/checktrue.js" type="text/javaScript" charset="utf-8">
</script>


<style>
    .single__contentsinner p{
        margin-bottom: 0;
    }
    .checktrue__submit{
        color: #FFF!important;
    }
</style>
<?php get_footer(); ?>