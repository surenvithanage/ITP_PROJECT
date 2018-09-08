
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Financial Statements</title>
    
    <!-- Including the css fies -->
    <?php
    include_once '../../partials/_css.php';
    ?>

    <?php
        include_once '../../controller/financialStatement/financialStatement_form_db.php';
    ?> 

    <style>
        
        .modal-header-success {
    color:#fff;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #5cb85c;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
    }


.modal-header-danger {
    color:#fff;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #d9534f;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
}
.modal-header-info {
    color:#fff;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #5bc0de;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
}


    </style>
    
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
            Financial
            <small>Statements</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Financial Statements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Incomes table -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                Expenses<span class="pull-right" data-toggle="tooltip" title="Add New"><i data-toggle="modal" data-target="#expenseModal" class="fa fa-plus"></i></span>
            </div>
            <div class="panel-body">
                <table id="expenseT" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?>
                                <td><span id="date_E<?php echo $row['id']; ?>"><?php echo $row['date']; ?></span></td>
                                <td><span id="description_E<?php echo $row['id']; ?>"><?php echo $row['description']; ?></span></td>
                                <td><span id="amount_E<?php echo $row['id']; ?>"><?php echo $row['amount']; ?></span></td>
                                
                                <td>
                                    <button type="button" class="btn btn-success edit_e btn-xs" value="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit"></span></button>

                                    <button type="button" class="btn btn-danger deleteE btn-xs" value="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash" ></span></button>

                                </td>  
                            </tr>

                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>


<!-- Include the financial records entering forms -->
<?php
include_once 'form_expense.php';
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

<!-- Js for Incomes table -->
<script>
    $(document).ready(function ()  {
        $('#expenseT').DataTable()({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

<!--  Retrieve data into edit modal -->
<script>
    
    $(document).ready(function(){
    $(document).on('click', '.edit_e', function(){
        var id=$(this).val();
        var da=$('#date_E'+id).text();
        var de=$('#description_E'+id).text();
        var am=$('#amount_E'+id).text();
 
        $('#edit_e').modal('show');
        $('#eid').val(id);
        $('#eDate').val(da);
        $('#eDescription').val(de);
        $('#eAmount').val(am);
    });
});
</script>

<!-- get unique row for delete Incomes -->
<script>
    
    $(document).ready(function(){
    $(document).on('click', '.deleteE', function(){
        var id=$(this).val();
        
        $('#deleteE').modal('show');
        $('#e_id').val(id);       
        
    });
});
</script>


</div>
</body>
</html>
