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
        <h2 class="he"><u>Registration Form</u></h2>
        <br><br>
        <form action="test1.php", method="POST">
            <div class="form-group">
             <b>First Name</b>   <input type="text" name="fname" id="fname" required placeholder="Enter first name" pattern=".{2,25}"  oninvalid="this.setCustomValidity('Length of first name must be at least 2 characters and not exceed 25 characters')" onchange="try{setCustomValidity('')}catch(e){}"></input>
             </div>
            <div class="form-group">
             <b>Last Name</b>   <input type="text" name="lname" id="lname"  required placeholder="Enter last name" pattern=".{2,25}"  oninvalid="this.setCustomValidity('Length of last name must be at least 2 characters and not exceed 25 characters.')" onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
            <div class="form-group">
              <b>Email Address</b>  <input type="email" name="email" id="email" placeholder="Enter email address"  required oninvalid="this.setCustomValidity('Please give valid format, like @yahoo.com or @gmail.com, etc,.')" onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
           <div class="form-group">
              <b> Address</b>  <input type="text" placeholder="Street No./City"  required oninvalid="this.setCustomValidity('Please give valid format, Street No./City.')" onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
            <div class="form-group">
              <b>Password</b>  <input type="password" name="pwd" id="pwd" placeholder="Enter new password" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z]).{6,10}" title="Password should be of 6-10 length and should contain atleast one character and one number"></input>
              </div>
             <div class="form-group">
               <b>Confirm Password</b> <input type="password" name="psw-repeat" id="psw-repeat" placeholder="Repeat your password" required>
            </div>
            <div class="form-group0">
            <b>Date Of Birth</b> 
            <input type="date" id="birthday" name="birthday" min="1900-01-01" max="2010-12-31" >
            </div>
            <div class="form-group1">
                <button type="submit">Submit</button>
            </div>
        </form>
          </div>
        
     
 
    
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
