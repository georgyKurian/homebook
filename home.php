<?php
	require "authenticate.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
</script>
</head>
<?php 
	include "functions.php";
?>

<body >
<style>
d{
    min-width:100px;
    display: inline-block;
}


table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 100%;
    border-collapse: collapse;
}

table td, table th {
    border: 1px solid #98bf21;
}

table th {
    padding :0px 25px;
    background-color: #A7C942;
    color: #ffffff;
}

table tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
}

</style>

<script>


confirmSumbmit=function()
{

    var data = document.Myform;
    var name = data.name.value;
    var amt = data.amount.value;
    var descript = data.description.value;
    var date = data.date.value;
    var pass = data.password.value;

    if (name==null || name=="" ||amt==null || amt=="" ||descript==null || descript=="" ||date==null || date=="") {

        alert("Please fill all required fields..!!");
        return false;
     }

  if(confirm("Do you wish to update details?\n name :"+name+"\n Amount :"+amt+"\n date  :"+date))
    return true;
  else
     return false;
}


</script>

    <div style="font-size: 25px;;background:red;color:white;margin-bottom: 20px;text-align: center">
        HCL TECH FLAT 1
    </div>
  <!-- name="Myform"  -->
<form  action="process.php" method="post" name="Myform" onsubmit="return confirmSumbmit()" >
    <div  >
        <div>
            <d> Name </d>:
            <select name="name">
                <option value="Abdul">Abdul</option>
                <option value="Georgy">Georgy</option>
                <option value="Jinto">Jinto</option>
                <option value="Kiran">Gusu</option>>
                <option value="Sarath">Sarath</option>
                <option value="Paul">Paul</option>
            </select>
        </div >
        <div>
            <d>Amount       </d>: <input type="number" name="amount" placeholder="0"><br>
            <d>description   </d>: <input type="text" name="description" placeholder="Give a brief description"><br>
            <d>Date            </d>: <input type="date" name="date"><br>
        </div>

        <div class="authentication">
            <d>Enter the password</d>:  <input type="number" style="border: none;" name="password" placeholder="0"><br>
        </div>
        <div>
            <input style="cursor:pointer"  type="submit"  value="Submit"  >
        </div>
    </div>
</form>
<div>
<table id="settlement">
  <tr>
      <th>name  </th><th>Outstanding Amount</th>
  </tr>
  <tr>
      <td>Abdul  </td><td><?php sumUp("Abdul");?></td>
  </tr>
  <tr class="alt">
      <td>Georgy  </td><td><?php sumUp("Georgy");?></td>
  </tr>
    <tr>
      <td>Jinto </td><td><?php sumUp("Jinto");?></td>
  </tr>
  <tr class="alt">
      <td>Gusu  </td><td><?php sumUp("Kiran");?></td>
  </tr>
    <tr>
      <td>Paul  </td><td><?php sumUp("Paul");?></td>
  </tr>
  <tr class="alt">
      <td>Sarath  </td><td><?php sumUp("Sarath");?></td>
  </tr>

</table>
</div>




</body>
</html>
