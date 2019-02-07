<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

 <form id="resetPassword" name="resetPassword" method="post" action="<?php echo site_url('controller/ForgotPass');?>" onsubmit ='return validate()'>
                    <table class="table table-bordered table-hover table-striped">
                        <tbody>
                        <tr>
                            <td>Enter Email: </td>
                            <td>
                                <input type="email" name="email" id="email" style="width:250px" required>
                            </td>
                            <td><input type = "submit" value="submit" class="button"></td>
                        </tr>

                        </tbody>               </table></form>


</body>
</html>
