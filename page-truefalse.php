<?php
/*
 * Template Name: 診断テスト
 */

?>
<?php get_header(); ?>
<?php if(is_page('truefalse')): /* 診断ページTOP */ ?>


<div class="checktrue" id="checktrue">
    <section class="checktrue__fv">
        <?php the_post_thumbnail(); ?>
        <div class="checktrue__fv--inner">
        <h2 class="checktrue__txt">
            <span>
            女性のカラダのウソ・ホント 健康、生理、SEX…にまつわるetc.<br>〈医師監修〉<br>
            </span>
            カラダについて、わかっているつもりでもわかっていないことって意外と多く、常識だと思って信じていたことが、実は間違っていた！　なんてこともよくあるもの。女性のカラダのウソ・ホントを、19の質問に答えて理解度をチェックしてみましょう！
        </h2>
        </div>
    </section>

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

<script src="<?php echo get_template_directory_uri(); ?>/js/checktrue.js" type="text/javaScript" charset="utf-8">
</script>

<?php elseif(is_page('truefalse-result1')): /* 診断ページTOP */ ?>
<section class="checktrue__fv">
    <?php the_post_thumbnail(); ?>
    <div class="resultcheck__fv--inner">
    <p class="resultcheck__ttl">満点です</p>
    <p class="resultcheck__subttl">Perfect!</p>
    </div>
</section>

<?php  get_template_part('template_parts/truefalse/result1');?>

<?php elseif(is_page('truefalse-result2')): /* 診断ページTOP */ ?>

<section class="checktrue__fv">
    <?php the_post_thumbnail(); ?>
    <div class="resultcheck__fv--inner">
        <p class="resultcheck__ttl">高得点(15〜18点)</p>
        <p class="resultcheck__subttl">Fantastics!</p>
    </div>
</section>

<?php  get_template_part('template_parts/truefalse/result1');?>


<?php elseif(is_page('truefalse-result3')): /* 診断ページTOP */ ?>

<section class="checktrue__fv">
    <?php the_post_thumbnail(); ?>
    <div class="resultcheck__fv--inner">
    <p class="resultcheck__ttl">高得点(11〜14点)</p>
    <p class="resultcheck__subttl">Well done!</p>
    </div>
</section>

<?php  get_template_part('template_parts/truefalse/result1');?>


<?php elseif(is_page('truefalse-result4')): /* 診断ページTOP */ ?>
<section class="checktrue__fv">
    <?php the_post_thumbnail(); ?>
    <div class="resultcheck__fv--inner">
    <p class="resultcheck__ttl">まぁまぁ(6〜10点)</p>
    <p class="resultcheck__subttl">Good!</p>
    </div>
</section>

<?php  get_template_part('template_parts/truefalse/result1');?>

<?php elseif(is_page('truefalse-result5')): /* 診断ページTOP */ ?>
<section class="checktrue__fv">
    <?php the_post_thumbnail(); ?>
    <div class="resultcheck__fv--inner">
    <p class="resultcheck__ttl">もう少し(0〜4点)</p>
    <p class="resultcheck__subttl">Try hard!</p>
    </div>
</section>


<?php  get_template_part('template_parts/truefalse/result1');?>


<?php endif; ?>

<style>
    .container__wrapper {
        padding-top: 0;
    }
</style>

<?php get_footer(); ?>