<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $n = 1; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Dynamic Form Processing with PHP | Tech Stream</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
		<script type="text/javascript" src="js/script1.js"></script> 
		<style type="text/css">
		    body { padding: 10px;}

.clonedInput { padding: 10px; border-radius: 5px; background-color: #def; margin-bottom: 10px; }

.clonedInput div { margin: 5px; }
		</style>
    </head>
    <body>    
        <form action="process.php" class="register" method="POST">
            <h1>YouAreBUS Ticket Reservation</h1>
            <fieldset class="row2">
				<legend>Passenger Details</legend>
				<p> 
					<input type="button" value="Add Passenger" onClick="addRow('dataTable')" /> 
					<input type="button" value="Remove Passenger" onClick="deleteRow('dataTable')"  /> 
					<p>(All acions apply only to entries with check marked check boxes only.)</p>
				</p>
               <table id="dataTable" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
						<td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
						<td>
							<label>Task Name</label>
							<input type="text" required="required" name="BX_NAME[]">
						 </td>
						 <td>
						 <label for="BX_gender">Assigned Intern</label>
						  <select type="text" id="BX_gender" name="BX_gender<?php echo $n  ;$n = $n + 1;?>" required="required">
						      <option value="" disabled ></option>
                          <?php
                          $host = 'localhost';
                          $user = 'conorhorgan95';
                          $pass = '';
                          mysql_connect($host, $user, $pass);
                          mysql_select_db('intern_portal');
                        
                          $select=mysql_query("select InternName from AppliedProjects where ProjectID = '4' AND Finalized = 'YES' group by InternName");
                          while($row=mysql_fetch_array($select))
                          {
                           echo "<option>".$row['InternName']."</option>";
                          }
                          ?>
                         </select>
                         </td>
                         <td>
                             <label for="BX_birth[]"></label>
                             <select required="required" name="BX_birth[]">
                                 <option>ttt</option>
                                 <option>ffff</option>
                             </select>
                         </td>
						 <td>
							<label>Description</label>
							<input type="textarea" rows="4" cols="25" required="required" name="BX_age[]">
						 </td>
						 
							</p>
                    </tr>
                    </tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information</legend>
				<p>The identification details are required during journey. One of the passenger booked on the ticket should have any of the identity cards ( Passport / PAN Card / Driving License / Photo ID card issued by Central / State Govt / Student Identity Card with photograph) during the journey in original. </p>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row4">
                <legend>Terms and Mailing</legend>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>I want to receive personalized offers by your Service</label>
                </p>
				
				<div class="clear"></div>
            </fieldset>
			<input class="submit" type="submit" value="Confirm &raquo;" />
			<a class="submit" href="http://techstream.org/Web-Development/PHP/Dynamic-Form-Processing-with-PHP"/>Back to Techstream Article</a>
			
			<div class="clear"></div>
        </form>
        <form action="index1.php" class="b" method="POST">
        <div id="clonedInput1" class="clonedInput">
    <div>
        <label for="txtCategory" class="">Learning category <span class="requiredField">*</span></label>
        <select class="" name="txtCategory[]" id="category1">
            <option value="">Please select</option>
        </select>
    </div>
    <div>
        <label for="txtSubCategory" class="">Sub-category <span class="requiredField">*</span></label>
        <select class="" name="txtSubCategory[]" id="subcategory1">
            <option value="">Please select category</option>
        </select>
    </div>
    <div>
        <label for="txtSubSubCategory">Sub-sub-category <span class="requiredField">*</span></label>
        <select name="txtSubSubCategory[]" id="subsubcategory1">
            <option value="">Please select sub-category</option>
        </select>
    </div>
    <div class="actions">
        <button class="clone">Clone</button> 
        <button class="remove">Remove</button>
    </div>
</div>
		</form>
    </body>
	<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=9046834; 
var sc_invisible=1; 
var sc_security="ec55ba17"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="free hit
counter" href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/9046834/0/ec55ba17/1/"
alt="free hit counter"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</html>





