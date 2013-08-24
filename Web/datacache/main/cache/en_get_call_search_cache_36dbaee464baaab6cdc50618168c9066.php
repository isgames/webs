<form name="infosearch" method="post" action="/html/en/index.php?ac=search&at=list">
				<input type="hidden" name="lng" value="en">
				<input type="hidden" name="mid" value="3">
				<table  class="formlist2">
					<tr>
						<td class="right">Keyword</td>
						<td><input id="keyword" name="keyword" type="text" class="infoInput" size="20"/></td>
					</tr>
															<tr>
						<td class="right">Categories</td>
						<td>
							<select size="1" name="tid" class="select" id="tid">
																<option value="36"> Electronics</option>
																<option value="41">├── Camera</option>
																<option value="40">├── Cell Phones</option>
																<option value="37"> Movies</option>
															</select>
						</td>
					</tr>
										<tr>
						<td></td>
						<td><input name="submitsearch" type="submit" class="buttonface" value="Search" /></td>
					</tr>
				</table>
				</form>