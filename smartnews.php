<?php
/**
* RSS2 Feed Template for displaying RSS2 Posts feed.
*
* @package SmartNews
*/

if ( !defined( 'ABSPATH' ) ) exit;

$logo_url = 'https://femtech.tv/wp-content/uploads/2022/06/logofemtech.png';
$no_image_url = 'https://femtech.tv/wp-content/uploads/2022/06/noneImg.png';
$tracking_id = 'UA-191433876-3';
$site_domain = 'femtech.tv';

header( 'Content-Type: ' . feed_content_type( 'rss2' ) . '; charset=' . get_option( 'blog_charset' ), true );
$more = 1;

echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '"?' . '>';

/**
* Fires between the xml and rss tags in a feed.
*
* @since 4.0.0
*
* @param string $context Type of feed. Possible values include 'rss2', 'rss2-comments',
* 'rdf', 'atom', and 'atom-comments'.
*/
do_action( 'rss_tag_pre', 'rss2' );
?>
<rss version="2.0"
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
  xmlns:wfw="http://wellformedweb.org/CommentAPI/"
  xmlns:dc="http://purl.org/dc/elements/1.1/"
  xmlns:atom="http://www.w3.org/2005/Atom"
  xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
  xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
  xmlns:media="http://search.yahoo.com/mrss/"
xmlns:snf="http://www.smartnews.be/snf"
  <?php
  /**
   * Fires at the end of the RSS root to add namespaces.
   *
   * @since 2.0.0
   */
  do_action( 'rss2_ns' );
  ?>
>


<channel>
  <title><?php wp_title_rss(); ?></title>
  <atom:link href="<?php self_link(); ?>" rel="self" type="application/rss+xml" />
  <link><?php bloginfo_rss( 'url' ); ?></link>
  <description><?php bloginfo_rss( 'description' ); ?></description>
  <lastBuildDate>
  <?php
    $date = get_lastpostmodified( 'GMT' );
    echo $date ? mysql2date( 'r', $date, false ) : date( 'r' );
  ?>
  </lastBuildDate>
  <copyright><?php bloginfo_rss('name'); ?> All rights reserved.</copyright>
  <snf:logo>
      <url><?php echo $logo_url; ?></url>
  </snf:logo>
  <language><?php bloginfo_rss( 'language' ); ?></language>
  <sy:updatePeriod>
  <?php
    $duration = 'hourly';

    /**
     * Filters how often to update the RSS feed.
     *
     * @since 2.1.0
     *
     * @param string $duration The update period. Accepts 'hourly', 'daily', 'weekly', 'monthly',
     * 'yearly'. Default 'hourly'.
     */
    echo apply_filters( 'rss_update_period', $duration );
  ?>
  </sy:updatePeriod>
  <sy:updateFrequency>
  <?php
    $frequency = '1';

    /**
     * Filters the RSS update frequency.
     *
     * @since 2.1.0
     *
     * @param string $frequency An integer passed as a string representing the frequency
     * of RSS updates within the update period. Default '1'.
     */
    echo apply_filters( 'rss_update_frequency', $frequency );
  ?>
  </sy:updateFrequency>
  <?php
  /**
   * Fires at the end of the RSS2 Feed Header.
   *
   * @since 2.0.0
   */
  do_action( 'rss2_head' );

  while ( have_posts() ) :
    the_post();
    ?>
  <item>
    <title><?php the_title_rss(); ?></title>
    <link><?php the_permalink_rss(); ?></link>
    <?php if ( get_comments_number() || comments_open() ) : ?>
    <comments><?php comments_link_feed(); ?></comments>
    <?php endif; ?>
    <pubDate><?php echo mysql2date( 'D, d M Y H:i:s +0000', get_post_time( 'Y-m-d H:i:s', true ), false ); ?></pubDate>
    <dc:creator><![CDATA[<?php the_author(); ?>]]></dc:creator>

    <category>
    <?php
      
    $categories = get_the_category();
    if ( $categories ) {
      foreach( $categories as $category ) {
          echo $category->name . ', ';
      }
    }

    $posttags = get_the_tags();
if ($posttags) {
foreach($posttags as $tag) {
echo $tag->name . ', ';
}
}
    ?>

    </category>



    <guid isPermaLink="false"><?php the_guid(); ?></guid>

    <?php if (get_option('rss_use_excerpt')) : ?>
    <description><![CDATA[<?php echo the_excerpt_rss(); ?>]]></description>
    <?php endif; ?>
    <?php
    $content = get_the_content_feed('rss2');
    //aリンクは含めない。SmartNewsの仕様？リンクが多くあると以下のエラーが出る
    //item.content:encoded の記事内に多くのリンクが含まれています - item.title: 記事のタイトル
    //https://publishers.smartnews.com/ja/smartformat/specification_rss/
    $content = preg_replace('{<a [^>]+?>}i', '', $content);
    $content = str_replace('</a>', '', $content);
     ?>
    <content:encoded>
    <?php //アイキャッチの取得
    $image_id = get_post_thumbnail_id();
    $image_url = wp_get_attachment_image_src($image_id, true);
    if (isset($image_url[0])) {
      $thumbnail = $image_url[0];
    } else {
      $thumbnail = $no_image_url;
    }
?>

    <?php if (in_category('horoscope')): ?>
      <![CDATA[
        <img src="<?php echo $thumbnail; ?>" alt="" width="100%">
      ]]>
    
      <?php elseif (in_category('aries')): ?>
        <![CDATA[
        <p class="luna__seiza">
          <img src="https://femtech.tv/wp-content/uploads/2022/01/aries.png" alt="牡羊座" width="100%">
        </p>
        ]]>
        <?php elseif (in_category('taurus')): ?>
          <![CDATA[
        <p class="luna__seiza">
          <img src="https://femtech.tv/wp-content/uploads/2022/01/taurus.png" alt="牡牛座" width="100%">
        </p>

        ]]>

        <?php elseif (in_category('gemini')): ?>
          <![CDATA[
        <p class="luna__seiza">
          <img src="https://femtech.tv/wp-content/uploads/2022/01/genimi.png" alt="双子座" width="100%">
        </p>
        ]]>

        <?php elseif (in_category('cancer')): ?>
          <![CDATA[
        <p class="luna__seiza">
          <img src="https://femtech.tv/wp-content/uploads/2022/01/cancer.png" alt="かに座" width="100%">
        </p>
        ]]>

        <?php elseif (in_category('leo')): ?>
          <![CDATA[
        <p class="luna__seiza">
          <img src="https://femtech.tv/wp-content/uploads/2022/01/leo.png" alt="しし座" width="100%">
        </p>
        ]]>

        <?php elseif (in_category('virgo')): ?>
          <![CDATA[
        <p class="luna__seiza">
          <img src="https://femtech.tv/wp-content/uploads/2022/01/virgo.png" alt="おとめ座" width="100%">
        </p>
        ]]>

        <?php elseif (in_category('libra')): ?>
          <![CDATA[
        <p class="luna__seiza">
          <img src="https://femtech.tv/wp-content/uploads/2022/01/libra.png" alt="てんびん座" width="100%">
        </p>
        ]]>

        <?php elseif (in_category('scorpio')): ?>
          <![CDATA[
        <p class="luna__seiza">
          <img src="https://femtech.tv/wp-content/uploads/2022/01/scorpio.png" alt="蠍座" width="100%">
        </p>
        ]]>

        <?php elseif (in_category('sagittarius')): ?>
          <![CDATA[
        <p class="luna__seiza">
          <img src="https://femtech.tv/wp-content/uploads/2022/01/sagittarius.png" alt="いて座" width="100%">
        </p>
        ]]>

        <?php elseif (in_category('capricorn')): ?>
          <![CDATA[
        <p class="luna__seiza">
          <img src="https://femtech.tv/wp-content/uploads/2022/01/capricorn.png" alt="やぎ座" width="100%">
        </p>
        ]]>

        <?php elseif (in_category('aquarius')): ?>
          <![CDATA[
        <p class="luna__seiza">
          <img src="https://femtech.tv/wp-content/uploads/2022/01/aquarius.png" alt="みずがめ座" width="100%">
        </p>

        ]]>
        <?php elseif (in_category('pisces')): ?>
          <![CDATA[
        <p class="luna__seiza">
          <img src="https://femtech.tv/wp-content/uploads/2022/01/pisces.png" alt="うお座" width="100%">
        </p>
        ]]>
        <?php endif; ?>


        <?php if (in_category('moon')): ?>
      <![CDATA[
        <h3 class="luna__month"><span>
            <b><?php
              $field_name = get_field('horo_month');
              if($field_name){
                echo $field_name;
              }
            ?></b>月</span>の運勢</h3>

        <p class="luna__subttl"><?php echo get_field('horo_feature'); ?></p>
      ]]>
      <?php endif; ?>

    <![CDATA[<?php echo $content; ?>]]>
    
    <?php if (in_category('moon')): ?>
      <![CDATA[
        <p class="luna__action"><?php
              $field_name = get_field('horo_month');
              if($field_name){
                echo $field_name;
              }
            ?>月の開運アクション</p>
        <p class="luna__luckyaction"><?php
              $field_name = get_field('horo_action');
              if($field_name){
                echo $field_name;
              }
            ?></p>
      ]]>
      <?php endif; ?>


    
    </content:encoded>

    <?php if ( get_comments_number() || comments_open() ) : ?>
    <wfw:commentRss><?php echo esc_url( get_post_comments_feed_link( null, 'rss2' ) ); ?></wfw:commentRss>
    <slash:comments><?php echo get_comments_number(); ?></slash:comments>
    <?php endif; ?>
    <?php rss_enclosure(); ?>
    <?php
    /**
     * Fires at the end of each RSS2 feed item.
     *
     * @since 2.0.0
     */
    do_action( 'rss2_item' );
    ?>
    <?php //アイキャッチの取得
    $image_id = get_post_thumbnail_id();
    $image_url = wp_get_attachment_image_src($image_id, true);
    if (isset($image_url[0])) {
      $thumbnail = $image_url[0];
    } else {
      $thumbnail = $no_image_url;
    }
?>
    <media:thumbnail url="<?php echo $thumbnail; ?>" />
    <snf:analytics><![CDATA[
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', '<?php echo $tracking_id; ?>', '<?php echo $site_domain; ?>');
ga('require', 'displayfeatures');
ga('set', 'referrer', 'http://www.smartnews.com/');
ga('send', 'pageview', '<?php echo str_replace(home_url(), '', get_permalink()); ?>');
</script>
]]>
</snf:analytics>
  </item>
  <?php endwhile; ?>
</channel>
</rss>