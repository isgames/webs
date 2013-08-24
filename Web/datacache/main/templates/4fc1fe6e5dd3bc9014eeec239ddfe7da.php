<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $this->_tpl_vars['lngpack']['sitename'] ?></title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['lngpack']['keyword'] ?>" />
<meta name="description" content="<?php echo $this->_tpl_vars['lngpack']['description'] ?>" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>style/tempates_div.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>style/public.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/basicrun.js"></script>
<script type="text/javascript">
$().ready(function() {
	$("#clickmenubotton li span").hover(function() {
		$(this).addClass("bgmenuhove2");
		$(this).parent().find("ul.subnav").slideDown('fast').show(); 
		$(this).parent().hover(function() {}, function(){
			$(this).parent().find("ul.subnav").fadeOut('fast');
			$(this).parent().find("span").removeClass("bgmenuhove2");
		});
	});
});

    var seconds = 10;
    var defaultUrl = "<?php echo $this->_tpl_vars['linkURL'] ?>";
    onload = function(){
        if (defaultUrl == 'javascript:history.go(-1)' && window.history.length == 0){
            document.getElementById('redirectionMsg').innerHTML = '';
            return;
        }
        window.setInterval(redirection, 1000);
    }
    function redirection(){
        if (seconds <= 0) {
            window.clearInterval();
            return;
        }
        seconds --;
        document.getElementById('spanSeconds').innerHTML = seconds;
        if (seconds == 0) {
            window.clearInterval();
            location.href = defaultUrl;
        }
    }
</script>
</head>

<body>
<div class="head">
	885BA145EFC8431D34F5CC06D142F143default/cn/public/head.html|885BA145EFC8431D34F5CC06D142F143
	<!--bann-->
	<?php if($this->_tpl_vars['type']['typepic']!=''){ ?>
	<div class="bann">
		<div class="bann">
			<img title="tel" src="<?php echo $this->_tpl_vars['rootdir'] ?><?php echo $this->_tpl_vars['type']['typepic'] ?>"/>
		</div>
	</div>
	<?php } ?>
	
	<div class="bann">
		<div class="location">您现在的位置：首页 » <b>提示信息</b></div>
	</div>
	
	<div class="framecenter margintop10">
		<table style="width:90%;margin:0px auto;margin-top:50px;margin-bottom:50px;">
			<tr>
				<td class="center">
					<table style="margin:0px auto;">
						<tr>
							<td><span class="messicon"><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/lightbulb.gif" /></span></td>
							<td><span class="messtext strong fontsize14"><?php echo $this->_tpl_vars['calltitle'] ?></span></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="center fontsize14" style="height:50px;line-height:50px">您可以选择以下操作按钮，网站将在<span class="em" id="spanSeconds">10</span>秒钟后返回默认地址！</td>
			</tr>
			<tr>
				<td class="center" style="height:50px;line-height:50px;">
					<?php if($this->_tpl_vars['backid'] > 0){ ?>
						<input class="buttonface2" onclick="javascript:location.href='<?php echo $this->_tpl_vars['backlinkURL'] ?>';" name="Submit" type="submit" value="<?php echo $this->_tpl_vars['backBotton'] ?>" />
					<?php } ?>
					<input class="buttonface2" onclick="javascript:location.href='<?php echo $this->_tpl_vars['linkURL'] ?>';" name="Submit" type="submit" value="<?php echo $this->_tpl_vars['bottonName'] ?>" />
				</td>
			</tr>
		</table>
	</div>
	885BA145EFC8431D34F5CC06D142F143default/cn/public/link.html|885BA145EFC8431D34F5CC06D142F143
</div>
885BA145EFC8431D34F5CC06D142F143default/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143	
</body>

</html>