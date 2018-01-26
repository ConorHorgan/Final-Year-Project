<?php
//index.php
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Project Registration Page for a SME</title>
  
      <!--CSS for Registration Page (https://www.sanwebe.com/2014/08/css-html-forms-designs)-->
      <link rel="stylesheet" href="/Registration Page/RegistrationPage.css">
      <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
      <!--Generic JQuery Scripting -->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <!-- Bootstrap CSS-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
      <!--Scripts for phone number field-->
      <link rel="stylesheet" href="/International Phone Number/build/css/intlTelInput.css">
      
      
 </head>
     <body>
      <div class="container">
       <div class="row">
         <div class=>
          <span id="success_message"></span>
    
           <!--Form Design From (https://www.sanwebe.com/2014/08/css-html-forms-designs)-->
          <form method="post" id="intern-form" class="form-style-9">
              <h1>Subject Matter Expert Registration<span style="font:normal 16px 'Bitter', serif"> Please fill out the following details </br> All fields are required</span></h1>
    
              
                    <ul>
                    <li>
                        <input type="text" required="required" id="name" name="name" class="field-style field-split align-left" placeholder="First Name" />
                        <input type="text" required="required" id="lastname" name="lastname" class="field-style field-split align-right" placeholder="Last Name" />
                    </li>
                     <li>
                        <input type="password" required="required" id="password" name="password" class="field-style field-split align-left" placeholder="What is your password" />
                        <input type="password" id="retype" required="required" name="retype" class="field-style field-split align-right" placeholder="Re-Type Password " />
                    </li>
                    <li>
                        <input type="tel" class="width:560px;" id="phonenumber" req uired="required" name="phonenumber" class="field-style field-split align-left" placeholder="Phone Number" />
                        <input type="email" id="email" required="required" name="email" class="field-style field-split align-right" placeholder="Email" />
                    <li>
                    <input type="submit" name="submit" id="submit" value="Submit" />
                    </li>
                    </ul>
            </form>
                     </div>
                </div>  
            </div>
        </div>
     </body>
 </html>
                  <script src="/International Phone Number/build/js/intlTelInput.js"></script>
                <script>
                /* SOURCE: https://jqueryui.com/datepicker/ */
                /* global $ */
          
                $(document).ready(function(){
                 //https://github.com/jackocnr/intl-tel-input
                $("#phonenumber").intlTelInput({
                      // allowDropdown: false,
                      // autoHideDialCode: false,
                       autoPlaceholder: "off",
                      // dropdownContainer: "body",
                      // excludeCountries: ["us"],
                      // formatOnDisplay: false,
                       geoIpLookup: function(callback) {
                        $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                           var countryCode = (resp && resp.country) ? resp.country : "";
                           callback(countryCode);
                         });
                       },
                      // hiddenInput: "full_number",
                      // initialCountry: "auto",
                      nationalMode: true,
                      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                      // placeholderNumberType: "MOBILE",
                      preferredCountries: ['ie', 'us', 'gb'],
                      separateDialCode: false,
                      utilsScript: "/International Phone Number/build/js/utils.js"
                    });
                    
                //SOURCE: https://www.youtube.com/watch?v=j6OP4uvyAk8&t=134s
                 $('#intern-form').on('submit', function(event){
                  event.preventDefault();
                   var intlNumber = $("#phonenumber").intlTelInput("getNumber");
                   document.getElementById("phonenumber").value = intlNumber;
                  var emailID = document.getElementById("email").value;
                        var atpos = emailID.indexOf("@");
                        var dotpos = emailID.lastIndexOf(".");
                        var password = document.getElementById("password")
                        , confirm_password = document.getElementById("retype");

  if(password.value != confirm_password.value) {
    alert("Passwords Don't Match");
   return false;}
                    
                  else if(atpos < 1 || ( dotpos - atpos < 2 ))
                         {
                            alert("Please enter correct email ID");
                            document.myForm.email.focus() ;
                            return false;
                         }
                  else
                  {
                   var form_data = $(this).serialize();
                   $('#submit').attr("disabled","disabled");
                   $.ajax({
                    url:"SMEinsert.php",
                    method:"POST",
                    data:form_data,
                    beforeSend:function(){
                     $('#submit').val('Submitting...');
                    },
                    
                    success:function(data){
                     if(data != '')
                     {
                      
                      $('#name').val('');
                      $('#lastname').val('');
                      $('#email').val('');
                      $('#phonenumber').val('');
                      $('#password').val('');
                      $('#retype').val('');
                      $('#success_message').html(data);
                      $('#submit').attr("disabled", false);
                      $('#submit').val('Submit');
                     }
                    }
                   });
                   setInterval(function(){
                   alert("You have sucessfully registered");
                   }, 5000);
                  }
                 });
                });
                </script>
