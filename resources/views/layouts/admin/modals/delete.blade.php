<!--delete modal-->
<div class="modal" id="delete-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" method="post">
                <div class="modal-header">
                    <h6 class="modal-title">CONFIRM DELETE</h6>
                    <a href="#" class="close" data-dismiss="modal">&times</a>
                </div>
                <div class="modal-body">
                    <p>Do you Really want to delete?</p>
                    <input type="text" name="id" id="id" class="d-none">
                </div>
                <div class="modal-footer">
                    <button class="btn  bg-danger" id="js-btn-delete" type="submit">Delete <i
                                class="fa fa-spinner hide_spinner"
                                aria-hidden="true"></i></button>
                    <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--!delete modal-->
