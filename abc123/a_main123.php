<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}


.header {
  background-color: #f1f1f1;
  padding: 5px;
  text-align: center;
  font-size: 35px;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
  }

</style>
</head>
<body>



<div class="header">
  <h2>Serendib Institute Of Technology</h2>
</div>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>


<div class="row">
  <div class="column side" style="background-color:#aaa;">Column</div>
  
  <div class="column middle" style="background-color:#bbb;">

  	

  </div>
  
  <div class="column side" style="background-color:#ccc;">Column</div>
</div>

<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>
