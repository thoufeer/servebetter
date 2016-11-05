<?php

?>

<!DOCTYPE html>
<html>
<head><title>Service Tracker</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../fonts/font-awesome.min.css">
<link rel=stylesheet type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Serve Better</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="">Serve Better</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="content" style="padding-top:100px;padding-bottom:200px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="btn btn-primary" style="width:20%"><a href="http://alappuzha.nic.in/resources-file/citizenservices/form-of-certificates.pdf" target="_blank" style="color:white">Download Application Form</a></div><br/><br/><br/>
            </div>
            <div class="col-lg-8 col-lg-offset-2">
                <p style="font-size:18px">Please submit the filled form with prescribed documents to the village officer and then fill the fields below:<br/>(ദയവായി മുകളിൽ കൊടുത്ത അപേക്ഷ ഫോറം പൂരിപ്പിച്ച ശേഷം മേൽപറഞ്ഞ രേഖകളോടൊപ്പം വില്ലേജ് ഓഫീസർക്ക് സമർപ്പിക്കുക. ശേഷം താഴെക്കൊടുത്ത ബോക്സ് ടിക്ക് ചെയ്ത് "proceed" അമർത്തുക. 
)</p><br/><br/>
                <form action="../dashboard/user.php" method="post"><p style="font-size:18px"><input type="checkbox" required/>&nbsp;&nbsp;&nbsp;&nbsp;I have submitted the filled form attached with the prescribed documents and paid the prescribed fee to the village officer.</p>
                <br/><br/><button type="submit" style="padding:10px 15px" class="btn btn-success" style="padding:6px 0;font-size:18px">Proceed</button></form>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <h5>All Right Reserved</h5>
        </div>
    </div>
</div>




	


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>