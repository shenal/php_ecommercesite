<html>
<head>
<title> Welcome to Sixth Sense Restaurent</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" />
<script src="scripts/jquery-1.7.2.min.js"></script>
<script src="scripts/camera.min.js"></script>

</head>
<body>
<div id="mainbody">
<?php include  "header.php" ;
?>
<div id="content"  style>
<form name="register" action='adduser.php' method='POST'>
<table width="735" height="386" border="0">
  <tr>
    <th height="19" colspan="2" align="center" valign="bottom" class="register" scope="row">Member Registration</th>
    </tr>
  <tr>
    <th height="21" align="right" class="text2" scope="row">&nbsp;</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th width="294" align="right" class="text2" scope="row">First Name</th>
    <td width="431"><input type="text" name="firstname"  size="50"/></td>
  </tr>
  <tr>
    <th align="right" class="text2" scope="row">Last Name</th>
    <td><input type="text" name="lastname"  size="50"/></td>
  </tr>
  <tr>
    <th align="right" class="text2" scope="row">Username</th>
    <td><input type="text" name="username"  size="50"/></td>
  </tr>
  <tr>
    <th align="right" class="text2" scope="row">Email</th>
    <td><input type="text" name="email"  size="50"/></td>
  </tr>
  <tr>
    <th align="right" class="text2" scope="row">Telephone</th>
    <td><input type="text"  name="telephone" size="50"/></td>
  </tr>
 
  <tr>
    <th align="right" class="text2" scope="row">Delivery Address</th>
    <td><input type="text" name="deliveryaddress"  size="50"/></td>
  </tr>
  <tr>
    <th align="right" class="text2" scope="row">Password</th>
    <td><input type="password" name="password"/></td>
  </tr>
  <tr>
    <th align="right" class="text2" scope="row">&nbsp;</th>
    <td><input type="submit" name="register" value="Register" onClick="return validateForm(this.form8);"/></td>
  </tr>
</table>
</form>
</div>



</div>
</body>
</html>