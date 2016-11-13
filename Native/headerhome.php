<?php
include "loginheader.php"
?>
<table border="0" cellpadding="0" cellspacing="0" align="center">
<tbody>
<tr>
<td valign="bottom" width="113" class="activetab"><a href="homepage.php" class="activetablinks">HOME</a></td>
<td valign="bottom" width="11"></td>
<td valign="bottom"  width="113" class="normaltab"><a href="mypage.php" class="normaltablinks">MY PAGE</a></td>
<td valign="bottom" width="11"></td>
<td valign="bottom" width="113" class="normaltab"><a href="latest.php" class="normaltablinks">GALLERY</a></td>
<td valign="bottom" width="11"></td>
<td valign="bottom" width="113" class="normaltab" ><a href="create.php" class="normaltablinks">CREATE</a></td>	
<td valign="bottom" width="11"></td>
<td valign="bottom" width="113" class="normaltab" ><a href="games.php" class="normaltablinks">GAME ZONE</a></td>
<td valign="bottom" width="12"></td>
<td width="110" align="right"><span class="submenu"> </span><br>
</td>
<form name="searchForm" action="search.php" method="get"></form>
<td width="140" align="right"><span class="submenu"> 
<?php
$searchtext=$_REQUEST['searchfield'];
if($searchtext!="")
{
?>
<input name="searchfield" rows="2" cols="20" value="<?Php echo $searchtext;?>" onfocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" class="searchbox" type="text"> </span>
<?Php
}
?>
<input name="searchfield" rows="2" cols="20" value="Search" onfocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" class="searchbox" type="text"> </span>
</td>
<td align="right"><input src="images/search.png" type="image" onclick="document.searchForm.submit();"></td>
</tr>
</tbody>
</table>	

<table width="896" border="0" cellpadding="0" cellspacing="0" align="center">
<tbody>
<tr>
<td valign="top" style="height: 2px; width: 900px;" background="images/greenline.png">
</td>

</tr>
<tr>
<td class="greenintrotext">Pictures are not just to see... we can learn and play with them too!<br><br></td>
</tr>
</tbody>
</table>