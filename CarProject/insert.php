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
    <link rel="stylesheet" href="css/styleemp.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="#" method="post" id="form">
                <h2>INSERT DATA</h2>

                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">ID:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="id" name="_id" placeholder="">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">Company:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="name" name="Company" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">Model:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="color" name="Model" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">Color0:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="branch" name="Color0" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">Color1:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="amount" name="Color1" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">Color2:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="price" name="Color2" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputSm" class="col-sm-2 col-form-label col-form-label-sm">Url:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="price" name="url" placeholder="">
                    </div>
                </div>
				<div class="form-row-last">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="employee.php" class="btn btn-outline-success" role="button">Back</a>
                
                
				</div>
            </form>
		</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            var form  = $("#form");

            form.submit(function (e) { 
                e.preventDefault();
                var data = form.serialize();
                $.post("http://localhost/SlimCar/index.php/insert", data,
                    function (data, textStatus, jqXHR) {
                        alert("Data: " + data + "\nStatus: " + status);
                        window.location.href = "http://localhost/CarProject/CusHome.php";
                    }
                );
            });
        });

    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
