<form name="infosearch" method="post" action="/html/big5/index.php?ac=search&at=list">
				<input type="hidden" name="lng" value="cn">
				<input type="hidden" name="mid" value="3">
				<table  class="formlist2">
					<tr>
						<td class="right">搜索关键字</td>
						<td><input id="keyword" name="keyword" type="text" class="infoInput" size="20"/></td>
					</tr>
															<tr>
						<td class="right">分类</td>
						<td>
							<select size="1" name="tid" class="select" id="tid">
																<option value="11" title="电子产品"> 电子产品</option>
																<option value="23" title="手机">├── 手机</option>
																<option value="24" title="电脑">├── 电脑</option>
																<option value="12" title="其它"> 其它</option>
																<option value="25" title="冰箱">├── 冰箱</option>
																<option value="26" title="苹果手机">├── 苹果手机</option>
																<option value="22" title="产品演示"> 产品演示</option>
															</select>
						</td>
					</tr>
										<tr>
						<td></td>
						<td><input name="submitsearch" type="submit" class="buttonface" value="开始搜索" /></td>
					</tr>
				</table>
				</form>