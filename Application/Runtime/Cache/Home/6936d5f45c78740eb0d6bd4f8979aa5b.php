<?php if (!defined('THINK_PATH')) exit();?>

<!-- PageFooter Created by Dennis 2006-01-11 11:59:21  -->
<div id="<!--<?php echo ($smarty["get"]["scriptname"]); ?>-->"></div>
</body>
</html>
<script type="text/javascript">
	// salary page timeout script
    <!--<?php echo ($logoutscript); ?>-->
    $().ready(function(){
        <!--<?php echo ($timer_js); ?>-->
        // auto reisze
        <!--{if $smarty.get.scriptname != ''}-->
        if (parent.document)
        {
        	// set manin content div height
        	var h = $('#<!--<?php echo ($smarty["get"]["scriptname"]); ?>-->').parent().height()+35+'px';
        	var m = "<!--<?php echo ($smarty["get"]["scriptname"]); ?>-->".substring(0,4);
        	// 澶勭悊 MSS鍏辩敤ESS绋嬪紡鐢婚潰鏈嚜鍔ㄦ墿灞�
        	
        	// handle default frame hieght
        	if (m != 'defa')
        	$('#frameid_'+m,window.parent.document).attr('height',h);
        }
        <!--{/if}-->
        // set all buttons to jquery ui which with .button-submit class
        $('.button-submit').button();        
        $('#tab-menu').height('100%');
    });
</script>