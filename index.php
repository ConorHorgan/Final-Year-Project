<?php
//index.php
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Project Registration Page for a SME</title>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
  <link rel="stylesheet" href="/International Phone Number/build/css/intlTelInput.css">
  <link rel="stylesheet" href="/International Phone Number/build/css/demo.css">
 </head>
 <body>
  <br />
  <div class="container">
   <div class="row">
    <h2 align="center">Register Project</h2>
     <br />
     <div class="col-md-6" style="margin:0 auto; float:none;">
      <span id="success_message"></span>
      <form method="post" id="programmer_form">
       <div class="form-group">
      <label>Project Name:</label> 
      <input type="text" name="projname" class="form-control" id="projname" required="required"  style="width: 300px;">
      </div>
      <div class="form-group">
      <label>Subject Matter Expert Name:</label> 
      <input type="text" class="form-control" required="required" id="smename" name="smename"style="width: 300px;">
    </div>
    <div class="form-group">
      <label>Subject Matter Expert's Employee ID</label> 
      <input type="text" class="form-control" id="smeemployID" name="smeemployID" required="required" style="width: 300px;" maxlength="8">
    </div>
    <div class="form-group">
      <label>Subject Matter Expert's Email:</label> 
      <input type="email" class="form-control" id="smeemail" required="required" name="smeemail"  style="width: 300px;">
    </div>
    <div class="form-group">
      <label>Subject Matter Expert's Phone Number:</label> 
      <input type="tel" id="smephone" class="form-control" required="required" name="smephone"  style="width: 300px;">
    </div>
     <div class="form-group">
      <label>Project Location:</label> 
      <input type="text" class="form-control" id="location" required="required" name="location"  style="width: 300px;">
    </div>
    <div class="form-group">
      <label>Ideal Start Date:</label> 
      <input type="text" class="form-control" id="startdate" required="required" name="startdate"  style="width: 300px;">
    </div>
    <div class="form-group">
      <label>Ideal End Date:</label> 
      <input type="text" class="form-control" id="enddate" required="required" name="enddate" style="width: 300px;">
    </div>
    <div class="form-group">
      <label>Estimate Number of Interns Needed:</label> 
      <select name="internsneeded" type="text" id="internsneeded" required="required" class="form-control"style="width: 300px;">
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
    </div>
     <div class="form-group">
      <label>Estimated Hours of Work Required Per Intern:</label> 
      <input type="text"  id="estimatehours" name="estimatehours" required="required" class="form-control" style="width: 300px;">
     </div>
    <div class="form-group">
      <label>Access to a Laptop Required for Project</label> 
      <select name="laptop" type="text" id="laptop" required="required" class="form-control"style="width: 300px;">
    <option value="Yes">Yes</option>
    <option value="Preferably">Preferably</option>
    <option value="No">No</option>
  </select>
    </div>
    <div class="form-group">
        <label>Skills Required</label>
        <input type="text" name="skill" id="skill" required="required" class="form-control" style="width: 300px;"/>
    </div>
    <div class="form-group">
      <label>Description:</label> 
       <textarea name="projdesc" id="projdesc" required="required" class="form-control" rows="10" placeholder="Please include a description of the duties of this project" cols="30"></textarea>
    </div>
       <div class="form-group">
        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>
  <script src="/International Phone Number/build/js/intlTelInput.js"></script>
<script>
/* global $ */
$( function() {
    var dateFormat = "yy-mm-dd",
      from = $( "#startdate" )
        .datepicker({
          dateFormat: "yy-mm-dd",
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2
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
      $time = strtotime('10/16/2003');
      $newformat = date('Y-m-d',$time);
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
