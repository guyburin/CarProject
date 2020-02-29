<?php
$id = $_GET['id'];
// echo $id;
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Form-v5 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/roboto-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/styleemp.css" />
    <!-- stylesheets css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <link rel="stylesheet" href="css/et-line-font.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/vegas.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS -->

</head>

<body class="form-v5">
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
    <div class="page-content">
        <div class="form-v5-content">

            <form class="form-detail" action="#" method="post" id="form">

                <h2 id="bls">Edit DATA</h2>
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $id ?>">
                <div class="form-inline">
                    <!-- <div class="col-sm-10">
                        <input class="form-control mr-sm-2" type="text" name="id" id="id1" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
                    </div> -->
                </div>
                <br />
                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">ID:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="_id" placeholder="" name="_id" value="<?= $id ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">company:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="company" name="Company" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">Model:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="Model" name="Model" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">Color:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="Color" name="Color0" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">Color1:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="Color1" name="Color1" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">Color2:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="Color2" name="Color2" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">Url:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="url" name="url" placeholder="">
                    </div>
                </div>
                <div class="form-row-last">
                    <button type="submit" class="btn btn-warning">Edit</button>
                    <a href="employee.php" class="btn btn-dark" role="button">Back</a>


                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            var form = $("#form");
            var id = $("#id").val();
            getStudentById();

            function getStudentById() {
                $.get("http://localhost/SlimCar/index.php/findCarById/" + id, {},
                    function(data, textStatus, jqXHR) {
                        $("#id").val(data._id);
                        $("#company").val(data.Company);
                        $("#Model").val(data.Model);
                        $("#Color").val(data.color[0]);
                        $("#Color1").val(data.color[1]);
                        $("#Color2").val(data.color[2]);
                        $("#url").val(data.url);
                    }
                );
            }

            form.submit(function(e) {
                e.preventDefault();
                var data = form.serialize();
                // print_r(data);
                $.post("http://localhost/SlimCar/index.php/update", data,
                    function(data, textStatus, jqXHR) {
                        alert("Data: " + data + "\nStatus: " + status);
                        window.location.href = "http://localhost/carproject/empHome.php";
                    }
                );
            });
        });
    </script>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-1">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h2>Toyota Model web Project</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">
                        SWE60-281© Advanced Database Design and Development <br>
                        Group 3 : Member <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60110863 นายคุณัชญ์ ทองมี<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60113479 นายบุรินทร์ พันธ์ชาติ<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60144235 นางสาวศิริรัตน์ วิชิตแย้ม<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60191053 นางสาวอะวาฏิฟ ยูโซ๊ะ
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">
                        สังกัด : สำนักวิชาสารสนเทศศาสตร์ <br>
                        หลักศูตร : วิศวกรรมซอฟต์แวร์
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- javscript js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/vegas.min.js"></script>

    <script src="js/wow.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>