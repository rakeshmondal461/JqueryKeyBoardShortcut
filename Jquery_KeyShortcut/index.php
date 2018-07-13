<html>
<head>
<script type="text/javascript" src="shortcut.js"></script>
<script type="text/javascript">
function add1()
{
	alert("Entering Function Add1.");
}

function add2()
{
	alert("Test Add2");
}

 shortcut.add("enter", function() {
        add1();
			
    });
	
	shortcut.add("alt+m", function() {
        add2();
    });
</script>
</head>
<body>
<input type="button" id="b1" name="b1" value=" Add " onclick="add1()"
</body>
</html>