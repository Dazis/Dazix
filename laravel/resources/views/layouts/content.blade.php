@include('blade.headerss')
<style>
.c-bd{width:700px;margin:115px auto;background:#fff;border:1px solid #c0c0c0;}
.c-bdc{padding:90px 0 90px 70px;}
.c-bdc .w-wb1{margin:35px 0 0;}

.w-wb1 .wb10{overflow:hidden;display:block;width:38px;height:35px;text-indent:-9999px;background:url(../style/images/img/tieba24.png) -43px 0 no-repeat;}
.w-wb1 .wb10:hover{background-position:1px 0;}

/* 微信分享弹层样式 */
.towdimcodelayer{position:absolute;left:-50px;top:-215px;z-index:10000;margin-top:0;opacity:0;filter:alpha(opacity=0);}
.js-transition{transition:margin-top .15s ease,opacity .12s linear;-webkit-transition:margin-top .15s ease,opacity .12s linear;-moz-transition:margin-top .18s ease,opacity .15s linear;-ms-transition:margin-top .15s ease,opacity .12s linear;-o-transition:margin-top .15s ease,opacity .12s linear;}
.towdimcodelayer .arrow{position:absolute;width:0;height:0;border-width:8px;border-style:solid;_display:none;}
.towdimcodelayer .js-arrow-up{left:72px;top:-15px;border-color:transparent transparent #191919 transparent;}
.towdimcodelayer .js-arrow-down{left:72px;bottom:-15px;border-color:#191919 transparent transparent transparent;}
.towdimcodelayer .layerbd{width:100px;height:150px;padding:30px 30px 0 30px;background:#191919;box-shadow:0 1px 3px #000;-webkit-box-shadow:0 1px 3px #000;-moz-box-shadow:0 1px 3px #000;-o-box-shadow:0 1px 3px #000;}
.towdimcodelayer .codebg{width:75px;height:75px;padding:13px 12px 12px 13px;background:#fff;}
.towdimcodelayer .codebg img{width:75px;height:75px;}
.towdimcodelayer .codettl{height:22px;line-height:22px;margin-top:5px;color:#888;font-size:12px;}
.js-show-up{margin-top:15px;opacity:1;filter:alpha(opacity=100);}
.js-show-down{margin-top:-15px;opacity:1;filter:alpha(opacity=100);}
</style>
<link href="../style/css/pt_lib_macro.css" type="text/css" rel="stylesheet"/>
    <div class="location area">
        <span class="sohu-logo"><a href="/">搜狐</a></span>&gt;<a href="//health.sohu.com" data-role="channelLink" target="_blank">健康</a>&gt;<span data-role="category-name" style="display:none"><em style="margin:0 8px;"></em>&gt;</span><span class="dir-end">正文</span>
    </div>             <div class="area clearfix" id="article-container">
                <div class="column left">
	<div class="user-info" id="user-info">
    <!-- <div class="user-pic">
        <a href="http://mp.sohu.com/profile?xpt=dGFueGpfcHVtY2hAc29odS5jb20=&_f=index_pagemp_1" target="_blank"><img src="../picture/dba9dd83e2ec40b485030ca4f0f89a9f.gif" alt=""></a>
    </div>
    <h4><a href="http://mp.sohu.com/profile?xpt=dGFueGpfcHVtY2hAc29odS5jb20=&_f=index_pagemp_1" target="_blank">协和妇产谭先杰</a></h4>
    <dl class="user-num">
        <dd><span class="value" data-value="192" data-role="info-article-num"><em class="num"></em></span>文章</dd>
        <dd><span class="value" data-value="" data-role="info-read-num"><em class="num"></em></span>总阅读</dd>
    </dl>
    <div class="user-more"><a href="http://mp.sohu.com/profile?xpt=dGFueGpfcHVtY2hAc29odS5jb20=&_f=index_pagemp_2" target="_blank">查看TA的文章&gt;</a></div> -->
</div>	<div class="article-dos" id="article-dos">
		<div class="article-dones">
    <div style="margin-top:30px;">
    <center>
        <hr>
        分享到
        <ul class="w-wb1">
                <li class="f-pr">
                    <a href="javascript:void(0)" class="wb11" onmouseover="onMouseoverXCode()" onmouseout="onMouseoutXCode()">分享到微信</a>
                    <div class="towdimcodelayer js-transition" id="layerWxcode">
                        <div class="arrow js-arrow-down"></div>
                        <div class="layerbd">
                            <div class="codebg"><img class="xtag" src="http://www.lofter.com/genBitmaxImage?url=http://www.jq-school.com/?act=qbwzywxfx_20141226_01"></div>
                            <div class="codettl">打开微信扫一扫</div>
                        </div>
                    </div>
                </li>
                <!-- @foreach ($data as $user) -->

                <li><a href="#" onclick="dolog('qzone', function(){window.open('http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title=' + encodeURIComponent('<?= $data[0]->title?>') + '&url=' + encodeURIComponent('http://www.souhujiankangs.com/Dazis/laravel/public/index/show') , '_parent', ['toolbar=0,status=0,resizable=1,width=600,height=520,left=',(screen.width-600)/2,',top=',(screen.height-520)/2].join(''));return false;});" class="wb5" title="分享到QQ空间">分享到QQ空间</a></li>
                <!-- @endforeach -->

    </center>
    </div>
    <dl>

        <!-- <dd class="comment-do"><a href="#comment_area"><span class="num" data-role="comment-count"></span><em class="comment-icon icon"></em></a></dd> -->
        <!--<dd class="zan-do" data-role="like-btn"><a href="javascript:void(0)"><span class="num" data-role="like">0</span><em class="icon zan-icon"></em></a>

            <span class="add-one">+1</span>
        </dd>-->
    </dl>
</div>
		<!-- <div class="share" id="share">

		</div> -->

	</div>

</div>  
@foreach ($data as $user)

<div class="left main">
                    <div class="text">
                        <div class="text-title">
    <h1>{{ $user->title }}<span class="article-tag">
                 </span>
    </h1>
            <div class="article-info">
        <span class="time" id="news-time" data-val="1505042409000">2017-09-10 19:20</span>
        <span data-role="original-link">来源:<a href="http://mp.weixin.qq.com/s?timestamp=1505042592&src=3&ver=1&signature=3Gioj09gENkMSL6aG6TYOChhkR*8RPAHlNwagrRq7-kA7*3iyZeIRNLpmcqZqAOZjAGkdyekMTFv3*7gKN1LEz2bJrtNKPfldyqek13JlzowCGuqHPhJan8J*-UERl3irNr5fxoGyTntMOwDZ*WgnQSNo9JFoO4FF*1Uz-ZwECI=" target="_blank">协和妇产谭先杰</a></span>
                <span class="tag">
                      </span>
            </div>
</div>
<article class="article">
     {{ $user->message }}
<p><span>点击[</span>一台手术背后的故事<span>]或文末的“阅读原文”按钮，阅读《一台手术背后的故事》。</span><a href="//www.sohu.com/?strategyid=00001 " target="_blank" title="点击进入搜狐首页" id="backsohucom" style="white-space: nowrap;"><span class="backword"><i class="backsohu"></i>返回搜狐，查看更多</span></a></p>      <p data-role="editor-name">责任编辑：<span></span></p>
</article>
  <div class="statement">声明：本文由入驻搜狐号的作者撰写，除搜狐官方账号外，观点仅代表作者本人，不代表搜狐立场。</div>  <div class="article-oper">
    <div class="article-oper-1 left">
        <span class="read-num">阅读 (<?= $data[0]->num?>)</span>
    </div>
    <div class="article-oper-r right">
        <span class="uninterested" id="uninterested">

</span>
        <a class="complain-link" target="_blank" href="http://quan.sohu.com/q/545c9b6bf6c43b5569fe64a2"><em class="complain-icon icon"></em>投诉</a>
    </div>
</div>
 
 

                        </div>
@endforeach

         <!--            <div class="user-god clear" id="user-post">
    <div class="user-god-pic"><a href="http://mp.sohu.com/profile?xpt=dGFueGpfcHVtY2hAc29odS5jb20="><img src="../picture/dba9dd83e2ec40b485030ca4f0f89a9f.gif" alt=""></a></div>
    <div class="user-god-link">
                <dl>
            <dt><a href="http://weibo.com/p/1005051927633355/wenzhang?page=2&amp;pids=Pl_Third_Inline__119#!/p/1005051927633355/home?from=page_100505&amp;mod=TAB#place" target="_blank">请关注我的微博</a></dt>
            <dd>一个喜欢写点东西的手术匠。</dd>
        </dl>
                <dl>
            <dt><a href="http://www.haodf.com/doctor/DE4r08xQdKSLuDNDMJ2Duj49TpEn.htm" target="_blank">请关注我的个人网站</a></dt>
            <dd>好大夫个人网站，可以回答问题</dd>
        </dl>
            </div>
</div> -->

                    <div class="article-recom clear" id="sogou-words">

</div>                    <div class="god-article-bottom" id="god_bottom_banner">
</div>
<div class="user-god clear" id="user-post" style="display:none">

</div>                    <div class="comment" id="comment_area">


    <div id="mp-comment" sid="510827658"></div> 


</div>                    
<div class="groom-read">
    <div class="title"><span><em class="ln"></em>推荐阅读</span></div>
    <div class="groom-menu clear " id="news-recommend-nav">
<ul>     <li class="cur" data-id=""><a href="javascript:void(0)"><em class="dot"></em>推荐</a></li>
               <li data-id="" data-tag-id="64738" ><a href="//www.sohu.com/tag/64738">高血压</a></li>
                <li data-id="" data-tag-id="64576" ><a href="//www.sohu.com/tag/64576">糖尿病</a></li>
                <li data-id="" data-tag-id="64739" ><a href="//www.sohu.com/tag/64739">冠心病</a></li>
                <li data-id="" data-tag-id="46081" ><a href="//www.sohu.com/tag/46081">鼻炎</a></li>
                <li data-id="" data-tag-id="69614" ><a href="//www.sohu.com/tag/69614">狐大医</a></li>
                <li data-id="" data-tag-id="69615" ><a href="//www.sohu.com/tag/69615">狐观医改</a></li>
                <li data-id="" data-tag-id="65196" ><a href="//www.sohu.com/tag/65196">肺癌</a></li>
                <li data-id="" data-tag-id="68592" ><a href="//www.sohu.com/tag/68592">雾霾</a></li>
                <li data-id="" data-tag-id="64797" ><a href="//www.sohu.com/tag/64797">痛风</a></li>
                <li data-id="" data-tag-id="267" ><a href="//www.sohu.com/tag/267">医药热点</a></li>
                <li data-id="" data-tag-id="65035" ><a href="//www.sohu.com/tag/65035">多囊卵巢综合征</a></li>
                <li data-id="" data-tag-id="64795" ><a href="//www.sohu.com/tag/64795">糖尿病肾病</a></li>
            
</ul>
</div>
    <div class="news-list clear" id="main-news" style="min-height:1000px">
         <!---->
    </div>

</div>
                </div>
                <div class="sidebar right" id="right-side-bar">
    <div class="search-right" id="search"></div>
    <div class="godA" id="nav_button">

    </div>
    <div class="godR" id="god_1">

    </div>
            <div data-role="hot-pic" class="clearfix bord hot-atlas"></div>
    <div class="godR" id="god_2">

    </div>
    <div class="hot-article clear bord" id="hot-news">
 </div>

    <div class="godR" id="god_3">

    </div>
     <div class="bord clear recommend" id="recommend-writer">

</div>    <div class="godR" id="god_4">

    </div>
     <div class="pages-fun  " id="pages-fun"></div>
    <div id="god_fix_container" class="right-fixed" style="display:none;">
        <div class="godR" id="god_fix_1">

        </div>
    </div>
     <div id="fixed-view" data-rel="#hot-news" style="z-index:2">
    </div>
</div>



             </div>
             <div id="float-btn" class="float-links"></div>              <div class="sohu-khd" data-role="wp-ad"><a href="javascript:void(0)" class="close-khd"></a><a href="https://www.microsoft.com/zh-cn/store/p/%E6%90%9C%E7%8B%90uwp/9nb9229mmbjh" target="_blank" class="download-khd"><i class="icon khd-d-icon"></i>免费获取</a></div>
             
        </div>
            <div id="sohu-mod" class="sohu-mod">
  <div class="area sohu-frag">
    <div class="left sohu-news">
      <div class="title">今日搜狐热点</div>
      <div class="list">
        <ul>
                      <li><a class="link-home" href="/a/191031740_260616" target="_blank">国家防总：18号台风“泰利”或成今年登陆我国最强台风</a></li>
                      <li><a class="link-home" href="/a/191016734_255783" target="_blank">湖州市环保局长：现场已挖出上百头死猪 3人被刑拘</a></li>
                      <li><a class="link-home" href="/a/191028395_260616" target="_blank">林毅夫的吉林报告为啥激怒东北：体制机制改革才是关键</a></li>
                      <li><a class="link-home" href="/a/191017819_115362" target="_blank">WePhone创始人留遗书称被前妻逼死 软件仍可用</a></li>
                  </ul>
      </div>
    </div>
    <div class="left auto-sohu">
      <div class="count-down"><span>6</span>秒后</div>
      <div class="go-sohu"><a href="http://www.sohu.com?strategyid=00004">进入搜狐首页</a></div>
      <a href="#" target="_blank" class="close-sohu"></a>
    </div>
  </div>
</div>
             

<script src="../js/lib-111eab4f1d_1.js"></script>
<!--<script src="../js/ie8hack-07e05e83f1_1.js"></script>-->
<script src="../js/282f20cdaef6436bbc864a19958c5073.js"></script>
<script src="../js/main-f89ae5c422_1.js"></script>
<script src="../js/pv_1.js"></script>
<script src="../js/jquery.share.min.js"></script>
<script src="http://www.sucaihuo.com/Public/js/jquery.js"></script> 
             <script>
try{console.log("执行成功")
        window.sohu_mp.article({
        channel_id: "24",
        news_id: "191051027",
        cms_id: "510827658",
        media_id: "103630",
        passport: "tanxj_pumch@sohu.com",
        weboUrl: "http://mp.sohu.com/profile?xpt=dGFueGpfcHVtY2hAc29odS5jb20=",
        title: "CCTV《面对面》：手术背后",
        channel_url:"//health.sohu.com",
        categoryId:"0",
        mpNewsExt:{
            "modelId":""
        }});
        
}
catch(e){
    var html = '<div class="err-js">' +
                '<span><em class="icon err-js-icon"></em>JS加载错误，请重新加载。</span>' +
                '<a href="javascript:window.location.reload()" target="_blank" class="cached-btn"' +
                '><em class="icon-cached"></em>刷新</a></div>';
    $(document.body).prepend(html);
    // Raven.captureException(e);
    console.error("发生错误",e);
}
</script>
<!--[if lt IE 8]>
<script type="text/javascript">
(function(){
    var ua = navigator.userAgent;
    var version;
    var html = '<div class="area clear">' +
        '<div class="ie-low">' +
        '<p>您的浏览器版本过低<br>为了更好的体验，请升级你的浏览器。</p>' +
        '<h5><a href="https://ie.sogou.com" target="_blank" class="upgrade-btn">马上升级</a></h5>' +
        '</div></div>';
    if (/MSIE ([^;]+)/.test(ua)) {
        version = parseInt(RegExp["$1"]);
        if (version<8) {
            document.body.innerHTML=html;
            var reg = new RegExp("(^| )SUV=([^;]*)(;|$)");
            var suvs = unescape(document.cookie.match(reg)[2]); 
            var spv_server_src = "http://pv.sohu.com/action.gif?actionId=10078&SUV="+suvs;
            var scripts = document.createElement('script');
            scripts.src = spv_server_src;
            document.body.appendChild(scripts);   
            Raven.captureException(new Error('ie'+version));   
        }
    }
})()
</script>
<![endif]-->
<script src="../js/sohu-require_1.js"></script>
<script type="text/javascript"> require(["sjs/matrix/ad/passion"]);</script>
<script type="text/javascript" src="../js/sohuflash_1_1.js"></script>
<script type="text/javascript" src="../js/delivery_1.js"></script>

<script type="text/javascript" src="../js/pagepvmonitor_1.js"></script>

<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<script type="text/javascript">
   (function(window,document){
        
        document.uniqueID!=document.uniqueID&&!!location.hash&&(location.hash=location.hash);
        window.focus();
    })(this,document);
  </script>
  <script>
function dolog(_info, _callback) {
var img = new Image();
img.onload=img.onerror=_callback;
img.src = 'http://www.jq-school.com/images/logo.gif';
}

var layerWxcode = document.getElementById('layerWxcode');
function onMouseoverXCode(){
layerWxcode.className = 'towdimcodelayer js-transition js-show-up';
}
function onMouseoutXCode(){
layerWxcode.className = 'towdimcodelayer js-transition';
}
</script>
    </body>
</html>