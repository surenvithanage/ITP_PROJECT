<?php
    include_once '../../controller/measurements/measurement_form_db.php';

?>

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
            Dashboard
            <small>Settings</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">setting</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- Holiday -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Holidays <span class="pull-right"><i data-table="holidays" data-heading="Holiday"  class="fa fa-plus holiday" data-toggle="tooltip" title="Add New"></i> <span data-toggle="collapse"  data-target="#holidays-nav"><i class="fa fa-chevron-circle-down" data-toggle="tooltip" title="View"></i></span></span></div>
                    <div class="panel-body">
                        <ul id="holidays-nav" class="list-group  collapse" >
                            <li class="list-group-item">
                                <table class="table table-bordered table-responsive Table" id="Table">
                                    <thead>
                                    <tr>
                                        <th class="search">ID</th>
                                        <th class="search">Name</th>
                                        <th >Option</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Option</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of holidays -->
            <!--Measurements -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Measurements <span class="pull-right"><i data-table="measurements" data-heading="Measurements"  class="fa fa-plus measurement" data-toggle="tooltip" title="Add New"></i> <span data-toggle="collapse"  data-target="#measurement-nav"><i class="fa fa-chevron-circle-down" data-toggle="tooltip" title="View"></i></span></span></div>
                    <div class="panel-body">
                        <ul id="measurement-nav" class="list-group  collapse" >
                            <li class="list-group-item">
                                <table class="table table-bordered table-responsive Table" id="Table1">
                                    <thead>
                                    <tr>
                                        <th class="search">ID</th>
                                        <th class="search">Name</th>
                                        <th >Option</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Option</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result_measurements)) { ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?><input type="hidden" value="<?php echo $row['id'] ?>"/></td>
                                            <td><?php echo $row['description'] ?><input type="hidden" value="<?php echo $row['description'] ?>"/> </td>
                                            <td style="text-align: center;">
                                                <a type="button" name="edit" class="btn btn-primary btn-circle"><i class="fa fa-edit measurement_update"></i></a>
                                                <a type="button" name="delete" class="btn btn-danger btn-circle" href="../../controller/measurements/measurement_form_db.php?delete=<?php echo $row['id'];?>"><i class="fa fa-trash-o"></i></a>
                                           </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of measurements -->
        </div>
        <div class="row">
            <!-- General -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> General <span class="pull-right"><i data-table="general" data-heading="General"  class="fa fa-plus general" data-toggle="tooltip" title="Add New"></i> <span data-toggle="collapse"  data-target="#general-nav"><i class="fa fa-chevron-circle-down" data-toggle="tooltip" title="View"></i></span></span></div>
                    <div class="panel-body">
                        <ul id="general-nav" class="list-group  collapse" >
                            <li class="list-group-item">
                                <table class="table table-bordered table-responsive Table" id="Table2">
                                    <thead>
                                    <tr>
                                        <th class="search">ID</th>
                                        <th class="search">Name</th>
                                        <th >Option</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Option</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of general -->
            <!--Transaction -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Transaction Types <span class="pull-right"><i data-table="transaction" data-heading="Transaction"  class="fa fa-plus transaction" data-toggle="tooltip" title="Add New"></i> <span data-toggle="collapse"  data-target="#transaction-nav"><i class="fa fa-chevron-circle-down" data-toggle="tooltip" title="View"></i></span></span></div>
                    <div class="panel-body">
                        <ul id="transaction-nav" class="list-group  collapse" >
                            <li class="list-group-item">
                                <table class="table table-bordered table-responsive Table" id="Table3">
                                    <thead>
                                    <tr>
                                        <th class="search">ID</th>
                                        <th class="search">Name</th>
                                        <th >Option</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Option</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of transaction -->
        </div>
        <div class="row">
            <!-- Leaves -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Leave Types <span class="pull-right"><i data-table="leave" data-heading="Leave"  class="fa fa-plus leave" data-toggle="tooltip" title="Add New"></i> <span data-toggle="collapse"  data-target="#leave-nav"><i class="fa fa-chevron-circle-down" data-toggle="tooltip" title="View"></i></span></span></div>
                    <div class="panel-body">
                        <ul id="leave-nav" class="list-group  collapse" >
                            <li class="list-group-item">
                                <table class="table table-bordered table-responsive Table" id="Table4">
                                    <thead>
                                    <tr>
                                        <th class="search">ID</th>
                                        <th class="search">Name</th>
                                        <th >Option</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Option</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of general -->
            <!--Stock -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Stock <span class="pull-right"><i data-table="stock" data-heading="Stock"  class="fa fa-plus stock" data-toggle="tooltip" title="Add New"></i> <span data-toggle="collapse"  data-target="#stock-nav"><i class="fa fa-chevron-circle-down" data-toggle="tooltip" title="View"></i></span></span></div>
                    <div class="panel-body">
                        <ul id="stock-nav" class="list-group  collapse" >
                            <li class="list-group-item">
                                <table class="table table-bordered table-responsive Table" id="Table5">
                                    <thead>
                                    <tr>
                                        <th class="search">ID</th>
                                        <th class="search">Name</th>
                                        <th >Option</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Option</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of transaction -->
        </div>
    </section>
</div>
<?php
    include_once '../../controller/setting/form_general.php';
    include_once '../../controller/setting/form_holidays.php';
    include_once '../../controller/setting/form_leave_types.php';
    include_once '../../controller/setting/form_measurement.php';
    include_once '../../controller/setting/form_stock.php';
    include_once '../../controller/setting/form_transaction_types.php';
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
    $('.measurement_update').click(function()
        {
            $('#description').val($(this).parent('tr').children('td:eq(0)').children('input:eq(0)').val());
            $('#Table1').val($(this).data('table'));
            $('#Modal4').modal();
        });
</script>

<script>
    $(document).ready(function ()  {
        $('#Table,#Table1,#Table2,#Table3,#Table4,#Table5').DataTable()({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
<script>
    $('.measurement').click(function()
    {
        $('#Table1').val($(this).data('table'));
        $('#Modal4').modal();
    });
    $('.general').click(function()
    {
        $('#Table2').val($(this).data('table'));
        $('#Modal1').modal();
    });
    $('.leave').click(function()
    {
        $('#Table4').val($(this).data('table'));
        $('#Modal3').modal();
    });
    $('.holiday').click(function()
    {
        $('#Table').val($(this).data('table'));
        $('#Modal2').modal();
    });
    $('.stock').click(function()
    {
        $('#Table5').val($(this).data('table'));
        $('#Modal5').modal();
    });
    $('.transaction').click(function()
    {
        $('#Table3').val($(this).data('table'));
        $('#Modal6').modal();
    });
</script>
