<div class="modal fade mt-5" id="edit" tabindex="-1" area-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmployeeModalLabel">Update Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-inline" method="POST" action="./update.php">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <label for="uid">UserID:</label>
                            <input type="number" class="form-control" id="F1" name="uid" required>
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="F2" name="email" required>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <label for="fname">First name:</label>
                            <input type="text" class="form-control" id="F3" name="fname" required>
                            <label for="lname">Last name:</label>
                            <input type="text" class="form-control" id="F4" name="lname" required>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <label for="post">Position:</label>
                            <input type="text" class="form-control" id="F5" name="post" required>
                            <label for="salary">Salary:</label>
                            <input type="text" class="form-control" id="F6" name="salary" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" name ="submitUpdates" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> </i> Update</button>
            </div>
            </form>
        </div>
    </div>
</div>