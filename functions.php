<?php


//-----------------------------------
//          カスタムウィジェット
//-----------------------------------

/*
add_action('widget')


//自作のウィジェットを作成するときはこいつを継承する
class My_Widget extends Wp_Widget{

}
*/

//タイトル下
register_sidebar(array(
  'name' => 'タイトル下のエリア',
  'description' => '画面上部、タイトル下のエリアです',
  'id' => 'title-bottom',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
));

//フッター左
register_sidebar(array(
  'name' => 'フッター左のエリア',
  'description' => 'フッターの左部分に表示されるウィジェットです',
  'id' => 'footer-left',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
));

//フッター右
register_sidebar( array(
  'name' => 'フッター右のエリア',
  'description' => 'フッターの右部分に表示されるウィジェットです',
  'id' => 'footer-right',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '<h4>',
  'after_title' => '</h4>',
));

//フッター中央
register_sidebar( array(
  'name' => 'フッター中央のエリア',
  'description' => 'フッターの中央部分に表示されるウィジェットです',
  'id' => 'footer-center',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '<h4>',
  'after_title' => '</h4>',
));


//サイドの広告エリア
register_sidebar( array(
  'name' => '右広告部分',
  'id' => 'side-ad',
  'description' => 'サイドバー上部に表示される広告エリアです',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
));


//記事一覧下
register_sidebar( array(
  'name' => '記事一覧の下エリア',
  'id' => 'post-bottom',
  'description' => '記事一覧ページの下部分に表示される広告エリアです',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
));

//記事一覧上
register_sidebar( array(
  'name' => '記事一覧の上エリア',
  'id' => 'post-top',
  'description' => '記事一覧ページの上部分に表示される広告エリアです',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
));


//PCサイドバー
register_sidebar( array(
  'name' => 'PCでのみ表示されるサイドバー',
  'id' => 'sidebar',
  'description' => 'サイドバーに表示されるウィジェットです。PCのみ（モバイルでは非表示）',
  'before_widget' => '<div class="sidewidget">',//これで配置するウィジェットはunkomanごとになります
  'after_widget' => '</div>',
  'before_title' => '<h4><i class="fas fa-list fa-fw"></i>',
  'after_title' => '</h4>',
));

//スマホでのみ表示されるサイドバー
register_sidebar( array(
  'name' => 'モバイルでのみ表示されるサイドバー',
  'id' => 'smp-sidebar',
  'description' => 'モバイルでのみ表示されるウィジェット（PCでは非表示）',
  'before_widget' => '<div class="smp-sidebar">',
  'after_widget' => '</div>',
  'before_title' => '',
  'after_title' => '',
));


//PC　スマホ　共通広告エリア
register_sidebar( array(
  'name' => 'PC モバイル共通広告エリア',
  'id' => 'sidebar-bottom-ad',
  'description' => 'PCでは右サイドバー下、モバイルではモバイル用サイドバー下に表示される広告エリアです。',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
));

//PC　スマホ　共通広告エリア
register_sidebar( array(
  'name' => '記事一覧下のフッター上エリア',
  'id' => 'footer-top',
  'description' => '投稿一覧部分の下、フッター上のエリアです',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
));



//single記事ページの投稿本文下ウィジェットエリア
register_sidebar( array(
  'name' => '投稿本文、タグエリア下のウィジェットエリア',
  'id' => 'posts-detail-bottom',
  'description' => '投稿本文、タグエリア下のウィジェットエリアです。',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
));


//single記事ページの投稿本文上ウィジェットエリア
register_sidebar( array(
  'name' => '投稿本文の上にくる。ウィジェットエリア',
  'id' => 'posts-detail-top',
  'description' => '投稿本文上、投稿ページタイトルの上にくるウィジェットエリアです',
  'before_widget' => '<div class="ad-area">',
  'after_widget' => '</div>',
  'before_title' => '',
  'after_title' => '',
));

//フッター　コピーライト部分
register_sidebar( array(
  'name' => 'フッター　コピーライト部分',
  'id' => 'copyrigth',
  'description' => 'フッター　コピーライト部分（テキストウィジェット　タイトルなしで記載）',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
));


//wp-headerのせいでできる管理バーの28px空間を削除する
add_filter( 'show_admin_bar', '__return_false' );


//カスタムウィジェット
class HotPost_Widget extends Wp_Widget{
  public function __construct(){

      $widget_options = array(
        'classname' => 'widget_template',//出力するウィジェットのクラス名
        'description' => '人気記事を出力する',//管理画面で表示する説明文
        'customize_selective_refresh' => true,
      );
      //操作用の設定値
      $control_options = array('width' => 400, 'height' => 350);


      //初期化処理（ウィジェットの各種設定)を行う
      parent::__construct('widget_template','人気記事ウィジェット',$widget_options,$control_options);
  }

  public function widget($args,$instance){
    //  ウィジェットの内容をwebページに出力(html)します
    extract($args);

/*
    if($instance['title'] != ''){
           $title = apply_filters('widget_title', $instance['title']);
       }
       echo $before_widget;
       if( $title ){
           echo $before_title . $title . $after_title;
       }
*/



      $my_posts = get_posts(array(
        'post_type' => 'post',
        'posts_per_page' =>'5',
        'meta_key' => 'postviews',
        'orderby' => 'meta_value_num'
      ));

      global $post;//なぜかこれを書かないとエラー。テンプレートファイル内では書く必要がないらしい

      ?>


<aside class="mymenu mymenu-thumb">
<ul>
<h4>人気記事</h4>
    <?php
        foreach ($my_posts as $post) :
          setup_postdata($post);

    ?>

<li>
  <a href="<?php the_permalink(); ?>">
  <div class="thumb" style="background-image: url(<?php echo mythumb( 'thumbnail' ); ?>)"></div>

      <div class="text">
        <?php the_title(); ?>
      </div>

    </a>
</li>

      <?php

          endforeach;

          wp_reset_postdata();

  ?>

</ul>
</aside>


    <?php
  }


  public function form($instance){
    //管理画面のウィジェット設定フォームを出力します
    ?>


    <?php
  }
  public function update($new_instance,$old_instance){
    //ウィジェットオプションを安全な値で保存するためにデータ検証無害化します
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    return $instance;
  }


}//end


//ウィジェットの登録処理
function theme_register_widget(){
  register_widget('HotPost_Widget');
}
//無名関数で代用もできますが、ここはこれでやります
add_action('widgets_init','theme_register_widget');




//アイキャッチ画像を返却する関数
function mythumb( $size ) {

	if( has_post_thumbnail() ) {
		$postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), $size );
		$url = $postthumb[0];
	} else {
		$url = get_template_directory_uri() . '/noimage.png';
	}

	return $url;

}


//カスタムメニュー
register_nav_menus(array(
  'headmenu' => 'ヘッダーメニュー'
));


//タグクラウドのstyleを削除する
function delete_tag_cloud_size($tags){
  $match = array(
    "/ style='font-size: \d+(\.)*\d*(pt|px|em|\%);'/i"
  );
  return preg_replace( $match, '',  $tags );
}
add_filter( 'tagcloud', 'delete_tag_cloud_size' );




function getPostViews($postID)
{
  $count_key = 'post_views_count';
  $count = get_post_meta($postID,$count_key,true);

  if($count == ''){
    delete_post_meta($postID,$count_key);
    add_post_meta($postID,$count_key,'0');
    return "0 View";
  }

  return $count.'View';

}

function setPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID,$count_key,true);

  if($count == ''){
    $count = 0;
    delete_post_meta($postID,$count_key);
    add_post_meta($postID,$count_key,'0');
  }else{
    $count++;
    update_post_meta($postID,$count_key,$count);
  }
}
remove_action('wp_head','adjacent_posts_rel_link_wp_head',10,0);





add_theme_support( 'post-thumbnails', array('post'));


//クラス名の削除
add_filter('post_thumbnail_html','custom_attribute');
function custom_attribute($html){
  $html = preg_replace('/class=".*\w+"\s/','',$html);
  return $html;
}


function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;//表示するページ数（５ページを表示）

     global $paged;//現在のページ値
     if(empty($paged)) $paged = 1;//デフォルトのページ

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;//全ページ数を取得
         if(!$pages)//全ページ数が空の場合は、１とする
         {
             $pages = 1;
         }
     }

     if(1 != $pages)//全ページが１でない場合はページネーションを表示する
     {
		 echo "<div class=\"pagenation\">\n";
		 echo "<ul>\n";
		 //Prev：現在のページ値が１より大きい場合は表示
         if($paged > 1) echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>Prev</a></li>\n";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                //三項演算子での条件分岐
                echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
             }
         }
		//Next：総ページ数より現在のページ値が小さい場合は表示
		if ($paged < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">Next</a></li>\n";
		echo "</ul>\n";
		echo "</div>\n";
     }
}





////////////////////////////////////
// 記事ページにカスタムフィールド追加
////////////////////////////////////
add_action('admin_menu', 'add_custom_fields');
function add_custom_fields() {
add_meta_box( 'seo_setting', 'SEO対策', 'seo_custom_fields', 'post', 'normal', 'high');
add_meta_box( 'seo_setting', 'SEO対策', 'seo_custom_fields', 'page', 'normal', 'high');
}

function seo_custom_fields() {
global $post;
$keywords = get_post_meta($post->ID,'keywords',true);
$description = get_post_meta($post->ID,'description',true);
$noindex = get_post_meta($post->ID,'noindex',true);
 if( $noindex == 1 ) {
 $noindex_check = "checked";
 } else {
 $noindex_check = "/";
 }
$nofollow = get_post_meta($post->ID,'nofollow',true);
 if( $nofollow == 1 ) {
 $nofollow_check = "checked";
 } else {
 $nofollow_check = "/";
 }

echo '<div style="margin:20px 0;">
 <span style="float:left;width:160px;margin-right:20px;">キーワード（コンマ区切り）</span>
 <input type="text" name="keywords" value="'.esc_html($keywords).'" size="60" />
 <div style="clear:both;"></div>
 </div>';

echo '<div style="margin:20px 0;">
 <span style="float:left;width:160px;margin-right:20px;">ページの説明（最大120文字ほど）※何も入力しない場合、先頭の120文字が自動で使われます。</span>
 <textarea name="description" id="description" cols="60" rows="4" />'.esc_html($description).'</textarea>
 <div style="clear:both;"></div>
 </div>';

echo '<div style="margin:20px 0;">
 <span style="float:left;width:160px;margin-right:20px;">NOINDEX（検索結果への表示をブロックします）</span>
 <input type="checkbox" name="noindex" value="1" ' . $noindex_check . '>
 <div style="clear:both;"></div>
 </div>';

echo '<div style="margin:20px 0;">
 <span style="float:left;width:160px;margin-right:20px;">NOFOLLOW（リンクを除外します）ほとんどの場合、チェックを入れる必要はありません。</span>
 <input type="checkbox" name="nofollow" value="1" ' . $nofollow_check . '>
 <div style="clear:both;"></div>
 </div>';
}

////////////////////////////////////
// カスタムフィールドの値を保存
////////////////////////////////////
function save_custom_fields( $post_id ) {
if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
if(isset($_POST['action']) && $_POST['action'] == 'inline-save') return $post_id;
if(!empty($_POST['keywords']))
update_post_meta($post_id, 'keywords', $_POST['keywords'] );
else delete_post_meta($post_id, 'keywords');
if(!empty($_POST['description']))
update_post_meta($post_id, 'description', $_POST['description'] );
else delete_post_meta($post_id, 'description');
if(!empty($_POST['noindex']))
update_post_meta($post_id, 'noindex', $_POST['noindex'] );
else delete_post_meta($post_id, 'noindex');
if(!empty($_POST['nofollow']))
update_post_meta($post_id, 'nofollow', $_POST['nofollow'] );
else delete_post_meta($post_id, 'nofollow');
}
function transition_post_status_4536($new_status, $old_status, $post) {
 if (($old_status == 'auto-draft'
 || $old_status == 'draft'
 || $old_status == 'pending'
 || $old_status == 'future')
 && $new_status == 'publish') {
 return $post;
 } else {
 add_action('save_post', 'save_custom_fields');
 }
}
add_action('transition_post_status', 'transition_post_status_4536', 10, 3);

////////////////////////////////////
// ディスクリプション
////////////////////////////////////

//カスタムフィールドで設定したディスクリプション
function custom_description() {
 $description = get_post_meta(get_the_ID(), 'description', true);
 $description = strip_tags(str_replace(array("\r\n", "\r", "\n"), '', $description));//改行削除
 return mb_strimwidth($description, 0, 240, "...", "utf-8");//多すぎても意味がないので先頭の120文字を取得
}

//先頭の120文字をディスクリプションとして自動で取得
function auto_description() {
 $post_content = get_post(get_the_ID())->post_content;
 $post_content = esc_html(strip_tags(str_replace(array("\r\n", "\r", "\n"), '', $post_content)));
 return mb_strimwidth($post_content, 0, 240, "...", "utf-8");
}

//条件によって読み込むディスクリプションを変更
function description_switch() {
 if ( custom_description() ) {
 $description = custom_description();
 } else {
 $description = auto_description();
 }
 return $description;
}

//ディスクリプション設定
function description() {
if ( is_singular() ) { // 記事ページ
 $get_description = description_switch();
} elseif (is_category()) { // カテゴリーページ
 if (term_description()) { //カテゴリーの説明を入力している場合
 $get_description = term_description();
 } else { //カテゴリーの説明がない場合
 $get_description = single_cat_title('', false)."の記事一覧";
 }
} elseif (is_tag()) { // タグページ
 if (term_description()) { //タグの説明を入力している場合
 $get_description = term_description();
 } else { //タグの説明がない場合
 $get_description = single_tag_title('', false)."の記事一覧";
 }
} else { // その他ページ
 $get_description = get_bloginfo('description');
}
 return $get_description;
}

////////////////////////////////////
// 設定の反映
////////////////////////////////////
function custom_seo_meta() {
// カスタムフィールドの設定値の読み込み
$custom = get_post_custom();
if(!empty( $custom['keywords'][0])) {
 $keywords = $custom['keywords'][0];
}
if(!empty( $custom['noindex'][0])) {
 $noindex = $custom['noindex'][0];
}
if(!empty( $custom['nofollow'][0])) {
 $nofollow = $custom['nofollow'][0];
}

//noindexとnofollow設定
if ( $noindex && $nofollow ) { // 両方チェックしている場合
 echo '<meta name="robots" content="noindex,nofollow">';
} elseif ( $noindex && !$nofollow) { // noindexだけチェックしている場合
 echo '<meta name="robots" content="noindex,follow">';
} elseif ( $nofollow && !$noindex ) { // nofollowだけチェックしている場合
 echo '<meta name="robots" content="nofollow">';
}

//キーワードとディスクリプション設定
if ( is_singular() ) { // 記事ページ
 if (!empty($keywords)) echo '<meta name="keywords" content="'.$keywords.'">';
}
echo '<meta name="description" content="'.description().'">';

}


//wp head の余計なものを削除する

remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head');
// Since 4.4
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','rest_output_link_wp_head');



//サイトキーワードの設定
function setmetakey(){
  echo 'unko,unko,unko';
}





function meta_menu(){
add_options_page('キーワード管理', 'メタキーワード管理', 8, 'meta_menu', 'meta_options_page');
add_action( 'admin_init', 'register_meta_settings' );
}

function register_meta_settings() {
  register_setting( 'banner-settings-group', 'meta_key' );
}

//上記のファンクションを登録する
add_action('admin_menu','meta_menu');

//htmlを表示させるコード
function meta_options_page(){
?>

<div class="wrap">
<h2>メタキーワードの設定（カンマ区切り）トップページに反映されます</h2>
<form method="post" action="options.php">
<?php
  settings_fields('banner-settings-group');
  do_settings_sections('banner-settings-group');
 ?>
 <label for="meta_key">キーワード設定（カンマ区切り）</label>
 <input type="text" id="meta_key" class="regular-text" name="meta_key" value="<?php echo get_option('meta_key'); ?>">
<?php submit_button(); ?>
</form>
</div>


<?php
}
