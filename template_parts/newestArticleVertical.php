
    

    <li <?php post_class( 'varticle__list'); ?> >
        <a href="<?php echo get_permalink(); ?>" class="">
            <!--画像を追加-->
            <div class="newest__img--blc">
                <div class="newest__img">
                    <?php if( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img"/>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="varticle__blc">
            <div class="newest__cateblc">
                <!--カテゴリ-->
            
                  <?php if (has_category()): ?>
                    <?php $postcat = get_the_category(); for($i = 0; count($postcat) > $i; $i++){
                        $postName = $postcat[$i]->name;
                        $postId = $postcat[$i]->slug;?>
                        <span class="cat-data cate-<?php echo $postId; ?>"><?php echo $postName; ?></span>
                      <?php } ?>
                  <?php endif; ?>
          
            </div>

                <!-- タイトル --> 

               <p class="newest__excerpt">
                <?php
                    if(mb_strlen($post->post_title)>33){
                      $title= mb_substr($post->post_title, 0, 33);
                      echo $title.'…';
                    }else{
                      echo $post->post_title;
                    }
                  ?>
                </p>


                  <div class="newest__grey">
                   <!--投稿日を表示-->
                  <span class="newest__date">
                    <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                      <?php echo get_the_date(); ?>
                    </time>
                  </span>
                  <!--著者を表示-->
                  <span class="newest__author">by <?php the_author(); ?> </span>
                  
                </div>

                </div>
        </a>
    </li>




