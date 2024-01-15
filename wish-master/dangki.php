<html>
<html>
<head>
        <title>Đăng kí</title>
<meta charset="utf-8" http-equiv="content-type"/>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    </head>
</html>
</html>
    <!-- Page Content -->
<div class="container">
  <div class="col-md-4"> 
        <form name="register" class="form-horizontal" id="registration" 
                                onsubmit="return checkForm()" method='post' action='thuc_hien_dang_nhap.php'>
    		<fieldset>
    			<legend>Đăng nhập tài khoản</legend>
    			<div class="control-group">
    				<label class="control-label">Username:</label>
    				<div class="controls">
    					<input class="form-control" type="text" id="username" name="username">
    				</div>
    			</div>
    			<div class="control-group">
    				<label class="control-label">Password:</label>
    				<div class="controls">
    					<input class="form-control" type="text" id="password" name="password">
    				</div>
    			</div>

    			<div class="control-group">
    				<label class="control-label"></label>
    				<div class="controls">
    					<button  type="submit" class="btn btn-success" >Submit</button>
    				</div>
    			</div>
    		</fieldset>
    	</form>
    </div>
</div>

<script>
function checkForm()
{
     var username = document.forms['register']["username"].value;
     var password = document.forms['register']["password"].value;
     var confirmPassword = document.forms['register']["confirmPassword"].value;
     var email = document.forms['register']["email"].value;
     
     if(username == '')
     {
        alert('Bạn phải nhập đầy đủ thông tin người dùng');
        document.forms["register"]["username"].focus();
        return false;
     }
     else if(password == '')
     {
        alert('Bạn phải nhập mật khẩu');
        document.forms["register"]["password"].focus();
        return false;
     }
}
</script>