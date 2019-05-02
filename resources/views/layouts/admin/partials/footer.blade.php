<div class="box footer-box">
    <footer class="footer clearfix">
        <div class="row">
            <ul class="list-inline footer-links">
                <li class="list-inline-item"><a href="dashboard.html">Home</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Contact Us</a></li>
            </ul>
            <div class="credits">
                Created with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="http://devdimensions.com/"
                                                                                  target="_blank">DevDimensions</a>
            </div>
        </div>
    </footer>
</div>

<script src="{{asset('../vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('../vendor/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('../vendor/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('../vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('../vendor/data-table/data-table.js')}}"></script>
<script src="{{asset('../vendor/data-table/dataTables.conditionalPaging.js')}}"></script>
<script src="{{asset('../vendor/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('../js/global.min.js')}}"></script>


//Push js files will be placed here.
@stack('js')
</body>
</html>