<?php
include"connection.php";
if(is_numeric($_GET['Policy_Num'])){
$sql="select*frompolicy_datawherePolicy_Num='".$_GET['Policy_Num']."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($result);
$sql1="select*fromcustomerwhereCustomer_Num=$row
->Customer_Num";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_object($result1);
$sql2="select*fromagentwhereAgent_code='$row->Agent_code'";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_object($result2);
$sql3="select*frompremiumwherePolicy_Num=$row->Policy_Num";
$result3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_object($result3);
}
?>
<html>
<head>
<title>PolicyInformation</title>
<linkhref="style.css"type="text/css"rel="stylesheet"/>
</head>
<body>
<linkhref="policy/registration.css"type="text/css"rel=
"stylesheet"/>
<ul>
<li><ahref="policy/modified1.php">BacktoPolicy
datas</a></li>
<listyle="float:right;"><ahref="index.php">Backto
homepage</a></li>
</ul>
<center>
<h1>PolicyData</h1>
<!--width="50%"border="1"cellspacing="1"cellpadding=
"3"align="center"-->
<tablewidth="90%"height="80%"border="0"cellspacing="1"
cellpadding="3"align="center">
<trvalign="top"align="center">
<td>PolicyNumber:<?phpecho"$row->Policy_Num";?></td>
<td>AgentCode:<?phpecho"$row2
->Agent_code";?></td>
<td>CustomerNumber:<?phpecho"$row1
->Customer_Num";?></td>
<td>CustomerName:<?phpecho"$row1
->First_Name$row1->Middle_Name$row1->Last_Name";?>
</tr>
<!--DOCProductSum_AssuredPay_PeriodIns_Period-
->
<trvalign="top"align="center">
<td>DOC:<?phpecho"$row->DOC";?></td>
<td>Product:<?phpecho"$row
->Product";?></td>
<td>SumAssured:<?phpecho"$row
->Sum_Assured";?>Rs.</td>
<td>PaymentPeriod:<?phpecho"$row
->Pay_Period";?>Yrs.</td>
<td>InsurancePeriod:<?phpecho"$row
->Ins_Period";?>Yrs.</td>
</tr>
<trvalign="top"align="center">
<td>MaritalStatus:<?phpif($row1
->Marital_status=='M'){echo"Married";}else{echo"UnMarried";}?></td>
<td>Spouse:<?phpecho"$row1
->Spouse";?></td>
</tr>
<trvalign="top"align="center">
<td>Address:<?phpecho"$row1
->Address";?></td>
<td>PIN:<?phpecho"$row1->Pincode";?>
<td>Contact:<?phpecho"$row1
->Contact_Number";?></td>
</tr>
<trvalign="top"align="center">
<td>Mother:<?phpecho"$row1
->Mother_Name";?>[<?phpif($row1->Mother_Status=='D'){echo"Dead";}
else{echo"Alive";}?>]</td>
<td>Father:<?phpecho"$row1
->Father_Name";?>[<?phpif($row1->Father_Status=='D'){echo"Dead";}
else{echo"Alive";}?>]</td>
</tr>
</table>
</center>
</body>
</html>