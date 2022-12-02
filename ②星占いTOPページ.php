        <!-- ②星占い -->
        <?php query_posts('post_type=post&posts_per_page=1&cat=431'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <li>
            <div class="slide__wrap">
                <a href="<?php the_permalink(); ?>" class="slide__wrap--link">
                    <!--画像を追加-->
                    <div class="slide__img">
                        <?php if( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail('medium'); ?>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img" />
                        <?php endif; ?>
                    </div><!--  slide__img -->

                    <!--whiteを追加-->
                    <div class="slide__white"></div>

                    <div class="slide__txtblc">
                        <div class="slide__txtwrap">

                            <div class="slide__cate">
                                <!--カテゴリ-->
                                <?php if (has_category()): ?>
                                <?php $postcat = get_the_category(); for($i = 0; count($postcat) > $i; $i++){
                                    $postName = $postcat[$i]->name;
                                    $postId = $postcat[$i]->slug;
                                ?>
                                <p class="cat-data cate-<?php echo $postId; ?>"><?php echo $postName; ?></p>

                                <?php } ?>
                                <?php endif; ?>

                            </div><!-- slide__cate -->

                            <!--投稿日を表示-->
                            <span class="cate__date">
                                <time datetime="<?php echo get_the_date(); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                            </span>

                            <!--著者を表示-->
                            <span class="cate__author">by <?php the_author(); ?></span>
                        </div>

                        <p class="slide__excerpt"><?php the_title(); ?></p>
                    </div>
                </a>
            </div>
        </li>



        <?php endwhile; else : ?>
        <?php endif; ?>