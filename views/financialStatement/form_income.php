<!-- CRUD Models for Income --> 

<!-- modal for add incomes -->

<div class="modal" tabindex="-1" role="dialog" id="incomeModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-inline" method="post">
                <div class="modal-header modal-header-info">
                    <h4 class="modal-title"><b> Add Income </b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                        <input type="date" class="form-control" name="date_i" id="Date">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="description_i" id="Description" placeholder="Description">
                    </div>

                    <div class="form-group">
                      <input type="number" class="form-control" name="amount_i" id="Amount" placeholder="Amount" required min="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                    this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" name="Submit_i" class="btn btn-info btn-sm">Submit</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal for Edit incomes -->

<div class="modal" role="dialog" id="edit_i<?php echo $row['id']; ?>">
    <form class="form-inline" method="post" role="form">
        <div class="modal-dialog" role="document">
            
            <div class="modal-content">           
                <div class="modal-header modal-header-success">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"><b> Edit Income </b></h4>                 
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="eid" name="id_i" value="<?php echo $id; ?>">
                    </div>
                  
                    <div class="form-group">
                        <input type="date" class="form-control" name="date_i" value="<?php echo $date; ?>" id="eDate" >
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="description_i" value="<?php echo $description; ?>" id="eDescription" placeholder="Description">
                    </div>

                    <div class="form-group">
                      <input type="number" class="form-control" name="amount_i" value="<?php echo $amount; ?>" id="eAmount" placeholder="Amount" required min="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                    this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                    </div>                
                </div>

                <div class="modal-footer">
                        <button class="btn btn-success btn-sm" type="submit" name="update_i" >Update</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div> 


<!--Delete Modal -->

<div id="deleteI<?php echo $row['id']; ?>" class="modal" role="dialog">
    <div class="modal-dialog">
        <form class="form-inline" method="post">
            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-header modal-header-danger">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b> Delete Income </b></h4>
                </div>

                <div class="modal-body">
                    <input type="text" id="i_id" name="deleteI_id" value="<?php echo $id; ?>" style="border: none;" readonly>
                    <div class="alert"><b> Are you Sure you want Delete ? </b><strong ><?php echo $description; ?></strong>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="delete_i" class="btn btn-danger"> YES</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                </div>
            </div>
        </form>
    </div>
</div>
    



<!-- end of CRUD Models for Income -->     












