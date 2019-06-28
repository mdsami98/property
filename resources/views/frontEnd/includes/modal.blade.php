<div id="login-modal" class="forms-modal modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <p>You need to log in to use member only features.</p>
    </div>

    <!-- start of modal body -->
    <div class="modal-body">

        <!-- login section -->
        <div class="login-section modal-section">
            <h4>Login</h4>
            <form id="login-form" class="login-form" action="#" method="post" enctype="multipart/form-data">
                <div class="form-option">
                    <label for="username">User Name<span>*</span></label>
                    <input id="username" name="log" type="text" class="required" title="* Provide user name!" autofocus required/>
                </div>
                <div class="form-option">
                    <label for="password">Password<span>*</span></label>
                    <input id="password" name="pwd" type="password" class="required" title="* Provide password!" required/>
                </div>
                <input type="hidden" name="action" value="inspiry_ajax_login" />
                <input type="hidden" id="inspiry-secure-login" name="inspiry-secure-login" value="ffcea19034" />
                <input type="hidden" name="_wp_http_referer" value="/" />
                <input type="hidden" name="redirect_to" value="http://realhomes.inspirythemes.biz/" />
                <input type="hidden" name="user-cookie" value="1" />
                <input type="submit" id="login-button" name="submit" value="Log in" class="real-btn login-btn" />
                <img id="login-loader" class="modal-loader" src="../../realhomes.inspirythemes.biz/wp-content/themes/realhomes/images/ajax-loader.gif" alt="Working...">
                <div>
                    <div id="login-message" class="modal-message"></div>
                    <div id="login-error" class="modal-error"></div>
                </div>
            </form>
            <p>
                <a class="activate-section" data-section="register-section" href="#">Register Here</a>
                <span class="divider">-</span>
                <a class="activate-section" data-section="forgot-section" href="#">Forgot Password</a>
            </p>
        </div>

        <!-- forgot section -->
        <div class="forgot-section modal-section">
            <h4>Reset Password</h4>
            <form action="#" id="forgot-form"  method="post" enctype="multipart/form-data">
                <div class="form-option">
                    <label for="reset_username_or_email">Username or Email<span>*</span></label>
                    <input id="reset_username_or_email" name="reset_username_or_email" type="text" class="required" title="* Provide username or email!" required/>
                </div>
                <input type="hidden" name="action" value="inspiry_ajax_forgot" />
                <input type="hidden" name="user-cookie" value="1" />
                <input type="submit"  id="forgot-button" name="user-submit" value="Reset Password" class="real-btn register-btn" />
                <img id="forgot-loader" class="modal-loader" src="../../realhomes.inspirythemes.biz/wp-content/themes/realhomes/images/ajax-loader.gif" alt="Working...">
                <input type="hidden" id="inspiry-secure-reset" name="inspiry-secure-reset" value="31fcfea57d" /><input type="hidden" name="_wp_http_referer" value="/" />                <div>
                    <div id="forgot-message" class="modal-message"></div>
                    <div id="forgot-error" class="modal-error"></div>
                </div>
            </form>
            <p>
                <a class="activate-section" data-section="login-section" href="#">Login Here</a>
                <span class="divider">-</span>
                <a class="activate-section" data-section="register-section" href="#">Register Here</a>
            </p>
        </div>

        <!-- register section -->
        <div class="register-section modal-section">
            <h4>Register</h4>
            <form action="#" id="register-form"  method="post" enctype="multipart/form-data">

                <div class="form-option">
                    <label for="register_username" class="">User Name<span>*</span></label>
                    <input id="register_username" name="register_username" type="text" class="required"
                           title="* Provide user name!" required/>
                </div>

                <div class="form-option">
                    <label for="register_email" class="">Email<span>*</span></label>
                    <input id="register_email" name="register_email" type="text" class="email required"
                           title="* Provide valid email address!" required/>
                </div>

                <input type="hidden" name="user-cookie" value="1" />
                <input type="submit" id="register-button" name="user-submit" value="Register" class="real-btn register-btn" />
                <img id="register-loader" class="modal-loader" src="../../realhomes.inspirythemes.biz/wp-content/themes/realhomes/images/ajax-loader.gif" alt="Working...">
                <input type="hidden" name="action" value="inspiry_ajax_register" />
                <input type="hidden" id="inspiry-secure-register" name="inspiry-secure-register" value="d610528cab" /><input type="hidden" name="_wp_http_referer" value="/" /><input type="hidden" name="redirect_to" value="http://realhomes.inspirythemes.biz/" />
                <div>
                    <div id="register-message" class="modal-message"></div>
                    <div id="register-error" class="modal-error"></div>
                </div>

            </form>
            <p>
                <a class="activate-section" data-section="login-section" href="#">Login Here</a>
                <span class="divider">-</span>
                <a class="activate-section" data-section="forgot-section" href="#">Forgot Password</a>
            </p>
        </div>

    </div>
    <!-- end of modal-body -->

</div>
<a href="#top" id="scroll-top"><i class="fa fa-chevron-up"></i></a>
