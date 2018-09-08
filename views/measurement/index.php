<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Measurements</title>
    <!-- Tell the browser to be responsive to screen width -->
    <!-- Including the css fies -->
    <?php
    include_once '../../partials/_css.php';
    ?>
</head>
<!-- Including the main header -->
<?php
include_once '../../partials/_mainHeader.php';
?>
<!-- Including the sidebar -->
<?php
include_once '../../partials/_sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Member
            <small>Measurements</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">measurements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Measurements<span class="pull-right" data-toggle="tooltip" title="Add New"><i data-toggle="modal" data-target="#Modal" class="fa fa-plus"></i></span>
            </div>
            <div class="panel-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Member Name</th>
                        <th>Measurement Name</th>
                        <th>Type</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Member Name</th>
                        <th>Measurement Name</th>
                        <th>Type</th>
                        <th>Option</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>

<!-- Include the measurement -->
<?php
include_once 'form.php';
?>

<!-- Include the control sidebar -->
<?php
include_once '../../partials/_controlSidebar.php';
?>

<!-- Including the footer -->
<?php
include_once '../../partials/_footer.php';
?>

<!-- Including the jQuery files -->
<?php
include_once '../../partials/_jQuery.php';
?>

<script>
    $(document).ready(function ()  {
        $('#example1').DataTable()({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

</div>
</body>
</html>
