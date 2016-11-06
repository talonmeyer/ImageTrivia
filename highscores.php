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

       <div class="w3-responsive">
           <table class="w3-table w3-striped w3-bordered w3-border">
               <tr>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>Points</th>
                   <th>Points</th>

               </tr>
               <tr>
                   <td>Jill</td>
                   <td>Smith</td>
                   <td>50</td>
                   <td>50</td>

               </tr>
               <tr>
                   <td>Eve</td>
                   <td>Jackson</td>
                   <td>94</td>
                   <td>94</td>

               </tr>
               <tr>
                   <td>Adam</td>
                   <td>Johnson</td>
                   <td>67</td>
                   <td>67</td>

               </tr>
           </table>
       </div>

       <br> </br>
       <br> </br>

      <form class="main" action = "main.php" method = "post">
         <button>Back</button>
      </form>
   </div>



</div>
</body>
</html>