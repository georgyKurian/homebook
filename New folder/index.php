<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
</script>


</head>


<body>
<style>
d{
    min-width:100px;
    display: inline-block;
}

</style>

<script>
conformation=function(){
    alert("hai");

}

</script>
    <div style="background:red;color:white;height:30px;text-align:center">
        HCL TECH FLAT 1
    </div>
    <form action="process.php" method="get">
    <div style="top: 20px;position: relative;">
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
            <d>Enter the password</d>:  <input type="number" style="border: none;" value="password" placeholder="0"><br>
        </div>
        <div>
            <input style="cursor:pointer"  type="submit"  onclick="conformation()" value="Submit">
        </div>
    </div>
</form>

</body>
</html>