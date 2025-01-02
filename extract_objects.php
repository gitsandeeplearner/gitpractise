<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Extract and Objects</title>
</head>
<body>
	<form >
		<div>
			<label>Firstname:</label>
			<input type="text" name="fname" value="">
		</div>
		<div>
			<label>Lastname:</label>
			<input type="text" name="lname" value="">
		</div>
		<div>
			<input type="submit" name="submit" id="submit" value="Extract">
		</div>

	</form>
	<div id="showdata"></div>
</body>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">


$(document).ready(function(){	
	
	let emp = {name:"Ravi",cast:"shankar",age:31,status:"married"};
	
	// Adding new property
	emp.work = "private";
	emp['full name'] = "Ravi Shankar";

	console.log(emp);
	//document.write(emp);	// This will print the output in the file and will stop the further execution.  

	$("#submit").click(function(e){
		e.preventDefault();
		
		$.ajax({
			url:"extractvalues.php",
			type:"post",
			data:emp,
			success:function(data){
				$("#showdata").text(data);
			}
		});
	});
});

	// Adding new property
	//emp.work = "private";
	//emp.behaviour = "best friend";
	//emp['full name'] = "Ravi Shankar";
	//emp.address = "jugial";
	
	// Modify property
	//emp.name = "Pandit";
	
	// Delete property
	//delete emp.address;

	//console.log(emp);
	//document.write(emp['full name']);
</script>
</html>