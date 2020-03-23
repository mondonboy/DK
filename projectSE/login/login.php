<!DOCTYPE html  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Nontri Ldap Authentication Demo</title>
</head>
<body>
<label></label>
<form action="../views/ldap.php" method="POST" name="loginform">
  <br />
  <table width="310" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#eeeedd""><tr><td><div align="left">
    <table width="310" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#eeeedd"">
      <tr>
        <td height="61" colspan="3"><div align="right">Nontri LDAP Authentication &nbsp;<br />
        </div></td>
      </tr>
      <tr>
        <td width="122" height="36"><div align="right">Username : </div></td>
        <td width="10"><div align="center"></div></td>
        <td width="174"><div align="left">
            <input name="username" type="text" size="20" />
        </div></td>
      </tr>
      <tr>
        <td height="35"><div align="right" >Password : </div></td>
        <td><div align="center"></div></td>
        <td><div align="left">
            <input name="password" type="password" id="password" size="20" />
        </div></td>
      </tr>
      <tr>
        <td height="40" colspan="3"><div align="center">
            <input name="submit" type="submit" value="Login" />
          &nbsp;&nbsp;
          <input name="Reset" type="reset" value="Clear" />
        </div></td>
      </tr>
    </table>
  </div></td>    </tr>
  </table>
</form>
</body>
</html>
