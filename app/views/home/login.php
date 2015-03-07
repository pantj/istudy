<!DOCTYPE HTML> 
<html lang="zh-CN"> 
   <head> 
       <meta charset="UTF-8"> 
       <title>Login</title> 
   </head> 
   <body> 
       <form method="post" action="/login">
		    <table>
                <tr>
				    <td>用户名:</td>
					<td><input type="text" style="width:120px" id="username" name="username"></td>
			    </tr>
				<tr>
				    <td>密码:</td>
					<td><input type="text" style="width:120px" id="pass" name="pass"></td>
				</tr>
				<tr>
				    <td colspan=2>
					    <input type="submit" value="submit">
						<input type="reset" value="reset">
					</td>
				</tr>
			</table>
       </form>
   </body> 
</html> 