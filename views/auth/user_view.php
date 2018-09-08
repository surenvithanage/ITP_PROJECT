<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>User</title>
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
            User
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">user</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs">
<div class="inner" style="min-height: 700px;">
    <div class="row">
        <div class="col-lg-12">
            <?php
            if (isset($_SESSION['msg'])):
                ?>
                <div class="msg">
                    <?php
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                    ?>
                </div>
            <?php
            endif
            ?>
            <span class="h2">Users </span>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-gear "> Option</i>&nbsp; <i class="fa fa-chevron-down "></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#Modal" data-toggle="modal"  ><i class="fa fa-plus"></i> New User </a>
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
                <div class="panel-heading">User Details</div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-responsive" id="Table" style="width:100%";>
                        <thead>
                        <tr>
                            <th class="search">Name</th>
                            <th class="search">Username</th>
                            <th class="search">Email</th>
                            <th class="search">Password</th>
                            <th >Option</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Option</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        $db = mysqli_connect('localhost','root','dragonballz1','mega_power');
                        $results = mysqli_query($db ,"SELECT * FROM users");

                        while ($row = mysqli_fetch_array($results)) { ?>
                            <tr>
                                <td><input type="hidden" value="<?php echo $row['name'] ?>"></td>
                                <td><?php echo $row['username'] ?><input type="hidden" value="<?php echo $row['username'] ?>"><td>
                                <td><input type="hidden" value="<?php echo $row['email'] ?>"> </td>
                                <td><input type="hidden" value="<?php echo $row['password'] ?>"> </td>
                                <td style="text-align: center"> <button class="fa fa-edit btn btn-primary"></button>
                                    <button class="fa fa-trash-o btn btn-primary">
                                        
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- Include the control sidebar -->
<?php
include_once '../../partials/_controlSidebar.php';
?>

<!-- Including the footer -->
<?php
include_once '../../partials/_footer.php';
?>

<?php
    include_once 'user_modal_view.php';
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


    $('.fa-edit').click(function(){
    $('#name').val($(this).parents('tr').children('td:eq(0)').children('input:eq(0)').val());
    $('#email').val($(this).parents('tr').children('td:eq(1)').children('input:eq(0)').val());
    $('#username').val($(this).parents('tr').children('td:eq(2)').children('input:eq(0)').val());
    $('#password').val($(this).parents('tr').children('td:eq(3)').children('input:eq(0)').val());
    $('#Modal').modal();

    });

</script>

</div>
</body>
</html>



