<?php
    include_once '../../controller/measurements/measurement_form_db.php';
?>
<div class="modal" tabindex="-1" role="dialog" id="Modal4">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="../../controller/measurements/measurement_form_db.php">
                <div class="modal-header">
                    <h3 class="modal-title">Measurement</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" id="description" aria-describedby="description" placeholder="Enter description">
                    </div>
                </div>
                <div class="modal-footer">
                    <?php
                    if($edit_state == false): ?>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <?php else: ?>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                    <?php endif ?>

                    <input type="reset" class="btn btn-danger" value="Clear">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>