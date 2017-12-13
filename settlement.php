<?php 
	include "functions.php";
?>
<!DOCTYPE HTML>
<html>

<head>
</head>

<body >
<script>

doSettlement=function(){
    document.getElementById("settle").style.display = "block";

}
confirmSettlement=function(){

    alert("are you sure ?");
}
</script>

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


<div  style="font-size: 25px;;background:red;color:white;margin-bottom: 20px;text-align: center">SETTLEMENT SUMMARY</div>



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
<form method="get" action="process_2.php">
<button type="button" onclick="doSettlement()" style="cursor:pointer">Do a settement Now!</button>
<div style="display:none" id="settle">
        <div>
            <d> Settled By </d>:
            <select name="by_name">
                <option value="Abdul">Abdul</option>
                <option value="Georgy">Georgy</option>
                <option value="Jinto">Jinto</option>
                <option value="Kiran">Gusu</option>>
                <option value="Sarath">Sarath</option>
                <option value="Paul">Paul</option>
            </select>
            <br>
            <d> Settled To</d>:
            <select name="to_name">
                <option value="Abdul">Abdul</option>
                <option value="Georgy">Georgy</option>
                <option value="Jinto">Jinto</option>
                <option value="Kiran">Gusu</option>
                <option value="Paul">Paul</option>
			<option value="Sarath">Sarath</option>
            </select>
            <br>
	   <d> Date </d>: <input type="date" name="date" value="<?php echo date("Y-m-d");?>" placeholder="0"><br>
       <d> Amount </d>: <input type="number" name="amount" placeholder="0"><br>
            <br>
   </div>



<input type="submit" onclick="confirmSettlement()" style="cursor:pointer">
</form>
</div>


</body>

</html>
