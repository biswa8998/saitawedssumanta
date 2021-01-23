<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link href="https://saitawedssumanta.herokuapp.com" rel="canonical">
      <!-- Chrome, Firefox OS and Opera -->
      <meta name="theme-color" content="#3b393c">
      <!-- Windows Phone -->
      <meta name="msapplication-navbutton-color" content="#3b393c">
      <!-- iOS Safari -->
      <meta name="apple-mobile-web-app-status-bar-style" content="#3b393c">
      <meta name="robots" content="noindex, follow">
      <meta name="HandheldFriendly" content="true">
      <meta name="MobileOptimized" content="317">
      <meta name="viewport" content="width=317, minimum-scale=0.5, maximum-scale=2.5, user-scalable=no">
      <title>Saita &amp; Sumanta's Wedding</title>
      <meta name="description" content="2021/02/21 7:30 PM Aradhana Ceremonial Hall">
      <meta property="og:type" content="article">
      <meta property="og:url" content="https://saitawedssumanta.herokuapp.com">
      <meta property="og:title" content="Saita &amp; Sumanta's Wedding">
      <meta property="og:description" content="On 21-Feb-2021 7:30 PM Aradhana Ceremonial Hall. You are invited">
      <meta property="og:image" content="https://saitawedssumanta.herokuapp.com/img/social-s.jpg" />
      <meta property="og:updated_time" content="1546782839951">
      <link href="https://fonts.googleapis.com/css?family=Delius+Unicase:700|Gloria+Hallelujah|Merienda+One" rel="stylesheet">
      <script src="js/modernizr-2.6.2.min.js"></script>
      <script src="js/jquery-latest.js"></script>
      <script  src="js/jquery-ui.full.min.js"></script>
      <script  src="js/jquery.jplayer.min.js"></script>
      <link href="js/slider/dist/zoomslider.css" rel="stylesheet">
      <script >
         function RefreshImage(valImageId) {
             var objImage = document.getElementById(valImageId)
             if (objImage == undefined) {
                 return;
             }
             var now = new Date();
             objImage.src = objImage.src.split('?')[0] + '?x=' + now.toUTCString();
         }
         
         
         
         var instanceClose;
         function addWinOnloadEvent(func) {
         var oldonload = window.onload;
         if (typeof window.onload != 'function') {
         window.onload = func;
         } else {
         window.onload = function() {
         if (oldonload) {
         oldonload();
         }
         func();
         }
         }
         }
         
         
         //?建求XMLHttpRequest?象
         function createRequest() {
         try {
         request = new XMLHttpRequest();
         } catch (trymicrosoft) {
         try {
         request = new ActiveXObject("Msxml2.XMLHTTP");
         } catch (othermicrosoft) {
         try {
         request = new ActiveXObject("Microsoft.XMLHTTP");
         } catch (failed) {
         request = false;
         }
         }
         }
         if (!request)
         alert("ERROR XMLHttpRequest!");
         }
         
         function filterEmoji(text){
         var ranges = [
             '\ud83c[\udf00-\udfff]', 
             '\ud83d[\udc00-\ude4f]', 
             '\ud83d[\ude80-\udeff]'
         ];
         return text.replace(new RegExp(ranges.join('|'), 'g'), '');
         }
         
         
         
         
         function getMinTextInOrder(txt){
         var txt_array_inorder = filterEmoji(txt).split('').sort();
         
         if (txt_array_inorder.length > 0) {
         txt_min = txt_array_inorder[0]; 
         prechr = txt_array_inorder[0];
         for (i=1; i<txt_array_inorder.length; i++){
         if (txt_array_inorder[i] != prechr){
         prechr = txt_array_inorder[i];
         txt_min = txt_min + txt_array_inorder[i];
         }
         }
         } else {
         txt_min = "";
         }
         
         return txt_min;	
         }
         
         
      </script>
      <script ></script>
      <link rel="stylesheet" href="css/animate.min.css">
      <link href="css/styles_leo5.css" type="text/css" rel="stylesheet">
      <link href="css/photoswipe.css" type="text/css" rel="stylesheet">
      <script  src="js/klass.min.js"></script>
      <script  src="js/code.photoswipe.jquery-3.0.5.min.js"></script>
      <script >
         var invite_styletype = 1; 
         
         function processButtonBackground(){
         	
         	if (invite_styletype==1){
         		$("h3:visible>.button").each(function(index) {
         				//$('#detail' + $(this).attr('id').split('button')[1]).attr('id', 'detail' + (index + 1) );			
         				$(this).attr('id', 'button' + (index + 1) );
         		});
         
         		$("h3:visible+div>.detail").each(function(index) {
         				$(this).attr('id', 'detail' + (index + 1) )
         		});
         
         	} 
         }
         
         function initProcessButtonBackground(){
         	
         	if (invite_styletype==1){
         		$("h3:visible>.button").each(function(index) {
         				$(this).attr('id', 'button' + (index + 1) )
         		});
         		$("h3:visible+div>.detail").each(function(index) {
         				$(this).attr('id', 'detail' + (index + 1) )
         		});
         	} else {
         		$("h3>.button").each(function(index) {
         				$(this).attr('id', $(this).attr('name') )
         		});
         		$("h3+div>.detail").each(function(index) {
         				$(this).attr('id', $(this).attr('name') )
         		});
         	}
         
         
         }
         
         
         var oldFunc;
         var mapCallBackFunc = function () {};
         
         
         
         
         var dragFlag35672289 = false;
         var start35672289 = 0, end35672289 = 0;
         
         function thisTouchStart35672289(e)
         {
             dragFlag35672289 = true;
             start35672289 = e.touches[0].pageY; 
         }
         
         function thisTouchEnd35672289()
         {
             dragFlag35672289 = false;
         }
         
         function thisTouchMove35672289(e)
         {
             if ( !dragFlag35672289 ) return;
             end35672289 = e.touches[0].pageY;
             window.scrollBy( 0,( start35672289 - end35672289 ) );
         }
         
         
         
         
         
         	var map35672289 = null;
         	var marker35672289;
         	var map35672289_zoom = 17;
         	var map35672289_latcenter = 21.6500978;
         	var map35672289_lngcenter = 87.6320379;
         	var map35672289_latmarker = 21.6500978;
         	var map35672289_lngmarker = 87.6320379;
         
         	  
         
         
         
         
           
         
         $(document).ready(function() {
         	
         	
         		$("#accordion").accordion({ autoHeight: false },{ collapsible: true,active: 0 } );
         	
         
         	//$("#accordion").accordion("activate",0);
         	//$("#accordion").accordion("activate","#accordion10");
         	  
         	$("#accordion").bind('accordionchange', function(event, ui) {
                  //   ui.newHeader // jQuery object, activated header
                  //   ui.oldHeader // jQuery object, previous header
                  //   ui.newContent // jQuery object, activated content
                  //   ui.oldContent // jQuery object, previous content
         	    //console.log(ui);		
                // console.log($("#accordion").accordion( "option", "active" ));    
         			if ($(ui.newHeader).offset() != null){
                     	$('html, body').animate({scrollTop: $(ui.newHeader).offset().top} );
         			}
         		bVideoPlaying = 0;
         		
         	});
         
         
         
         });
         
         
         
         var bPlayVideo=1;
         
         function clickObj(o){  
         //    alert('clicked');
         //	bPlayVideo=0;
             var o = document.getElementById(o);  
             
             if( document.all){  
           		o.click();
                 //o.fireEvent("onclick");  
             
             }else{
                 
                 var e = document.createEvent('MouseEvent');  
                 e.initEvent('click', false, false);  
                 o.dispatchEvent(e);  
             }
               
           }  
         
         
      </script>
      <script >
         function parseYoutubeVID(url) {
         	//urlBuf = url.toLowerCase();
         	urlBuf = url;
         
         	var youtubeVID = urlBuf.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);
         	if(youtubeVID != null) {
         	   return youtubeVID[1];
         	} else { 
         		return "ERR"; 
         	}				
         
         } 
         
         
         
              
      </script>
      <script>
         function init(){
           
         
         }
         
         
         function replaceAll(oldStr,findStr,repStr) {
         
          var srchNdx = 0;
         			  
          var newStr = "";
          while (oldStr.indexOf(findStr,srchNdx) != -1)  
          {
         newStr += oldStr.substring(srchNdx,oldStr.indexOf(findStr,srchNdx));
         newStr += repStr;
         srchNdx = (oldStr.indexOf(findStr,srchNdx) + findStr.length);
          }
          newStr += oldStr.substring(srchNdx,oldStr.length);
         
          return newStr;
         } 
         
         /*
         function getGlobalMobile(no) {
         start = String(no.slice(0,1));
         if (start == "+" ) {
         return String(no.slice(1,no.length))
         } else {
         if (start == "0") {
         	return  "91" + String(no.slice(1,no.length)) 
         } else {
         	return "91" + no 
         }
         } 
         }
         */
         
         function getGlobalMobile(no) {
         var tmp_no, inter_no;
         var preset_cc = '91';
         start = String(no.slice(0,1));
         if (start == "+" ) {
         tmp_no = String(no.slice(1,no.length)); //remove leading +
         if ( String(tmp_no.slice(0,preset_cc.length)) == preset_cc && String(tmp_no.slice(preset_cc.length,preset_cc.length+1)) == '0' ) {
         	inter_no = preset_cc + String(tmp_no.slice(preset_cc.length + 1, tmp_no.length));
         } else {
         	inter_no = tmp_no;
         }
         } else {
         if (start == "0") {
         	inter_no = preset_cc + String(no.slice(1,no.length)) 
         } else {
         	if ( String(no.slice(0,preset_cc.length)) == preset_cc ) {
         		if ( String(no.slice(preset_cc.length,preset_cc.length+1)) == '0'  ) {
         			inter_no = preset_cc + String(no.slice(preset_cc.length + 1, no.length));
         		} else {
         			inter_no =  no; 
         		}
         	} else {
         		inter_no = preset_cc + no; 
         	}
         }
         } 
         return inter_no;
         
         }
         
         
         function checkMobileNumber( mo ) {
         
         
         
         if (String(mo.slice(0,1)) == "+" ) {
         	if( isNaN(mo.slice(1,mo.length))) {
         		return false;
         	}
         	if( mo.length < 5) {
         		return false;
         	}
         } else {
         	if( isNaN(mo)) {
         		return false;
         	}
         	if( mo.length < 6) {
         		return false;
         	}
         }
         return true
         }
         
         
         
         
         
         
      </script>
      <script>
         function addRow(parent_node, maxid){
         
          
           
           //取得屬於要應用新增列的區塊
           var obj=document.getElementById( parent_node);
           //取得目前有多少欄位
           //var sIndex=obj.getElementsByTagName('div').length+1;
           var sIndex = maxid;
           
           //依照原表單格式,先建一個div
           var div=document.createElement('div');
           div.id = 's'+sIndex; 
           
           //再建立文字欄位,並指定相關屬性
           var input=document.createElement('input');
           input.type='radio';
           input.name='t'+parent_node.replace('q', '');
           
          
           var txt=document.createElement('span');
           txt.id='o'+maxid;
           txt.innerHTML = ' new option';
         
         
         
           div.appendChild(input);
           div.appendChild(txt);
           
           obj.appendChild(div);
         
           
         
           var obj2 = eval('document.iform.t'+ parent_node.replace('q',''));
           if (typeof(obj2.length) == 'undefined'){
               
               obj2.style.display = 'none';
               
           }else{
         
               for (var i=0; i<obj2.length; i++){
           
                    obj2[i].style.display = '';
               }      
           }      
         
         }
         
         function delRow(q, t){
         
           d = document.getElementById(t);
         
           d.parentNode.removeChild(d);
           
           
         
           var obj2 = eval('document.iform.t'+ q.replace('q',''));
           if (typeof(obj2.length) == 'undefined'){
               
               obj2.style.display = 'none';
               
           }else{
         
               for (var i=0; i<obj2.length; i++){
           
                    obj2[i].style.display = '';
               }      
           }    
           
         }
         
         
         function setQuestionTitle(qq, txt){
           
            document.getElementById('qq'+qq).innerHTML = txt;
           
         }
         
         function showCheckin( bcheckin){
         
           
           
           if (bcheckin == true){
               $("#qrcode_7E1E5850430F6517417").css({"display": ""});     
               document.iform.bcheckin.value = "1";
           }else{
               $("#qrcode_7E1E5850430F6517417").css({"display": "none"});     
               document.iform.bcheckin.value = "0";
           }  
             
             
           
              
         }
         
         
         function setOptionTitle(o, txt){
         
           var range_array, inputstr, qid;
           var leftstr, rightstr, midstr, leftpos, rightpos;
           var txtlength;
           var option_title, option_title_left, option_title_right;
         
           option_title = txt;
           option_title_right = option_title;
           
           leftstr = '';
           rightstr = '';
           midstr = '';
         
           inputstr = '';
         
           qid = document.getElementById('o'+o).parentNode.parentNode.id.replace('q','');
           
           if ( option_title.split('{').length-1 > 1){
                txtlength = 20;  
           }else{
                txtlength = 20;
           }
         
           if ( option_title.split('{').length-1 > 0){
               
              for (var n=0; n<option_title.split('{').length-1; n++){       
             //if (leftpos >= 0 && rightpos > 0){
           
                 //是,{1-10}人 {} 
         
                 option_title_left = option_title_right;
                 leftstr = "";
                 rightstr = "";
                 midstr = "";
                 leftpos = parseInt( option_title_left.indexOf('{'));
                 rightpos = parseInt( option_title_left.indexOf('}'));
         
                 leftstr = option_title_left.substring(0, leftpos);
                 
                 midstr = option_title_left.substring( leftpos+1, rightpos);
                 
                 inputstr += leftstr;
                   
                 if ( midstr == ''){
         
                     inputstr += '&nbsp;<input type="text" id="n' + qid + '" name="n' + qid + '" value="" size="' + txtlength + '" onkeyup="setOptionValue( ' + qid + ', this.value, ' + replaceAll(option_title,"'", "\'") + ', ' + o + ')" onblur="setOptionValue( ' + qid + ', this.value, ' + replaceAll(option_title,"'", "\'") + ', ' + o + ')">&nbsp;';
                     
                     
                      
                 }else if ( midstr.toLowerCase().indexOf('br') > 0){
                 
         
                     inputstr += '&nbsp;<textarea style="display:inline-block;vertical-align:top;" name="n' + qid + '" cols="' + txtlength + '" rows="' + midstr.toLowerCase().split('br').length + '" onkeyup="setOptionValue( ' + qid + ', this.value, ' + replaceAll(option_title,"'", "\'") + ', ' + o + ')" onblur="setOptionValue( ' + qid + ', this.value, ' + replaceAll(option_title,"'", "\'") + ', ' + o + ')"></textarea>';
         
                 }else{
                 
         
               			//inputstr = '';
               			inputstr += '&nbsp;<select id="n' + qid + '" name="n' + qid + '" onchange="setOptionValue( ' + qid + ', this.value, ' + replaceAll(option_title,"'", "\'")  + ', ' + o + ')">';
               			inputstr += '<option value="">Select</option>';
               			option_array = midstr.split('|');
               			//alert(option_array.length);
               			cc = 1;
               			for (i = 0; i<option_array.length; i++){
               			
               			
               				
               				range_array = option_array[i].split('-');
               				
               				
               				if (range_array.length==2) {
               					for (j = parseInt( range_array[0]); j<= parseInt(range_array[1]); j++) {
               						inputstr += '<option value="' + j + '">' + j + '</option>';
               						cc = cc + 1;
               					}      
               				} else {
               					inputstr += '<option value="' + option_array[i] + '">' + option_array[i] + '</option>';
               				}
               				
               				cc = cc + 1;
               			
               			}
                           inputstr += '</select>&nbsp;';
               
               
                       	
                       
                       }  
                       
               //alert(leftstr + inputstr + rightstr);
                      // inputstr += leftstr;
         
               leftpos = parseInt( option_title_left.indexOf('{'));
               rightpos = parseInt( option_title_left.indexOf('}'));
               option_title_right = option_title_left.substring( rightpos+1, txt.length); 
               
               
            }  
            inputstr += option_title_right;
            
            document.getElementById('o'+o).innerHTML = inputstr; 
                     
           }else{
               
               document.getElementById('o'+o).innerHTML = ' ' + txt;
           }
             
           
           
         }
         
         function updateSelect(parent_node, str){
           
           
          
           var s = document.getElementById( parent_node.replace('q', 't'));
           
           var arr = new Array();  
           arr = parent.document.getElementById( parent_node).getElementsByTagName('input');
               
           
           s.options.length = 0;
           
           s.options[0] = new Option('Select', 0);
           for (var i=0; i<arr.length; i++){
             
               if (arr[i].value.Trim().length != 0){
                  
                   s.options[i+1] = new Option( arr[i].value, arr[i].value);
                  
                   if( arr[i].value == str) s.options[i+1].selected = true;
                  
               }
           }
           
         }       
         
         function showMust(parent_node, check){
         
           var iform = eval('document.iform.' + parent_node); 
         
         
           
           if (check){
             
              iform.value = '1';
              
              document.getElementById( parent_node.replace('b', 'nn')).innerHTML = '(Required)'; 
              
           }else{
             
              iform.value = '0';
              
              document.getElementById( parent_node.replace('b', 'nn')).innerHTML = ''; 
           }   
         
         
         }
         
         function showQuestion(parent_node, check){
         
         
           
           if (check){
             
              document.getElementById( parent_node.replace('q', 'ta')).style.display = 'block';
              
              
           }else{
             
              document.getElementById( parent_node.replace('q', 'ta')).style.display = 'none';
         
              document.getElementById( parent_node.replace('q', 'nn')).innerHTML = ''; 
              
           }   
         
           var n = 0; 
           
           //console.log($("#rsvptable tr[style*='display: block']"));
           
           
           
           $("#rsvptable tr[style*='block']").each( function(n){            
             n++;
             
             $(this).find("span:eq(0)").html(n);
           });    
         
         }
         
         
         function setOptionValue( id, txt, order, optionid){
           
         
           var obj, obj2, obj3;
           var val;
           
           obj = eval('document.iform.q' + id);
               
           //obj3 = eval('document.iform.n' + id + '_' + optionid);
           obj3 = document.getElementsByName('n'+ id + '_' + optionid);
           
           //if (typeof(obj3.length) == 'undefined'){
           if (obj3.length == 1){        
               obj.value = txt;
               
           }else{
               
               val = '';
               
               for (var i=0; i<obj3.length; i++){
           
                   val += '^' + obj3[i].value + '^';
                     
               }
               
               val = replaceAll(val,'^^','|');
               val = replaceAll(val, '^', '');
         
               obj.value = val;
               
           }    
          
           
           obj2 = eval('document.iform.t' + id);
         
           if (typeof(obj2.length) == 'undefined'){
               
               obj2.checked = true;
               
           }else{
               
               for (var i=0; i<obj2.length; i++){
           
                   if (obj2[i].value == order){
                     
                       obj2[i].checked = true;
                   }
               }
           }
         }
         
         function setOptionValue_noValue( id, txt, order, optionid){
           
         
           var obj, obj2, obj3;
           var val;
           
           var obj4;
         
           obj = eval('document.iform.q' + id);
               
           //obj3 = eval('document.iform.n' + id + '_' + optionid);
           obj3 = document.getElementsByName('n'+ id + '_' + optionid);
           
           //if (typeof(obj3.length) == 'undefined'){
          
           obj4 = eval('document.iform.' + txt);
         
         
           if (obj3.length == 1){        
               obj.value = obj4.value;
               
           }else{
               
               val = '';
               
               for (var i=0; i<obj3.length; i++){
           
                   val += '^' + obj3[i].value + '^';
                     
               }
               
               val = replaceAll(val,'^^','|');
               val = replaceAll(val, '^', '');
         
               obj.value = val;
               
           }    
          
         
           
           obj2 = eval('document.iform.t' + id);
         
           if (typeof(obj2.length) == 'undefined'){
               
               obj2.checked = true;
               
           }else{
               
               for (var i=0; i<obj2.length; i++){
           
                   if (obj2[i].value == order){
                     
                       obj2[i].checked = true;
                   }
               }
           }
         }
         
         
         String.prototype.Trim = function() { 
         
         return this.replace(/(^\s*)|(\s*$)/g, ""); 
         
         }                    
         
         
         
         
         var bVideoPlaying = 0;
         
         
         
         
         var bMute = 1;
         
         
         
         //var audioPlayer; //initialize in $(window).load(function()
         
         
         function setMusic(mp3Url) {
         
         
         if (mp3Url.indexOf("zeroring.mp3") >= 0) {
         bMute = 1;
         $("#jquery_jplayer_1").jPlayer("option", "loop", false);
         } else {
         bMute = 0;
         $("#jquery_jplayer_1").jPlayer("option", "loop", true);
         }
         //alert(mp3Url);
         
         $("#jquery_jplayer_1").jPlayer("pause");
         
         $("#jquery_jplayer_1").jPlayer("setMedia", {
         mp3:  mp3Url
         }).jPlayer("play");		
         }
         
         
         
      </script>
      <style>
         body {
         font-family:'Dancing Script', cursive;
         margin-left: 4px;
         margin-top: 4px;
         margin-right: 4px;
         font-size:90%;
         }
         /*
         html,body {
         font-family:'Dancing Script', cursive;
         font-size:90%;
         width: 100%;
         height: 100%;
         margin: 0px;
         padding: 0px;
         overflow-x: hidden;
         }
         */
         body {
         background-color: #00877b;
         }
         .fontcolor-button-title {
         color: inherit;
         }
         .fontcolor-detail-mm {
         color: inherit;
         }
         .ui-widget{
            font-family: 'Merienda One', cursive;
         }
         .play_video_button{
         border: solid 1px #CCC; /* 邊框樣式 */
         -moz-box-shadow: 1px 1px 5px #999; /* Firefox */
         -webkit-box-shadow: 1px 1px 5px #999; /* Safari 和 Chrome */
         box-shadow: 1px 1px 5px #999; /* Opera 10.5 + */
         }
         /*
         .header_style {
         -webkit-box-shadow: rgba(0,0,0,.3) 1px 1px 2px;
         margin-bottom: 8px;
         }
         */
         /*no use now */
         .title {
         -webkit-border-radius: 6px;
         -moz-border-radius: 6px;
         -webkit-box-shadow: rgba(0,0,0,.3) 1px 1px 2px;
         border: 0px solid #E0E0E0;
         background-color: #ff87c3; /* Changes the homepage menu background color */
         text-align: center;
         padding: 3px 0 3px 0;
         margin-bottom: 5px;
         font-size: 120%; color:#999;
         background: #ff87c3; /* Old browsers */
         background: -moz-linear-gradient(top,  #fcecfc 0%, #fba6e1 50%, #fd89d7 51%, #ff87c3 100%); /* FF3.6+ */
         background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcecfc), color-stop(50%,#fba6e1), color-stop(51%,#fd89d7), color-stop(100%,#ff87c3)); /* Chrome,Safari4+ */
         background: -webkit-linear-gradient(top,  #fcecfc 0%,#fba6e1 50%,#fd89d7 51%,#ff87c3 100%); /* Chrome10+,Safari5.1+ */
         background: -o-linear-gradient(top,  #fcecfc 0%,#fba6e1 50%,#fd89d7 51%,#ff87c3 100%); /* Opera 11.10+ */
         background: -ms-linear-gradient(top,  #fcecfc 0%,#fba6e1 50%,#fd89d7 51%,#ff87c3 100%); /* IE10+ */
         background: linear-gradient(top,  #fcecfc 0%,#fba6e1 50%,#fd89d7 51%,#ff87c3 100%); /* W3C */
         filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcecfc', endColorstr='#ff87c3',GradientType=0 );  /*IE6-9 */
         }
         input { height: 20px; font-size:14px; }
         textarea {  font-size:14px; }
      </style>
      <link class="customcss" href="css/custom4.css" rel="stylesheet" type="text/css">
      <link class="themecss" href="css/common2.css" rel="stylesheet" type="text/css">
      <link class="fontcss" href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet" type="text/css">
      <style>
         * { -webkit-tap-highlight-color: rgba(0, 0, 0, 0); -webkit-font-smoothing: antialiased }
      </style>
      <!-- include alertify script -->
      <!-- include alertify.css -->
      <link rel="stylesheet" href="css/alertify.leo.min.css">
      <style>
         .alertify-notifier, .ajs-message, .ajs-error, .ajs-content{
         font-family:Arial, Helvetica, sans-serif;
         }
      </style>
      <script src="js/alertify.min.js"></script>
      <script >
         // custom OK and Cancel label
         // default: OK, Cancel
         
         alertify.defaults = {
                 // dialogs defaults
                 autoReset:true,
                 basic:false,
                 closable:false,
                 closableByDimmer:true,
                 frameless:false,
                 maintainFocus:false, // <== global default not per instance, applies to all dialogs
                 maximizable:true,
                 modal:true,
                 movable:true,
                 moveBounded:false,
                 overflow:true,
                 padding: true,
                 pinnable:true,
                 pinned:true,
                 preventBodyShift:false, // <== global default not per instance, applies to all dialogs
                 resizable:true,
                 startMaximized:false,
                 transition:'slide',
         
                 // notifier defaults
                 notifier:{
                     // auto-dismiss wait time (in seconds)  
                     delay:5,
                     // default position
                     position:'bottom-right',
                     // adds a close button to notifier messages
                     closeButton: false
                 },
         
                 // language resources 
                 glossary:{
                     // dialogs default title
                     title:'',
                     // ok button text
                     ok: 'OK',
                     // cancel button text
                     cancel: 'Cancel'            
                 },
         
                 // theme settings
                 theme:{
                     // class name attached to prompt dialog input textbox.
                     input:'form-control',
                     // class name attached to ok button
                     ok:'btn btn-primary',
                     // class name attached to cancel button 
                     cancel:'btn btn-danger'
                 }
             };
         
         
         /*
         alertify.defaults.transition = "slide";
         alertify.defaults.theme.ok = "btn btn-primary";
         alertify.defaults.theme.cancel = "btn btn-danger";
         alertify.defaults.theme.input = "form-control";
         alertify.defaults.glossary.title = "";
         alertify.defaults.glossary.ok = "OK";
         alertify.defaults.glossary.cancel = "Cancel";
         */	
      </script>
      <script  src="js/math.uuid.js"></script>
      <script  src="js/plupload.full.min.js"></script>
      <!-- activate language -->
      <script  src="js/en_US.js"></script>
      <script>
         // run the currently selected effect
         function runEffect(controlID, page) {
           // get effect type from
           var selectedEffect = "blind";
         
           // most effect types need no options passed by default
           var options = {};
           
         
         	//options = { percent: 0 };
         
         	//options = { to: { width: 100%, height: auto } };
         
         
           // run the effect
           $( "#page-" + controlID + "-" +page ).toggle( selectedEffect, options, 500 );
           $( "#more-"+ controlID + "-" +(page-1) ).toggle( "puff", options, 500 );
         };
         
      </script>	
      <style>         	
         .myButton {
         -moz-box-shadow:inset 0px 1px 0px 0px #97c4fe;
         -webkit-box-shadow:inset 0px 1px 0px 0px #97c4fe;
         box-shadow:inset 0px 1px 0px 0px #97c4fe;
         background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #3d94f6), color-stop(1, #1e62d0));
         background:-moz-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
         background:-webkit-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
         background:-o-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
         background:-ms-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
         background:linear-gradient(to bottom, #3d94f6 5%, #1e62d0 100%);
         filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3d94f6', endColorstr='#1e62d0',GradientType=0);
         background-color:#3d94f6;
         -moz-border-radius:6px;
         -webkit-border-radius:6px;
         border-radius:6px;
         border:1px solid #337fed;
         display:inline-block;
         cursor:pointer;
         color:#ffffff;
         font-family:Arial;
         font-size:14px;
         font-weight:bold;
         padding:8px 3px;
         text-decoration:none;
         text-shadow:0px 1px 0px #1570cd;
         width:220px;
         }
         .myButton:hover {
         background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #1e62d0), color-stop(1, #3d94f6));
         background:-moz-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
         background:-webkit-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
         background:-o-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
         background:-ms-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
         background:linear-gradient(to bottom, #1e62d0 5%, #3d94f6 100%);
         filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e62d0', endColorstr='#3d94f6',GradientType=0);
         background-color:#1e62d0;
         }
         .myButton:active {
         position:relative;
         top:1px;
         }
      </style>
      <style>
         .a2a_menu,.a2a_menu *{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;float:none;margin:0;padding:0;position:static;height:auto;width:auto}.a2a_menu{border-radius:6px;display:none;direction:ltr;background:#FFF;font:16px sans-serif-light,HelveticaNeue-Light,"Helvetica Neue Light","Helvetica Neue",Arial,Helvetica,"Liberation Sans",sans-serif;color:#000;line-height:12px;border:1px solid #CCC;vertical-align:baseline;outline:0;overflow:hidden}.a2a_mini{min-width:200px;position:absolute;width:300px;z-index:9999997}.a2a_overlay{display:none;background:#616c7d;_height:expression( ((e=document.documentElement.clientHeight)?e:document.body.clientHeight)+"px" );_width:expression( ((e=document.documentElement.clientWidth)?e:document.body.clientWidth)+"px" );filter:alpha(opacity=90);opacity:.92;position:fixed;_position:absolute;top:0;right:0;left:0;bottom:0;z-index:9999998;-webkit-tap-highlight-color:rgba(0,0,0,0);transition:opacity .14s}.a2a_full{background:#FFF;border:1px solid #FFF;height:auto;height:calc(320px);top:15%;_top:expression(40+((e=document.documentElement.scrollTop)?e:document.body.scrollTop)+"px");left:50%;margin-left:-320px;position:fixed;_position:absolute;text-align:center;width:640px;z-index:9999999;transition:transform .14s,opacity .14s}.a2a_full_footer,.a2a_full_header,.a2a_full_services{border:0;margin:0;padding:12px;box-sizing:border-box}.a2a_full_header{padding-bottom:8px}.a2a_full_services{height:280px;overflow-y:scroll;padding:0 12px;-webkit-overflow-scrolling:touch}.a2a_full_services .a2a_i{display:inline-block;float:none;width:181px;width:calc(33.334% - 18px)}div.a2a_full_footer{font-size:12px;text-align:center;padding:8px 14px}div.a2a_full_footer a,div.a2a_full_footer a:visited{display:inline;font-size:12px;line-height:14px;padding:8px 14px}div.a2a_full_footer a:focus,div.a2a_full_footer a:hover{background:0 0;border:0;color:#0166FF}div.a2a_full_footer a span.a2a_s_a2a,div.a2a_full_footer a span.a2a_w_a2a{background-size:14px;border-radius:3px;display:inline-block;height:14px;line-height:14px;margin:0 3px 0 0;vertical-align:top;*vertical-align:middle;width:14px}.a2a_modal{height:0;left:50%;margin-left:-320px;position:fixed;_position:absolute;text-align:center;top:15%;_top:expression(40+((e=document.documentElement.scrollTop)?e:document.body.scrollTop)+"px");width:640px;z-index:9999999;transition:transform .14s,opacity .14s;-webkit-tap-highlight-color:rgba(0,0,0,0)}.a2a_modal_body{background:0 0;border:0;font:24px sans-serif-light,HelveticaNeue-Light,"Helvetica Neue Light","Helvetica Neue",Arial,Helvetica,"Liberation Sans",sans-serif;position:relative;height:auto;width:auto}.a2a_thanks{color:#fff;height:auto;margin-top:20px;width:auto}.a2a_thanks>div:first-child{margin:0 0 40px 0}.a2a_thanks div *{height:inherit}#a2a_copy_link{background:#FFF;border:1px solid #FFF;margin-top:15%}span.a2a_s_link#a2a_copy_link_icon,span.a2a_w_link#a2a_copy_link_icon{background-size:48px;border-radius:0;display:inline-block;height:48px;left:0;line-height:48px;margin:0 3px 0 0;position:absolute;vertical-align:top;*vertical-align:middle;width:48px}#a2a_modal input#a2a_copy_link_text{background-color:transparent;_background-color:#FFF;border:0;color:#2A2A2A;font:inherit;height:48px;left:62px;max-width:initial;padding:0;position:relative;width:564px;width:calc(100% - 76px)}#a2a_copy_link_copied{background-color:#0166ff;color:#fff;display:none;font:inherit;font-size:16px;margin-top:1px;padding:3px 8px}@media print{.a2a_floating_style,.a2a_menu,.a2a_overlay{visibility:hidden}}@keyframes a2aFadeIn{from{opacity:0}to{opacity:1}}.a2a_starting{opacity:0}.a2a_starting.a2a_full,.a2a_starting.a2a_modal{transform:scale(.8)}@media (max-width:639px){.a2a_full{border-radius:0;top:15%;left:0;margin-left:auto;width:100%}.a2a_modal{left:0;margin-left:10px;width:calc(100% - 20px)}}@media (min-width:318px) and (max-width:437px){.a2a_full .a2a_full_services .a2a_i{width:calc(50% - 18px)}}@media (max-width:317px){.a2a_full .a2a_full_services .a2a_i{width:calc(100% - 18px)}}@media (max-height:436px){.a2a_full{bottom:40px;height:auto;top:40px}}@media (max-height:550px){.a2a_modal{top:30px}}@media (max-height:360px){.a2a_modal{top:20px}.a2a_thanks>div:first-child{margin-bottom:20px}}.a2a_menu a{color:#0166FF;text-decoration:none;font:16px sans-serif-light,HelveticaNeue-Light,"Helvetica Neue Light","Helvetica Neue",Arial,Helvetica,"Liberation Sans",sans-serif;line-height:14px;height:auto;width:auto;outline:0;-moz-outline:none}.a2a_menu a.a2a_i:visited,.a2a_menu a.a2a_more{color:#0166FF}.a2a_menu a.a2a_i:active,.a2a_menu a.a2a_i:focus,.a2a_menu a.a2a_i:hover,.a2a_menu a.a2a_more:active,.a2a_menu a.a2a_more:focus,.a2a_menu a.a2a_more:hover{color:#2A2A2A;border-color:#EEE;border-style:solid;background-color:#EEE;text-decoration:none}.a2a_menu span.a2a_s_find{background-size:24px;height:24px;left:8px;position:absolute;top:7px;width:24px}.a2a_menu span.a2a_s_find svg{background-color:#FFF}.a2a_menu span.a2a_s_find svg path{fill:#CCC}#a2a_menu_container{display:inline-block}#a2a_menu_container{_display:inline}.a2a_menu_find_container{border:1px solid #CCC;border-radius:6px;padding:2px 24px 2px 0;position:relative;text-align:left}.a2a_cols_container .a2a_col1{overflow-x:hidden;overflow-y:auto;-webkit-overflow-scrolling:touch}#a2a_modal input,#a2a_modal input[type=text],.a2a_menu input,.a2a_menu input[type=text]{display:block;background-image:none;box-shadow:none;line-height:100%;margin:0;outline:0;overflow:hidden;padding:0;-moz-box-shadow:none;-webkit-box-shadow:none;-webkit-appearance:none}#a2apage_find_container input,#a2apage_find_container input[type=text]{background-color:transparent;_background-color:#FFF;border:0;box-sizing:content-box;color:#2A2A2A;font:inherit;font-size:16px;height:28px;line-height:20px;left:38px;outline:0;margin:0;max-width:initial;padding:2px 0;position:relative;width:99%}.a2a_clear{clear:both} .a2a_svg{background-repeat:no-repeat;display:block;overflow:hidden;height:32px;line-height:32px;padding:0;width:32px}.a2a_svg svg{background-repeat:no-repeat;background-position:50% 50%;border:none;display:block;left:0;margin:0 auto;overflow:hidden;padding:0;position:relative;top:0;width:auto;height:auto}a.a2a_i,i.a2a_i{display:block;float:left;border:1px solid #FFF;line-height:24px;padding:6px 8px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;width:132px}a.a2a_i span,a.a2a_more span{display:inline-block;overflow:hidden;vertical-align:top;*vertical-align:middle}a.a2a_i .a2a_svg{margin:0 6px 0 0}a.a2a_i .a2a_svg,a.a2a_more .a2a_svg{background-size:24px;height:24px;line-height:24px;width:24px}a.a2a_sss:hover{border-left:1px solid #CCC}a.a2a_menu_show_more_less{border-bottom:1px solid #FFF;border-left:0;border-right:0;line-height:24px;margin:6px 0 0;padding:6px;-webkit-touch-callout:none}a.a2a_menu_show_more_less span{display:inline-block;height:24px;margin:0 6px 0 0}.a2a_kit .a2a_svg{background-repeat:repeat}.a2a_default_style a{float:left;line-height:16px;padding:0 2px}.a2a_default_style a:hover .a2a_svg,.a2a_floating_style a:hover .a2a_svg,.a2a_overlay_style a:hover .a2a_svg svg{opacity:.7}.a2a_overlay_style.a2a_default_style a:hover .a2a_svg{opacity:1}.a2a_default_style .a2a_count,.a2a_default_style .a2a_svg,.a2a_floating_style .a2a_svg,.a2a_menu .a2a_svg,.a2a_vertical_style .a2a_count,.a2a_vertical_style .a2a_svg{border-radius:4px}.a2a_default_style .a2a_counter img,.a2a_default_style .a2a_dd,.a2a_default_style .a2a_svg{float:left}.a2a_default_style .a2a_img_text{margin-right:4px}.a2a_default_style .a2a_divider{border-left:1px solid #000;display:inline;float:left;height:16px;line-height:16px;margin:0 5px}.a2a_kit a{cursor:pointer}.a2a_floating_style{background-color:#fff;border-radius:6px;position:fixed}.a2a_floating_style,.a2a_overlay_style{animation:a2aFadeIn .2s ease-in;padding:4px;z-index:9999995}.a2a_vertical_style a{clear:left;display:block;overflow:hidden;padding:4px;text-decoration:none}.a2a_floating_style.a2a_default_style{bottom:0}.a2a_floating_style.a2a_default_style a,.a2a_overlay_style.a2a_default_style a{padding:4px}.a2a_count{background-color:#fff;border:1px solid #ccc;box-sizing:border-box;color:#2a2a2a;display:block;float:left;font:12px Arial,Helvetica,sans-serif;height:16px;margin-left:4px;position:relative;text-align:center;width:50px}.a2a_count:after,.a2a_count:before{border:solid transparent;border-width:4px 4px 4px 0;content:"";height:0;left:0;line-height:0;margin:-4px 0 0 -4px;position:absolute;top:50%;width:0}.a2a_count:before{border-right-color:#ccc}.a2a_count:after{border-right-color:#fff;margin-left:-3px}.a2a_count span{animation:a2aFadeIn .14s ease-in}.a2a_vertical_style .a2a_counter img{display:block}.a2a_vertical_style .a2a_count{float:none;margin-left:0;margin-top:6px}.a2a_vertical_style .a2a_count:after,.a2a_vertical_style .a2a_count:before{border:solid transparent;border-width:0 4px 4px 4px;content:"";height:0;left:50%;line-height:0;margin:-4px 0 0 -4px;position:absolute;top:0;width:0}.a2a_vertical_style .a2a_count:before{border-bottom-color:#ccc}.a2a_vertical_style .a2a_count:after{border-bottom-color:#fff;margin-top:-3px}.a2a_nowrap{white-space:nowrap}.a2a_note{margin:0 auto;padding:9px;font-size:12px;text-align:center}.a2a_note .a2a_note_note{margin:0;color:#2A2A2A}.a2a_wide a{display:block;margin-top:3px;border-top:1px solid #EEE;text-align:center}.a2a_label{position:absolute!important;clip:rect(1px 1px 1px 1px);clip:rect(1px,1px,1px,1px);clip-path:polygon(0 0,0 0,0 0);-webkit-clip-path:polygon(0 0,0 0,0 0);overflow:hidden;height:1px;width:1px}.a2a_kit,.a2a_menu,.a2a_modal,.a2a_overlay{-ms-touch-action:manipulation;touch-action:manipulation}.a2a_dd img{border:0}.a2a_button_facebook_like iframe{max-width:none}
      </style>
   </head>
   <body marginwidth="0">
      <style>
         #Loading{
         position:fixed;
         top:0;
         left:0;
         width:337px;
         height:100vh;
         background:#CCCCCC;
         margin:0px 0px 0px 0px; 
         z-index:1001;
         -webkit-animation-duration: 2s;
         -moz-animation-duration: 2s;
         -ms-animation-duration: 2s;
         animation-duration: 2s;
         }
         #loading_bg {
         width:337px;
         height:100vh;
         background: center center url(img/f180629ps5TO3j4FvjRv.jpg),linear-gradient(rgb(0 0 0 / 50%), rgba(0,0,0,0), rgb(0 0 0 / 51%)),center center url(img/f180629ps5TO3j4FvjRvs.jpg);
         background-repeat:no-repeat,no-repeat,repeat;
         background-size:contain,cover,contain;
         margin: auto; 
         z-index:300;
         -webkit-animation-duration: 1.6s;
         -moz-animation-duration: 1.6s;
         -ms-animation-duration: 1.6s;
         animation-duration: 1.6s;
         }
         #loading_bg2{
         width:100%;
         height:100%;
         background: center center url(img/msk4.png);
         margin:0px 0px 0px 0px; 
         -webkit-animation-duration: 1.6s;
         -moz-animation-duration: 1.6s;
         -ms-animation-duration: 1.6s;
         animation-duration: 1.6s;
         z-index:300;
         }
         #loading_circle_outer {
         position:absolute;
         width:100%;
         /*height:150px; */
         top:0; bottom:0; left:0; right:0; 
         text-align: center;
         font-family:microsoft jhenghei,microsoft yahei,arial;
         display: table;
         height:100%;
         z-index:300;
         }
         #loading_circle_13 {
         position:relative;
         z-index: 1;
         width:320px;
         height:100%;
         margin: auto;
         vertical-align:middle;	  
         text-align: center;
         }
         #loading_circle {
         z-index: 800;
         position:relative;
         display: table-cell;
         vertical-align:middle;	  
         text-align: center;
         }
         #loading_circle_1 {
         position:relative;
         background: center center url(img/p1.jpg) no-repeat;
         background-size: 42px 1200px;
         height:1200px;
         width:20px;
         z-index: -1;
         top:0px;
         left: 28%; /***25%***/
         -webkit-animation-duration: 1.2s;
         -moz-animation-duration: 1.2s;
         -ms-animation-duration: 1.2s;
         animation-duration: 1.2s;
         }
         #loading_circle_2 {
         position:absolute;
         background: center center url(img/p2.jpg) repeat-x;
         background-size: 640px 42px;
         height:20px;
         width:100%;
         z-index: 100;
         top: 31%; /***60%***/
         -webkit-animation-duration: 1.2s;
         -moz-animation-duration: 1.2s;
         -ms-animation-duration: 1.2s;
         animation-duration: 1.2s;
         }
         #loading_circle_3 {
         position:absolute;
         background: center center url(img/p3.jpg) no-repeat;
         background-size: 7px 1200px;
         height:1200px;
         width:5px;
         z-index: -1;
         top:0px;
         /***left: calc(100%/4 - 12px);***/
         left: calc( 28% - 9px);
         -webkit-animation-duration: 1.2s;
         -moz-animation-duration: 1.2s;
         -ms-animation-duration: 1.2s;
         animation-duration: 1.2s;
         }
         #loading_circle_4 {
         position:absolute;
         background: center center url(img/p4.jpg) repeat-x;
         background-size: 640px 7px;
         height:5px;
         width:100%;
         z-index: 100;
         /***top: calc(60% + 34px);***/
         top: calc( 30% + 36px );
         -webkit-animation-duration: 1.2s;
         -moz-animation-duration: 1.2s;
         -ms-animation-duration: 1.2s;
         animation-duration: 1.2s;
         }
         #loading_circle_5 {
         position:absolute;
         text-align:left;
         vertical-align: bottom;
         color:#FFF;
         /*font-size:32px;*/
         font-size:22px;
         line-height:1.1;
         font-weight: normal;
         /***
         padding-top: 60px;
         padding-left: 60px;
         ***/
         /***
         bottom:calc(60% - 26px - 35px);
         left: calc(25% + 26px + 10px);
         ***/
         height: 21px;      
         width:180px;
         top: 29%;
         left: 116px;
         -webkit-animation-duration: 0.8s;
         -moz-animation-duration: 0.8s;
         -ms-animation-duration: 0.8s;
         animation-duration: 0.8s;
         }
         #loading_circle_5 span{
         position:absolute;
         bottom:0;
         left:0;
         }
         #loading_circle_67 {
         position:absolute;
         text-align:left;
         color:#F8F3F4;
         font-size:22px;
         /***
         font-weight:bold;
         padding-top: 60px;
         padding-left: 60px;
         ***/
         /***
         top:calc(60% + 26px + 30px);
         left: calc(25% + 26px + 10px);
         ***/
         top: 34%;
         left: 116px;
         -webkit-animation-duration: 1.2s;
         -moz-animation-duration: 1.2s;
         -ms-animation-duration: 1.2s;
         animation-duration: 1.2s;
         }
         #loading_circle_6 {
         position:relative;
         text-align:left;
         color:#F8F3F4;
         font-size:20px;
         line-height:1.1;
         /***
         font-weight:bold;
         padding-top: 60px;
         padding-left: 60px;
         top:calc(60% + 26px + 30px);
         left: calc(25% + 26px + 10px);
         ***/
         -webkit-animation-duration: 1.2s;
         -moz-animation-duration: 1.2s;
         -ms-animation-duration: 1.2s;
         animation-duration: 1.2s;
         word-break: break-word;
         }
         #loading_circle_7 {
         position:relative;
         margin-top:10px;
         text-align:left;
         color:#FFFFEF;
         font-size:16px;
         line-height:1.1;
         -webkit-animation-duration: 1.6s;
         -moz-animation-duration: 1.6s;
         -ms-animation-duration: 1.6s;
         animation-duration: 1.6s;
         }     
         #click_open {
         right: 40px;
         bottom: 10%;
         /*color:#D99E12;*/
         color:#FFFFFF;
         font-size:16px; 
         font-style:italic;
         position: absolute;      
         font-family:microsoft jhenghei,microsoft yahei,arial;
         -webkit-animation-iteration-count: infinite;		
         -moz-animation-iteration-count: infinite;		
         -ms-animation-iteration-count: infinite;		
         animation-iteration-count: infinite;		
         }
         .hide-div {
         /*display:none;*/
         visibility:hidden;
         }	  
         .hide-div-display {
         display:none;
         }	  
      </style>
      <script>
         $(document).ready(function() {
         /*	
             if (window.self != window.top) {
                 $(document.body).addClass("in-iframe");
             }
         */	
         
             if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                 $('#Loading').on('touchstart', function (e) {
                     //stopLoading();
                     if (bWinOnLoadFired==0){
                         winOnloadFunc();		
                     }
                 });
             } else {
                 $('#Loading').on('click', function (e) {
                     //stopLoading();
                     if (bWinOnLoadFired==0){
                         winOnloadFunc();		
                     }
                 });
         
             }
             
             $('#loading_bg').removeClass('hide-div');
             $('#loading_bg').addClass('animated fadeIn');
             
             $('#loading_bg2').removeClass('hide-div');
             $('#loading_bg2').addClass('animated fadeIn');
         
             $('#loading_bg2').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
                  
                  $('#loading_circle_13').removeClass('hide-div');
                  $('#loading_circle_13').addClass('animated fadeIn');
         
                  $('#loading_circle_1').removeClass('hide-div');
                  $('#loading_circle_1').addClass('animated slideInDown');
                  $('#loading_circle_2').removeClass('hide-div');
                  $('#loading_circle_2').addClass('animated slideInRight');
             });
             
         
             $('#loading_circle_2').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
                  $('#loading_circle_3').removeClass('hide-div');
                  $('#loading_circle_3').addClass('animated slideInDown');
                  $('#loading_circle_4').removeClass('hide-div');
                  $('#loading_circle_4').addClass('animated slideInRight');
         
         
             });
         
             $('#loading_circle_3').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
                  
                  
                  $('#loading_circle_5').removeClass('hide-div');
                  $('#loading_circle_5').addClass('animated slideInRight');
                  
                  $('#loading_circle_67').removeClass('hide-div');
                  $('#loading_circle_67').addClass('animated fadeIn');
         
                  
                  $('#loading_circle_6').removeClass('hide-div');
                  $('#loading_circle_6').addClass('animated slideInRight');
                  $('#loading_circle_7').removeClass('hide-div');
                  $('#loading_circle_7').addClass('animated slideInRight');		 
             });
         
             $('#loading_circle_7').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
         
         
                 setTimeout(function() {
                     //alert("bWinOnLoadFired");
                     if (bWinOnLoadFired==0){
                         //winOnloadFunc();		
         	$('#click_open').removeClass('hide-div');
         	$('#click_open').addClass('animated pulse');
                     }
               // Do something after 20 seconds
         }, 2000);	
         
             });
         
         
         });
         
             function stopLoading(){
         /*
                 $("#loading_circle_1").removeClass('animated slideInDown');
                 $("#loading_circle_2").removeClass('animated slideInRight');
                 
                 $("#loading_circle_3").removeClass('animated slideInDown');
                 $("#loading_circle_4").removeClass('animated slideInRight');
                 $("#loading_circle_5").removeClass('animated slideInRight');
                 $("#loading_circle_6").removeClass('animated slideInRight');
                 $("#loading_circle_7").removeClass('animated slideInRight');
                 $("#loading_circle_67").removeClass('animated fadeIn');
                 $("#loading_circle_13").removeClass('animated fadeIn');
         
                 
                 $('#loading_circle_1').addClass('hide-div');
                 $('#loading_circle_2').addClass('hide-div');
                         
                 $('#loading_circle_3').addClass('hide-div');
                 $('#loading_circle_4').addClass('hide-div');
                 $('#loading_circle_5').addClass('hide-div');
                 $('#loading_circle_6').addClass('hide-div');
                 $('#loading_circle_7').addClass('hide-div');
                 $('#loading_circle_67').addClass('hide-div');
                 $('#loading_circle_13').addClass('hide-div');
                 $('#loading_circle_outer').addClass('hide-div');
         */
                 
         
                 if($.browser.msie && parseInt($.browser.version, 10) <= 9) {
                     $("#Loading").fadeOut();
                 } else {
                         
                     $("#Loading").addClass('animated fadeOut');
             
                     $('#Loading').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
                          $('#Loading').addClass('hide-div');
                          $('#Loading').addClass('hide-div-display');
                     });
                 }
                 
         
                 //audioPlayer = $("#xaudio")[0];
                 
                 
                 
             }
         
             
             function winOnloadFunc () {
                 bWinOnLoadFired=1;
                 stopLoading();	
                 //loadScript();	
             }
             
             
             var bWinOnLoadFired=0;
                 
             $(window).load(function() {
                 if($.browser.msie && parseInt($.browser.version, 10) <= 9) {
                     if (bWinOnLoadFired==0){
                         winOnloadFunc();		
                     }
                 }
                 
             });
         
             $(function() {
                 setTimeout(function() {
                     //alert("bWinOnLoadFired");
                     if (bWinOnLoadFired==0){
                         winOnloadFunc();		
                     }
               // Do something after 20 seconds
         }, 3000000);	
             });
         
         
         
      </script>
      <!-- <div class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" > -->
      <div id="Loading" class="">
         <div id="loading_bg" class="hide-div">
            <div id="loading_bg2" class="hide-div">
            </div>
         </div>
         <div id="loading_circle_outer">
            <div id="loading_circle_13" class="hide-div">
               <div id="loading_circle_1" class="hide-div"></div>
               <div id="loading_circle_3" class="hide-div"></div>
               <div id="loading_circle_5" class="hide-div"><span>You are invited</span></div>
               <div id="loading_circle_67" class="hide-div">
                  <div id="loading_circle_6" class="hide-div">Saita &amp; <br/>Sumanta's &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wedding</div>
                  <div id="loading_circle_7" class="hide-div">February 21th, 2021</div>
               </div>
            </div>
            <div id="loading_circle_2" class="hide-div"></div>
            <div id="loading_circle_4" class="hide-div"></div>
         </div>
         <div id="click_open" class="hide-div">Tap screen to open</div>
      </div>
      <script >
         $(document).ready(function() {
         	if (bMute==0) $("#mbut").addClass('mof');
         	function mon() {
         		$("#jquery_jplayer_1").jPlayer("play");
         		//alert('func mon');
         	}
         	function mof() {
         		$("#jquery_jplayer_1").jPlayer("pause");
         		//alert('func mof');
         	}
               $("#jquery_jplayer_1").jPlayer({
                 ready: function() {
                   $(this).jPlayer("setMedia", {
                     mp3: "mp3/zeroring.mp3"
                   }).jPlayer("play");
                   var click = document.ontouchstart === undefined ? 'click' : 'touchstart';
                   var kickoff = function () {
						if (bVideoPlaying==1) {
							$("#jquery_jplayer_1").jPlayer("pause");
						} else {
							$("#jquery_jplayer_1").jPlayer("play");
						}
                   };
					$("#MainBody,#Loading,#mbut").on( "click", kickoff );
					$("#jquery_jplayer_1").bind($.jPlayer.event.play, function(event) {
         			  if (bMute==0) {
         				  $("#mbut").removeClass('mof');
         				  $("#mbut").removeClass('mon');
         				  $("#mbut").addClass('mon');
         				  $("#mbut").off( "click", mof );
         				  $("#mbut").off( "click", mon );
         				  $("#mbut").on( "click", mof );
         			  } else {
         				  $("#mbut").removeClass('mof');
         				  $("#mbut").removeClass('mon');
         				  $("#mbut").off( "click", mof );
         				  $("#mbut").off( "click", mon );
         			  }
         			  $("#MainBody,#Loading,#mbut").off( "click", kickoff );
         			  //alert('event play, bmute = ' + bMute);
         		  });
         		  $("#jquery_jplayer_1").bind($.jPlayer.event.pause, function(event) {
         			  if (bMute==0) {
         				  $("#mbut").removeClass('mof');
         				  $("#mbut").removeClass('mon');
         				  $("#mbut").addClass('mof');
         				  $("#mbut").off( "click", mof );
         				  $("#mbut").off( "click", mon );
         				  $("#mbut").on( "click", mon );
         			  } else {
         				  $("#mbut").removeClass('mof');
         				  $("#mbut").removeClass('mon');
         				  $("#mbut").off( "click", mof );
         				  $("#mbut").off( "click", mon );
         			  }
         			  //alert('event pause');  
         		  });
                 },
                 swfPath: "/js",
                 loop: false
               });
         });
         
      </script>
      <style>
         .mon {
         position: fixed;
         width:42px;
         height:42px;
         right: 10px;
         top: 5px;
         z-index: 300;
         background: url(img/m_play2.png) no-repeat;
         }
         .mof {
         position: fixed;
         width:42px;
         height:42px;
         right: 10px;
         top: 5px;
         z-index: 300;
         background: url(img/m_stop2.png) no-repeat;
         }
         #preload-19 { background: url(img/m_play2.png) no-repeat -9999px -9999px; }
         #preload-20 { background: url(img/m_stop2.png) no-repeat -9999px -9999px; }
      </style>
      <div id="mbut"></div>
      <div id="MainBody">
      <div id="coverpage"></div>
      <div id="MainContent">
         <div id="outter">
            <div class="outter-main-tr">
               <div class="outter-main-tl">
                  <div class="outter-main-tm"></div>
               </div>
            </div>
            <div class="outter-main-mr">
               <div class="outter-main-ml">
                  <div class="ui-widget-header ui-corner-all">
                     <div id="inner">
                        <div class="inner-main-tr">
                           <div class="inner-main-tl">
                              <div class="inner-main-tm">
                                 <div id="main-title">
                                    <div class="main-title-tr">
                                       <div class="main-title-tl">
                                          <div class="main-title-tm">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-title-mr">
                                       <div class="main-title-ml">
                                          <div class="main-title-mm">
                                             <div id="maintitlehtml"><span style="text-decoration: none; font-style: normal; font-size: 22px; font-weight: normal;">Save The Date for  <br><strong>Saita &amp; Sumanta</strong></span></div>
                                             <div id="maintitle_decoration1"></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-title-br">
                                       <div class="main-title-bl">
                                          <div class="main-title-bm">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="inner-main-mr">
                           <div id="img_decoration1"></div>
                           <div id="img_decoration2"></div>
                           <div id="img_decoration4"></div>
                           <div class="inner-main-ml">
                              <div id="frame1_1">
                                 <div id="frame1_2">
                                    <div id="frame1_3"></div>
                                 </div>
                              </div>
                              <div id="frame2_1">
                                 <div id="frame2_2">
                                    <div id="frame2_3"></div>
                                 </div>
                              </div>
                              <div id="frame3_1">
                                 <div id="frame3_2">
                                    <div id="frame3_3"></div>
                                 </div>
                              </div>
                              <div class="inner-main-mm">
                                 <!-- 大圖 -->  
                                 <div id="main_image_container" data-zs-src='["img/img-1.jpg", "img/img-2.jpg", "img/img-3.jpg", "img/img-5.jpg", "img/img-8.jpg", "img/img-6.jpg"]' data-zs-overlay=false data-zs-bullets=false>
                                    <!--img id="invite_webimg" style=" display:block" src="img/f180629ps5TO3j4FvjRv.jpg" width="100%" alt="Mobile Wedding Invitations"-->
                                 </div>
                                 <div id="img_videobutton_placeholder" style="position:relative;">
                                    <div id="img_videobutton" style="display:none;"></div>
                                 </div>
                                 <style>
                                    #main_image_container{position: relative;overflow: hidden; width:100%; height:180px; }
                                    .invite_webimg_album{float: left;position: absolute;top:0;left: 0; transform: scale(1.09,1.09); -webkit-transform: scale(1.09,1.09);}
                                    /*.invite_webimg_album:last-child{display: block; -webkit-transform: scale(1.2,1.2);}*/
                                    .auto{animation: imgScale 4s ease-out; -webkit-animation: imgScale 4s ease-out;}
                                    @keyframes imgScale{
                                    0%{transform:scale(1,1);}
                                    100%{transform:scale(1.09,1.09);}}
                                    @-webkit-keyframes imgScale{
                                    0%{-webkit-transform:scale(1,1);}
                                    100%{-webkit-transform:scale(1.09,1.09);}}
                                 </style>
                              </div>
                           </div>
                        </div>
                        <div class="inner-main-br">
                           <div id="img_decoration3"></div>
                           <div class="inner-main-bl">
                              <div class="inner-main-bm">
                                 <div id="sub-title">
                                    <div class="sub-title-tr">
                                       <div class="sub-title-tl">
                                          <div class="sub-title-tm">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="sub-title-mr">
                                       <div class="sub-title-ml">
                                          <div class="sub-title-mm">
                                             <div id="subtitlehtml"><span style="font-weight: normal; font-size: 22px; ">February 21, 2021</span></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="sub-title-br">
                                       <div class="sub-title-bl">
                                          <div class="sub-title-bm">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="outter-main-br">
               <div class="outter-main-bl">
                  <div class="outter-main-bm"></div>
               </div>
            </div>
         </div>
         <!-- preload placeholder for custom.css assets-->
         <div id="preload-01"></div>
         <div id="preload-02"></div>
         <div id="preload-03"></div>
         <div id="preload-04"></div>
         <div id="preload-05"></div>
         <div id="preload-06"></div>
         <div id="preload-07"></div>
         <div id="preload-08"></div>
         <div id="preload-09"></div>
         <div id="preload-10"></div>
         <div id="preload-11"></div>
         <div id="preload-12"></div>
         <div id="preload-13"></div>
         <div id="preload-14"></div>
         <div id="preload-15"></div>
         <div id="preload-16"></div>
         <div id="preload-17"></div>
         <div id="preload-18"></div>
         <div id="preload-19"></div>
         <div id="preload-20"></div>
         <div id="accordion" class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons" role="tablist">
            <h3 class="detail-compact ui-accordion-header ui-helper-reset ui-state-default ui-state-active ui-corner-top" style="display:" id="invite_detail_title35672286" role="tab" aria-expanded="true" aria-selected="true" tabindex="0">
               <span class="ui-icon ui-icon-triangle-1-s"></span>
               <div name="button1" id="button1" class="button button_detail_id_35672286">
                  <div class="button-tr">
                     <div class="button-tl">
                        <div class="button-tm"></div>
                     </div>
                  </div>
                  <div class="button-mr">
                     <div class="button-ml">
                        <div class="button-mm">
                           <a href="javaScript:void(0);"><img class="iconimage" alt="1.png" src="img/1.png" border="0" align="absmiddle">&nbsp;<span id="invite_detail_name35672286" class="button-title"><span class="fontcolor-button-title">Invitation</span></span>&nbsp;</a>
                        </div>
                     </div>
                  </div>
                  <div class="button-br">
                     <div class="button-bl">
                        <div class="button-bm"></div>
                     </div>
                  </div>
               </div>
            </h3>
            <div class="accordion ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="invite_detail_content35672286" role="tabpanel">
               <div name="detail1" id="detail1" class="detail">
                  <div class="detail-tr">
                     <div class="detail-tl">
                        <div class="detail-tm"></div>
                     </div>
                  </div>
                  <div class="detail-mr">
                     <div class="detail-ml">
                        <div class="detail-mm">
                           <div class="fontcolor-detail-mm">
                              <div class="invite_detail_editor" id="invite_detail_editor35672286">
                                 <p style="text-align: center;"><span style="font-family: 'Delius Unicase', cursive;"><span style="font-size:18px;">Saita & Sumanta</span></span></p>
                                 <p style="text-align: center;"><span style="font-family: 'Gloria Hallelujah', cursive;"><span style="font-size:18px;">Are Gettin’ Hitched!<br>
                                    Please join us<br>
                                    For a celebration of love, friendship,<br>
                                    laughter, and family</span></span>
                                 </p>
                                 <p style="text-align: center;"><span style="font-family: 'Gloria Hallelujah', cursive;"><span style="font-size:18px;font-weight:bold;">Sunday, February 21, 2021<br>
                                    at 7:30 PM</span></span>
                                 </p>
                                 <p style="text-align: center;"><span style="font-family: 'Gloria Hallelujah', cursive;"><span style="font-size:18px;">Aradhana Ceremonial Hall<br>
                                    Sukantapally, Barisha, Kolkata, 700008</span></span>
                                 </p>
                                 <p style="text-align: center;"><span style="font-family: 'Gloria Hallelujah', cursive;"><span style="font-size:18px;">Fabulous food, fun, and festivities to follow</span></span></p>
                              </div>    
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="detail-br">
                     <div class="detail-bl">
                        <div class="detail-bm"></div>
                     </div>
                  </div>
               </div>
            </div>
            <h3 class="detail-compact ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" style="display:" id="invite_detail_title35672289" role="tab" aria-expanded="false" aria-selected="false" tabindex="-1">
               <span class="ui-icon ui-icon-triangle-1-e"></span>
               <div name="button4" id="button2" class="button button_detail_id_35672289">
                  <div class="button-tr">
                     <div class="button-tl">
                        <div class="button-tm"></div>
                     </div>
                  </div>
                  <div class="button-mr">
                     <div class="button-ml">
                        <div class="button-mm">
                           <a href="javaScript:void(0);"><img class="iconimage" alt="4.png" src="css/bean_black_wedding/images/icons/4.png" border="0" align="absmiddle">&nbsp;<span id="invite_detail_name35672289" class="button-title"><span class="fontcolor-button-title">Venue</span></span>&nbsp;</a>
                        </div>
                     </div>
                  </div>
                  <div class="button-br">
                     <div class="button-bl">
                        <div class="button-bm"></div>
                     </div>
                  </div>
               </div>
            </h3>
            <div class="accordion ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="invite_detail_content35672289" role="tabpanel" style="display: none;">
               <div name="detail4" id="detail2" class="detail">
                  <div class="detail-tr">
                     <div class="detail-tl">
                        <div class="detail-tm"></div>
                     </div>
                  </div>
                  <div class="detail-mr">
                     <div class="detail-ml">
                        <div class="detail-mm">
                           <div class="fontcolor-detail-mm">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14745.753415565785!2d88.330738!3d22.4877308!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef589301949e8da3!2sAradhana%20Ceremonial%20Hall!5e0!3m2!1sen!2sin!4v1611425124704!5m2!1sen!2sin" width="269" height="302" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>		
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="detail-br">
                     <div class="detail-bl">
                        <div class="detail-bm"></div>
                     </div>
                  </div>
               </div>
            </div>
            <h3 class="detail-compact ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" style="display:" id="invite_detail_title35672292" role="tab" aria-expanded="false" aria-selected="false" tabindex="-1">
               <span class="ui-icon ui-icon-triangle-1-e"></span>
               <div name="button5" id="button3" class="button button_detail_id_35672292">
                  <div class="button-tr">
                     <div class="button-tl">
                        <div class="button-tm"></div>
                     </div>
                  </div>
                  <div class="button-mr">
                     <div class="button-ml">
                        <div class="button-mm">
                           <a href="javaScript:void(0);"><img class="iconimage" alt="5.png" src="css/bean_black_wedding/images/icons/5.png" border="0" align="absmiddle">&nbsp;<span id="invite_detail_name35672292" class="button-title"><span class="fontcolor-button-title">Album</span></span>&nbsp;</a>
                        </div>
                     </div>
                  </div>
                  <div class="button-br">
                     <div class="button-bl">
                        <div class="button-bm"></div>
                     </div>
                  </div>
               </div>
            </h3>
            <div class="accordion ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="invite_detail_content35672292" role="tabpanel" style="display: none;">
               <div name="detail5" id="detail3" class="detail">
                  <div class="detail-tr">
                     <div class="detail-tl">
                        <div class="detail-tm"></div>
                     </div>
                  </div>
                  <div class="detail-mr">
                     <div class="detail-ml">
                        <div class="detail-mm">
                           <div class="fontcolor-detail-mm" style="height: 320px;">
                              <style>
                                 .grid-item { border-radius:3px; float:left}
                                 .grid-item-25 { width: 25%;}
                                 .grid-item-30 { width: 30%;}
                                 .grid-item-33 { width: 33%;}
                                 .grid-item-40 { width: 40%;}
                                 .grid-item-50 { width: 50%;}
                                 .grid-item-60 { width: 60%;}
                                 .grid-item img{outline: none;border: none; display: block;max-width: 100%;box-shadow: 0 0 8px 8px #3b393c inset;border-radius: 6px;}
                              </style>
                              <div class="grid" style="position: relative; height: 0px;">
                                 <div class="grid-item grid-item-60">
                                       <img src="img/social-s.jpg">
                                    </div>
                                    <div class="grid-item grid-item-40">
                                          <img src="img/img-1.jpg">
                                       </div>
                                       <div class="grid-item grid-item-40">
                                          <img src="img/img-6.jpg">
                                       </div>
                                    <div class="grid-item grid-item-50">
                                          <img src="img/img-8.jpg">
                                       </div><div class="grid-item grid-item-50">
                                 <img src="img/img-3.jpg">
                              </div><div class="grid-item grid-item-50">
                                 <img src="img/img-4.jpg">
                              </div>      
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="detail-br">
                     <div class="detail-bl">
                        <div class="detail-bm"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="accordion_bottom" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" role="tab" aria-expanded="false" aria-selected="false" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-e"></span></div>
         </div>
         <!--<div id="PhotoSwipeTarget"></div>-->
         <div id="footer">
            <div id="copyright">
               <div id="copyright-text">
                  <div id="copyright-text-content">
                     <span class="fontcolor-button-title">
                     <!--Powered by YouVivid.net-->
                     Developed with <strong>&hearts;</strong> by S & B
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <a id="autoMobileVideo" href="mobile_invite_autovideo.asp?sn=9zfma&amp;autovideourl=&amp;ts=1544976256"></a>
      </div>
      <div id="jquery_jplayer_1" style="width: 0px; height: 0px;">
         <img id="jp_poster_0" style="width: 0px; height: 0px; display: none;">
         <audio id="jp_audio_0" preload="metadata" src="mp3/zeroring.mp3"></audio>
      </div>
      <script src="js/setcookie_timezone3.js" ></script>
      <script src="js/masonry.pkgd.min.js"></script>
      <script src="js/slider/dist/jquery.zoomslider.min.js"></script>
      <script>
         $(document).on('click','#invite_detail_title35672292', function(){
            $('.grid').masonry({
               //columnWidth: 200,
               itemSelector: '.item'
            })
         })
      </script>
   </body>
   <iframe id="google_shimpl" style="display: none;"></iframe>
</html>