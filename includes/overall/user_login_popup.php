<div class="window-popup login-popup">
    <a href="#" class="popup-close js-popup-close cd-nav-trigger">
        <svg class="utouch-icon utouch-icon-cancel-1"><use xlink:href="#utouch-icon-cancel-1"></use></svg>
    </a>

    <div class="user-login-popup">
        <h5>Authentication</h5>
        <p>User Login and Registration Section.</p>
        <form class="contact-form" method="post" action="">
            <div class="with-icon">
                <input name="username" placeholder="Username or Email" type="text" required="required">
                <svg class="utouch-icon utouch-icon-user"><use xlink:href="#utouch-icon-user"></use></svg>
            </div>

            <div class="with-icon">
                <input name="password" placeholder="Password" type="password" required="required">
                <svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
            </div>

            <button class="btn btn--green btn--with-shadow full-width">
                Login
            </button>

            <div class="full-width" style="margin-top: 50px">
                Don't have an account?<br>
                <a href="#" class="btn btn--green btn--with-shadow js-open-register-popup">
                    Click here to Register
                </a>
            </div>

        </form>
    </div>
</div>


<!-- User Register Popup -->
<?php include_once 'includes/overall/user_register_popup.php'; ?>