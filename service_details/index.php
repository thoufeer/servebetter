<!DOCTYPE html>
<html>
<head><title>Details - Service Tracker</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../fonts/font-awesome.min.css">
<link rel=stylesheet type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">

<script>
        function ShowHideSubCat () {
            var mainCombo = document.getElementById ("ad_dv");
            var subCombo = document.getElementById ("region");
            var subComb = document.getElementById ("serv");
            subCombo.style.display = (mainCombo.value == 'village') ? '' : 'none';
            subComb.style.display = (mainCombo.value == 'village') ? '' : 'none';
        }

        function admSelectCheck(nameSelect)
{
    console.log(nameSelect);
    if(nameSelect){
        admOptionValue = document.getElementById("incCert").value;
        if(admOptionValue == nameSelect.value){
            document.getElementById("rer").style.display = "block";
        }
        else{
            document.getElementById("rer").style.display = "none";
        }
    }
    else{
        document.getElementById("rer").style.display = "none";
    }
}

</script>

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

<div class="content" style="padding-bottom:450px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="right-part">
                    <form method="post" class="form-inline" action="submit.php">
                        <div class="form-group">
                            <label class="control-label col-lg-4">Administrative Division:</label>
                            <div class="col-lg-8"> 
                                <select class="form-control" id="ad_dv"  onchange="ShowHideSubCat ()" required>
                                    <option value="">ഭരണ തലം തിരഞ്ഞെടുക്കുക</option>
                                    <option value="corporation">Corporation</option>
                                    <option value="municipality">Municipality</option>
                                    <option value="taluk">Taluk</option>
                                    <option value="village">Village</option>
                                    <option value="panchayath">Panchayath</option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group"  id="region" style="display:none" >
                            <label class="control-label col-lg-4">Choose Village:</label>
                            <div class="col-lg-8"> 
                                <select class="form-control" required>
                                    <option value="">Select..</option>
                                    <option value="">Kasaba</option>
                                    <option value="">Feroke</option>
                                    <option value="">Elathur</option>
                                    <option value="">Mavoor</option>
                                    <option value="">Perambra</option>
                                    <option value="">Payyoli</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group" id="serv" style="display:none">
                            <label class="control-label col-lg-4">Service Sought:</label>                          
                            <div class="col-lg-8"> 
                                <select class="form-control" onchange="admSelectCheck(this);" required>
                                    <option value="">Select..</option>
                                    <option id="posCert" value="posCert">Possession Certificate</option>
                                    <option id="locCert" value="locCert">Location Certificate</option>
                                    <option id="incCert" value="incCert">Income Certificate</option>
                                    <option id="resCert" value="resCert">Resident Certificate</option>
                                    <option id="marCert" value="marCert">Marital Certificate</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                        <div class="row" style="display:none" id="rer">
                            <div class="col-lg-8" style="float:right">
                                <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;The Village Officer is empowered to issue income certificates as per GO(MS)1039/79/RD dated 06.08.1979 and as per GO (MS) No. 567/91/RD dated.12.9.1991. The income certificate issued by the Village Officer is sufficient to produce before all state Government authorities with in Kerala State. Application duly filled in the prescribed form with a court fee stamp worth rupees five affixed in it should be submitted to the Village Officer, along with the documents of proof required ie. of property, salary certificate, ration card income tax return etc. SC/ST communities are exempted from paying the fee of five rupee court fee stamp. The Certificate will be issued by the Village Officer after making due enquiry regarding his income. The Certificate will be issued with in one week as per GO (MS) No.300/96/RD dated.12.6.2000. The validity period of this certificate of persons having income up to Rs.36000/- has been enhanced to 1 year as per GO (MS)No.136/07/RD dated.27.4.2007. Certificate of persons having income above Rs.36000/- has only six months validity period as existed earlier. The actual income of the family shall be shown in the application. The term “family” includes the applicant, father, mother/parents, unmarried brothers and sisters, unmarried sons and daughters and widow daughters depending the family. Income from salary, pension, business, rent, and land and property ie.yeilding from agricultural land and income from those who serve / conducting business in foreign countries etc.will be considered for issuing income certificates for various purposes.</p>

                            </div>
                        </div>

                    </form>
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