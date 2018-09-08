<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Role</title>
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
            Employee
            <small>Roles</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Role</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs">
            <div id="content">
                <div class="inner" style="min-height: 700px;">
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="h2">Role Info </span>
                            <ul class="nav navbar-top-links navbar-right">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-gear "> Option</i>&nbsp; <i class="fa fa-chevron-down "></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#Modal" data-toggle="modal"  ><i class="fa fa-plus"></i> New Role </a>
                                        <li><a href="#Modal1" data-toggle="modal"  ><i class="fa fa-plus"></i> New User Role </a>
                                        </li>
                                    </ul>
                                </li><!--END ADMIN SETTINGS -->
                            </ul>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading"> Role Details</div>
                                <div class="panel-body">
                                    <table class="table table-bordered table-responsive Table" id="Table">
                                        <thead>
                                        <tr>
                                            <th class="search">Role ID</th>
                                            <th class="search">Description</th>
                                            
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Role ID</th>
                                            <th>Description</th>
                                          
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                        $db = mysqli_connect('localhost','root','dragonballz1','mega_power');
                                        $results = mysqli_query($db ,"SELECT * FROM roles");

                                        while ($row = mysqli_fetch_array($results)) { ?>
                                            <tr>
                                                <td><?php echo $row['role_id'] ?></td>
                                                <td><?php echo $row['role_name'] ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<!-- Include the control sidebar -->
<?php
include_once '../../partials/_controlSidebar.php';
?>

<!-- Including the footer -->
<?php
include_once '../../partials/_footer.php';
?>


        
<?php
    include_once 'role_modal_view.php';
    include_once 'userRole_modal_view.php';
?>

<!-- Including the jQuery files -->
<?php
include_once '../../partials/_jQuery.php';
?>
<script>
    $(document).ready(function ()  {
        $('#Table').DataTable()({
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



