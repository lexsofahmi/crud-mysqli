<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="assets/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <style>
        *, body {
            border-radius: 0 !important;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
        }

        .dataTables_wrapper .dataTables_paginate {
            float: right;
            text-align: right;
            padding-top: 0;
        }

        .dataTables_wrapper .dataTables_info {
            clear: both;
            float: left;
            /*padding-top: 0.755em;*/
        }

        label {
            font-weight: normal;
        }

        .row-col-centered {
            text-align: center;
        }

        #btn-primary {
            margin-bottom: 5px;
        }

    </style>
</head>
<body>
<?php
include 'Models/autoload.php';
$user = new User('127.0.0.1', 'root', 'root', 'crud_mysqlidb');
?>
<div class="container">

    <?php
    include_once 'menu.php';
    include_once 'open-file.php';
    ?>


    <!---->


    <!-- Modal -->
    <div class="row">
        <div class="col-lg-12">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <form id="defaultForm" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Input User</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Password :</label>

                                    <div class="col-lg-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                                <button type="button" class="btn btn-success"><i class="fa fa-floppy-o"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="assets/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="assets/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {

            $('#dataTables-example').DataTable({
                responsive: true,
                aLengthMenu: [[5], [5]],
                iDisplayLength: 5
            });
        });

        $("[data-toggle=tooltip]").tooltip();

        //$(document).ready(function () {
        //    $('#defaultForm').formValidation();
        //});
    </script>

</body>
</html>