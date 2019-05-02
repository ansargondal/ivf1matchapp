<!--Edit user modal-->
<div class="modal fade" id="modal-edit-user">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" method="post" id="form-update-user">
                <div class="modal-header">
                    <h5>EDIT USER</h5>
                    <button class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 order-sm-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-fname">First Name</label>
                                        <input type="text" class="form-control" tabindex="0" id="e-fname"
                                               name="fname" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-lname">Last Name</label>
                                        <input type="text" class="form-control" tabindex="0" id="e-lname"
                                               name="lname" autofocus>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-email">Email</label>
                                        <input type="text" class="form-control" tabindex="0" id="e-email"
                                               name="email" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="e-user-role">User Role</label>
                                        <input type="text" readonly class="form-control" id="e-user-role"
                                               name="role">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#">Employee</a></li>
                                            <li><a href="#">Manager</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-password">Password</label>
                                        <input type="password" class="form-control" id="edit-password"
                                               name="password">
                                    </div>
                                    <small class="text-warning">*Leave the password empty if you don't want to
                                        update it.
                                    </small>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-cpassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="e-cpassword"
                                               name="confirm_password">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn bttn js-btn-update" id="js-btn-update">UPDATE <i
                                class="fa fa-spinner hide_spinner"
                                aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!--!Edit user modal-->