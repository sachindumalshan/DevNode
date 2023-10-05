<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font awesome icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- CSS file link -->
    <link rel="stylesheet" type="text/css" href="CSS/style.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>


    <title>DevNode</title>
  </head>
  <body style="margin:0;padding:0">

    <!-- Sidebar Navigation -->
    <div>
      <section id="header">
        <nav class="navbar navbar-light bg-dark">
          <div>
            <a class="navbar-brand" href="#">
              <img src="img/devnode.png" class="me-2 pl-2" height="50" alt="DevNode" loading="lazy"/>
            </a>
          </div>
        </nav>
      </section>

        <div class="col-2">
          <!-- Sidebar -->
          <div class="d-flex flex-column flex-shrink-0 bg-light vh-100">
            <ul class="nav nav-pills nav-flush flex-column mb-auto ">
                <li class="nav-item"> <a href="#" class="nav-link p-4 active border-bottom"><span style="font-size: 1.3rem;"><i class="fas fa-tachometer-alt"></i> Dashboard</span></a> </li>
                <li class="nav-item"> <a href="#" class="nav-link p-4 border-bottom"><span style="font-size: 1.3rem;"><i class="fas fa-user"></i> User Management</span></a> </li>
                <li class="nav-item"> <a href="#" class="nav-link p-4 border-bottom"><span style="font-size: 1.3rem;"><i class="fas fa-file"></i> Post Management</span></a> </li>
                <li class="nav-item"> <a href="#" class="nav-link p-4 border-bottom"><span style="font-size: 1.3rem;"><i class="fas fa-cog"></i> Settings</span></a> </li>
            </ul>
          </div>
        </div>
        <div class="col-10 mt-5">
          <table id="myTable" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
        </div>
    </div>


      <!-- Footer -->
      <footer id="main-footer" class="py-1 text-white" style="background-color: #082b8f;">
        <div class="container">
          <div class="row">
            <div class="col">
            <p>Copyright &copy;
                <span id="year"></span> DevNode | All Rights Reserved</p>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
    </script>

  </body>
</html>
