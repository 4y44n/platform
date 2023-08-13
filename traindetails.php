<html>
<head>
<link rel="stylesheet" href="./form.css">
</head>
<body>
<div class="login">
<font color="white">
<h2><marquee behavior="scroll" direction="right">ENTER THE TRAIN DETAILS</marquee></h2>
<form method="post" action="train.php">  
<input type="text" name="trainno" placeholder="trainno" required="required" />
  
<input type="text" name="trainname" placeholder="trainname" required="required" />
  
<input type="text" name="source" placeholder="source" required="required" />
  
<input type="text" name="destination" placeholder="destination" required="required" />
  
<input type="text" name="arrivaltime" placeholder="arrivaltime" required="required" />
  
<input type="text" name="departuretime" placeholder="departuretime" required="required" />
</font>
        <button type="submit" class="btn btn-primary btn-block btn-large" name="submit">confirm</button>
    </form>
	
</div>
</body>
</html>