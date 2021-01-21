<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <script src="js\bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="crazy.js"></script> -->
    <script type="text/javascript" src="jquery\jquery-3.5.1.js"></script>
    <script type="text/javascript">
$(document).ready(function()
  {
    $("#tab3").hide();
    $("#xend").hide();
//first table
    $("#goldx").click(function()
    {
        $("#xend").hide();
        $("#tab3").hide();
        $("#mat").show();
    });
//show second table
    $("#dessy").click(function()
    {
        $("#mat").hide();
        $("#tab3").hide();
        $("#xend").show();
    });
// 3rd table
$("#money").click(function()
    {
        $("#mat").hide();
        $("#xend").hide();
        $("#tab3").show();
    });
});
</script>
    <title>Document</title>
  <style>
  .center-table
{
  margin: 0 auto !important;
  float: none !important;
}
  </style>  
</head>
<body>
<!-- first button -->
<br><br>
<div class="text-center ">
<div class="row">
<div class="col-sm-3">
</div>
 <div class="col-sm-2">
 <button type="button" id="goldx" onclick='grape()' class="btn btn-dark text-danger mr-5 mb-3" ><b>1st Jan 2021</b>
 </button>
 </div>
 <div class="col-sm-2">
 <button type="button"id="dessy" class="btn btn-dark text-light mr-5 mb-3" ><b>2nd Jan 2021</b></button>
</div>
<div class="col-sm-2">
<button type="button" id="money" class="btn btn-dark text-warning mr-5 mb-3"><b>3rd jan 2021</b></button>
</div>
</div>
</div>

<br>

<!-- eend -->
<div id="tableOld" class="">
<table id="mat" class="table table-hover table-dark w-50 p-20  center-table" style="align:center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Kwesi</td>
      <td>Otto</td>
      <td>@20 years</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Thomas</td>
      <td>Muller</td>
      <td>21 Years</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Philip</td>
      <td>Quaye</td>
      <td>30 years</td>

    </tr>
  </tbody>
</table>
</div>
<!-- <script>
document.getElementById("table2");
table2.display = none;
</script> -->

<table id="xend" class="table table-hover table-dark w-50 p-20 text-center center-table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Teams</th>
      <th scope="col">Score</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Real Madrid Vs Atletico Madrid</td>
      <td>4 - 0</td>
      <td>Win</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>PSG vs Chelsea</td>
      <td>1 - 0</td>
      <td>Win</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Asante Kotoko vs Barcelona</td>
      <td> 0 - 21</td>
      <td>Win</td>

    </tr>
  </tbody>
</table>

<!-- 3rd table -->
<table id="tab3" class="table table-hover table-dark w-50 p-20 text-center center-table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Teams</th>
      <th scope="col">Score</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Chelsea VS Manchester United</td>
      <td>1 - 1</td>
      <td>Draw</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Juventus vs Bayern</td>
      <td>1 - 3</td>
      <td>Win</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Dortmund vs Liverpool</td>
      <td> 2 - 1</td>
      <td>Win</td>

    </tr>
  </tbody>
</table>
</div>
</div>
</body>

</html>