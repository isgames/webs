<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>会员登陆 - <?php echo $this->_tpl_vars['lngpack']['sitename'] ?></title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['lngpack']['keyword'] ?>" />
<meta name="description" content="<?php echo $this->_tpl_vars['lngpack']['description'] ?>" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>style/tempates_div.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>style/public.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/basicrun.js"></script>
<script type="text/javascript">
var loing_input_err = "<?php echo $this->_tpl_vars['lngpack']['loing_input_err'] ?>";
var seccode_empty = "<?php echo $this->_tpl_vars['lngpack']['seescodeerr'] ?>";

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
</script>
</head>

<body>
<div class="head">
	885BA145EFC8431D34F5CC06D142F143default/cn/public/head.html|885BA145EFC8431D34F5CC06D142F143
	<div class="bann"><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/bann.jpg"/></div>
	<div class="bann">
		<div class="location">您现在的位置：<a href="<?php echo $this->_tpl_vars['homelink'] ?>">首页</a> » <b>会员登陆</b></div>
	</div>
	
	<div class="framecenter margintop8">
		<table style="width:90%;margin:0px auto;margin-top:50px;margin-bottom:50px;">
			<tr>
				<td style="width:50%">
					<div class="sianin">
						<div class="signintitle"><span class="fontsize14 strong">会员登陆</span></div>
						<div class="sianinbg">
							<form name="mainform" method="post" action="<?php echo $this->_tpl_vars['mlink']['logindb'] ?>" onSubmit="return memberlogin('<?php echo $this->_tpl_vars['mem_isseccode'] ?>')">
							<table style="width: 100%;height:167px;" class="formlist">
								<tr>
									<th class="th3">用户名</th>
									<td><input type="text" name="username" id="username" class="infoInput" size="30" maxlength="15" /></td>
								</tr>
								<tr>
									<th class="th3">密&nbsp;&nbsp;&nbsp; 码</th>
									<td><input type="password" name="password" id="password" class="infoInput" size="30" maxlength="15" /></td>
								</tr>
								<?php if($this->_tpl_vars['mem_isseccode']==1){ ?>
								<tr>
									<th class="th3">验证码</th>
									<td>
									<input type="text" id="seccode" name="seccode" class="infoInput" maxlength="4" size="5" style="text-transform: uppercase;"/>
									<img title="点击刷新验证码" id="memberseccodesrc" onclick="sessionimg('memberseccodesrc','<?php echo $this->_tpl_vars['rootdir'] ?>')" src="<?php echo $this->_tpl_vars['seccodelink'] ?>" style="cursor: pointer;" align="absmiddle"/>
									</td>
								</tr>
								<?php } ?>
								<tr>
									<td class="th3">&nbsp;</td>
									<td><input name="submit" type="submit" class="buttonface" value="确认登陆"/></td>
								</tr>
								<tr>
									<td class="th3">&nbsp;</td>
									<td>
										<a href="<?php echo $this->_tpl_vars['mlink']['reg'] ?>">我要注册</a>
										<a href="<?php echo $this->_tpl_vars['mlink']['lostpasswd'] ?>">您忘记密码？</a>
									</td>
								</tr>
							</table>
							</form>
						</div>
					</div>
					<div class="tipsnr"></div>
				</td>
				<td style="width:50%"><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/login.png" /></td>
			</tr>
		</table>
	</div>
	885BA145EFC8431D34F5CC06D142F143default/cn/public/link.html|885BA145EFC8431D34F5CC06D142F143
</div>
885BA145EFC8431D34F5CC06D142F143default/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143
</body>

</html>
