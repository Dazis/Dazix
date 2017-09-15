@include('blade.header')
<div class="area clear god-channel-top" id="god-channel-top"></div>
    <div class="area clear god-channel-top-fix" id="god-channel-top-fix"></div>

    <div class="area clear" id="main-container">
        <div id="left-nav" class="column" style="visibility: hidden">
    <div class="channel-logo">
                <a href="/">搜狐健康</a></div>
            <div class="second-nav">

<!--二级分类-->
    <?php foreach($data as $k=>$v){?>
    <div class="box box-hover common" data-role="box">
        <h4><a href="/23"></a><?=$v['type_name']?></h4>
            <div style="heigth:50px;width:130px;padding-left:8px">
                <?php foreach($v['rz'] as $kay=>$val){?>
                <?php if(($kay%2)==0 && $kay!=0){?>
                    <br>
                <?php } ?>
                <a href="//www.souhujiankangs.com/Dazis/laravel/public/index/type_list?id=<?=$val['id']?>" style="padding:10px" target="_blank"><?=$val['type_name']?></a>
                
                <?php } ?>
            </div>
            <!--如果多于4个显示更多-->
    </div>
    <?php } ?>

           
         <div class="box box-hover box-no" style="display: none">
        <h4><a href="javascript:void(0)">更多</a><em class="icon-angle-up"></em></h4>
                    <div class="show-nav" data-role="show-more-box">
                        <div class="bg"></div><div class="bg-mod"></div>
                        <div class="mod clearfix">
                            <div class="clearfix">
                                                            <dl>
                                    <dt><i class="ln icon"></i><a href="/23">新闻</a></dt>
                                                                            <dd><a href="//www.sohu.com/tag/69615" target="_blank">狐观医改</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/69620" target="_blank">搜狐医药</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/269" target="_blank">义诊讲座</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/69618" target="_blank">就医帮</a></dd>
                                                                    </dl>
                                                            <dl>
                                    <dt><i class="ln icon"></i><a href="/25">内科</a></dt>
                                                                            <dd><a href="//www.sohu.com/tag/64715" target="_blank">日常保健</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/69614" target="_blank">狐大医</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/103" target="_blank">心血管科</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/64576" target="_blank">糖尿病</a></dd>
                                                                    </dl>
                                                            <dl>
                                    <dt><i class="ln icon"></i><a href="/30">肿瘤</a></dt>
                                                                            <dd><a href="//www.sohu.com/tag/65196" target="_blank">肺癌</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/65201" target="_blank">结直肠癌</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/65202" target="_blank">肝癌</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/65209" target="_blank">乳腺肿瘤</a></dd>
                                                                    </dl>
                                                            <dl>
                                    <dt><i class="ln icon"></i><a href="/32">营养</a></dt>
                                                                            <dd><a href="//www.sohu.com/tag/65239" target="_blank">食品安全</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/65234" target="_blank">饮食搭配</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/65233" target="_blank">临床营养</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/65242" target="_blank">中医食疗</a></dd>
                                                                    </dl>
                                                            <dl>
                                    <dt><i class="ln icon"></i><a href="/27">妇产科</a></dt>
                                                                            <dd><a href="//www.sohu.com/tag/64999" target="_blank">月经失调</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/64994" target="_blank">阴道炎</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/65060" target="_blank">分娩</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/65042" target="_blank">生殖内分泌科</a></dd>
                                                                    </dl>
                                                            <dl>
                                    <dt><i class="ln icon"></i><a href="/26">外科</a></dt>
                                                                            <dd><a href="//www.sohu.com/tag/64979" target="_blank">整形外科</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/64864" target="_blank">心梗</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/64859" target="_blank">神经外科</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/64876" target="_blank">血管外科</a></dd>
                                                                    </dl>
                                                            <dl>
                                    <dt><i class="ln icon"></i><a href="/28">儿科</a></dt>
                                                                            <dd><a href="//www.sohu.com/tag/70099" target="_blank">儿童保健</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/70100" target="_blank">儿童喂养</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/65154" target="_blank">心理健康</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/65149" target="_blank">生长发育</a></dd>
                                                                    </dl>
                                                            <dl>
                                    <dt><i class="ln icon"></i><a href="/29">男科</a></dt>
                                                                            <dd><a href="//www.sohu.com/tag/64568" target="_blank">不育</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/63808" target="_blank">前列腺炎</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/63810" target="_blank">早泄</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/63809" target="_blank">性功能障碍</a></dd>
                                                                    </dl>
                                                            <dl>
                                    <dt><i class="ln icon"></i><a href="/24">全科</a></dt>
                                                                            <dd><a href="//www.sohu.com/tag/64722" target="_blank">公共卫生</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/69614" target="_blank">狐大医</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/64725" target="_blank">医学人文</a></dd>
                                                                            <dd><a href="//www.sohu.com/tag/64715" target="_blank">日常保健</a></dd>
                                                                    </dl>
                                                        </div>
                        </div>
                        <div class="line"></div>
                        <ul class="con">
                                                    </ul>
                    </div>
     </div>
    </div>
</div>

        <div class="main left">
            
            <div id="search" class="search"></div>
            
            <div id="focus" class="focus-banner"></div>
            <!--此为财经频道头部插件位置，待配置-->
            
            <div class="news-list clearfix" id="main-news">
                                                        


<?php foreach($article as $k=>$v){?>                                        
<div data-role="news-item" class='news-box clear   news-box-aa ' data-ev="190632579" data-media-id="441301" data-newsid="2" data-loc="">
        <div class="pic img-do left">
        <a href="http://www.souhujiankangs.com/Dazis/laravel/public/index/article_list?id=<?= $v['id']?>" target="_blank">
                                 <img src="<?= $v['image']?>" alt="">                    
                                </a>
    </div>
        <h4><a href="http://www.souhujiankangs.com/Dazis/laravel/public/index/article_list?id=<?= $v['id']?>" class="btns" attr="<?= $v['id']?>">
         <?= $v['title']?>
        </a></h4>
    <div class="other">
        <span class="img"><a href="http://mp.sohu.com/profile?xpt=NTk1NTM1NjA4MUBzaW5hLnNvaHUuY29t" target="_blank"><img src="../picture/958c184ca9df490b9b43cb8cb64b40a4.gif"  alt=""></a></span>
                <span class="channel"><a href="?_f=v2-index-feeds" data-role="channelLink" target="_blank" data-channel-id="0">  $info.channelName</a></span><span class="dot channel-dot">·</span>
                <span class="name"><a href="http://mp.sohu.com/profile?xpt=NTk1NTM1NjA4MUBzaW5hLnNvaHUuY29t" target="_blank"><?= $v['uname']?></a></span><span class="dot">·</span>
        <span class="time" data-val="1504859352000" data-role="time"></span>
        <a class="com" href="//www.sohu.com/a/190632579_441301#comment_area" target="_blank"><i class="icon icon-comment"></i><span data-id="510423424" data-role="comment-count"></span></a>
    </div>
</div>          
<?php } ?>                        
            </div>
        </div>

        <div class="right sidebar">
    <div class="godA" id="nav_button">

    </div>


    <!--插件代码待插入，后端Q2完成配置-->

    
    <div class="godR" id="god_1">

    </div>
     <div class="bord clear recommend" id="recommend-writer">

</div>
  
    <div class="godR" id="god_2">

    </div>

    <div class="hot-article clear bord" id="hot-news">
 </div>

    <div class="godR" id="god_3">

    </div>

            <div class="cooperation clear bord">
        <div class="titleR"><span class="tt">合作机构</span></div>
        <div class="cooper">
            <p>
                                   
                <a target="_blank" href="http://www.caca.org.cn/">中国抗癌协会</a> 丨
                                   
                <a target="_blank" href="http://www.chinacdc.cn/">中国疾病预防控制中心</a> 丨
                                   
                <a target="_blank" href="http://www.cma.org.cn/">中华医学会</a> 丨
                                   
                <a target="_blank" href="http://www.cqap.cn/">中国医药质量管理协会</a> 丨
                                   
                <a target="_blank" href="http://www.ysyy.org/index.html">中国优生优育协会</a> 丨
                                   
                <a target="_blank" href="http://www.satcm.gov.cn/">国家中医药管理局</a> 丨
                                   
                <a target="_blank" href="http://www.cpma.org.cn/">中华预防医学会</a> 丨
                                   
                <a target="_blank" href="http://www.catcm.ac.cn/">中国中医科学院</a> 丨
                                   
                <a target="_blank" href="http://www.bjmu.edu.cn/">北京大学医学部</a> 丨
                                   
                <a target="_blank" href="http://www.cfiin.com/">中国食品工业协会</a> 丨
                                   
                <a target="_blank" href="http://www.chc.org.cn/">中国保健协会</a> 丨
                                   
                <a target="_blank" href="http://www.sfda.gov.cn/WS01/CL0001/">国家食品药品监督管理总局</a> 丨
                                   
                <a target="_blank" href="http://www.cha.org.cn/">中国医院协会</a> 丨
                                   
                <a target="_blank" href="http://www.bjcdc.org/">北京市疾病预防控制中心</a> 丨
                                   
                <a target="_blank" href="http://www.cmda.net/">中国医师协会</a> 丨
                                   
                <a target="_blank" href="http://www.nhfpc.gov.cn/">国家卫生和计划生育委员会</a> 丨
                                   
                <a target="_blank" href="http://www.redcross.org.cn/hhzh/">中国红十字会</a> 丨
                                   
                <a target="_blank" href="http://www.bjchfp.gov.cn/">北京市卫生和计划生育委员会</a> 丨
                                   
                <a target="_blank" href="http://www.pumc.edu.cn/">中国医学科学院 北京协和医学院</a> 丨
                            </p>
        </div>
    </div>
        

     <div class="pages-fun  " id="pages-fun">
    </div>
    <div class="godR" id="god_4">

    </div>
    
    <div id="god_fix_container" class="right-fixed" style="display:none;">
        <div class="godR" id="god_fix_1">

        </div>
    </div>
    <div id="fixed-view" data-rel="#hot-news">
    </div>
    <div id="us-pop"></div>
</div>    </div>

    <div id="float-btn" class="float-links"></div></div>



<script src="../js/lib-111eab4f1d.js"></script>
<!--<script src="../js/ie8hack-07e05e83f1.js"></script>-->
<script src="../js/a4fb1be3951b439199e2e790bacc643f.js"></script>
<script src="../js/main-f89ae5c422.js"></script>
<script src="../js/pv.js"></script>
<script>
try {
    window.sohu_mp.channel({
        channel_id: "24",
        focus:[
                                     {
                "id" :   "190322134",
                "path"  :   "/a/190322134_104952",
                "title" :   "狐大医 |年轻患者心理问题亟待关注！徐兵河谈晚期乳癌新方案",
                "picUrl" :   "//5b0988e595225.cdn.sohucs.com/images/20170908/c9e38931a3b44886aae49af83044b33f.jpeg",
                "mediaId" :"104952",
                "id" :   "190322134"
            }                        , {
                "id" :   "190330595",
                "path"  :   "/a/190330595_104952",
                "title" :   "当心新长出来的黑斑！研究发现2/3皮肤癌源自新斑点",
                "picUrl" :   "//5b0988e595225.cdn.sohucs.com/images/20170908/3be1fd8b337445278e3b030edc7d0e2f.jpeg",
                "mediaId" :"104952",
                "id" :   "190330595"
            }                        , {
                "id" :   "190338570",
                "path"  :   "/a/190338570_104952",
                "title" :   "狐大医 |刘晓雁：秋冬季，湿疹宝宝要拔干还是保湿？",
                "picUrl" :   "//5b0988e595225.cdn.sohucs.com/images/20170908/bf91a69850a142e291ea62cff6c9374a.jpeg",
                "mediaId" :"104952",
                "id" :   "190338570"
            }                        , {
                "id" :   "190679951",
                "path"  :   "/a/190679951_171531",
                "title" :   "特级油、一级油、二级油…食用油等级越高越有营养吗？",
                "picUrl" :   "//5b0988e595225.cdn.sohucs.com/c_fill,w_600,h_300,g_faces/images/20170908/f791c5e19e1b4929afafbf645649cb9c.jpeg",
                "mediaId" :"171531",
                "id" :   "190679951"
            }                        , {
                "id" :   "190455548",
                "path"  :   "/a/190455548_452205",
                "title" :   "9省份实现跨省就医联网结报，看病前先了解这些报销流程",
                "picUrl" :   "//5b0988e595225.cdn.sohucs.com/c_fill,w_600,h_300,g_faces/images/20170908/29647acf1d7e4f57822baf65330d4b29.jpeg",
                "mediaId" :"452205",
                "id" :   "190455548"
            }                    ]
    });
}
catch(e){
    console.log(e);
        var html = '<div class="err-js">' +
                    '<span><em class="icon err-js-icon"></em>JS加载错误，请重新加载。</span>' +
                    '<a href="javascript:window.location.reload()" target="_blank" class="cached-btn"' +
                    '><em class="icon-cached"></em>刷新</a></div>';
        $(document.body).prepend(html);
        //捕获错误
        console.log(e);
        // Raven.captureException(e);
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
<script type="text/javascript">
    $('.btns').click(function(){
        var id = $(this).attr('attr');
        window.location.replace("http://www.souhujiankangs.com/Dazis/laravel/public/index/article_list?id="+id)；
    })
</script>
</body>
</html>