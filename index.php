
<!DOCTYPE html>
<html>
<head><title>Service Tracker</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="fonts/font-awesome.min.css">
<link rel=stylesheet type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

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

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-part">
                    <h3 align="center"><i>Join us in the fight against corruption.<br/>The nation looks upon to you.</i></h3>
                    <br/><center><img src="images/hand.png" style="width:60%;border:1px dashed #000;border-radius:300px"></center>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-part">
                    <form class="form-horizontal" action="service_details/index.php" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-4">Aadhaar Number:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="email" placeholder="ആധാർ നമ്പർ ടൈപ്പ് ചെയ്യുക " required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Mobile Number:</label>
                            <div class="col-sm-8"> 
                                <input type="number" class="form-control" id="pwd" placeholder="മൊബൈൽ നമ്പർ ടൈപ്പ് ചെയ്യുക " required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4">Password:</label>
                            <div class="col-sm-8"> 
                                <input type="password" class="form-control" id="pwd" placeholder="പാസ്സ്‌വേർഡ് ടൈപ്പ് ചെയ്യുക " required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-4">District:</label>
                            <div class="col-sm-8"> 
                                <select class="form-control" id="district" required>
                                    <option value="">ജില്ല തിരഞ്ഞെടുക്കുക </option>
                                    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                    <option value="Kollam">Kollam</option>
                                    <option value="Pathanamthitta">Pathanamthitta</option>
                                    <option value="Alappuzha">Alappuzha</option>
                                    <option value="Kottayam">Kottayam</option>
                                    <option value="Idukki">Idukki</option>
                                    <option value="Ernakulam">Ernakulam</option>
                                    <option value="Thrissur">Thrissur</option>
                                    <option value="Palakkad">Palakkad</option>
                                    <option value="Malappuram">Malappuram</option>
                                    <option value="Kozhikode">Kozhikode</option>
                                    <option value="Wayanad">Wayanad</option>
                                    <option value="Kannur">Kannur</option>
                                    <option value="Kasaragod">Kasaragod</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-md btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="panel">
                <div class="col-lg-12">
                    <p>The Kerala State Right to Service Act, 2012 Bill provides two-tier appellate system to redress grievances. Section 5 of the Bill underlines the duty of the designated officer, who on receipt of an application for service, will provide it or reject the application within the time limit, counted from the day the application is received. In case of rejection, the officer should justify it in writing.The designated officer is liable to pay a fine not less than Rs. 500 and not more than Rs. 5,000 in case of breach of terms of the bill.</p>
                </div>
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