<!--New user modal-->
<div class="modal fade new-modal" id="modal-new-user">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('admin.users.store')}}" method="post" id="form-new-user">
                <div class="modal-header">
                    <h5>NEW USER</h5>
                    <button class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 order-sm-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control" tabindex="0" id="fname"
                                               name="fname" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control" tabindex="0" id="lname"
                                               name="lname" autofocus>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" tabindex="0" id="email"
                                               name="email" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="user-role">User Role</label>
                                        <input type="text" readonly class="form-control" id="user-role"
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
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password"
                                               name="password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cpassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="cpassword"
                                               name="confirm_password">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn bttn btn-submit" type="submit">SAVE <i class="fa fa-spinner hide_spinner"
                                                                              aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--!New user modal-->
