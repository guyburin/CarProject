<!DOCTYPE html>
<html>

<head>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Heebo:400,700|Open+Sans:400,700');

    :root {
      --color: #3c3163;
      --transition-time: 0.5s;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      min-height: 100vh;
      font-family: 'Open Sans';
      background: #fafafa;

      background: url('https://imidatasearch.com/wp-content/uploads/2017/04/iStock-637972224.jpg') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      background-size: cover;
      -o-background-size: cover;

    }

    a {
      color: inherit;
    }

    .cards-wrapper {
      display: grid;
      justify-content: center;
      align-items: center;
      grid-template-columns: 300px 300px 300px;
      grid-gap: 5rem;
      padding: 4rem;
      margin: 0 auto;
      width: max-content;
    }

    .card {
      font-family: 'Heebo';
      --bg-filter-opacity: 0.5;
      background-image: linear-gradient(rgba(0, 0, 0, var(--bg-filter-opacity)), rgba(0, 0, 0, var(--bg-filter-opacity))), var(--bg-img);
      height: 10em;
      width: 10em;
      font-size: 1.5em;
      color: white;
      border-radius: 1em;
      padding: 1em;
      /*margin: 2em;*/
      display: flex;
      align-items: flex-end;
      background-size: cover;
      background-position: center;
      box-shadow: 0 0 5em -1em black;
      transition: all, var(--transition-time);
      position: relative;
      overflow: hidden;
      border: 10px solid #ccc;
      text-decoration: none;
    }

    .card:hover {
      transform: rotate(0);
    }

    .card h1 {
      margin: 0;
      font-size: 1em;
      line-height: 1.2em;
    }

    .card p {
      font-size: 0.75em;
      font-family: 'Open Sans';
      margin-top: 0.5em;
      line-height: 2em;
    }

    .card .tags {
      display: flex;
    }

    .card .tags .tag {
      font-size: 0.75em;
      background: white;
      border-radius: 0.3rem;
      padding: 0 0.5em;
      margin-right: 0.5em;
      line-height: 1.5em;
      transition: all, var(--transition-time);
    }

    .card:hover .tags .tag {
      background: var(--color);
      color: white;
    }

    .card .date {
      position: absolute;
      top: 0;
      right: 0;
      font-size: 0.75em;
      padding: 1em;
      line-height: 1em;
      opacity: .8;
    }

    .card:before,
    .card:after {
      content: '';
      transform: scale(0);
      transform-origin: top left;
      border-radius: 50%;
      position: absolute;
      left: -50%;
      top: -50%;
      z-index: -5;
      transition: all, var(--transition-time);
      transition-timing-function: ease-in-out;
    }

    .card:before {
      background: #ddd;
      width: 200%;
      height: 200%;
    }

    .card:after {
      background: #AEB6BF;
      width: 200%;
      height: 200%;
    }

    .card:hover {
      color: var(--color);
    }

    .card:hover:before,
    .card:hover:after {
      transform: scale(1);
    }

    .num {
      color: black;
    }

    .tag {
      color: black;
    }

    .card-grid-space .num {
      font-size: 3em;
      margin-bottom: 1.2rem;
      margin-left: 1rem;
    }

    .info {
      font-size: 1.2em;
      display: flex;
      padding: 1em 3em;
      height: 3em;
    }

    .info img {
      height: 3em;
      margin-right: 0.5em;
    }

    .info h1 {
      font-size: 1em;
      font-weight: normal;
    }

    /* MEDIA QUERIES */
    @media screen and (max-width: 1285px) {
      .cards-wrapper {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media screen and (max-width: 900px) {
      .cards-wrapper {
        grid-template-columns: 1fr;
      }

      .info {
        justify-content: center;
      }

      .card-grid-space .num {
        /margin-left: 0;
        /text-align: center;
      }
    }

    @media screen and (max-width: 500px) {
      .cards-wrapper {
        padding: 4rem 2rem;
      }

      .card {
        max-width: calc(100vw - 4rem);
      }
    }

    @media screen and (max-width: 450px) {
      .info {
        display: block;
        text-align: center;
      }

      .info h1 {
        margin: 0;
      }
    }
  </style>

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
</head>

<body>
  <div class="container">
    <br />
    <!-- <div class="card" style="width: 20rem;">
    <img class="card-img-top" src="https://imidatasearch.com/wp-content/uploads/2017/04/iStock-637972224.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Insert Data</p>
      </div>
  </div> 
</div> -->


    <h1 align="center">TOYOTA EMPLOYEE</h1>
    <section class="cards-wrapper">
      <div class="card-grid-space">

        <a class="card" href="insert.php" style="--bg-img: url(https://cdn0.iconfinder.com/data/icons/databases-and-networking/100/DB-addition-512.png)">
          <div>
            <h1>เพิ่มข้อมูล</h1>


            <div class="tags">
              <div class="tag">INSERT</div>
            </div>
          </div>
        </a>
      </div>
      <div class="card-grid-space">

        <a class="card" href="empHome.php" style="--bg-img: url('https://cdn3.iconfinder.com/data/icons/flat-and-simple-part-3/128/table-512.png')">
          <div>
            <h1>ข้อมูลรถ</h1>
            <div class="tags">
              <div class="tag">EDIT</div>
            </div>
          </div>
        </a>
      </div>

      <div class="card-grid-space">

        <a class="card" href="index.php" style="--bg-img: url('https://cdn4.iconfinder.com/data/icons/mini-icon-1/16/wheel-256.png')">
          <div>
            <h1>หน้าเว็บหลัก</h1>
            <div class="tags">
              <div class="tag">Home</div>
            </div>
          </div>
        </a>
      </div>

    </section>
</body>

</html>