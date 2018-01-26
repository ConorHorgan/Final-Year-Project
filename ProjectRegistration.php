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
      <!--Scripts for the skills token field-->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
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
          <form method="post" id="programmer_form" class="form-style-9">
              <h1>Project Registration<span>Please fill out the details of a project that company intern(s) will be able to complete </br> All fields are required</span></h1>
    
              <div class="section"><span>1</span>Subject Matter Expert Details</div>
                    <ul>
                    <li>
                        <input type="text" required="required" id="smename" name="smename" class="field-style field-split align-left" placeholder="Name" />
                        <input type="email" id="smeemail" required="required" name="smeemail" class="field-style field-split align-right" placeholder="Email" />
                    </li>
                    <li>
                        <input type="tel" class="width:560px;" id="smephone" required="required" name="smephone" class=" field-style field-split align-left" placeholder="Phone Number" />
                        <input type="text" id="smeemployID" name="smeemployID" required="required" class="field-style field-split align-right" maxlength="11" placeholder="Employee ID Number" />
                    </li>
                    <div class="section"><span>2</span>Project Details</div>
                    <li>
                        <input type="text" name="projname" id="projname" required="required" class="field-style field-split align-left" placeholder="Project Name" />
                        <input type="text" id="location" required="required" name="location" class="field-style field-split align-right" placeholder="Project Location" />
                    </li>
                    <li>
                        <input type="text" id="startdate" required="required" name="startdate" class="field-style field-split align-left" placeholder="Ideal Project Start Date" />
                        <input type="text" id="enddate" required="required" name="enddate" class="field-style field-split align-right" placeholder="Ideal Project End Date" />
                    </li>
                    <div class="section"><span>3</span>Intern Requirements</div>
                    <li>
                        <select name="internsneeded" type="text" id="internsneeded" required="required" class="field-style field-split align-left" placeholder="Number of Interns Needed for Project">
                        <option value="" disabled selected>Estimate Number of Interns Needed</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                        <input type="number" id="estimatehours" name="estimatehours" required="required" class="field-style field-split align-right" placeholder="Estimated Hours of Work Required Per Intern" />
                    </li>
                    <li>
                        <select name="laptop" type="text" id="laptop" required="required" class="field-style field-split align-left">
                        <option value="" disabled selected>Laptop Required for Project?</option>
                        <option value="Yes">Yes</option>
                        <option value="Preferably">Preferably</option>
                        <option value="No">No</option>
                      </select>
                      </li>
                      <div class="section"><span>4</span>Additional Details</div>
                      <li>
                        <input type="text" name="skill" id="skill"  required="required" class="field-style field-full align-right" placeholder="Skills Required for This Project" />
                    </li>
                    <li>
                    <textarea name="projdesc" id="projdesc" required="required" class="field-style" placeholder="Please include a description of the duties of this project"></textarea>
                    </li>
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
                $( function() {
                    var dateFormat = "yy-mm-dd",
                      from = $( "#startdate" )
                        .datepicker({
                          dateFormat: "yy-mm-dd",
                          defaultDate: "+1w",
                          changeMonth: true,
                          numberOfMonths: 2,
                          minDate: -0
                        })
                        .on( "change", function() {
                          to.datepicker( "option", "minDate", getDate( this ) );
                        }),
                      to = $( "#enddate" ).datepicker({
                       dateFormat: "yy-mm-dd",
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 2
                      })
                      .on( "change", function() {
                        from.datepicker( "option", "maxDate", getDate( this ) );
                      });
                 
                    function getDate( element ) {
                      var date;
                      try {
                        date = $.datepicker.parseDate( dateFormat, element.value );
                      } catch( error ) {
                        date = null;
                      }
                 
                      return date;
                    }
                  } );
                  
                $(document).ready(function(){
                 
                 $('#skill').tokenfield({
                  autocomplete:{
                   source: ['PHP','Codeigniter','HTML','JQuery','Javascript','CSS','Laravel','CakePHP','Symfony','Yii 2','Phalcon','Zend','Slim','FuelPHP','PHPixie','Mysql'],
                   delay:100
                  },
                  showAutocompleteOnFocus: true
                 });
                 
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
                    
                //SOURCE: https://www.youtube.com/watch?v=j6OP4uvyAk8&t=134s
                 $('#programmer_form').on('submit', function(event){
                  event.preventDefault();
                   var intlNumber = $("#smephone").intlTelInput("getNumber");
                   document.getElementById("smephone").value = intlNumber;
                  var emailID = document.getElementById("smeemail").value;
                        var atpos = emailID.indexOf("@");
                        var dotpos = emailID.lastIndexOf(".");
                  if($.trim($('#projname').val()).length == 0)
                  {
                   alert("Please Enter Your Name");
                   return false;
                  }
                  else if($.trim($('#skill').val()).length == 0)
                  {
                   alert("Please Enter Atleast one Skill");
                   return false;
                  }
                  else if(atpos < 1 || ( dotpos - atpos < 2 ))
                         {
                            alert("Please enter correct email ID");
                            document.myForm.smeemail.focus() ;
                            return false;
                         }
                  else
                  {
                   var form_data = $(this).serialize();
                   $('#submit').attr("disabled","disabled");
                   $.ajax({
                    url:"insert.php",
                    method:"POST",
                    data:form_data,
                    beforeSend:function(){
                     $('#submit').val('Submitting...');
                    },
                    
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
                    $('#success_message').html('');
                   }, 5000);
                  }
                 });
                 
                });
                </script>
