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
	  <a href="join.php">新增帳戶</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
	<p align="center">
	帳戶清單
	</p>
	<?php
   $mysqli = new mysqli("localhost", "root", "", "php_test");

      if ($mysqli->connect_errno)
        die("無法建立資料連接: " . $mysqli->connect_error);

      $mysqli->query("SET NAMES utf8");
      $result = $mysqli->query("SELECT * FROM account_info");

      echo "<table border='1' align='center'><tr align='center'>";
      // 顯示欄位名稱
      while ($field = $result->fetch_field())   
        echo "<td>" . $field->name . "</td>";

      echo "</tr>";

      while ($row = $result->fetch_row())
      {
        echo "<tr>";

        for ($i = 0; $i < $result->field_count; $i++)
          echo "<td>" . $row[$i] . "</td>";

        echo "</tr>";
      }

      echo "</table>";

      $result->free();
      $mysqli->close();
    ?>


  </body>
  
  
</html>