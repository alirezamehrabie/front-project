<!DOCTYPE html>
<html lang="fa">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addUser_style.css" type="text/css">
	<link rel="icon" type="image/x-icon" href="assets/images/upload/favicon.ico">
	<title>ثبت نام | کاربران فروشگاه</title>
    <!--Clear inputs with Button -->
    <script type="text/javascript">
        function myFunction() 
        {
            document.getElementById("myForm").reset();
        }
     </script>
</head>
	
	
<body>
    <div class="container-main">
		
		<div class="text-header">
			<h1>فرم ثبت نام کاربران</h1>
			<h3>سایت فروشگاه لوازم جانبی کامپیوتر و لپ تاپ <span>ونوس</span></h3>
		</div>
		
		
            <form action="" method="post" id="myForm" autocomplete="off">
				<div class="container">
					
			
					<div class="col">
						<label for="username_user">نام کاربری <small id="note-username">(فقط کاراکتر انگلیسی)</small></label>
						<input class="inputs" type="text" id="EnglishName" name="username_user" autocomplete="off" readonly
							   onFocus="this.removeAttribute('readonly');"
							   onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)" required>
					
						<label for="fullname_user">نام و نام خانوادگی</label>
						<input required type="text" id="fullname_user" name="fullname_user">
					</div>
				
				
					<div class="col">
						<label for="password_user">رمز عبور <small>(حداکثر 8 کاراکتر)</small></label>
						<input required type="password" id="password_user" name="password_user" autocomplete="off" onKeyDown="if(this.value.length==8) return false;">

						<label for="phone_user">تلفن همراه</label>
						<input required type="number" id="phone_user" name="phone_user" onKeyDown="if(this.value.length==11) return false;"/>
					</div>
				
					
					<div class="col">
						<label for="role_user">حالت کاربر <small>(قابل دسترسی فقط برای مدیران)</small><br><small>(ورود به پنل کاربری برای مشخص شدن هویت)</small></label>
						<div class="state"><input required type="radio" name="role_user" value="1" <?php echo $stateInput ?> /><span>مدیر</span></div>
						<div class="state"><input type="radio" name="role_user" value="2"><span>کاربر <small>(مهمان)</small></span></div>
					</div>
						
					<div class="col btns">
						<a href=""><button type="submit" name="submit" id="mybtn" >تکمیل ثبت نام</button></a>
						<a href=""><button type="button" onclick="myFunction()" >پاک سازی فرم</button></a>
						<a href="loginPanel_controller.php"><button type="button"  >ورود به پنل کاربری</button></a>
					</div>
					
				</div>
			
				
			</form>
		</div>
        
   
	
</body>
</html>