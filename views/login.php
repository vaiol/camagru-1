<?php
    require_once (ROOT.'/views/header.php');
?>
<main class="backoffice">
    <div class="container">

        <div class="forheader"></div>

        <div class="transform-container">
            <div class="big-header">
                <h1>CAMAGRU member login</h1>
            </div>
        </div>

        <div class="transform-container">
            <form method="post" name="login-form" id="login-form" onsubmit="return login()">
                <div class="row">
                    <div class="new">
                        <div class="medium-1 medium-offset-1 columns">
                            <h2>New Member</h2>
                        </div>
                        <div class="medium-0 medium-offset-1 columns">
                            <a href="sign-up" class="button button--full button--blue-on-green">
                            <span>
                                <strong>Create account</strong>
                            </span>
                            </a>
                        </div>
                    </div>

                    <div class="registered">
                        <div class="medium-1 medium-offset-0 columns">
                            <h2>Registered Member</h2>
                        </div>

                        <div class="medium-1 medium-offset-2 columns">
                            <label for="email">E-mail</label>
                            <input id="email" name="email" type="email" value="" class="cleaninput border-bottom" required="">
                        </div>

                        <div class="medium-1 medium-offset-2 columns">
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" value="" class="cleaninput border-bottom" required="">
                        </div>

                        <div class="medium-1 medium-offset-2 columns">
                            <p>
                                <a href='forgot'>Forgot your password?</a>
                            </p>
                        </div>

                        <div class="medium-1 medium-offset-2 columns">
                            <a href='login'>
                                <button class="button submit" type="submit" value="Login">
                                    <span>
                                        <strong>Login</strong>
                                    </span>
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</main>

<?php
    require_once (ROOT.'/views/footer.php');
?>