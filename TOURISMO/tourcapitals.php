<html>
<head>
<title>Search</title>
</head>
<style>
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 50%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
  margin-right:12px;
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
#t1{
	font-size:40px;
	color:grey;
	font-weight:bold;
}
#b1{
	font-size:20px;
	font-weight:bold;
	margin:3px 3px 3px 3px;
	
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
<div class="container">
<div class="mr-sm-2">
<div col="my-4">

		 
   <nav class="navbar navbar-dark bg-dark navbar-fixed-top" id="navbar-example">			
   <a class="navbar-brand" href="#" id="t1">Tourismo</a>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for State..">
<div id="google_translate_element"></div>
</nav>
<table id="myTable">
  <tr class="header">
    <th style="width:50%;">State</th>
    <th style="width:50%;">Capital</th>
  </tr>
  <tr>
    <td>Andhra Pradhesh	</td>
    <td>Hyderabad</td>
  </tr>
  <tr>
    <td>Arunachal Pradhesh</td>
    <td>Itanagar</td>
  </tr>
  <tr>
    <td>Assam</td>
    <td>Dispur</td>
  </tr>
  <tr>
    <td>Bihar</td>
    <td>Patna</td>
  </tr>
   <tr>
    <td>Chhattisgarh</td>
    <td>Raipur</td>
  </tr>
   <tr>
    <td>Goa</td>
    <td>Panaji</td>
  </tr>
   <tr>
    <td>Gujarat</td>
    <td>Gandhinagar</td>
  </tr>
   <tr>
    <td>Haryana</td>
    <td>Chandigarh</td>
  </tr>
   <tr>
    <td>Himachal Pradesh</td>
    <td>Shimla</td>
  </tr>
   <tr>
    <td>Jharkhand</td>
    <td>Ranchi</td>
  </tr>
   <tr>
    <td>Karnataka</td>
    <td>Bangalore</td>
  </tr>
   <tr>
    <td>Kerela</td>
    <td>Thiruvananthapuram</td>
  </tr>
   <tr>
    <td>Maharashtra</td>
    <td>Mumbai</td>
  </tr>
   <tr>
    <td>Meghalaya</td>
    <td>Shilong</td>
  </tr>
   <tr>
    <td>Mizoram</td>
    <td>Aizawl</td>
  </tr>
   <tr>
    <td>Nagaland</td>
    <td>Kohima</td>
  </tr>
   <tr>
    <td>Odhisha</td>
    <td>Bhubneshwar</td>
  </tr>
   <tr>
    <td>Punjab</td>
    <td>Chandigarh</td>
  </tr>
   <tr>
    <td>Rajasthan</td>
    <td>Jaipur</td>
  </tr>
   <tr>
    <td>Sikkim</td>
    <td>Gangtok</td>
  </tr>
   <tr>
    <td>Tamil Nadu</td>
    <td>Chennai</td>
  </tr>
   <tr>
    <td>Telangana</td>
    <td>Hyderabad</td>
  </tr>
   <tr>
    <td>Uttar Pradesh</td>
    <td>Lucknow</td>
  </tr>
   <tr>
    <td>Uttrakhand</td>
    <td>Gairsain</td>
  </tr>
   <tr>
    <td>West Bengal</td>
    <td>Kolkata</td>
  </tr>

</table>
</div>
</div>
<a href ="http://sakshiagrawal-com.stackstaging.com/tour1.php" id="b1" ><-Back</a>  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>
