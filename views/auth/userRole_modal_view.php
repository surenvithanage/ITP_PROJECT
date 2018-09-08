<!-- Modal -->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="UserRole_db.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="exampleModalLabel">Role Details</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">User ID</label>
                        <input type="text" class="form-control" id="userID" name="userID" aria-describedby="userID" placeholder="Enter userID">
                    </div>
                    <div class="form-group">
                        <label for="name">Role ID</label>
                        <input type="text" class="form-control" id="roleID" name="roleID" aria-describedby="roleID" placeholder="Enter roleID">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-danger" value="Reset">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </form>
        </div>
    </div>
</div>