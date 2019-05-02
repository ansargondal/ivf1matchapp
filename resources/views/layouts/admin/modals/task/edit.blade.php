<!--Edit task modal-->
<div class="modal fade" id="note-edit-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT NOTE</h5>
                <a href="#note-edit-modal" class="close" data-dismiss="modal">&times;</a>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="edit-note-form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="edit-type">Type</label>
                                <input type="text" class="form-control" id="edit-type" name="type"
                                       autofocus="autofocus">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="edit-task">Note</label>
                                <input type="text" class="form-control" id="edit-task" name="body">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn  bttn js-btn-update" id="js-btn-update">UPDATE <i class="fa fa-spinner hide_spinner"
                                                                                     aria-hidden="true"></i></button>
                <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!--!Edit task modal-->