<?php 
    
    // $id= $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

	<title>Comila HTML CSS Template</title>
<!--
Comila Template
http://www.templatemo.com/tm-490-comila
-->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">

  	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

  	<link rel="stylesheet" href="css/vegas.min.css">
	<link rel="stylesheet" href="css/style.css">

	<link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    


<!-- preloader section -->
<section class="preloader">
	<div class="sk-circle">
       <div class="sk-circle1 sk-child"></div>
       <div class="sk-circle2 sk-child"></div>
       <div class="sk-circle3 sk-child"></div>
       <div class="sk-circle4 sk-child"></div>
       <div class="sk-circle5 sk-child"></div>
       <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
       <div class="sk-circle8 sk-child"></div>
       <div class="sk-circle9 sk-child"></div>
       <div class="sk-circle10 sk-child"></div>
       <div class="sk-circle11 sk-child"></div>
       <div class="sk-circle12 sk-child"></div>
     </div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-0 col-md-12 col-sm-12">
				<div class="home-thumb bg">
					<h1 class="wow fadeInUp size" data-wow-delay="0.4s">Welcome to ToYoTa</h1>
          			<h3 class="wow fadeInUp" data-wow-delay="0.6s">ครึ่งหนึ่งของ 
                  <strong>ความสนุก</strong> 
                  ในการเดินทาง 
                  <strong>คือความงามของ</strong> 
                  "การหลงทาง"</h3>
				</div>
			</div>

		</div>
	</div>		
</section>

<!-- about section -->
<section id="about">
	<div class="container">
            <h1 id="mar">ฟอร์มกรอกใบสั่งชื้อ</h1>
		<div class="row">
    
    <div class="col-md-6 col-sm-12">
            <form id="form">
                    <div class="form-group">
                    <!-- <input type="hidden" class="form-control" id="id" name="id" value="<?=$id?>"> -->
                    <label>id :</label>
                    <input type="text" class="form-control" id="id" name="_id" placeholder="Enter Name" value="">
                    </div>
                    <div class="form-group">
                    <label>Customer Name :</label>
                    <input type="text" class="form-control" id="CusName" name="CusName" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                    <label>company :</label>
                    <input type="text" class="form-control" id="company" name="Company" placeholder="toyota">
                    </div>
                    <div class="form-group">
                    <label>Model :</label>
                    <input type="text" class="form-control" id="model" name="Model" placeholder="">
                    </div>
                    <div class="form-group">
                    <label>Color :</label>
                    <input type="text" class="form-control" id="Color" name="Color" placeholder="">
                    </div>
                    <div class="form-group">
                    <label>amount :</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="">
                    </div>
                    <div class="form-group">
                    <label>price :</label>
                    <input type="text" class="form-control" id="price" name="Price" placeholder="">
                    </div>
                    <div class="form-group">
                    <label>Address Hno :</label>
                    <input type="text" class="form-control" id="Hno" name="hno" placeholder="">
                    </div>
                    <div class="form-group">
                    <label>Address subdistrict :</label>
                    <input type="text" class="form-control" id="subdistrict" name="subdistrict" placeholder="">
                    </div>
                    <div class="form-group">
                    <label>Address District :</label>
                    <input type="text" class="form-control" id="District" name="district" placeholder="">
                    </div>
                    <div class="form-group">
                    <label>Address province :</label>
                    <input type="text" class="form-control" id="province" name="province" placeholder="">
                    </div>
                    <div class="form-group">
                    <label>Address zipcode :</label>
                    <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="">
                    </div>
                    <div class="form-group">
                    <label>phone :</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
    </div>
    <div class="col-md-6 col-sm-12">
            <form>
                    
                </form>
    </div>
		</div>
	</div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
          $(document).ready(function () {
            var form  = $("#form");

            form.submit(function (e) { 
                e.preventDefault();
                var data = form.serialize();
                $.post("http://localhost/SlimCar/insertbuy", data,
                    function (data, textStatus, jqXHR) {
                        alert("Data: " + data + "\nStatus: " + status);
                        window.location.href = "http://localhost/carproject/CusHome.php";
                    }
                );
            });
        });
        // $(document).ready(function () {
        //     var form  = $("#form");
        //     form.submit(function (e) { 
        //         e.preventDefault();
        //         var data = form.serialize();
        //         $.post("http://localhost/slimmongo/insert", data,
        //             function (data, textStatus, jqXHR) {
        //                 window.location.href = "http://localhost/swe/";
        //             }
        //         );
        //     });
        // });

    </script>


<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
      <div class="col-md-1 col-sm-1"></div>
      <div class="col-md-6 col-sm-12">
        <h2>Toyota Model web Project</h2>
        <p class="wow fadeInUp" data-wow-delay="0.6s">
          SWE60-281©	Advanced Database Design and Development <br>
          Group 3 : Member <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60110863	นายคุณัชญ์ ทองมี<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60113479	นายบุรินทร์ พันธ์ชาติ<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60144235	นางสาวศิริรัตน์ วิชิตแย้ม<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60191053	นางสาวอะวาฏิฟ ยูโซ๊ะ
        </p>
        <p class="wow fadeInUp" data-wow-delay="0.6s">
          สังกัด : สำนักวิชาสารสนเทศศาสตร์ <br>
          หลักศูตร : วิศวกรรมซอฟต์แวร์
        </p>
      </div>
		</div>
	</div>
</footer>
<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- javscript js -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/vegas.min.js"></script>

<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>

</html>