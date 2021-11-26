<!DOCTYPE html>
<html>
<head>
	<title>Admin Stocks</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
.poslogo{
	width: 50px;
	border-radius: 20px;
}
.navbar{
  top: 0;
  width: 100%;
  position: relative;
}
.sidebar-container {
  position: absolute;
  width: 220px;
  height: 100%;
  left: 0;
  overflow-x: hidden;
  overflow-y: auto;
  background: #78B7F1;
  color: #fff;
}

.content-container {
  padding-top: 20px;
}

.sidebar-logo {
  padding: 10px 15px 10px 30px;
  font-size: 20px;
  background-color: #78B7F1;
}

.sidebar-navigation {
  padding: 0;
  margin: 0;
  list-style-type: none;
  position: relative;
}

.sidebar-navigation li {
  background-color: transparent;
  position: relative;
  display: inline-block;
  width: 100%;
  line-height: 20px;
}

.sidebar-navigation li a {
  padding: 10px 15px 10px 30px;
  display: block;
  color: #fff;
}

.sidebar-navigation li .fa {
  margin-right: 10px;
}

.sidebar-navigation li a:active,
.sidebar-navigation li a:hover,
.sidebar-navigation li a:focus {
  text-decoration: none;
  outline: none;
}

.sidebar-navigation li::before {
  background-color: #2574A9;
  position: absolute;
  content: '';
  height: 100%;
  left: 0;
  top: 0;
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 3px;
  z-index: -1;
}

.sidebar-navigation li:hover::before {
  width: 100%;
}

.sidebar-navigation .header {
  font-size: 12px;
  text-transform: uppercase;
  background-color: #5BADFA;
  padding: 10px 15px 10px 30px;
}

.sidebar-navigation .header::before {
  background-color: transparent;
}

.content-container {
  padding-left: 220px;
}
.chr1{
	width: 800px;
	height: 200px;
}
.card-text{
	color: white;
}

#myInput {
  background-image: url('css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 12px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 50%;
  border: 1px solid #ddd;
  font-size: 12px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
.divpps{
  position: absolute;
  left: 60%;
  top: 20%;
  width: 38%;
}
.fsize{
  font-size: 13px;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}

.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
.buttp{
  position: relative;
  top: 50px;
}
</style>
<body>
	<!--nav main-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><img class="poslogo" src="img/POSlogo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Farmers Gate <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-success my-2 my-sm-0" type="submit">
      <i class="fa fa-sign-out" aria-hidden="true"></i>
      Log out</button>
    </form>
  </div>
  <!---->
</nav>
	<!--nav main end-->
<div class="sidebar-container">
  <div class="sidebar-logo">
  	<center>
  		<i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>
  		<br>
  		    Admin
  	</center>
  </div>
  <ul class="sidebar-navigation">
    <li class="header">Navigation</li>
    <li>
      <a href="AdminHomeDash.html">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
      </a>
    </li>
    <li>
      <a href="AdminEmployees.html">
        <i class="fa fa-user-circle-o" aria-hidden="true"></i> Employees
      </a>
    </li>
    <li>
      <a href="AdminMember.html">
        <i class="fa fa-users" aria-hidden="true"></i> Members
      </a>
    </li>
    <li>
      <a href="AdminCategory.html">
        <i class="fa fa-server" aria-hidden="true"></i> Category
      </a>
    </li>
    <li>
      <a href="AdminProducts.html">
        <i class="fa fa-shopping-bag" aria-hidden="true"></i> Products
      </a>
    </li>
    <li>
      <a href="AdminStocks.html">
        <i class="fa fa-archive" aria-hidden="true"></i> Stocks
      </a>
    </li>
    <li>
      <a href="AdminVouchers.html">
        <i class="fa fa-tags" aria-hidden="true"></i> Vouchers
      </a>
    </li>
    <li>
      <a href="AdminSaleReport.html">
        <i class="fa fa-line-chart" aria-hidden="true"></i> Sales Report
      </a>
    </li>
    <li>
      <a href="AdminAccRecievable.html">
        <i class="fa fa-credit-card" aria-hidden="true"></i> Account Recievable
      </a>
    </li>
    <!-- End can
    <li class="header">Another Menu</li>
    <li>
      <a href="#">
        <i class="fa fa-users" aria-hidden="true"></i> Friends
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-cog" aria-hidden="true"></i> Settings
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Information
      </a>
    </li>
	-->
  </ul>
</div>

<div class="content-container">
<div>
  <div class="container-fluid">
   <h2>Stocks</h2>
      <form>
        <div class="form-group row">
          &nbsp;<label for="colFormLabel" class=" col-form-label">Search:</label>
          <div class="col-sm-4">
            <input type="text"id="myInput" name="myInput" class="form-control" id="colFormLabel" placeholder="">
          </div>
          <button type="submit" id="search" class="btn btn-success">Search</button>&nbsp; &nbsp;
          &nbsp; &nbsp;
          <label for="colFormLabel" id="Pcode" name="Pcode" class="col-sm-1 col-form-label">P.code:</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" placeholder="">
          </div>
          <label for="colFormLabel" id="date" name="date" class="col-sm-1 col-form-label">Date:</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" placeholder="">
          </div>
        </div>
        <div class="form-group row">
           &nbsp;<label for="colFormLabel" id="Aquan" name="Aquan" class=" col-form-label">Add Quantity:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="colFormLabel" placeholder="">
          </div>
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <label for="colFormLabel" id="proDes" name="proDes" class="col-sm-2 col-form-label">Product Description:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" placeholder="">
          </div>
        </div>
    </form>

    <div class="row">
  <div class="column">
    <table>
      <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Quantity</th>
      </tr>
      <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td>94</td>
      </tr>
      <tr>
        <td>Adam</td>
        <td>Johnson</td>
        <td>67</td>
      </tr>
    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Quantity</th>
      </tr>
      <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td>94</td>
      </tr>
      <tr>
        <td>Adam</td>
        <td>Johnson</td>
        <td>67</td>
      </tr>
    </table>
  </div>
</div>

<div class="form-inline buttp">
  <br><br><br><br>
  <center>
    <button type="submit" id="addSto" class="btn btn-success">Add Stock</button>&nbsp;
    <button type="submit" id="update" class="btn btn-info">Update</button>&nbsp;
    <button type="submit" id="delete" class="btn btn-danger">Delete</button>&nbsp;
    <button type="submit" id="save" class="btn btn-success">Save</button>
  </center>
  </div>
    <!-- Main component for a primary marketing message or call to action -->
    <!--trial
    <div class="jumbotron">
      <h1>Navbar example</h1>
      <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
      <p>To see the difference between static and fixed top navbars, just scroll.</p>
      <p>
        <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
      </p>
    </div>
    -->

  </div>
</div>

</body>
</html>
