<html>
<head>
<link rel="stylesheet" href="./form.css">
</head>
<body>
<div class="login"><font color="white">
<h2><marquee behavior="scroll" direction="right">ASSIGN PLATFORM</marquee></h2>
<form method="post" action="a.php"> 
      <input type="text" placeholder="TRAINNO" name="trainno"/>
	  <input type="text" placeholder="TRAINNAME" name="trainname"/>
	  <input type="text" placeholder="ARRIVALTIME" name="arrivaltime"/>
	  <select name="platformno">
  <option value="1">platform no:1 </option>
  <option value="2">platform no:2</option>
   <option value="3">platform no:3</option>
   <option value="4">platform no:4</option>
   <option value="5">platform no:5</option>
</select><br><br>
              <button type="submit" class="btn btn-primary btn-block btn-large" name="submit">ASSIGN</button>
	  
          </form>
       </font>  
  </div>
</body>
</html> 