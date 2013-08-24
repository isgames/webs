<!--js-->
<script type="text/javascript">
var loing_input_err = "<?php echo $this->_tpl_vars['lngpack']['loing_input_err'] ?>";
var seccode_empty = "<?php echo $this->_tpl_vars['lngpack']['seescodeerr'] ?>";
</script>
<!--end_js-->
<form name="mainform" method="post" action="<?php echo $this->_tpl_vars['mlink']['logindb'] ?>" onSubmit="return memberlogin('<?php echo $this->_tpl_vars['mem_isseccode'] ?>')">
<table class="formlist" style="width: 100%;" >
	<tr>
		<th width="40%">用户名</th>
		<td><input type="text" name="username" id="username"  class="infoInput" size="20" maxlength="15" /></td>
	</tr>
	<tr>
		<th>密&nbsp;&nbsp;&nbsp; 码</th>
		<td><input type="password" name="password" id="password" class="infoInput" size="20" maxlength="15" /></td>
	</tr>
	<?php if($this->_tpl_vars['mem_isseccode']==1){ ?>
	<tr>
		<th>* 验证码</th>
		<td>
			<input type="text" id="seccode" name="seccode" class="infoInput" maxlength="4" size="5" style="text-transform: uppercase;"/> <img title="点击更换验证码" id="memberseccodesrc" onclick="sessionimg('memberseccodesrc','<?php echo $this->_tpl_vars['rootdir'] ?>')" src="<?php echo $this->_tpl_vars['seccodelink'] ?>" style="cursor: pointer;" align="absmiddle"/>
		</td>
	</tr>
	<?php } ?>
	<tr>
		<td>&nbsp;</td>
		<td><input name="submit" type="submit" class="buttonface" value="确认登陆"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><a href="<?php echo $this->_tpl_vars['mlink']['reg'] ?>">我要注册</a> <a href="<?php echo $this->_tpl_vars['mlink']['lostpasswd'] ?>">您忘记密码？</a></td>
	</tr>
</table>
</form>