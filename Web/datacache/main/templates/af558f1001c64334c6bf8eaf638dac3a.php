<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $this->_tpl_vars['type']['typename'] ?> - <?php echo $this->_tpl_vars['lngpack']['sitename'] ?></title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['lngpack']['keyword'] ?>" />
<meta name="description" content="<?php echo $this->_tpl_vars['lngpack']['description'] ?>" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>style/tempates_div.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>style/public.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>style/pagebotton.css" rel="stylesheet" type="text/css" />
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
</script>
</head>

<body>
<div class="head">
	885BA145EFC8431D34F5CC06D142F143default/cn/public/head.html|885BA145EFC8431D34F5CC06D142F143
	
	<div class="bann"><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/bann.jpg"/></div>
	<div class="bann">
		<div class="location">您现在的位置：<a href="<?php echo $this->_tpl_vars['homelink'] ?>">首页</a> » <b><?php echo $this->_tpl_vars['type']['typename'] ?></b></div>
	</div>
	
	<div class="framecenter margintop10">
		<div class="frameright ">
			885BA145EFC8431D34F5CC06D142F143default/cn/public/left.html|885BA145EFC8431D34F5CC06D142F143
		</div>
		<div class="pagecontent margintleft10">
			<div class="pagecontentstr">
			<?php if($this->_tpl_vars['out']=='forumbbs'){ ?>
				<?php if(count($this->_tpl_vars['array']) > 0){ ?>
				<div class="righttext center">
					<ul class="bbslist">
						<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
							<li>
								<div class="sendname"><span class="colorgorningage">留言人：<?php echo $this->_tpl_vars['array'][$i]['username'] ?></span><span class="padding-left10 colorgorning3">留言时间：<?php echo $this->timeformat($this->_tpl_vars['array'][$i]['addtime'],3) ?></span></div>
								<div class="messagelist"><span class="colorgreen strong">主题：<?php echo $this->_tpl_vars['array'][$i]['title'] ?></span></div>
								<div class="messagelist"><?php echo $this->htmlcode($this->_tpl_vars['array'][$i]['content'],'0') ?></div>
								<?php if(count( $this->_tpl_vars['array'][$i]['list'] )>0 ){ ?>
								<?php if (count($this->_tpl_vars['array'][$i]['list'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['array'][$i]['list']); $ii++){?>
								<div class="remessagelist colorgreen bgcolorthree2">
									管理员回复：<?php echo $this->htmlcode($this->_tpl_vars['array'][$i]['list'][$ii]['content'],'0') ?><br/>
									<span class="colorgorning3">回复时间：<?php echo $this->timeformat($this->_tpl_vars['array'][$i]['list'][$ii]['addtime'],3) ?></span>
								</div>
								<?php }} ?>
								<?php } ?>
							</li>
						<?php }} ?>
					</ul>
				</div>
				<div class="righttext center margintop8">
					<div id="pagelist">
						<?php echo $this->_tpl_vars['pagetext'] ?>
					</div>
				</div>
				<div class="righttext center margintop8">
					<div id="Pagination" class="pagination">
						<?php echo $this->_tpl_vars['pagebotton'] ?>
					</div>
				</div>
				<?php }else{ ?>
				<div class="righttext center margintop8">
					<div id="pagelist">暂无留言</div>
				</div>
				<?php } ?>
				<div class="righttext margintop8">
					<div class="readlist">
						<div class="tg1">我要留言</div>
						<div class="l">
						<?php if($this->_tpl_vars['member']['userid']!=0 || $this->_tpl_vars['type']['purview']==0){ ?>
							<script type="text/javascript">
							var forum_title_err = "<?php echo $this->_tpl_vars['lngpack']['forum_title_err'] ?>";
							var forum_input_err = "<?php echo $this->_tpl_vars['lngpack']['forum_input_err'] ?>";
							var email_err = "<?php echo $this->_tpl_vars['lngpack']['email_err'] ?>";
							var seccode_empty = "<?php echo $this->_tpl_vars['lngpack']['seescodeerr'] ?>";
							</script>
							<form name="bbsmainform" method="post" action="<?php echo $this->_tpl_vars['mlink']['forumsave'] ?>" onSubmit="return forumcreat('<?php echo $this->_tpl_vars['type']['isseccode'] ?>')">
							<input type="hidden" name="userid" value="<?php echo $this->_tpl_vars['member']['userid'] ?>">
							<input type="hidden" name="inputclass" value="add">
							<input type="hidden" name="btid" value="<?php echo $this->_tpl_vars['type']['btid'] ?>">
							<input type="hidden" name="lng" value="<?php echo $this->_tpl_vars['lng'] ?>">
							<table class="formlist" style="width:662px;">
								<tr>
									<th class="fontsize14" width="15%">* 主题</th>
									<td><input type="text" name="title" class="infoInput" style="width:95%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">* 姓名</th>
									<td><input type="text" name="username" class="infoInput" value="<?php echo $this->_tpl_vars['member']['alias'] ?>" style="width:50%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">* E-mail</th>
									<td><input type="text" name="email" class="infoInput" value="<?php echo $this->_tpl_vars['member']['email'] ?>" style="width:50%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">* 内容</th>
									<td><textarea name="content" rows="15" class="infoInput" style="width:95%;height:180px;"></textarea></td>
								</tr>
								<tr>
									<td colspan="2" class="td01 fontsize14">以下是可选项，建议填写以便我们与您联系！</td>
								</tr>
								<tr>
									<th class="fontsize14">QQ</th>
									<td><input type="text" name="qq" class="infoInput" value="<?php echo $this->_tpl_vars['member']['qq'] ?>" style="width:50%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">MSN</th>
									<td><input type="text" name="msn" class="infoInput" value="<?php echo $this->_tpl_vars['member']['msn'] ?>" style="width:50%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">联系地址</th>
									<td><input type="text" name="address" class="infoInput" value="<?php echo $this->_tpl_vars['member']['address'] ?>" style="width:70%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">电话</th>
									<td><input type="text" name="tel" class="infoInput" value="<?php echo $this->_tpl_vars['member']['tel'] ?>" style="width:20%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">手机</th>
									<td><input type="text" name="mobile" class="infoInput" value="<?php echo $this->_tpl_vars['member']['mobile'] ?>" style="width:20%;"/></td>
								</tr>
								<?php if($this->_tpl_vars['type']['isseccode']==1){ ?>
								<tr>
									<th class="fontsize14">* 验证码</th>
									<td>
										<input type="text" id="seccode" name="seccode" class="infoInput" maxlength="4" size="5" style="text-transform: uppercase;"/>
										<img title="点击更换验证码" id="memberseccodesrc" onclick="sessionimg('memberseccodesrc','<?php echo $this->_tpl_vars['rootdir'] ?>')" src="<?php echo $this->_tpl_vars['seccodelink'] ?>" style="cursor: pointer;" align="absmiddle"/>
									</td>
								</tr>
								<?php } ?>
								<tr>
									<th></th>
									<td><input type="submit" name="submit" value="提交留言" class="buttonface2" /></td>
								</tr>
							</table>
							</form>
						<?php }else{ ?>
							<table class="formlist" style="width:662px;">
								<tr>
									<td>6623ef97c6f6ccf2fb032e800d2edda9login|||6623ef97c6f6ccf2fb032e800d2edda9</td>
								</tr>
							</table>
						<?php } ?>
						</div>
					</div>
				</div>
			<?php } elseif($this->_tpl_vars['out']=='forumlist'){ ?>
				<?php if(count($this->_tpl_vars['array']) > 0){ ?>
				<div class="righttext center">
					<table style="width: 100%" class="tablelist">
					<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
					<tr>
						<td class="td03 left bbsicon">
							<a class="infolink03" href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>" title="<?php echo $this->_tpl_vars['array'][$ii]['title'] ?>"><?php echo $this->cutstr($this->_tpl_vars['array'][$i]['title'],30,'') ?></a>（<?php echo $this->_tpl_vars['array'][$i]['click'] ?>阅/<?php echo $this->_tpl_vars['array'][$i]['replynum'] ?>回）
						</td>
						<td class="td04 right"><u><?php echo $this->_tpl_vars['array'][$i]['username'] ?></u> 于 <?php echo $this->timeformat($this->_tpl_vars['array'][$i]['addtime'],3) ?></td>
					</tr>
					<?php }} ?>
					</table>
				</div>
				<div class="righttext center margintop8">
					<div id="pagelist">
						<?php echo $this->_tpl_vars['pagetext'] ?>
					</div>
				</div>
				<div class="righttext center margintop8">
					<div id="Pagination" class="pagination">
						<?php echo $this->_tpl_vars['pagebotton'] ?>
					</div>
				</div>
				<?php }else{ ?>
				<div class="righttext center margintop8">
					<div id="pagelist">暂无留言</div>
				</div>
				<?php } ?>
				<div class="righttext margintop8">
					<div class="readlist">
						<div class="tg1">我要留言</div>
						<div class="l">
						<?php if($this->_tpl_vars['member']['userid']!=0 || $this->_tpl_vars['type']['purview']==0){ ?>
							<script type="text/javascript">
							var forum_title_err = "<?php echo $this->_tpl_vars['lngpack']['forum_title_err'] ?>";
							var forum_input_err = "<?php echo $this->_tpl_vars['lngpack']['forum_input_err'] ?>";
							var email_err = "<?php echo $this->_tpl_vars['lngpack']['email_err'] ?>";
							var seccode_empty = "<?php echo $this->_tpl_vars['lngpack']['seescodeerr'] ?>";
							</script>
							<form name="bbsmainform" method="post" action="<?php echo $this->_tpl_vars['mlink']['forumsave'] ?>" onSubmit="return forumcreat('<?php echo $this->_tpl_vars['type']['isseccode'] ?>')">
							<input type="hidden" name="userid" value="<?php echo $this->_tpl_vars['member']['userid'] ?>">
							<input type="hidden" name="inputclass" value="add">
							<input type="hidden" name="btid" value="<?php echo $this->_tpl_vars['type']['btid'] ?>">
							<input type="hidden" name="lng" value="<?php echo $this->_tpl_vars['lng'] ?>">
							<table class="formlist" style="width:662px;">
								<tr>
									<th class="fontsize14" width="15%">* 主题</th>
									<td><input type="text" name="title" class="infoInput" style="width:95%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">* 姓名</th>
									<td><input type="text" name="username" class="infoInput" value="<?php echo $this->_tpl_vars['member']['alias'] ?>" style="width:50%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">* E-mail</th>
									<td><input type="text" name="email" class="infoInput" value="<?php echo $this->_tpl_vars['member']['email'] ?>" style="width:50%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">* 内容</th>
									<td><textarea name="content" rows="15" class="infoInput" style="width:95%;height:180px;"></textarea></td>
								</tr>
								<tr>
									<td colspan="2" class="td01 fontsize14">以下是可选项，建议填写以便我们与您联系！</td>
								</tr>
								<tr>
									<th class="fontsize14">QQ</th>
									<td><input type="text" name="qq" class="infoInput" value="<?php echo $this->_tpl_vars['member']['qq'] ?>" style="width:50%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">MSN</th>
									<td><input type="text" name="msn" class="infoInput" value="<?php echo $this->_tpl_vars['member']['msn'] ?>" style="width:50%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">联系地址</th>
									<td><input type="text" name="address" class="infoInput" value="<?php echo $this->_tpl_vars['member']['address'] ?>" style="width:70%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">电话</th>
									<td><input type="text" name="tel" class="infoInput" value="<?php echo $this->_tpl_vars['member']['tel'] ?>" style="width:20%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">手机</th>
									<td><input type="text" name="mobile" class="infoInput" value="<?php echo $this->_tpl_vars['member']['mobile'] ?>" style="width:20%;"/></td>
								</tr>
								<?php if($this->_tpl_vars['type']['isseccode']==1){ ?>
								<tr>
									<th class="fontsize14">* 验证码</th>
									<td>
										<input type="text" id="seccode" name="seccode" class="infoInput" maxlength="4" size="5" style="text-transform: uppercase;"/>
										<img title="点击更换验证码" id="memberseccodesrc" onclick="sessionimg('memberseccodesrc','<?php echo $this->_tpl_vars['rootdir'] ?>')" src="<?php echo $this->_tpl_vars['seccodelink'] ?>" style="cursor: pointer;" align="absmiddle"/>
									</td>
								</tr>
								<?php } ?>
								<tr>
									<th></th>
									<td><input type="submit" name="submit" value="提交留言" class="buttonface2" /></td>
								</tr>
							</table>
							</form>
						<?php }else{ ?>
							<table class="formlist" style="width:662px;">
								<tr>
									<td>6623ef97c6f6ccf2fb032e800d2edda9login|||6623ef97c6f6ccf2fb032e800d2edda9</td>
								</tr>
							</table>
						<?php } ?>
						</div>
					</div>
				</div>
			<?php } elseif($this->_tpl_vars['out']=='forumread'){ ?>
				<div class="righttext">
					<table style="width:100%;margin:0px auto;margin-bottom:10px;" class="tablelist">
						<tr>
							<td class="td02"><h3><?php echo $this->_tpl_vars['read']['title'] ?></h3></td>
						</tr>
						<tr>
							<td class="td02 lineheight200"><?php echo $this->htmlcode($this->_tpl_vars['read']['content'],'0') ?></td>
						</tr>
						<tr>
							<td class="td04 bgcolorthree2"><span class="colorgorningage">作者：<u><?php echo $this->_tpl_vars['read']['username'] ?></u></span>&nbsp; 发表时间：<?php echo $this->timeformat($this->_tpl_vars['read']['addtime'],3) ?>&nbsp; 阅读:<?php echo $this->_tpl_vars['read']['click'] ?>&nbsp;&nbsp; 回复：<?php echo $this->_tpl_vars['read']['replynum'] ?></td>
						</tr>
						<?php if(count($this->_tpl_vars['array']) > 0 ){ ?>
						<?php if (count($this->_tpl_vars['array'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['array']); $ii++){?>
						<tr>
							<td style="height:5px;"></td>
						</tr>
						<tr>
							<td class="td02"><h5><?php echo $this->_tpl_vars['array'][$ii]['title'] ?></h5></td>
						</tr>
						<tr>
							<td class="td02 lineheight200"><?php echo $this->htmlcode($this->_tpl_vars['array'][$ii]['content'],'0') ?></td>
						</tr>
						<tr>
							<td class="td04 bgcolorthree2"><span class="colorgorningage"><?php if($this->_tpl_vars['array'][$ii]['adminid']>0 ){ ?>管理员回复<?php }else{ ?>作者：<u><?php echo $this->_tpl_vars['array'][$ii]['username'] ?></u><?php } ?></span>&nbsp; 发表时间：<?php echo $this->timeformat($this->_tpl_vars['array'][$ii]['addtime'],4) ?></td>
						</tr>
						<?php }} ?>
						<?php }else{ ?>
						<tr>
							<td style="height:5px;"></td>
						</tr>
						<tr>
							<td class="center"><b>暂无人回复该主题！</b></td>
						</tr>
						<?php } ?>
					</table>
				</div>
				<?php if(count($this->_tpl_vars['array']) > 0 ){ ?>
				<div class="righttext margintop8">
					<table style="width:100%">
						<tr>
							<td class="right" style="padding-right:5px;">
								<div id="Pagination" class="pagination"><?php echo $this->_tpl_vars['pagebotton'] ?></div>
							</td>
						</tr>
					</table>
				</div>
				<?php } ?>
				<?php if($this->_tpl_vars['type']['ispage']==2){ ?>
				<div class="righttext margintop8">
					<div class="readlist">
						<div class="tg1">我要回复</div>
						<div class="l">
						<?php if($this->_tpl_vars['member']['userid']!=0 || $this->_tpl_vars['type']['purview']==0){ ?>
							<script type="text/javascript">
							var forum_title_err = "<?php echo $this->_tpl_vars['lngpack']['forum_title_err'] ?>";
							var forum_input_err = "<?php echo $this->_tpl_vars['lngpack']['forum_input_err'] ?>";
							var email_err = "<?php echo $this->_tpl_vars['lngpack']['email_err'] ?>";
							var seccode_empty = "<?php echo $this->_tpl_vars['lngpack']['seescodeerr'] ?>";
							</script>
							<form name="bbsmainform" method="post" action="<?php echo $this->_tpl_vars['mlink']['forumsave'] ?>" onSubmit="return forumcreat('<?php echo $this->_tpl_vars['type']['isseccode'] ?>')">
							<input type="hidden" name="userid" value="<?php echo $this->_tpl_vars['member']['userid'] ?>">
							<input type="hidden" name="inputclass" value="reinput">
							<input type="hidden" name="btid" value="<?php echo $this->_tpl_vars['type']['btid'] ?>">
							<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['read']['bid'] ?>">
							<input type="hidden" name="lng" value="<?php echo $this->_tpl_vars['lng'] ?>">
							<input type="hidden" name="reemail" value="<?php echo $this->_tpl_vars['read']['email'] ?>">
							<table class="formlist" style="width:662px;">
								<tr>
									<th class="fontsize14" width="15%">* 主题</th>
									<td><input type="text" name="title" class="infoInput" value="RE:<?php echo $this->_tpl_vars['read']['title'] ?>" style="width:95%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">* 姓名</th>
									<td><input type="text" name="username" class="infoInput" value="<?php echo $this->_tpl_vars['member']['alias'] ?>" style="width:50%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">* E-mail</th>
									<td><input type="text" name="email" class="infoInput" value="<?php echo $this->_tpl_vars['member']['email'] ?>" style="width:50%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">* 内容</th>
									<td><textarea name="content" rows="15" class="infoInput" style="width:95%;height:180px;"></textarea></td>
								</tr>
								<tr>
									<td colspan="2" class="td01 fontsize14">以下是可选项，建议填写以便我们与您联系！</td>
								</tr>
								<tr>
									<th class="fontsize14">QQ</th>
									<td><input type="text" name="qq" class="infoInput" value="<?php echo $this->_tpl_vars['member']['qq'] ?>" style="width:50%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">MSN</th>
									<td><input type="text" name="msn" class="infoInput" value="<?php echo $this->_tpl_vars['member']['msn'] ?>" style="width:50%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">联系地址</th>
									<td><input type="text" name="address" class="infoInput" value="<?php echo $this->_tpl_vars['member']['address'] ?>" style="width:70%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">电话</th>
									<td><input type="text" name="tel" class="infoInput" value="<?php echo $this->_tpl_vars['member']['tel'] ?>" style="width:20%;"/></td>
								</tr>
								<tr>
									<th class="fontsize14">手机</th>
									<td><input type="text" name="mobile" class="infoInput" value="<?php echo $this->_tpl_vars['member']['mobile'] ?>" style="width:20%;"/></td>
								</tr>
								<?php if($this->_tpl_vars['type']['isseccode']==1){ ?>
								<tr>
									<th class="fontsize14">* 验证码</th>
									<td>
										<input type="text" id="seccode" name="seccode" class="infoInput" maxlength="4" size="5" style="text-transform: uppercase;"/>
										<img title="点击更换验证码" id="memberseccodesrc" onclick="sessionimg('memberseccodesrc','<?php echo $this->_tpl_vars['rootdir'] ?>')" src="<?php echo $this->_tpl_vars['seccodelink'] ?>" style="cursor: pointer;" align="absmiddle"/>
									</td>
								</tr>
								<?php } ?>
								<tr>
									<th></th>
									<td><input type="submit" name="submit" value="提交留言" class="buttonface2" /></td>
								</tr>
							</table>
							</form>
						<?php }else{ ?>
							<table class="formlist" style="width:662px;">
								<tr>
									<td>6623ef97c6f6ccf2fb032e800d2edda9login|||6623ef97c6f6ccf2fb032e800d2edda9</td>
								</tr>
							</table>
						<?php } ?>
						</div>
					</div>
				</div>
				<?php } ?>
			<?php } ?>
			</div>
		</div>
	</div>
	885BA145EFC8431D34F5CC06D142F143default/cn/public/link.html|885BA145EFC8431D34F5CC06D142F143
</div>
885BA145EFC8431D34F5CC06D142F143default/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143	
</body>

</html>