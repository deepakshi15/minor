
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <nav id="navbar">
        <div id="logo">
          <img src="img/Safar logo.png" alt="SAFAR-Travelling">
        </div>
        <ul>
          <li class="item"><a href="#bg-video">Home</a></li>
          <li class="item"><a href="#">Explore</a></li>
          <li class="item"><a href="#ph">Packages</a></li>
          <li class="item"><a href="#">About us</a></li>
          <li class="item"><a href="#contact-container">Contact us</a></li>
        </ul>
        <div id="btn-grp">
          <a href="login.php" target="_blank">LOGIN</a>
          <a href="Signup.php" target="_blank">SIGN UP</a>
        </div>
      </nav> -->
    <div class="container">
        <h1>LOGIN</h1>
        <form action="" id="login-form">
            <div class="form-grp">
              <label for="" class="control-label">Username</label>
                <input type="text" name="username"  placeholder="Enter Your Email ID" required>
            </div>
            <div class="form-grp">
                <input type="password" name="password"  placeholder="Enter Your Password" required>
            </div>
            <button class="btn">Login</button>
            <!-- <a href="forget.php">Forgot Password</a> -->
            <hr>
            <!-- <a href="Sign_up.php" id="signup"><button type="button" class="btn" id="signup btn">Sign Up</button></a> -->
        </form>
    </div>
    <script>
    $(function(){
        $('#login-form').submit(function(e){
            e.preventDefault();
            start_loader()
            if($('.err-msg').length > 0)
                $('.err-msg').remove();
            $.ajax({
                url:_base_url_+"classes/Login.php?f=login_user",
                method:"POST",
                data:$(this).serialize(),
                dataType:"json",
                error:err=>{
                    console.log(err)
                    alert_toast("an error occured",'error')
                    end_loader()
                },
                success:function(resp){
                    if(typeof resp == 'object' && resp.status == 'success'){
                        alert_toast("Login Successfully",'success')
                        setTimeout(function(){
                            location.reload()
                        },2000)
                    }else if(resp.status == 'incorrect'){
                        var _err_el = $('<div>')
                            _err_el.addClass("alert alert-danger err-msg").text("Incorrect Credentials.")
                        $('#login-form').prepend(_err_el)
                        end_loader()
                        
                    }else{
                        console.log(resp)
                        alert_toast("an error occured",'error')
                        end_loader()
                    }
                }
            })
        })
    })
</script>