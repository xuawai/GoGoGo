w<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Insert title here</title>
</head>
<body>
<h3>添加用户</h3>
<form action="doAdminAction.php" method="post" enctype="multipart/form-data">
    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <!--        表单无法同时以post get传递参数，采用该方法传递。-->
        <input type="hidden" name="act" value="addUser" >
        <tr>
            <td align="right">用户名</td>
            <td><input type="text" name="username" placehoder="请输入用户名"></td>
        </tr>
        <tr>
            <td align="right">密码</td>
            <td><input type="password" name="password" placehoder="请输入密码"></td>
        </tr>
        <tr>
            <td align="right">邮箱</td>
            <td><input type="text" name="email" placehoder="请输入邮箱"></td>
        </tr>
        <tr>
            <td align="right">性别</td>
            <td><input type="radio" name="sex" value="1" checked="checked" >男
                <input type="radio" name="sex" value="2" >女
                <input type="radio" name="sex" value="3" >保密
            </td>
        </tr>
        <tr>
            <td align="right">头像</td>
            <td><input type="file" name="face"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="添加用户"></td>
        </tr>
    </table>
</form>

</body>
</html>