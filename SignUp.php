<!--https://www.codeseek.co/suez/login-registration-form-transition-RpNXOR-->
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login/Registration Form Transition</title>
   
   
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
 
      <link rel="stylesheet" href="/Registration Page/register.css">
 
   <!--Scripts for phone number field-->
      <link rel="stylesheet" href="/International Phone Number/build/css/intlTelInput.css">
</head>
 
<body>
  <p class="tip">Click on button in image container</p>
<div class="cont">
  <div class="form sign-in">
    <form method="post">
    <h2>Welcome back,</h2>
    <label>
      <span>Name</span>
      <input type="text" />
    </label>
    <label>
      <span>Email</span>
      <input type="email" />
    </label>
    <label>
      <span>Phone</span>
      <input type="text" />
    </label>
    <label>
      <span>Password</span>
      <input type="password" />
    </label>
    <label>
      <span>Re-Type Password</span>
      <input type="password" />
    </label>
    <button type="button" class="submit">Sign In</button>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>Time to feel like home,</h2>
      <label>
        <span>Name</span>
        <input type="text" />
      </label>
      <label>
        <span>Email</span>
        <input type="email" />
      </label>
      <label>
        <span>Phone Number</span>
        <input type="tel" name="smephone" />
      </label>
      <label>
        <span>Location</span>
        <input type="text" />
      </label>
      <label>
        <span>College Major</span>
        <input type="text" />
      </label>
      <label>
        <span>Manager Email</span>
        <input type="password" />
      </label>
      <label>
        <span>End Date</span>
        <input type="text" />
      </label>
      <label>
        <span>Skills</span>
        <input type="text" />
      </label>
      <label>
        <span>Interests</span>
        <input type="text" />
      </label>
      <label>
        <span>Bio</span>
        <input type="text" />
      </label>
      <select name="laptop" type="text" id="laptop" required="required" class="field-style field-split align-left">
                        <option value="" disabled selected>Laptop Required for Project?</option>
                        <option value="Yes">Yes</option>
                        <option value="Preferably">Preferably</option>
                        <option value="No">No</option>
       <label>
        <span>Password</span>
        <input type="password" />
      </label>
       <label>
        <span>Re-Type Password</span>
        <input type="password" />
      </label>
      <button type="button" class="submit">Sign Up</button>
     
    </div>
  </div>
</div>
</form>
   
    <script>/* Downloaded from https://www.codeseek.co/ */
document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
})
                /* global $ */
                //https://github.com/jackocnr/intl-tel-input
                $("#smephone").intlTelInput({
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
                     success:function(data){
                     if(data != '')
                     {
                      
                      $('#projname').val('');
                      $('#smename').val('');
                      $('#smeemployID').val('');
                      $('#smeemail').val('');
                      $('#smephone').val('');
                      $('#location').val('');
                      $('#startdate').val('');
                      $('#enddate').val('');
                      $('#internsneeded').val('');
                      $('#estimatehours').val('');
                      $('#skill').tokenfield('setTokens',[]);
                      $('#projdesc').val('');
                      $('#success_message').html(data);
                      $('#submit').attr("disabled", false);
                      $('#submit').val('Submit');
                     }
                    }
                   });
                   setInterval(function(){
                    alert("Sucessfully Registered");
                   }, 5000);
                  }
                 });
                 
                });
                    </script>
 
</body>
</html>