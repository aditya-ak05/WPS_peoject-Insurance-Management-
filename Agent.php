<html>
<head>
<title>RegistrationForm</title>
</head>
<body>
<linkhref="registration.css"type="text/css"rel="stylesheet"/>
<linkhref="../style.css"type="text/css"rel="stylesheet"/>
<ul>
<listyle="float:right;"><ahref="../index.php">Backto
homepage</a></li>
</ul>
<h2>Agent</h2>
<formname="form1"action='modified.php'method='POST'
enctype="multipart/form-data">
<divclass="container">
<divclass="form_group">
<label>AgentCode:</label>
<inputtype="text"name="Agent_code"requiredpattern="[0
-9]{3}[A-Za-z]{3}[0-9]{3}"/>
</div>
<divclass="form_group">
<label>Name:</label>
<inputtype="text"name="Agent_Name"value=""required
/>
</div>
<divclass="form_group">
<label>DateofBirth: </label><inputtype="date"name=
"DOB"value=""required/>
</div>
<divclass="form_group">
<label>Address:</label>
<inputtype="text"name="Address"value=""required/>
</div>
<divclass="form_group">
<label>Pincode:</label>
<inputtype="text"name="Pincode"value=""required/>
</div>
<divclass="form_group">
<label>Branch:</label>
<inputtype="text"name="Branch"value=""required"/>
</div>
<divclass="form_group">
<label>ContactNumber:</label>
<inputtype="text"name="Contact_Number"value=""
requiredpattern="[0-9]{10}"/>
</div>
<divclass="form_group">
<inputtype="submit"value="submit"/>
</div>
<divclass="form_group">
<inputtype="reset"value="reset"/>
</div>
</div>
</form>
</body>
</html>
