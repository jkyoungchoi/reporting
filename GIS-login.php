<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TreeFolks.org GIS Login</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <script src="../assets/vendor/jquery-2.1.4.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
      <style>
        body {
           margin: 0;
           padding-top: 50px;
        }
        html {
            width: :100%;
            height: 100%
        }
      .center{
      width: 10%;
      margin: 0 auto;}
          #login-panel{
              width:400px;
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px;
    height: 300px;
          }
          .input-group{padding-bottom: 30px;}
      </style>
    </head>
      <body>
          <div class="center" id="login-panel">
              <h2>Login to Reporting</h2>
              <h4 id="status"></h4>
                <div class="input-group">
                  <span class="input-group-addon"><span class="red">*</span> ID</span>
                  <input type="text" name="idname" id="idname" class="form-control">
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><span class="red">*</span> Password</span>
                  <input type="password" name="pws" id="pws" class="form-control">
                </div>
              <button class="btn btn-default pull-right" id="submit-btn">Login</button>
          </div>
    </body>
<script>
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    var refurl = getParameterByName('code');    
    if(refurl == 'index'){
        prefix = './';
             $("#status").text("Please Login");
    }else if(refurl == 'logout'){
        prefix = './';
        refurl = 'index';
             $("#status").text("You Have Successfully Logged Out")
             }else{
        prefix = '../';
             $("#status").text("Please Login");
    }
    if(refurl===null){
        prefix = './';
        refurl = 'index';
    }
    $("#submit-btn").click(function() {
        $.ajax({
            type: "POST",
            url: "inc.php",
            data:{pid:document.getElementById('pws').value,uid:document.getElementById('idname').value},
            success: function(data) {
                if(data==='1'){
                    window.location = "./index.php";
                }else{
                    alert("Please check your ID and Password");
                }
            },
            error: function(e) {
                console.log(e)
            }
        })
      return false;
    });
</script>
</html>