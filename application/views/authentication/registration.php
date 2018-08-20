

<body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="<?php echo base_url() ?>images/logo.png" alt="">
                </a>
            </div>
            <div class="login-form">
                <?php echo form_open('user_authentication/new_user_registration'); ?>

                <?php
                  echo "<div class='error_msg'>";
                  echo validation_errors();
                  echo "</div>";
                ?>

                <!--error massage -->
                <?php
                        echo "<div class='error_msg'>";
                        if (isset($message_display)) {
                            echo $message_display;
                        }
                        echo validation_errors();
                        echo "</div>";
                ?>    
                <!--close error massage -->

                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control" placeholder="User Name" required>
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" required> <a href="https://termsfeed.com/privacy-policy/b508791e5047c11300e0814a1d6b9d1b">Agree the terms and policy</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                    <div class="social-login-content">
                        <div class="social-button">
                            <div class="btn fb-login-button"  data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true" onlogin="checkLoginState();"></div> 
                            <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Register with facebook</button>
                            <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Register with twitter</button>
                        </div>
                    </div>
                    <div class="register-link m-t-15 text-center">
                        <p>Already have account ? <a href="<?php echo base_url() ?>"> Sign in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="status">
</div>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/facebooklogin.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>
</html>
