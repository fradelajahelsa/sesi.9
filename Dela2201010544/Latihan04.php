<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>
<body>
    <h3>menghitung luas segitiga></h3>

<form>
   
 </div>
     <div>
    nilai alas
    <input type="number" id="txALAS">
<div>
</div>
     nilai tinggi
    <input type="number" id ="txTINGGI">
</div>
<div>
    nilai luas 
    <input type="number" id="txLUAS" disabled>

</div>
<div>
<button type="button" onclick="hLUAS()"> hitung luas</button>
</div>

</form>
<div id="hsl"></div>


<script>
    function hLUAS(){
        let a = document.getElementById("txALAS").value;
        let t = document.getElementById("txTINGGI").value;
        let L = a*t/2;
    }
 </script>   
</body>
</html>