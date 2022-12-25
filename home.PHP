
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav { 
  overflow: hidden;
  background-color: DodgerBlue;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.topnav .search-container {
  float: right;
}



/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 5px;
  text-align: center;
}
</style>
</head>
<body>

<div class="header">
  <h1>TG Work space</h1>
  <p></p>
</div>

<div class="topnav">

  <a href="regestration.php"> Regestration</a>
  <a href="login.php"> login</a>
  <a href="home.php"> Home</a>
  
</div>

<div class="row">
  <div class="middle side">
  
    
   
</div>
  

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block
}


</style>
</head>
<body>

<div class="row">
  <div class="left">
    <h2>Explore the marketplace</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <ul id="myMenu">
      <b>
      <li><a href="page1.php">Find freelancher</a></li>
      <li><a href="page2.php">Higher freelancher </a></li>
      <li><a href="page3.php">post works</a></li>
      <li><a href="page4.php">Do payment</a></li>
</b>
    </ul>
  </div>
  
  
<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

</body>
</html>


<div class="footer">
  <p>trused by google </p>
</div>
  
</body>
</html>
