<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Api Covid-19</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">

</head>
<body>

<?php

$api = file_get_contents("https://static.easysunday.com/covid-19/getTodayCases.json");
$data = json_decode($api,true);

?>
    
    <div class="mt-5">
        <div class="container">

            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="text-center my-4">
                        <h2>รายงานสถานการณ์ โควิด-19</h2>
                        <h4>อัพเดทข้อมูลล่าสุด : <?php echo $data["UpdateDate"];?></h4>
                    </div>
             
                    <div class="card text-center text-white bg-danger mb-3">
                        <div class="card-header">ติดเชื้อสะสม</div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo number_format($data["Confirmed"]);?> ราย</h5>
                          <p class="card-text text-white">(เพิ่มขึ้น <?php echo number_format($data["NewConfirmed"]);?>) ราย</p>
                        </div>
                      </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="card text-center text-dark bg-success mb-3" >
                        <div class="card-header">หายแล้ว
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo number_format($data["Recovered"]);?></h5>
                          <p class="card-text text-dark">(เพิ่มขึ้น <?php echo number_format($data["NewRecovered"]);?>) ราย</p>
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card text-center text-white bg-warning mb-3" >
                        <div class="card-header">รักษาอยู่ใน รพ.</div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo number_format($data["Hospitalized"]);?> ราย</h5>
                          <p class="card-text text-white">&nbsp;</p>
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card text-center text-white bg-dark mb-3" >
                        <div class="card-header">เสียชีวิต
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo number_format($data["Deaths"]);?> ราย</h5>
                          <p class="card-text text-white">&nbsp;</p>
                        </div>
                      </div>
                </div>
            </div>

        </div>
    </div>
    
<div class="text-center">
        <center><b><a class="btn btn-info" href="api" role="button">ดูข้อมลู แบบ GET</a></b></center>
    </div>
    <div class="text-center">
        <center><b> <a href="https://static.easysunday.com/covid-19/getTodayCases.json" target="_blank"> หน้าตา API Click... </a></b></center>
    </div>
            <center>                                    <footer class="footer">
        <div class="content has-text-centered">
            <p>
            Made with ❤️ by Theearpat't Tawing'g
            <br>
            Powered By <a href="https://static.easysunday.com/covid-19/getTodayCases.json">static.easysunday.com</a></a>!
            </p>
        </div>
    </footer></center>



    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
</body>
</html>