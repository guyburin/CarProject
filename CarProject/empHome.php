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
  <style>
    th,
    td {
      text-align: center;
    }

    .input-group.md-form.form-sm.form-1 input {
      border: 1px solid #bdbdbd;
      border-top-right-radius: 0.25rem;
      border-bottom-right-radius: 0.25rem;
    }

    .input-group.md-form.form-sm.form-2 input {
      border: 1px solid #bdbdbd;
      border-top-left-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
    }

    .input-group.md-form.form-sm.form-2 input.red-border {
      border: 1px solid #ef9a9a;
    }

    .input-group.md-form.form-sm.form-2 input.lime-border {
      border: 1px solid #cddc39;
    }

    .input-group.md-form.form-sm.form-2 input.amber-border {
      border: 1px solid #ffca28;
    }
  </style>

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





  <section id="GG">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h1>Employee Home</h1><br>
          <!-- <form class="form-inline" id="form">
        <input class="form-control mr-sm-2" type="search" name="Model" id="se" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="ggwp">Search</button>
        
      </form> -->


          <table class="table table-striped">
            <thead>
              <tr>
                <th align="center">Image</th>
                <th align="center">Company</th>
                <th align="center">Model</th>
                <th align="center">Color</th>
                <th></th>
              </tr>
            </thead>
            <tbody id="IDbody">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    function renderTable(data) {
      var IDbody = $("#IDbody");
      IDbody.empty();

      $.each(data, function(index, value) {
        IDbody.append('<tr>' +
          '<th><img src="' + value.url + '" width="200"></th>' +
          '<td>' + value.Company + '</td>' +
          '<td>' + value.Model + '</td>' +
          '<td>' + value.color[0] + ',' + value.color[1] + ',' + value.color[2] + '</td>'
          line += "<td><a href='edit.php?id=" + item.id + "'><button class='btn btn-lg btn-warning smoothScroll wow fadeInUp'>แก้ไข</button></a>"
          line += "<td><a href='del.php?id=" + item.id + "'><button class='btn btn-lg btn-danger smoothScroll wow fadeInUp'>ลบ</button></a>" +
          '</tr>')
      });
    }

    function search(data) {
      $.post("http://localhost/SlimCar/index.php/search", data,
        function(data, textStatus, jqXHR) {
          renderTable(data);
        }
      );
    }
    $(document).ready(function() {

      search();

      $("#form").submit(function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        search(data);
      });

    });
  </script>

  <script>
    function loadData() {
      var url = "http://localhost/SlimCar/index.php/in";
      $.getJSON(url).done(function(data) {
        console.log(JSON.stringify(data));

        var line = "";
        $.each(data, function(k, item) {
          console.log(item);
          line += "<tr><td align='center'><img src='" + item.url + "' width='200'></td>";
          line += "<td align='center'>" + item.Company + "</td>";
          line += "<td align='center'>" + item.Model + "</td>";
          line += "<td align='center'>" + item.color[0] + "," + item.color[1] + "," + item.color[2] + "</td>";
          line += "<td><a href='edit.php?id=" + item.id + "'><button class='btn btn-lg btn-warning smoothScroll wow fadeInUp'>แก้ไข</button></a>"
          line += "<td><a href='del.php?id=" + item.id + "'><button class='btn btn-lg btn-danger smoothScroll wow fadeInUp'>ลบ</button></a>"
          line += "</tr>";
        });

        $("#IDbody").empty();
        $("#IDbody").append(line);
      });
    }



    $(function() {
      loadData();
    });
  </script>
  <section id="contact">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </section>
  <!-- footer section -->
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