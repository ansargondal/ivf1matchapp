<!--Footer -->
<footer class="section footer">
    <div class="container">
        <div class="row">
            <div class="col-5 col-lg-3">
                <ul class="footer-links">
                    <li>PROJECTS</li>
                    <li><a href="#">Updates</a></li>
                    <li><a href="#">Request an Icon</a></li>
                    <li><a href="#">Report a Bug</a></li>
                    <li><a href="#">help</a></li>
                    <li><a href="#">GitHub Project</a></li>
                </ul>
            </div>
            <div class="col-7 col-lg-3">
                <div class="wrap">
                    <a href="https://www.socrei.org/home?ssopc=1">
                        <img src="img/SREILogo.png" alt="" class="img-responsie">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="subscription-container">
                    <p>IVF1Match is continuously providing best services to their client. We are striving to deliver you
                        best
                        possible services at your door step.</p>
                    <form action="#" method="post" id="f-subscribe">
                        <div class="input-group">
                            <input type="email" name="email" class="form-control">
                            <span class="input-group-btn ">

                        <button class="bttn" id="subscribe">SUBSCRIBE</button>
                            </span>
                        </div>
                        <br>
                        <small class="form-text text-muted ">*We will not share your email with anyone
                            else.
                        </small>
                    </form>
                </div>
            </div>
        </div><!--row-->
        <hr>
        <div class="row footer-bottom">
            <div class="col-md-7">
                <small>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="index.html">How It Works</a></li>
                        <li class="list-inline-item"><a href="donor-signup.html">Sign Up</a></li>
                        <li class="list-inline-item"><a href="login.html">Log In</a></li>
                        <li class="list-inline-item"><a href="donor-profiles.html">Donor Profiles</a></li>
                    </ul>
                </small>
            </div>
            <div class="col-md-5">
                <small class="credits">Made with <span><i class="fa fa-heart" aria-hidden="true"></i></span> by <a
                            href="http://devdimensions.com/" target="_blank">
                        DevDimensions</a>
                </small>
            </div>

            <div class="back-to-top">
                <a href="#page-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
            </div>
        </div><!--row-->
    </div><!--container-->
</footer>
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/ivf1match.min.js')}}"></script>
<script src="{{asset('vendor/jquery-validation/jquery.validate.js')}}"></script>
@stack('js')
</body>
</html>