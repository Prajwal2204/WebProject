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
        color: #50394c;
		font-size:30px;
		}	
	#head{

		text-align:center;
		align-content:center;
	}

	.foot{
          padding-top: 5%;
      } 
</style>		
<body class="bg">


		<div align="center" class="cred">
			<form align = "center" action="login.php" method ="POST">
				Don't worry.. Your money is safe with us..<br><br>
				Amount to be deposited<br> <input type="number" name="Dep_amt"><br><br>
				<input type="submit" name = "deposit" value="Deposit">
			</form>
		</div>
		<div align="right" class="foot">
        <h4>In case of any trouble, feel free to contact us:</h4>
        <h4>Call us: +91 987654321</h4>
        <h4>Mail us: pesubank@gmail.com</h4>
    </div>		
</body>
</html>		

<script type="text/javascript">
    document.getElementById("register").onclick = function () {
        location.href = "register.html";
    };
</script>

