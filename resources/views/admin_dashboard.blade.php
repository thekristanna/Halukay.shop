<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
  />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
  />
  <style>
    #avg_users {
        color: rgb(111, 68, 38)
    }
  </style>

    <title>Admin dashboard</title>
</head>
<body>
    <nav
      class="navbar navbar-expand-lg navbar-light"
      style="background-color: rgb(240, 232, 223)"
    >
      <div class="container-fluid">
        <a class="nav-brand" href="#"
          ><img src="/img/halukay-logo.png" alt="weblogo" id="logo" width="100px"
        /></a>
        <button
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#site-navbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="site-navbar">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="#"> Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Users Report </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Orders Report </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"> Operations </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/"> Halukay website </a>
              </li>

          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-3">
        <h3 id="avg_users">Account population</h3>
        <h6 id="avg_users">Total Accounts: {{$totals -> total}}</h6>
        <div class="row">
            <div class="w-50 col-lg-8">
                <canvas id="bar_chart">
                </canvas>
            </div>
        </div>


    </div>
</body>
<script>
    var ctx = document.getElementById('bar_chart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($data['labels']),
            datasets: [{
                label: 'Data',
                data: @json($data['data']),
                backgroundColor: ['rgba(182, 116, 69, 0.2)',
                'rgba(111, 68, 38, 0.5)',
                'rgba(150, 147, 142, 0.5)',
                'rgba(100, 192, 61, 0.2)'],
                borderColor: 'rgba(59, 36, 20, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</html>