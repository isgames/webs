<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $this->_tpl_vars['softtitle'] ?></title>
<link href="templates/css/baselist.css" rel="stylesheet" type="text/css" />
<link href="templates/css/all.css" rel="stylesheet" type="text/css" />
<link href="templates/css/formdiv.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/control.js"></script>
<script type="text/javascript" language="JavaScript">
var upfile_empty = "<?php echo $this->_tpl_vars['ST']['management_upfile_text_cerfile_js_err'] ?>";
var iframename = "<?php echo $this->_tpl_vars['iframename'] ?>";
var digheight="<?php echo $this->_tpl_vars['digheight'] ?>";

$(document).ready(function(){
	var h = parseInt(digheight);
	if(document.getElementById("mainbodybottonauto")){
		$('.managebottonadd').css({height:h-40});
	}
});

function upfilecheck() {
	if( mainform.cerupfilepath.value.length<5 || mainform.cerupfilepath.value=='' ) {
		alert(upfile_empty)
		document.mainform.cerupfilepath.focus();
		return false;
	}
}

function resetwindow(){
    parent.closeifram();
}
</script>
</head>

<body>
<form name="mainform" method="post" action="index.php" enctype="multipart/form-data" onSubmit="return upfilecheck()">
<input type="hidden" name="point" value="admin"/>
<input type="hidden" name="archive" value="management"/>
<input type="hidden" name="action" value="cerfilecheck"/>
<input type="hidden" name="digheight" value="<?php echo $this->_tpl_vars['digheight'] ?>"/>
<div id="mainbodybottonauto" class="managebottonadd">
	<div class="maindobycontent">
		<div class="suggestion">
			<span class="sugicon"><span class="strong colorgorning2"><?php echo $this->_tpl_vars['ST']['position_title'] ?></span><span class="padding-left5 colorgorningage"><?php echo $this->_tpl_vars['ST']['management_upfile_message'] ?></span></span>
		</div>
		<div class="manageeditdiv">
			<div class="maneditcontent">
				<table class="formtablewin">
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['management_upfile_text_http'] ?></td>
						<td width="85%" class="trtitle02"><?php echo $this->_tpl_vars['softhttp'] ?> <span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['management_upfile_text_http_mess'] ?></span></td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['management_upfile_text_vol'] ?></td>
						<td width="85%" class="trtitle02"><?php echo $this->_tpl_vars['softversion'] ?> <?php if($this->_tpl_vars['isupfiletrue']=="false"){ ?><span class="cautiontitle2"><?php echo $this->_tpl_vars['ST']['management_upfile_text_cerfile'] ?></span><?php } ?></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['management_upfile_text_cerfile'] ?></td>
						<td class="trtitle02"><input type="file" name="cerupfilepath" maxlength="200" size="50" class="infoInput"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="downbotton">
	<div id="subbotton">
		<table border="0" width="100%">
			<tr id="bottonsubmit">
				<td id="right"><input type="submit" name="Submit" value="<?php echo $this->_tpl_vars['ST']['management_upfile_text_cerfile_bottonok'] ?>" class="buttonface" title="<?php echo $this->_tpl_vars['ST']['management_upfile_text_cerfile_bottonok'] ?>"/></td>
				<td id="left" class="padding-left5"><input type="reset" name="reset" value="<?php echo $this->_tpl_vars['ST']['management_upfile_text_cerfile_bottonno'] ?>" onclick="javascript:resetwindow();" class="buttonface"  title="<?php echo $this->_tpl_vars['ST']['management_upfile_text_cerfile_bottonno'] ?>"/></td>
			</tr>
		</table>
	</div>
</div>
</form>
</body>

</html>
