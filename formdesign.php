<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <title>Form</title>
    <style>
        *{margin: 0;padding: 0;box-sizing: border-box;}
        body{
                font-family: Arial, sans-serif;

        }
        .container {
            width: 35%;
            margin: auto;
            padding-top: 15px;
        }

     .login {
        border: 1px solid black;
        width: 100%;
        height: 300px;
        background: url(image.jpg);
        color: #fff;
        border-radius: 20px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.75);
        background-size: cover;
        background-position: center;
        overflow: hidden;
     }
     form{
        display: block;
        box-sizing: border-box;
        padding: 52px 32px;
        width: 100%;
        backdrop-filter: brightness(40%);
        flex-direction: column;
        display: flex;
        gap: 5px;
     }
     h1{
        font-weight: 400;
        font-size: 25px;
        text-shadow: 0px 0px 2px rgba(0, 0, 0, 0.5);
     }
     label{
        color: rgba(255,255,255,0.8);
        text-transform: uppercase;
        font-size: 10px;
        letter-spacing: 2px;
        padding-left: 10px;
     }
     input{
    background: rgba(255,255,255,0.3);
    height: 30px;
    line-height: 20px;
    border-radius: 20px;
    padding: 0px 20px;
    border: none;
    /* margin-bottom: 20px; */
    color: #fff;
     }
     button{
        background: rgb(45,126,245);
        height: 30px;
        line-height: 14px;
        border-radius: 40px;
        border: none;
        margin: 10px 0px;
        box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
        color: #fff;
        font-size: 20px;
        text-transform: uppercase;
     }
     button:hover{
        color: black;
        background-color: green;
        cursor: pointer;
     }

        /* nav {
  width: 100%;
  background: red;
  padding: 10px 0px;
}a {
  text-decoration: none;
  color: black;
  font-size: 25px;
  padding: 10px 20px;

} */
 .error_required{
            color:red;
        }
 .error{
            border: 1px solid red;
        }
 .jqurybutton{
        padding: 0px 38px;
        font-size: 18px;
        margin-bottom: auto;
        }
       
.cross {
        position: absolute;
        right: 10px;
        padding: 0px 7px;
        font-size: 20px;
        top: 0;
        background-color:#fff;
        color:#000;
        }
        
        
            </style>
</head>
<body> 
<button class="jqurybutton" type="button">Form</button>
    <!-- <header>
        <nav>
            <a href="#">Home</a>
            <a href="#">Products</a>
            <a href="#">Service</a>
            <a href="#">Contact</a>
        </nav>
    </header>
     -->
  <div class="container">
     <div class="login">
            <form action="" method="post" id="form">
                <h1>LOG IN</h1>
                <label for="username">Username</label>
                <input type="username" id="username" name="username" >
                <div class="username_error error_required"></div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" >
                <div class="password_error error_required"></div>
                <button class="cross" type="button">X</button>
                <button type="submit" >Submit</button>
            </form>
        </div>
    </div>
</body>
<script>
    $('document').ready(function(){
    $('.jqurybutton').click(function(){
        // alert('hii');
        $('.container').show(2000);
    })
    $('.cross').click(function(){
        // alert('hii');
        $('.container').hide(1000);
    })
    $('#form').submit(function(e){
        username = $('input[name="username"]').val();
        password = $('input[name="password"]').val();
     
      
        isEmpty = false;
        if (username == '') {
            $('#username').addClass('error');
            $('.username_error').html('please enter your username')
            isEmpty = true;
        }
        if (password == '') {
            $('#password').addClass('error');
            $('.password_error').html('please enter your password ')
            isEmpty = true;
        }
       
        if (isEmpty) {
            event.preventDefault();
        };
    });
    $('input').change(function() {
        val = $(this).val();
        inputName = $(this).attr('name')
        if (val != '') {
            $(this).removeClass('error');
                $('.' + inputName + '_error').html('');
            
        }
        });
    });

</script>

</html>