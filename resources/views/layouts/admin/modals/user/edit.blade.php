
<!--Edit user modal-->
<div class="modal fade" id="edit-user-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" method="post" id="edit-user-form" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5>EDIT USER</h5>
                    <button class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4  order-sm-1 order-md-12">
                            <div class="wrap">
                                <div class="form-group text-center">
                                    <div class="img-fake">
                                        <img class="img-fluid js-img-choosed" src="../img/avatar.png"
                                             alt="product image">
                                    </div>
                                    <label for="img-chooser-2">
                                        <span class="btn btn-file btn-primary bttn">Choose Image</span>
                                    </label>
                                    <input type="file" name="img" id="img-chooser-2" class="d-none file-chooser">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 order-sm-12 order-md-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-username">Username</label>
                                        <input type="text" class="form-control" id="e-username"
                                               name="username">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="e-user-role">User Role</label>
                                        <input type="text" readonly class="form-control" id="e-user-role"
                                               name="user_role">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">Author</a></li>
                                            <li><a href="#">Reader</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="e-password"
                                               name="password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cpassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="e-cpassword" name="cpassword">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="e-address">Address</label>
                                        <input type="text" class="form-control" id="e-address" name="address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="e-note">Note</label>
                                        <input type="text" class="form-control" id="e-note" name="note">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn bttn js-btn-update">UPDATE <i class="fa fa-spinner hide_spinner"
                                                                     aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!--!Edit user modal-->