


<div class="side__bnrs">
    <a href="https://biyoshinkyu.net/yuragi/" target="_blank" rel="noopener noreferrer">
        <img src="https://femtech.tv/wp-content/uploads/2022/11/banner_yuragi.jpg" alt="yuragi　鍼灸院" width="100%">
    </a>
    <?php query_posts('category_name=horoscope&posts_per_page=1');?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <a href="<?php the_permalink(); ?>">
        <img src="https://femtech.tv/wp-content/uploads/2022/01/bnr_runa.png" alt="ルナスコープ" width="100%">
    </a>
    <?php endwhile; endif; ?>
    <a href="/consultation/">
        <img src="https://femtech.tv/wp-content/uploads/2022/01/bnr_onayami.png" alt="あなたのお悩み募集" width="100%">
    </a>
    <!-- <a href="/wrecruit/">
        <img src="https://femtech.tv/wp-content/uploads/2022/06/bnr_wrecruit.png" alt="ライター募集" width="100%">
    </a> -->
</div>



