<!DOCTYPE html>
<?php

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Title Page-->
  <title>Task Management</title>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">



  <!-- Fontfaces CSS-->
  <link href="css/font-face.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="css/theme.css" rel="stylesheet" media="all">
</head>

<body>

  <div class="container">
    <br> <br> <br>
    <div class="row">
      <div class="col-md-4 ">

      </div>

      <div class="col-md-4 ">
        <div class="login-panel panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Payment</h3>
          </div>
          <div class="panel-body">
            <form role="form">
              <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Password" name="password" type="password" value="">
                </div>
                <div class="checkbox">
                  <label>
                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                  </label>
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <div class="row">
                  <div class="col-lg-6"><a href="index.html" class="btn  btn-success btn-block">Pay</a></div>
                  <div class="col-lg-6"><a href="index.php" class="btn btn-warning btn-block">cancel</a>
                  </div>
                </div>

              </fieldset>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">

      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(function() {
      var params = {

        "amount": "string",
        "currency": "string",
        "externalId": "string",
        "payee": {
          "partyIdType": "MSISDN",
          "partyId": "string"
        },
        "payerMessage": "string",
        "payeeNote": "string"

      };

      $.ajax({
          url: "https://sandbox.momodeveloper.mtn.co.rw/disbursement/v1_0/transfer?" + $.param(params),
          beforeSend: function(xhrObj) {
            // Request headers
            xhrObj.setRequestHeader("Authorization", "");
            xhrObj.setRequestHeader("X-Callback-Url", "");
            xhrObj.setRequestHeader("X-Reference-Id", "");
            xhrObj.setRequestHeader("X-Target-Environment", "");
            xhrObj.setRequestHeader("Content-Type", "application/json");
            xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", "{subscription key}");
          },
          type: "POST",
          // Request body
          data: "{body}",
        })
        .done(function(data) {
          alert("success");
        })
        .fail(function() {
          alert("error");
        });
    });
  </script>
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="js/metisMenu.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="js/startmin.js"></script>

</body>

</html>