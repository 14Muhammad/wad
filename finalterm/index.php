<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tax Calculator Pakistan 2019 - 2020</title>
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
                <form action="" method="post">
                    <div class="form-row">
                        <div class="col-md-12">
                            <textarea class="form-control"
                                      placeholder="Copy Employees data from 'data.txt' file and paste here to collect Tax ..."
                                      id="data" name="data" rows="16"><?php echo @$_COOKIE['employee'];?></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Filter" id="filter" name="filter" class="btn btn-dark btn-block btn-lg">
                </form>
            </div>
            <div class="col-lg-3 d-none d-lg-block align-self-center">
                <img src="img/FBR-Logo.png" alt="Army" class="img-fluid">
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
                        $total_yearly_tax_collected = 0;
                        if(isset($_POST['filter'])){
                            $data = $_POST['data'];
                            $pattern = "/\d+\s([a-zA-Z]+((\.|\s|\.\s|-)[a-zA-Z]+)*)\s(\d{5}-?\d{7}-?\d)\s(\d+(,\d+)*(\.\d+)?)\s~/";
                            if(preg_match_all($pattern, $data, $matches_out))
                            {
                                setcookie("employee",$data,time()+(60*60*3));
                                for($i=0;$i<count($matches_out[1]);$i++){
                                    ?>
                                    <tr>
                                        <td><?php echo $matches_out[1][$i]?></td>
                                        <td><?php echo $matches_out[4][$i]?></td>
                                        <td><?php echo number_format(str_replace(",","",$matches_out[5][$i]));?>/-</td>
                                        <td><?php echo number_format(str_replace(",","",$matches_out[5][$i])*12);?>/-</td>
                                        <td><?php echo getTaxRate(str_replace(",","",$matches_out[5][$i]));?>%</td>
                                        <td><?php echo number_format(getYearlyTax(str_replace(",","",$matches_out[5][$i]))/12);?>/-</td>
                                        <td><?php
                                            $total_yearly_tax_collected += getYearlyTax(str_replace(",","",$matches_out[5][$i]));
                                            echo number_format(getYearlyTax(str_replace(",","",$matches_out[5][$i])));?>/-</td>
                                    </tr>
                                    <?php
                                }
                            }
                        }
                        function getYearlyTax($m_salary){
                            $y_salary = $m_salary*12;
                            if($y_salary<=600000){
                                return 0;
                            }else if($y_salary>600000 && $y_salary <= 1200000){
                                return ($y_salary-600000)*0.05;
                            }
                            else if($y_salary>1200000 && $y_salary <= 1800000){
                                return (($y_salary-1200000)*0.1) + 30000;
                            }
                            else if($y_salary>1800000 && $y_salary <= 2500000){
                                return (($y_salary-1800000)*0.15) + 90000;
                            }
                            else if($y_salary>2500000 && $y_salary <= 3500000){
                                return (($y_salary-2500000)*0.175) + 195000;
                            }
                            else if($y_salary>3500000 && $y_salary <= 5000000){
                                return (($y_salary-3500000)*0.2) + 370000;
                            }
                            else if($y_salary>5000000 && $y_salary <= 8000000){
                                return (($y_salary-5000000)*0.225) + 660000;
                            }
                            else if($y_salary>8000000 && $y_salary <= 12000000){
                                return (($y_salary-8000000)*0.25) + 1345000;
                            }
                            else if($y_salary>12000000 && $y_salary <= 30000000){
                                return (($y_salary-12000000)*0.275) + 2345000;
                            }
                            else if($y_salary>30000000 && $y_salary <= 50000000){
                                return (($y_salary-30000000)*0.3) + 7295000;
                            }
                            else if($y_salary>50000000 && $y_salary <= 75000000){
                                return (($y_salary-50000000)*0.322) + 13295000;
                            }
                            else if($y_salary>75000000){
                                return (($y_salary-75000000)*0.35) + 21420000;
                            }
                        }
                        function getTaxRate($m_salary){
                            $y_salary = $m_salary*12;
                            if($y_salary<=600000){
                                return 0;
                            }else if($y_salary>600000 && $y_salary <= 1200000){
                                return 5;
                            }
                            else if($y_salary>1200000 && $y_salary <= 1800000){
                                return 10;
                            }
                            else if($y_salary>1800000 && $y_salary <= 2500000){
                                return 15;
                            }
                            else if($y_salary>2500000 && $y_salary <= 3500000){
                                return 17.5;
                            }
                            else if($y_salary>3500000 && $y_salary <= 5000000){
                                return 20;
                            }
                            else if($y_salary>5000000 && $y_salary <= 8000000){
                                return 22.5;
                            }
                            else if($y_salary>8000000 && $y_salary <= 12000000){
                                return 25;
                            }
                            else if($y_salary>12000000 && $y_salary <= 30000000){
                                return 27.5;
                            }
                            else if($y_salary>30000000 && $y_salary <= 50000000){
                                return 30;
                            }
                            else if($y_salary>50000000 && $y_salary <= 75000000){
                                return 32.2;
                            }
                            else if($y_salary>75000000){
                                return 35;
                            }
                        }
                        ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">Total Tax Collected </td>
                            <td><?php echo number_format($total_yearly_tax_collected/12); ?>/-</td>
                            <td><?php echo number_format($total_yearly_tax_collected); ?>/-</td>
                        </tr>
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