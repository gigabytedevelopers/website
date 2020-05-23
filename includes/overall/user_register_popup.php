<div class="window-popup register-popup">
    <a href="#" class="popup-close js-popup-close cd-nav-trigger">
        <svg class="utouch-icon utouch-icon-cancel-1"><use xlink:href="#utouch-icon-cancel-1"></use></svg>
    </a>

    <div class="user-register-popup">
        <h5>Authentication</h5>
        <p>User Login and Registration Section.</p>
        <form id="register-form" class="register-form" method="post">
            <div class="with-icon">
                <input id="username" name="username" placeholder="Choose your Username" type="text">
                <svg class="utouch-icon utouch-icon-user"><use xlink:href="#utouch-icon-user"></use></svg>
            </div>

            <div class="with-icon">
                <input id="company" name="company" placeholder="What is the name of your Company (if any)" type="text">
                <svg class="utouch-icon utouch-icon-team"><use xlink:href="#utouch-icon-team"></use></svg>
            </div>

            <div class="with-icon">
                <input id="first_name" name="first_name" placeholder="Enter your First Name" type="text">
                <svg class="utouch-icon utouch-icon-user"><use xlink:href="#utouch-icon-user"></use></svg>
            </div>

            <div class="with-icon">
                <input id="last_name" name="last_name" placeholder="Enter your Last Name" type="text">
                <svg class="utouch-icon utouch-icon-user"><use xlink:href="#utouch-icon-user"></use></svg>
            </div>

            <div class="with-icon">
                <input id="email" name="email" placeholder="Enter your Email Address" type="email">
                <svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
            </div>

            <div class="with-icon">
                <input id="phone" class="with-icon" name="phone" placeholder="Enter your Phone Number" type="tel">
                <svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
            </div>

            <div class="with-icon">
                <input id="password" name="password" placeholder="Choose a Strong Password" type="password">
                <svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
            </div>

            <div class="with-icon">
                <input id="password_confirm" name="password_confirm" placeholder="Confirm your Password" type="password">
                <svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
            </div>

            <button id="registerUser" class="btn btn--green btn--with-shadow full-width">
                Register
            </button>

            <div class="full-width" style="margin-top: 50px">
                Already Registered?<br>
                <a class="btn btn--green btn--with-shadow js-open-login-back-popup">
                    Click here to Login
                </a>
            </div>

        </form>
    </div>
</div>