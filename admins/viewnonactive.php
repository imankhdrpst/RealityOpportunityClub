<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="robots" content="none" />
<title>ROP Club : Administrator</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
-->
</style>
<link href="colours.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript">
function deleteuser(id)
{
if(confirm('Are you Sure to delete this user'))
window.location.href="deleteuser.php?id=" + id;
}
</script>
<script language="JavaScript" type="text/javascript">
function activateuser(id)
{
if(confirm('Are you Sure to Activate '))
window.location.href="activateuser.php?id=" + id;
}
</script>
</head>

<body>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="66" height="185" align="left" valign="top"><img id="mlm_01" src="images/mlm_01.jpg" width="66" height="185" alt="" /></td>
    <td width="838" height="185" align="left" valign="top" background="images/mlm_13.jpg"><?php include("banner.php"); ?></td>
    <td width="76" height="185" align="left" valign="top"><img id="mlm_03" src="images/mlm_03.jpg" width="76" height="185" alt="" /></td>
  </tr>
  <tr>
    <td width="66" height="700" align="left" valign="top" background="images/mlm_07.jpg">&nbsp;</td>
    <td width="838" height="700" align="left" valign="top" bgcolor="#F4FEFD"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="24%" height="41" align="left" valign="top">&nbsp;</td>
        <td width="76%" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="66" align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><form id="form1" name="form1" method="post" action="">
          <table width="99%" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td height="33" colspan="5"><h3><strong>Non Active Members</strong></h3></td>
            </tr>
            <tr>
              <td width="24" height="29" class="ContentBlue"><strong>No </strong></td>
              <td width="16" class="ContentBlue">&nbsp;</td>
              <td width="340" class="ContentBlue"><strong>Name</strong></td>
              <td width="41" class="ContentBlue"><strong>Phone</strong></td>
              <td width="71" class="ContentBlue"><strong>User Id</strong> </td>
              </tr>
            <?php 
		  $er=1;
$qryh=mysql_query("select * from members where ActStatus='0' order by MemberId asc ");
while($qrysh=mysql_fetch_array($qryh))
{
$iid=$qrysh['AutoID'];
$act_status=$qrysh['ActStatus'];
?>
            <tr>
              <td height="26"><?php echo $er; ?></td>
              <td><a href="javascript:void(0)"
onclick="window.open('viewmem.php?mid=<?php echo $qrysh['MemberID']; ?>',
'welcome','width=310,menubar=yes,status=yes')" ><img src="images/line_popup_ico.gif" alt="Details" width="16" height="12" border="0" /></a></td>
              <td><?php echo $qrysh['Name']; ?></td>
              <td><?php echo $qrysh['Phone']; ?></td>
              <td><?php echo $qrysh['MemberID']; ?></td>
              </tr>
            <?php 
		  $er++;
		  }
		  ?>
          </table>
                </form>
        </td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
    <td width="76" height="700" align="left" valign="top" background="images/mlm_09.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td width="66" height="58" align="left" valign="top"><img id="mlm_10" src="images/mlm_10.jpg" width="66" height="58" alt="" /></td>
    <td width="838" height="58" align="left" valign="top" background="images/mlm_14.jpg">&nbsp;</td>
    <td width="76" height="58" align="left" valign="top"><img id="mlm_12" src="images/mlm_12.jpg" width="76" height="58" alt="" /></td>
  </tr>
</table>
</body>
</html>