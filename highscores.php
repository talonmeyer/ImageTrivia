<?php
include('session.php');
?>

<html>

<body bgcolor = "#FFFFFF">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<head>
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div class="table-page">
   <div class="form">

      <p class="message" style="color:black; font-size:medium ">Board of Champions</p>

      <br> </br>

       table class="pure-table">
       <thead>
       <tr>
           <th>#</th>
           <th>Make</th>
           <th>Model</th>
           <th>Year</th>
       </tr>
       </thead>

       <tbody>
       <tr>
           <td>1</td>
           <td>Honda</td>
           <td>Accord</td>
           <td>2009</td>
       </tr>

       <tr>
           <td>2</td>
           <td>Toyota</td>
           <td>Camry</td>
           <td>2012</td>
       </tr>

       <tr>
           <td>3</td>
           <td>Hyundai</td>
           <td>Elantra</td>
           <td>2010</td>
       </tr>
       </tbody>
       </table>

       <br> </br>
       <br> </br>

      <form class="main" action = "main.php" method = "post">
         <button>Back</button>
      </form>
   </div>



</div>
</body>
</html>