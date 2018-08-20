<body class="bg-dark">
    <?php
        if (isset($this->session->userdata['logged_in'])) {
        
            header("location: http://localhost/admin/user_authentication/user_login_process");
        }
    ?>
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="<?php echo base_url() ?>images/logo.png" alt="">
                </a>
            </div>
            <div class="login-form">
                <!--<form> -->
                <?php echo form_open('user_authentication/user_login_process'); ?>

                    <!--error massage -->
                    <?php
                        echo "<div class='error_msg'>";
                        if (isset($error_message)) {
                            echo $error_message;
                        }
                        echo validation_errors();
                        echo "</div>";
                    ?>    
                    <!--close error massage -->
                    
                    <!--display massage -->
                    <?php
                        if (isset($logout_message)) {
                            echo "<div class='message'>";
                            echo $logout_message;
                            echo "</div>";
                        }
                    ?>
                    <?php
                        if (isset($message_display)) {
                            echo "<div class='message'>";
                            echo $message_display;
                            echo "</div>";
                        }
                    ?>
                    <!--display massage -->

                    <div class="form-group">
                        <label>Username</label>
                        <!--<input type="email" class="form-control" placeholder="Email"> -->
                        <input type="text" name="username" id="name" placeholder="username" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <!-- <input type="password" class="form-control" placeholder="Password"> -->
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required/>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                        <label class="pull-right">
                            <a href="#">Forgotten Password?</a>
                        </label>

                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" value=" Login ">Sign in</button>
                    <!--<input type="submit" value=" Login " name="submit"/> -->
                    
                    <div class="social-login-content">
                      <div class="social-button">
                            <div class="btn fb-login-button"  data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true" onlogin="checkLoginState();"></div>
                            <!-- 
                            <button type="button" class="btn social facebook btn-flat btn-addon mb-3 " onlogin="checkLoginState();"><i class="ti-facebook"></i>Sign in with facebook</button>
                            <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            -->
                        </div>
                    </div>
                    <div class="register-link m-t-15 text-center">
                        <p>Don't have account ? <a href="<?php echo base_url() ?>user_authentication/user_registration_show"> Sign Up Here</a></p>
                    </div>
                 <!--</form> -->
                 <?php echo form_close(); ?>
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
