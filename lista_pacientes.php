<?php
include('../../header.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/eye.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>


<!-- Custom CSS -->

    <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/stylerep.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../../assets/libs/select2/dist/css/select2.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->



<script type="text/javascript">

    var numglob=0;
    
   function f1(){
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange=function(){
          if (this.readyState == 4 && this.status == 200) {

            document.getElementById("tablepacientes").innerHTML = this.responseText;
          }
        }

        xmlhttp.open("GET", "geralista_pacientes.php?op=novo", true);
        xmlhttp.send();


    document.addEventListener("DOMContentLoaded", function(event) {
    inventario(numglob);
   });
      }

             function verperfil(num){

            document.getElementById("tableout").style.display="none";

            document.getElementById("prefilout").style.display="block";

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange=function(){
          if (this.readyState == 4 && this.status == 200) {

            document.getElementById("infopacientes").innerHTML = this.responseText;
          }
        }

        xmlhttp.open("GET", "inform_med.php?op=cliente&num="+num, true);
        xmlhttp.send();


    }

    function caixas(op, id){

    if (op=="terapeutica") {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange=function(){
      if (this.readyState == 4 && this.status == 200) {

        document.getElementById("infotab").innerHTML = this.responseText;
      }
    }

    xmlhttp.open("GET", "../Medico/inform_med.php?op=tabmedicacao&id="+id, true);
    xmlhttp.send();


    } else if (op=="obsclin") {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange=function(){
      if (this.readyState == 4 && this.status == 200) {

        document.getElementById("infotab2").innerHTML = this.responseText;
      }
    }

    xmlhttp.open("GET", "../Medico/inform_med.php?op=tabobsclinicas&id="+id, true);
    xmlhttp.send();


     } else if (op=="ntenf") {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange=function(){
      if (this.readyState == 4 && this.status == 200) {

        document.getElementById("infotab3").innerHTML = this.responseText;
      }
    }

    xmlhttp.open("GET", "../Medico/inform_med.php?op=tabntenfermagem&id="+id, true);
    xmlhttp.send();




    } else if (op=="cuidadosenf") {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange=function(){
      if (this.readyState == 4 && this.status == 200) {

        document.getElementById("infotab4").innerHTML = this.responseText;
      }
    }

    xmlhttp.open("GET", "../Medico/inform_med.php?op=tabcuidados&id="+id, true);
    xmlhttp.send();



    } else if (op=="obsdiaria") {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange=function(){
      if (this.readyState == 4 && this.status == 200) {

        document.getElementById("infotab5").innerHTML = this.responseText;
      }
    }

    xmlhttp.open("GET", "../Medico/inform_med.php?op=tabregdiario&id="+id, true);
    xmlhttp.send();


    } else if (op=="sinais") {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange=function(){
      if (this.readyState == 4 && this.status == 200) {

        document.getElementById("infotab6").innerHTML = this.responseText;
      }
    }

    xmlhttp.open("GET", "../Medico/inform_med.php?op=tabsinvitais&id="+id, true);
    xmlhttp.send();

}
}

</script>




</head>

<body onload="f1()">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <?php
        include "navside.php";
    ?>

            <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"></h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div id="tableout">
                     <!-- column -->
                  
                        <div class="card cardtable">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-6">
                                <h3 class="card-title">Lista pacientes</h3>
                                       <div class="input-group">
          <input type="text" onkeyup="procura()" class="form-control" placeholder="Procurar Paciente" aria-label="Search" aria-describedby="basic-addon2" id="nomepesquisa">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
      </div>        <script type="text/javascript">
                        

                                function procura(){

                            var nome = document.getElementById("nomepesquisa").value;

                                var xmlhttp = new XMLHttpRequest();

                                xmlhttp.onreadystatechange=function(){
                                  if (this.readyState == 4 && this.status == 200) {

                                    document.getElementById("tablepacientes").innerHTML = this.responseText;
                                  }
                                }

                                xmlhttp.open("GET", "geralista_pacientes.php?op=procura&nome="+nome, true);
                                xmlhttp.send();


                                    }
                    </script>
                    </div>    
                                    </div>

                            <div id="tablepacientes">

                            </div>
                                    
                                </div>
                            </div>
                        </div>




                            
            <!-- ============================================================== -->
            <!-- End table -->
            <!-- ============================================================== -->

                <div id="prefilout" style="display: none">
                    <!-- column -->
                    <div >
                      
                                <h4 class="card-title">Informação paciente</h4>
                            </div>

                            <div id="infopacientes">

                            </div>
                                        </div>
                                    </div>
                                </div>

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../../assets/libs/flot/excanvas.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../dist/js/pages/chart/chart-page-init.js"></script>

    <script src="../../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../../assets/libs/select2/dist/js/select2.min.js"></script>

    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
      

    </script>

</body>

</html>