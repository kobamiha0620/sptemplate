<li <?php post_class( 'article-list'); ?> >
    <a href="<?php echo get_permalink(); ?>" class="epick__list--link">

        <!--画像を追加-->
        <div class="epick__img">
             <?php if(get_field('product_img')): ?>
                <?php
                  // カスタムフィールドの値を取得
                  $img_field = get_field('product_img');
                  if($img_field){	
                  // 画像・キャプションを出力
                  ?>
                    <img
                    src="<?php echo esc_url($img_field['url']) ?>"
                    alt="<?php echo esc_attr($img_field['alt']) ?>"
                    width="100%" > 
                    <?php } ?>
                <?php endif;?>
                <?php if(get_field('insta_image')): ?>
                    <?php
                  // カスタムフィールドの値を取得
                  $img_field = get_field('insta_image');
                  if($img_field){	
                  // 画像・キャプションを出力
                  ?>
                    <img
                    src="<?php echo esc_url($img_field['url']) ?>"
                    alt=""
                    width="100%" >
                <a href=" <?php the_field('insta_image'); ?>media/?size=l"></a>
                <?php } ?>

                <?php endif;?>

        </div>

        <p class="epick__txt">
            <?php echo get_field('product_midashi')?>
        </p>

    </a>
</li>