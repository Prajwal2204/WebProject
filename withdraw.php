<?php
    require "header.php";
?>    

<html>
<head> <title> PESU-Bank </title></head>
<style>
	.bg{
		background-color:white;
		height:100%;
		align-content: center;
		padding:0px;
		color:aliceblue;
		font-size:30;
		font-family:"Lato", sans-serif;
		}
	.cred {
		margin: auto;
        height: 50%;
  		width: 50%;
		padding: 10%;
        color: #17a2b8;
		font-size:30px;
		}	
	#head{

		text-align:center;
		align-content:center;
	}
</style>
<body class="bg">

		<div align="center" class="cred">
			<form align = "center" action="login.php" method ="POST">
				Amount to be withdrawn<br> <input type="number" name="With_amt"><br><br>
				<input type="submit" name = "withdraw" value="Withdraw">
			</form>
		</div>	
        <div class="help" align="right">
            
            
</body>
</html>		

<script type="text/javascript">
    document.getElementById("register").onclick = function () {
        location.href = "register.html";
    };
</script>

