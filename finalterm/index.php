<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FBR Tax Collector Pakistan 2019 - 2020</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="home">
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <img src="img/FBR-Logo.png" alt=""><h3 class="d-inline align-middle"></h3>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#showcase" class="nav-link">Employees</a>
                </li>
                <li class="nav-item">
                    <a href="#join" class="nav-link">Collect Tax</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- JOIN -->
<section id="join" class="bg-light py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-9">
                <h3>Filter Valid Employees </h3>
                <p class="lead">Tax Collector Pakistan 2019 - 2020</p>
                <!--Question 1: Part 01:  Write the code below accordingly-->
                <form>
                    <div class="form-row">
                        <div class="col-md-12">
                            <textarea class="form-control"
                                      placeholder="Copy Employees data from 'data.txt' file and paste here to collect Tax ..."
                                      id="data" name="data" rows="16"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Filter" id="filter" name="filter" class="btn btn-dark btn-block btn-lg">
                </form>
            </div>
            <div class="col-lg-3 d-none d-lg-block align-self-center">
                <img src="img/FBR-Logo.png" alt="FBR" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section id="showcase" class="py-5">
    <div class="primary-overlay text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h4 class="display-4 mt-5">
                        Valid Tax Payer Employees List
                    </h4>
                    <p class="lead"></p>
                    <table class="table table-bordered table-responsive-sm table-hover table-sm">
                        <thead>
                        <tr>
                            <td> Name </td>
                            <td> CNIC </td>
                            <td> Monthly Salary </td>
                            <td> Yearly Salary </td>
                            <td> Tax Rate </td>
                            <td> Monthly Tax </td>
                            <td> Yearly Tax </td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        /*
                         Question 1: Part 2 , 3:
                         Question 2: Part 1:
                         Write the code below accordingly
                        */


                        ?>
                        </tbody>
                        <tfoot>
                        <!--Question 2: Part 02:  Write the code below accordingly-->
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="main-footer" class="py-3 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 ml-auto">
                <p class="lead">Copyright &copy; 2019</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>