

<style>
.loader {
    margin: auto;
    margin-top:20%;
    width: 50%;
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    width: 120px;
    height: 120px;
    -webkit-animation: spin 2s linear infinite; /* Safari */
    animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>


<div class="loader"></div>

<script>
    setTimeout("destroy",5000);
    window.location.href = "login.html";
    </script>

<?php
session_start();
function destroy() {
    session_destroy();
    echo "<h1 align = 'center' style = 'margin:2%'><b>LOGGING YOU OUT...</b></h1>";

  }

?>