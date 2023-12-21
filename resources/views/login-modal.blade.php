<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">SIGN IN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                            </div>
                            <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                            <div class="input-group-append">    
                                <div class="input-group-text bg-transparent">
                                    <a href="#" class="text-dark" id="login-show-password">
                                        <i class="fa-regular fa-eye-slash" id="login-password-hide-show-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-center justify-content-center border-0">
                <button type="button" class="btn btn-primary btn-block">Login</button>
            </div>
            <div class="or-divider">
                <span class="or-text">OR</span>
            </div>
            <div class="modal-footer text-center justify-content-center border-0">
                <a class="nav-link sign-in-google-link" href="#" onclick="signInWithGoogle()">
                    <i class="fa-brands fa-google"></i>
                    Sign In with Google
                </a>
            </div>
        </div>
    </div>
</div>