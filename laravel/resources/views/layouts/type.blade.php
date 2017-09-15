@include('blade.header')
<div id="top">
        <div class="tag-title-bg">
    <div class="area tag-title">
        <div class="tag-name"><i class="icon tag-name-icon"></i><span class="tt"><?=$tname?></span></div>
    </div>
</div>    </div>

    <div class="area clear" id="main-container">

        <div class="hot-spots left"  id="hot-spots">
    
<div class="title"><span class="tt">热点直达</span></div>
<ul>
@foreach ($ten as $user)

        <li>
        <a href="//www.sohu.com/tag/64738" target="_blank">
            {{ $user->type_name }}   </a>
    </li>
@endforeach
    
    </ul>
</div>
        <div class="main left">
            <div class="news-list clearfix" id="main-news">
                <div id="news-wrapper">
@foreach ($rest as $user)
                                                            
<div data-role="news-item" class='news-box clear   news-box-aa ' data-ev="190666794" data-media-id="456094" data-newsid="1" data-loc="">
        <div class="pic img-do left">
        <a href="http://www.souhujiankangs.com/Dazis/laravel/public/index/article_list?id={{ $user->id }}" target="_blank">
                                 <img src="../picture/fcefd018ef114bf49e63e0c2b82f0c72.jpeg" alt="">                    
                                </a>
    </div>
        <h4><a href="https://www.baidu.com" target="_blank">
         {{ $user->title }}
        </a></h4>
    <div class="other">
        <span class="img"><a href="http://mp.sohu.com/profile?xpt=amlhbmthbmdjaGVuZ2R1QHNvaHUuY29t" target="_blank"><img src="../picture/7c6e825f2d0947f28aaccf567c475376_th.jpg"  alt=""></a></span>
                <span class="channel"><a href="?_f=v2-index-feeds" data-role="channelLink" target="_blank" data-channel-id="0">  $info.channelName</a></span><span class="dot channel-dot">·</span>
                <span class="name"><a href="http://mp.sohu.com/profile?xpt=amlhbmthbmdjaGVuZ2R1QHNvaHUuY29t" target="_blank">健康成都官微</a></span><span class="dot">·</span>
        <span class="time" data-val="1504863342000" data-role="time"></span>
        <a class="com" href="//www.sohu.com/a/190666794_456094#comment_area" target="_blank"><i class="icon icon-comment"></i><span data-id="510457715" data-role="comment-count"></span></a>
    </div>
</div>
@endforeach
                                        


                </div>
            </div>
        </div>
        <div class="sidebar right">
    <div class="search-right" id="search"></div>
    <div class="godA" id="nav_button">

    </div>
    <div class="godR" id="god_1">

    </div>
   <div class="bord clear recommend" id="recommend-writer">

</div>    <div class="godR" id="god_2">

    </div>
    <div class="hot-article clear bord" id="hot-news">
 </div>

    <div class="godR" id="god_3">

    </div>
 <div class="pages-fun " id="pages-fun">
    </div>
    <div class="godR" id="god_4">

    </div>
    <div id="god_fix_container" class="right-fixed" style="display:none;">
        <div class="godR" id="god_fix_1">

        </div>
    </div>
    <div id="fixed-view" data-rel="#hot-news">
    </div>
</div>    </div>

    <div id="float-btn" class="float-links"></div></div>



<script src="../js/lib-111eab4f1d.js"></script>
<!--<script src="../js/ie8hack-07e05e83f1.js"></script>-->
<script src="../js/547aa017f6ec4e648682da32c1db0b2e.js"></script>
<script src="../js/main-f89ae5c422.js"></script>
<script src="../js/pv.js"></script>
<script>
try{
    window.sohu_mp.tag({
        tag_id: "64738",
        channel_id: "24",
        tag_name:"高血压"
    });
}
catch(e){
    var html = '<div class="err-js">' +
                '<span><em class="icon err-js-icon"></em>JS加载错误，请重新加载。</span>' +
                '<a href="javascript:window.location.reload()" target="_blank" class="cached-btn"' +
                '><em class="icon-cached"></em>刷新</a></div>';
    $(document.body).prepend(html);
   //加载监控代码
   console.log("发生错误",e);
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
<script src="../js/sohu-require.js"></script>
<script type="text/javascript"> require(["sjs/matrix/ad/passion"]);</script>
<script type="text/javascript" src="../js/sohuflash_1.js"></script>
<script type="text/javascript" src="../js/delivery.js"></script>

<script type="text/javascript" src="../js/pagepvmonitor.js"></script>

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

</body>
</html>
