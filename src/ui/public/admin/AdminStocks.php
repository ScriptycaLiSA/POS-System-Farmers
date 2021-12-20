<!DOCTYPE html>
<html>
<head>
	<title>Admin Stocks</title>
	<?php include 'components/session.php' ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="adminstockscript.js"></script>
	<?php include 'components/head_content.php' ?>
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
.crud{
	position: absolute;
  left: 65%;
  top: 40%;
  width: 35%;
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
<?php include 'components/sidemenu.php' ?>

<div class="content-container">
<div>
  <div class="container-fluid">
   <h2>Stocks</h2>
      <form>
        <div class="form-group row">
          <label for="colFormLabel" id="pcode" name="pcode" class="col-sm-1 col-form-label">P.code:</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" placeholder="">
          </div>&nbsp;&nbsp;&nbsp;
					<label for="colFormLabel" id="name" name="name" class="col-sm-1 col-form-label">Name:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" placeholder="">
          </div>
          <label for="colFormLabel" id="date" name="date" class="col-sm-1 col-form-label">Date:</label>
          <div class="col-sm-2">
            <input type="date" class="form-control" placeholder="">
          </div>
        </div>
        <div class="form-group row">
           &nbsp;&nbsp;&nbsp;&nbsp;<label for="colFormLabel" id="addquan" name="Aquan" class=" col-form-label">Add Quantity:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="addquan" placeholder="">
          </div>
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <label for="colFormLabel" id="prodes" name="prodes" class="col-sm-2 col-form-label">Product Description:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" placeholder="">
          </div>
        </div>
    </form>

<table id="myTable">
      <thead><tr class="header">
        <th style="width:10%;">P.Code</th>
        <th style="width:10%;">Name</th>
        <th style="width:10%;">Quantity</th>
				<th style="width:10%;">Date</th>
				<th style="width:10%;">Description</th>
      </tr></thead>
			<tbody id="data">
		</tbody>
  </table>

<div class="crud">
  <center>
		<button type="submit" id="save" class="btn btn-success">Save</button>
    <button type="submit" id="update" class="btn btn-info">Update</button>
    <button type="submit" id="delete" class="btn btn-danger">Delete</button>
		<button type="submit" id="search" class="btn btn-success">Search</button>
		<button type="submit" id="display" class="btn btn-success">Display</button>
  </center>
  </div>
</div>

</body>
</html>
