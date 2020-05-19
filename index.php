<!DOCTYPE html>
<html>
  <head>
    <title>帳戶管理</title>
    <meta charset="utf-8">
  </head>
  <body>
	<p align="center">
	帳戶管理
	</p>
	<p>
	  <a href="join.php">新增帳戶</a>&nbsp;&nbsp;
    </p>
	
	<form>
	<label>搜尋</label>&nbsp;&nbsp;
	<select name="search">
　<option value="帳號">帳號</option>
　<option value="姓名">姓名</option>
　<option value="性別">性別</option>
　<option value="生日">生日</option>
　<option value="信箱">信箱</option>
　<option value="備註">備註</option>
	</select>&nbsp;&nbsp;
	<input type="text" name="id1">
	<p></p>
	<label>排序</label>&nbsp;&nbsp;
	<select name="order">
　<option value="帳號">帳號</option>
　<option value="姓名">姓名</option>
　<option value="性別">性別</option>
　<option value="生日">生日</option>
　<option value="信箱">信箱</option>
　<option value="備註">備註</option>
	</select>&nbsp;&nbsp;
	<select name="order_by">
	<option value="asc">小-大</option>
	<option value="desc">大-小</option>
	</select>
	</form>
	
	<p>帳號
      <a href="edit.php">修改</a> /
      <a href="delete.php">刪除</a>&nbsp;&nbsp;
	  <input type="text" name="id1">
    </p>
	
	<frameset rows="60, *" border="0">
	<frame name="bottom" noresize="record.php">
	</frameset>


  </body>
  
  
</html>