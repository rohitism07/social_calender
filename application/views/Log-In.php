<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<title>Log In Form</title>
<link href="./assets/css/custom.css" rel="stylesheet">
<link href="./assets/css/bootstrap-datetimepicker.css">
<link href="./assets/css/bootstrap.css" rel="stylesheet">
</head>
 
<body style="background-image:url('./img/4.jpg');">
  <div class="container row"> 
    
  <!--Header-->
      <div class="panel-header">
        <p class="nav font16 col-xs-offset-1" ><br>SOCIAL CALENDAR<br></p><hr><br>
      </div>
  
      <div class="col-md-8 " style="text-align:center">
          <div style="margin-top:150px">
            <h2>Welcome to Social Calendar.</h2>
              Start a conversation, explore your interests, and be in the know.<br><br>
          </div>
      </div>
    

    <div class="col-md-4 well">
    
        <form name="user_form" class="form-horizontal"action="" method="post" onsubmit="formValidate()">
            <fieldset>
                <legend> 
                  <ul class="nav nav-tabs">
                  <li class="active" style="width:150px"><a class="a" href="#login" data-toggle="tab">Sign In</a></li>
                  <li class=""><a href="#create" data-toggle="tab">Create Account</a></li>
                </ul>
               </legend>

            <div id="myTabContent" class="tab-content panel-body ">
                
                <!-- div for Sign In part-->

                  <div class="tab-pane  active in" id="login">      
                
                <!--User Name-->    
                      <div class="form-group">
                          <label for="username" class="col-sm-2 control-label"></label>
                            <input type="text" class="form-control"  id="username" placeholder="User Name" name="user_name" onkeyup="nameValidate(this)" >
                              <span class="red font12" id="span_user_name" ></span> 
                      </div>

                <!--Password-->
                      <div class="form-group">
                         <label for="userpassword_signin" class="col-sm-2 control-label"></label>
                            <input type="password" class="form-control" id="userpassword" placeholder="Password" name="user_password_sign" onkeyup="passwordValidate(this)">
                            <span class="red font12" id="span_userpassword" ></span>
                      </div>
                      
                <!--CheckBox for Remember Me-->

                        <div class="form-group">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox">Remember Me
                              </label>
                            </div>
                       </div>

                <!--Link for Forgot Passwor-->
                    <div class="form-group">
                        <a class="a" href="forgot_password.html">Forgot Password?</a>
                    </div>
            
                <!--submit button for sign in-->
                    <div class="form-group">
                      <button type="submit"  class="btn btn-primary">Sign in</button>
                    </div>
                
                </div>
            
                
                <!--div for create account part-->
                <div class="tab-pane fade panel-body" id="create">
                
                <!--First Name-->
                      <div class="form-group">
                          <label for="firstname" class="col-sm-2 control-label"></label>
                            <input type="text" class="form-control"  id="firstname" name="first_name" placeholder="First name" onkeyup="nameValidate(this)" >
                            <span class="red font12" id="span_first_name" ></span>
                        </div> 

                <!--Middle Name-->
                     <div class="form-group"> 
                        <label for="middlename" class="col-sm-2 control-label"></label>
                          <input type="text" class="form-control" id="middlename" placeholder="Middle Name"name="middle_name"onkeyup="nameValidate(this)" >
                          <span class="red font12" id="span_middle_name"></span>
                    </div>
                
                <!--Last Name-->
                    <div class="form-group">
                      <label for="lastname" class="col-sm-2 control-label"></label>
                         <input type="text" class="form-control" name="last_name" id="lastname" placeholder="Last Name" onkeyup="nameValidate(this)" >
                         <span class="red font12" id="span_last_name" ></span>
                    </div>

                
                <!--Gender-->
                  <div class="form-group">
                    <div class="col-sm-offset-1">
                        <div class="radio">
                          <label for ="gender_male">
                            <input type="radio" name="gender_male" id="gender_male" value="option1" onclick ="check(this)">
                             Male</label>
                      </div>
                    
                      <div class="radio">
                        <label for="gender_female">
                          <input type="radio" name="gender_female" id="gender_female" value="option2" onclick="check(this)">
                            Female</label>
                    </div>
                  </div>
                </div>

                <!--Date Of Birth-->
                    <div class="form-group">
                      <label for="dateofbirth" class=" control-label"></label>
                        <input type="text"  id="dateofbirth" class="form-control"  data-provide="datepicker"  placeholder="Date Of Birth" style="width:200px" required>
                        <span class="red font12" id="span_dateofbirth" ></span>
                    </div>


                <!--Email Address-->
                  <div class="form-group">
                    <label for="user_email" class="col-sm-2 control-label"></label>
                      <input type="email" class="form-control" name="useremail" id="user_email" placeholder="Email" onkeyup="emailValidate(this)" >
                      <span class="red font12" id="span_email" ></span>
                  </div>

               
                <!--Password-->
                <div class="form-group">
                  <label for="userpassword_signup" class="col-sm-2 control-label"></label>
                     <input type="password" class="form-control" id="userpassword_signup" name="user_password_signup" placeholder="Password" onkeyup="passwordValidate(this)" >
                      <span class="red font12" id="span_userpassword_signup" ></span>
                </div>


                <!--Password Confirmation-->
                  <div class="form-group">
                  <label for="confirmpassword" class="col-sm-2 control-label"></label>
                     <input type="password" class="form-control" id="confirmpassword" name="confirm_password" placeholder="Confirm Password"onkeyup="passwordValidate(this)" >
                     <span class="font12" id="span_confirm_password" ></span>
                 </div>

                <!--Contact Number-->
                  <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label"></label>
                      <input type="text" class="form-control" id="contact" name="contact_no" placeholder="Mobile No."onkeyup="contactValidate(this)" >
                      <span class="red font12" id="span_contact" ></span>
                  </div>

                <br>
               <!--Submit button for Sign Up-->
                <div class="form-group">
                     <button type="submit" class="btn btn-info">Sign Up</button>   
               </div>

            </div>

        </div>
      </fieldset>
    </form>                
</div>

      <!--Footer-->
          <div class="pull-left col-xs-12 ">
              <br><br><br>
              <hr class="row">
                <ul class="list-inline"><br>
                    <li>About Us</li> |
                    <li>Contact Us</li> |
                    <li>Terms</li> |
                    <li>Privacy</li> 
                </ul>
          </div>
    </div>
</body>
<script src="./assets/js/validations.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<script src="./assets/js/bootstrap.js"></script>        
<script src="./assets/js/jquery-1.9.0.min.js"></script>
<script src="./assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
            
            $(document).ready(function () {
                
                $('#dateofbirth').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });

            
        </script>
</html>