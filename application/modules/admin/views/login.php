<div id="loginForm_bg" class="loginForm_bg">
    <div class="loginForm col-sm-4 col-sm-offset-4">
        <div class="row logo"><img ng-src="images/logo.png" width="300"/></div>
        <div class="row wrapper">
            <div data-ui-view>
                <div class="form-top">
                    <p>
                    <h3><i class="fa fa-3x fa-lock pull-right"></i>Login</h3>
                    Enter your username and password to log on:
                    </p>
                </div>
                <div class="form-bottom">
                    <?php
                    if (isset($result)) {
                        ?>
                        <div
                            class="alert alert-dismissible fade in <?php echo ($result['success']) ? 'alert-success' : 'alert-danger' ?>">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong><?php echo (!$result['success']) ? 'Error!' : 'Success!' ?></strong> <?php echo $result['message'] ?>
                        </div>
                        <?php
                    }
                    ?>
                    <form action="<?php echo base_url(); ?>admin/p_login/login" method='post' name='process'>
                        <div class="form-group">
                            <label class="sr-only" for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control input-lg"
                                    placeholder="Username...">
                            <span class="text-danger"><?php echo form_error('username') ?></span>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control input-lg"
                                    placeholder="Password..."/>
                            <span class="text-danger"><?php echo form_error('password') ?></span>
                        </div>
                        <div class="small">
                            <span class="pull-right"><a ui-sref="login.request-reset">Forgot your Password?</a></span>
                            <span class="text-left"><a href="<?php echo base_url() ?>admin/register">Register</a></span>
                        </div>
                        <div class="form-actions text-center">
                            <button type="submit" class="btn btn-success input-lg">Login</button>
                            <!--							<div ng-if="loginCtrl.dataLoading" class="loader"></div>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>