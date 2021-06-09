<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Issue Books</title>
    <style>
		#a{
			margin-left: 40%;
			
			opacity: 1.0;
			margin-right: 40%;
		}
		#k{
			color: red;
			font-size: 25px;
		}
		#c{
			background-image: url(issue.jfif);
			background-repeat: no-repeat;
			background-size: cover;
		}
		#d{
			margin-left: 400px;
			background-color: orange;
		}
		#f{
			color: blue;
		}
		#g{
			background-color: white;
		}
		#h{
			background-color: silver;
		}
	</style>
  </head>
  <body id="c">
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <form class="container-fluid justify-content-start">
    <button class="btn btn-outline-success me-2" type="button"><a  href="HomePage.php"><img src="back.jfif" height="35px" width="35px"></a></button>
  </form><br><br>
 
<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    Hello guys!<br>You can Issued a Books??<br>
    So Please Enter given Book Id or Book Name. 
  </div>
</div>
 <form method="POST" action="issue.php" >
 	<div>
 	<table border="5" id="d">
 		<tr>

 			<th>Book Id</th>
 			<td id="g">1</td>
 			<td id="h">2</td>
 			<td id="g">3</td>
 			<td id="h">4</td>
 			<td id="g">5</td>
 			<td id="h">6</td>
 		</tr>
 		<tr>
 			<th>Book Name</th>
 			<td id="g">Computer Design</td>
 			<td id="h">Web Technology</td>
 			<td id="g">.Net Technology</td>
 			<td id="h">Cyber Security</td>
 			<td id="g">Physics</td>
 			<td id="h">Maths</td>

 		</tr>
 	</table>
 </div><hr style="color:red; height:5px;">
 	<br><br>
 	<div id="a">
 		<fieldset>
 			<legend id="k"><b>Issue Books</b></legend>
 		<label id="f">Enter Book id</label><br><br>
 		<input type="name" name="id">
 		<br><br>
 		<label id="f">Enter Book name</label><br><br>
 		<input type="text" name="nam">
 		<br><br>
 		<label id="f">Date</label><br><br>
 		<input type="date" name="date">
 		<br><br>
 		<input type="submit" name="btn" value="Issue" style="background-color: cyan">
 		<input type="reset" name="resetbtn" value="reset" style="background-color: orange">
 		<br><br>
 		</fieldset>
 	</div>
 	
 </form>

  </body>
</html>