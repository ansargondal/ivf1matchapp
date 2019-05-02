<!--task modal-->
<div class="modal fade new-modal" id="new-note-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('admin.tasks.store')}}" method="post" id="new-note-form">
                @csrf
                <input type="hidden" name="user_id" value="24">
                <div class="modal-header">
                    <h5 class="modal-title">NEW NOTE</h5>
                    <a href="#" class="close" data-dismiss="modal">&times;</a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" class="form-control" id="type" name="type" autofocus="autofocus">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="task">Note</label>
                                <input type="text" class="form-control" id="task" name="body">
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
<!--!task modal-->