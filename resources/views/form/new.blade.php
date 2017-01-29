<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  First Name: <input type="text" firstname="firstname" value="<?php echo $firstname;?>">
  <br><br>
  Last Name: <input type="text" lastname="name" value="<?php echo $lastname;?>">
  <br><br>
  Address1: <input type="text" address1="address1" value="<?php echo $address1;?>">
  <br><br>
  Address2 (apt / bldg etc): <input type="text" address2="address2" value="<?php echo $address2;?>">
  <br><br>
  City: <input type="text" city="city" value="<?php echo $city;?>">
  <br><br>
  State: <input type="text" state="state" value="<?php echo $state;?>">
  <br><br>
  Zip: <input type="text" zip="zip" value="<?php echo $zip;?>">
  <br><br>
  Contact Phone: <input type="text" contactphone="contactphone" value="<?php echo $contactemailaddressphone;?>">
  <br><br>
  Email Address: <input type="text" emailaddress="emailaddress" value="<?php echo $emailaddress;?>">
  <br><br>
  Company Information: <input type="text" companyinformation="companyinformation" value="<?php echo $companyinformation;?>">
  <br><br>
  Company City: <input type="text" companycity="companycity" value="<?php echo $companycity;?>">
  <br><br>
  Company State: <input type="text" companystate="companystate" value="<?php echo $companystate;?>">
  <br><br>
  Company Zip: <input type="text" companyzip="companyzip" value="<?php echo $companyzip;?>">
  <br><br>
  Company Phone Number: <input type="text" companyphonenumber="companyphonenumber" value="<?php echo $companyphonenumber;?>">
  <br><br>
  Invoice Attachment
  File Upload.
  - Only allow PDFs. (single or multiple)
  <br><br>
<input type="submit" name="submit" value="Submit">
</form>
