<?php
session_start();
?>
<form name="form1" method="post" action="validate.php">
    <table border="1" width="380" align="center" cellspacing="2" cellpadding="0" bgcolor="#A4EEFF">
        <tr>
            <td>
                <table bgcolor="" align="center">
                    <tr> 
                        <td align="center" colspan="2">
                            <img src="Cap_Img.php"><br><br>
                            <input type="button" value="Refresh Image" onClick="window.location.href=window.location.href">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                                Please enter the string shown in the image.
                        </td>
                    </tr>
                        <td align="center">
                                <input name="number" type="text">
                        </td>
                    <tr>
                        <td align="center">
                                <input name="Submit" type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
