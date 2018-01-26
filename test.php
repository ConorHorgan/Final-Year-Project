<?php
//index.php
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>International Telephone Input</title>
    <link rel="stylesheet" href="/International Phone Number/build/css/intlTelInput.css">
  <link rel="stylesheet" href="/International Phone Number/build/css/demo.css">
</head>

<body>
  <h1>International Telephone Input</h1>
  <form id="test_form">
    <input id="smephone" type="tel">
    <button type="submit" onclick="return foo();">Submit</button>
  </form>

  <!-- Load jQuery from CDN so can run demo immediately -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="/International Phone Number/build/js/intlTelInput.js"></script>
  <script>
  /*global $*/
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
   function foo()
{
   var intlNumber = $("#smephone").intlTelInput("getNumber");
   alert(intlNumber);
   return true;
}
  </script>
</body>

</html>
