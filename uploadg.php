<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="sm.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="easyui.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="jquery.easyui.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#ff').form({
				url:'custregins.php',
				onSubmit:function(){
					return $(this).form('validate');
				},
				success:function(data){
					$.messager.alert('Info', data, 'info');
				}
			});
		});
	</script>
</head>

<body>
<div id="header"></div>
<form id="form1" name="form1" method="post" action="uploadgins.php" enctype="multipart/form-data">
  <table width="900" border="0" class="maintable">
    <tr>
     <td width="150"><?php include "usermenu.php"; ?></td>
      <td><table width="700" border="0" class="subtable">
        <tr class="mainheading">
          <td colspan="2"><div align="center">Upload Gallery</div></td>
          </tr>
        <tr>
          <td width="334">&nbsp;</td>
          <td width="356"><label>
            <input type="file" name="uploadFile" id="uploadFile" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
          <input type="hidden" name="Reid" value="<?php echo $_GET['Reid']; ?>">
            <input type="submit" name="upload" id="upload" value="Upload" />
          </label></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
<div id="fotter">
    <div class="design_info" id="footer">
	</div>
    <div class="copyrights">Copyright Real Estate Company .</div>
</div>
</body>
</html>
