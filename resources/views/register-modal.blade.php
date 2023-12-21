<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">CREATE AN ACCOUNT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputName">Full Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control" id="registertName" placeholder="Enter your full name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Email address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                            </div>
                            <input type="email" class="form-control" id="registerEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhoneNumber">Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>
                            </div>
                            <input type="tel" class="form-control" id="registerNumber" placeholder="Enter your phone number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
                            </div>
                            <input type="password" class="form-control" id="registerPassword" placeholder="Password">
                            <div class="input-group-append">    
                                <div class="input-group-text bg-transparent">
                                    <a href="#" class="text-dark" id="register-show-password">
                                        <i class="fa-regular fa-eye-slash" id="register-password-hide-show-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputConfirmPassword">Confirm Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
                            </div>
                            <input type="password" class="form-control" id="registerConfirmPassword" placeholder="Confirm Password">
                            <div class="input-group-append">    
                                <div class="input-group-text bg-transparent">
                                    <a href="#" class="text-dark" id="register-show-confirm-password">
                                        <i class="fa-regular fa-eye-slash" id="register-confirm-password-hide-show-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="checkBox">
                        <label class="form-check-label" for="checkBox">I agree to the <a href="#" id="termsLink">terms and conditions</a></label>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-center justify-content-center border-0">
                <button type="button" class="btn btn-primary btn-block" id="registerButton">Register</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                <h4>1. Acceptance of Terms</h4>
                <p>By accessing or using this website, you agree to be bound by these terms and conditions.</p>

                <h4>2. User Conduct</h4>
                <p>You agree to use this website only for lawful purposes and in a way that does not infringe the rights of or restrict or inhibit the use of this site by anyone else.</p>

                <h4>3. Privacy Policy</h4>
                <p>Your use of this website is also governed by our Privacy Policy.</p>

                <h4>4. Intellectual Property</h4>
                <p>All content on this website, including text, graphics, logos, images, audio clips, digital downloads, and data compilations, is the property of the website owner.</p>

                <h4>5. Disclaimer of Warranties</h4>
                <p>This website is provided "as is" without any representations or warranties, express or implied.</p>

                <h4>6. Limitation of Liability</h4>
                <p>The website owner will not be liable to you (whether under the law of contact, the law of torts, or otherwise) in relation to the contents of, or use of, or otherwise in connection with, this website.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>