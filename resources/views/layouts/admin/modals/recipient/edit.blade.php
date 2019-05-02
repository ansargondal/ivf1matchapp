<!--Edit Donor Modal-->
<div class="modal fade new-modal" id="edit-recipient-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('admin.recipients.update', 1)}}" method="post" id="form-recipient-update"
                  enctype="multipart/form-data">
                <div class="modal-header">
                    <h5>Edit Recipient</h5>
                    <button class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="recipeint-id">Recipient ID</label>
                                        <input type="text" class="form-control" tabindex="0" id="recipeint-id"
                                               name="id" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group c-dropdown">
                                            <label for="status">Status</label>
                                            <input type="text" readonly class="form-control" id="status"
                                                   name="status">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#">New</a></li>
                                                <li><a href="#">Active</a></li>
                                                <li><a href="#">InActive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control" id="fname"
                                               name="fname" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control" id="lname" name="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" disabled class="form-control" id="email" name="email"
                                               autofocus>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn bttn js-btn-save" id="js-btn-update">Update<i class="fa fa-spinner hide_spinner"
                                                                                     aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--!Edit Donor-->