/*
 * @author yelin yelin@sohu-inc.com
 * @date 2013-09-09
 * @brief 省市二级联动jQuery插件
 * @params p:省的select控件元素(jQuery) c:市的select控件元素(jQuery) [dp]:初始化省 [dc]:初始化市
 * TODO: 去掉jQuery依赖
 */
;(function($){
    $.pcSelect = function(p, c, dp, dc){
    	p.html('');
        init(p, c, dp, dc);
        function init(p, c, dp, dc){
            for(var i=0,l=pp.length; i<l; i++){
                var _po = $('<option>');
                var _pval = pp[i].split('|')[0];
                var _phtml = pp[i].split('|')[1];
                _po.val( _pval );
                _po.html( _phtml );
                if(dp && (_pval === dp || _phtml === dp )){
                    _po.attr('selected' ,'selected');
                }
                p.append(_po);
            }
            if(!dp){
                initc(p, c );
            }else{
                initc(p, c, dp, dc);
            }
        }
        function initc(p, c, dp, dc){
            var _cval, _chtml, _co;
            var _dppre, flag = false;
            if( !dp ){
                _cval = cc[0].split('|')[0];
                _chtml = cc[0].split('|')[1];
                _co = $('<option>');
                _co.val( _cval );
                _co.html( _chtml );
                c.append(_co);
            }else{
                c.html('');
                _dppre = dp.substr(0, 2);
                for(var i=0,l=cc.length; i<l; i++){
                    _cval = cc[i].split('|')[0];
                    _chtml = cc[i].split('|')[1];
                    if( _cval.substr(0,2) === _dppre ){
                        _co = $('<option>');
                        _co.val( _cval );
                        _co.html( _chtml );
                        if( _cval === dc || _chtml === dc ){
                        	_co.attr('selected' ,'selected');
                        }
                        c.append(_co);
                        //flag = true;
                    }else if(flag){
                        break;
                    }
                }
            }
        }
        p.on('change', function(){
            var _val = $(this).val();
            initc(p, c, _val);
        });
    };
    var pp =[
        "000000|请选择",
        "110000|北京",
        "120000|天津",
        "130000|河北",
        "140000|山西",
        "150000|内蒙古",
        "210000|辽宁",
        "220000|吉林",
        "230000|黑龙江",
        "310000|上海",
        "320000|江苏",
        "330000|浙江",
        "340000|安徽",
        "350000|福建",
        "360000|江西",
        "370000|山东",
        "410000|河南",
        "420000|湖北",
        "430000|湖南",
        "440000|广东",
        "450000|广西",
        "460000|海南",
        "500000|重庆",
        "510000|四川",
        "520000|贵州",
        "530000|云南",
        "540000|西藏",
        "610000|陕西",
        "620000|甘肃",
        "630000|青海",
        "640000|宁夏",
        "650000|新疆",
        "710000|台湾",
        "810000|香港",
        "820000|澳门",
        "990000|其他国家"];
var cc =[
        "000000|请选择",
        "110100|北京",
        "120100|天津",
        "130101|石家庄",
        "130201|唐山",
        "130301|秦皇岛",
        "130701|张家口",
        "130801|承德",
        "131001|廊坊",
        "130401|邯郸",
        "130501|邢台",
        "130601|保定",
        "130901|沧州",
        "133001|衡水",
        "140101|太原",
        "140201|大同",
        "140301|阳泉",
        "140501|晋城",
        "140601|朔州",
        "142201|忻州",
        "142331|离石",
        "142401|榆次",
        "142601|临汾",
        "142701|运城",
        "140401|长治",
        "150101|呼和浩特",
        "150201|包头",
        "150301|乌海",
        "152601|集宁",
        "152701|东胜",
        "152801|临河",
        "152921|阿拉善左旗",
        "150401|赤峰",
        "152301|通辽",
        "152502|锡林浩特",
        "152101|海拉尔",
        "152201|乌兰浩特",
        "210101|沈阳",
        "210201|大连",
        "210301|鞍山",
        "210401|抚顺",
        "210501|本溪",
        "210701|锦州",
        "210801|营口",
        "210901|阜新",
        "211101|盘锦",
        "211201|铁岭",
        "211301|朝阳",
        "211401|锦西",
        "210601|丹东",
        "211001|辽阳",
        "220101|长春",
        "220201|吉林",
        "220301|四平",
        "220401|辽源",
        "220601|浑江",
        "222301|白城",
        "222401|延吉",
        "220501|通化",
        "230101|哈尔滨",
        "230301|鸡西",
        "230401|鹤岗",
        "230501|双鸭山",
        "230701|伊春",
        "230801|佳木斯",
        "230901|七台河",
        "231001|牡丹江",
        "232301|绥化",
        "230201|齐齐哈尔",
        "230601|大庆",
        "232601|黑河",
        "232700|加格达奇",
        "310100|上海",
        "320101|南京",
        "320201|无锡",
        "320301|徐州",
        "320401|常州",
        "320501|苏州",
        "320600|南通",
        "320701|连云港",
        "320801|淮阴",
        "320901|盐城",
        "321001|扬州",
        "321101|镇江",
        "330101|杭州",
        "330201|宁波",
        "330301|温州",
        "330401|嘉兴",
        "330501|湖州",
        "330601|绍兴",
        "330701|金华",
        "330801|衢州",
        "330901|舟山",
        "332501|丽水",
        "332602|临海",
        "340101|合肥",
        "340201|芜湖",
        "340301|蚌埠",
        "340401|淮南",
        "340501|马鞍山",
        "340601|淮北",
        "340701|铜陵",
        "340801|安庆",
        "341001|黄山",
        "342101|阜阳",
        "342201|宿州",
        "342301|滁州",
        "342401|六安",
        "342501|宣州",
        "342601|巢湖",
        "342901|贵池",
        "350101|福州",
        "350201|厦门",
        "350301|莆田",
        "350401|三明",
        "350501|泉州",
        "350601|漳州",
        "352101|南平",
        "352201|宁德",
        "352601|龙岩",
        "360101|南昌",
        "360201|景德镇",
        "362101|赣州",
        "360301|萍乡",
        "360401|九江",
        "360501|新余",
        "360601|鹰潭",
        "362201|宜春",
        "362301|上饶",
        "362401|吉安",
        "362502|临川",
        "370101|济南",
        "370201|青岛",
        "370301|淄博",
        "370401|枣庄",
        "370501|东营",
        "370601|烟台",
        "370701|潍坊",
        "370801|济宁",
        "370901|泰安",
        "371001|威海",
        "371100|日照",
        "372301|滨州",
        "372401|德州",
        "372501|聊城",
        "372801|临沂",
        "372901|菏泽",
        "410101|郑州",
        "410201|开封",
        "410301|洛阳",
        "410401|平顶山",
        "410501|安阳",
        "410601|鹤壁",
        "410701|新乡",
        "410801|焦作",
        "410901|濮阳",
        "411001|许昌",
        "411101|漯河",
        "411201|三门峡",
        "412301|商丘",
        "412701|周口",
        "412801|驻马店",
        "412901|南阳",
        "413001|信阳",
        "420101|武汉",
        "420201|黄石",
        "420301|十堰",
        "420400|沙市",
        "420501|宜昌",
        "420601|襄樊",
        "420701|鄂州",
        "420801|荆门",
        "422103|黄州",
        "422201|孝感",
        "422301|咸宁",
        "422421|江陵",
        "422801|恩施",
        "430101|长沙",
        "430401|衡阳",
        "430501|邵阳",
        "432801|郴州",
        "432901|永州",
        "430801|大庸",
        "433001|怀化",
        "433101|吉首",
        "430201|株洲",
        "430301|湘潭",
        "430601|岳阳",
        "430701|常德",
        "432301|益阳",
        "432501|娄底",
        "440101|广州",
        "440301|深圳",
        "441501|汕尾",
        "441301|惠州",
        "441601|河源",
        "440601|佛山",
        "441801|清远",
        "441901|东莞",
        "440401|珠海",
        "440701|江门",
        "441201|肇庆",
        "442001|中山",
        "440801|湛江",
        "440901|茂名",
        "440201|韶关",
        "440501|汕头",
        "441401|梅州",
        "441701|阳江",
        "450101|南宁",
        "450401|梧州",
        "452501|玉林",
        "450301|桂林",
        "452601|百色",
        "452701|河池",
        "452802|钦州",
        "450201|柳州",
        "450501|北海",
        "460100|海口",
        "460200|三亚",
        "500100|重庆",
        "500239|黔江土家族苗族自治县",
        "510101|成都",
        "513321|康定",
        "513101|雅安",
        "513229|马尔康",
        "510301|自贡",
        "512901|南充",
        "510501|泸州",
        "510601|德阳",
        "510701|绵阳",
        "510901|遂宁",
        "511001|内江",
        "511101|乐山",
        "512501|宜宾",
        "510801|广元",
        "513021|达县",
        "513401|西昌",
        "510401|攀枝花",
        "520101|贵阳",
        "520200|六盘水",
        "522201|铜仁",
        "522501|安顺",
        "522601|凯里",
        "522701|都匀",
        "522301|兴义",
        "522421|毕节",
        "522101|遵义",
        "530101|昆明",
        "530201|东川",
        "532201|曲靖",
        "532301|楚雄",
        "532401|玉溪",
        "532501|个旧",
        "532621|文山",
        "532721|思茅",
        "532101|昭通",
        "532821|景洪",
        "532901|大理",
        "533001|保山",
        "533121|潞西",
        "533221|丽江纳西族自治县",
        "533321|泸水",
        "533421|中甸",
        "533521|临沧",
        "540101|拉萨",
        "542121|昌都",
        "542221|乃东",
        "542301|日喀则",
        "542421|那曲",
        "542523|噶尔",
        "542621|林芝",
        "542200|泽当镇",
        "542600|八一镇",
        "610101|西安",
        "610201|铜川",
        "610301|宝鸡",
        "610401|咸阳",
        "612101|渭南",
        "612301|汉中",
        "612401|安康",
        "612501|商州",
        "612601|延安",
        "612701|榆林",
        "620101|兰州",
        "620401|白银",
        "620301|金昌",
        "620501|天水",
        "622201|张掖",
        "622301|武威",
        "622421|定西",
        "622624|成县",
        "622701|平凉",
        "622801|西峰",
        "622901|临夏",
        "623027|夏河",
        "620201|嘉峪关",
        "622102|酒泉",
        "630100|西宁",
        "632121|平安",
        "632221|门源回族自治县",
        "632321|同仁",
        "632521|共和",
        "632621|玛沁",
        "632721|玉树",
        "632802|德令哈",
        "640101|银川",
        "640201|石嘴山",
        "642101|吴忠",
        "642221|固原",
        "650101|乌鲁木齐",
        "650201|克拉玛依",
        "652101|吐鲁番",
        "652201|哈密",
        "652301|昌吉",
        "652701|博乐",
        "652801|库尔勒",
        "652901|阿克苏",
        "653001|阿图什",
        "653101|喀什",
        "654101|伊宁",
        "653201|和田",
        "710001|台北",
        "710002|基隆",
        "710020|台南",
        "710019|高雄",
        "710008|台中",
        "820000|澳门",
        "810000|香港",
        "990000|其他国家"];
})($);