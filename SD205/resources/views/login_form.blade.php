<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset ('./styles/registration_form_style.css') }}">
    <link href=".styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('./styles/landing_page_style.css')}}">
    <title>Landing Page</title>
</head>
<body>

    
    <div class="container">
        <h2 class="he"><u>Login Form</u></h2>
        <br><br>
        <form action="{{ route('post.login') }}", method="POST">
            @csrf
            <div class="form-group">
              <b>Email Address</b>  <input type="email" name="email" id="email" placeholder="Enter email address"  required oninvalid="this.setCustomValidity('Please give valid format, like @yahoo.com or @gmail.com, etc,.')" onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
            <div class="form-group">
              <b>Password</b>  <input type="password" name="password" id="pwd" placeholder="Enter new password"title="Password should be of 6-10 length and should contain atleast one character and one number"></input>
              </div>
            <div class="form-group1">
                <button type="submit">Login</button>
            </div>
        </form>
          </div>
          {{-- pattern="(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z]).{6,10}"  --}}
     
 
    
   <script>
var password = document.getElementById("pwd")
  , confirm_password = document.getElementById("psw-repeat");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
