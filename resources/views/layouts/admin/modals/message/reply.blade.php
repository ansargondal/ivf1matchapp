<!--View Message Modal-->
<div class="modal" id="view-message-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Message Details</h5>
                <button class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control readonly" id="name" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Eamil</label>
                            <input type="text" readonly class="form-control" id="email" name="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control" readonly></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn js-view-btn-reply bttn">Reply</button>
                <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!--!View Message Modal-->


<!--Reply Message Modal-->
<div class="modal" id="reply-message-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>REPLY MESSAGE</h5>
                <button class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="to">To</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea name="message" autofocus id="message" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn js-main-btn-reply bttn">REPLY <i class="fa fa-spinner hide_spinner"
                                                                    aria-hidden="true"></i></button>
                <button class="btn btn-close" data-dismiss="modal">CANCEL</button>
            </div>
        </div>
    </div>
</div>