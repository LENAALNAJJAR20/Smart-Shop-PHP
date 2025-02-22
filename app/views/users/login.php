<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container marginlogin" style="margin-top: 130px; margin-bottom: 80px;">
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <?php flash('register_success') ; ?>
            <h2>login</h2>
            <p>pleas fill in your credential in log in </p>

            <form action="<?php echo URLROOT ?>/users/login" method="post">

                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input
                            type="email"
                            name="email"
                            class="form-control form-control-lg
                                   <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ?>"
                            value="<?php echo $data['email'] ?>"
                    />
                    <span class="invalid-feedback"><?php echo $data['email_err']?></span>
                </div>
                <div class="form-group">
                    <label for="password">Password: <sup>*</sup></label>
                    <input
                            type="password"
                            name="password"
                            class="form-control form-control-lg
                                   <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '' ?>"
                            value="<?php echo $data['password'] ?>"
                    />
                    <span class="invalid-feedback"><?php echo $data['password_err']?></span>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="login" class="btn btn-primary btn-block"/>
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT ?>/users/register" class="btn btn-light btn-block">No account? Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div></div>