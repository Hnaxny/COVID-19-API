<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<title>รายงานสถานการณ์ โควิด-19, </title>
	</head>
	<body>
<div class="text-center">
        <center><b><a class="btn btn-info" href="index" role="button">ย้อนกลับ</a></b></center>
    </div>
<?php
		//ถ้าใช้งานบน ssl หรือ HTTPS แล้วให้เอา @ ออกได้เลยจ้า เพราะตัว API Request SSL 
		    @$get_data=file_get_contents('https://static.easysunday.com/covid-19/getTodayCases.json');
			//เปลี่ยนลิงค์ api 15072021 https://covid19.th-stat.com/json/covid19v2/getTodayCases.json
			$covid19_th=json_decode($get_data);

			//print_r ออกมาดูซะหน่อย มีอะไรบ้าง
			echo '<pre>';
			print_r($covid19_th); //ข้อมลูที่ดึง
			echo '</pre>';

			echo '<center><b> <a href="https://static.easysunday.com/covid-19/getTodayCases.json" target="_blank"> หน้าตา API Click... </a></b></center>';


			//อย่าลืมปิด print_r นะครับ จะได้แสดงออกมาสวยๆ 


			//ประกาศตัวแปรแยกเป็นแต่ละคอลัมภ์ เพื่อเอาไปใช้งาน/ตกแต่งให้สวยงามตามใจคุณ ^^
			$Confirmed=$covid19_th->Confirmed;
			$Recovered=$covid19_th->Recovered;
			$Hospitalized=$covid19_th->Hospitalized;
			$NewConfirmed=$covid19_th->NewConfirmed;
			$NewRecovered =$covid19_th->NewRecovered;
			$NewHospitalized =$covid19_th->NewHospitalized;
			$NewDeaths =$covid19_th->NewDeaths;
			$UpdateDate=$covid19_th->UpdateDate;
			$Deaths=$covid19_th->Deaths; 
		
		//ที่มาของ API ข้อมูล 
		// https://covid19.th-stat.com/api/open/today ****เอาลิงค์นี้ไป run ครับ จะเห็นหน้าตาของข้อมูล

		//data from https://covid19.th-stat.com/

		/*  ศึกษาเรื่อง JSON PHP เพิ่มเติมได้ที่ https://www.w3schools.com/js/js_json_php.asp  */


		?>
		<center>                                    <footer class="footer">
        <div class="content has-text-centered">
            <p>
            Made with ❤️ by Theearpat't Tawing'g
            <br>
            Powered By <a href="https://static.easysunday.com/covid-19/getTodayCases.json">static.easysunday.com</a></a>!
            </p>
        </div>
    </footer></center>
		<br>
	</body>
</html>