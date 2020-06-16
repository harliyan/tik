    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?php echo set_value('name') ?>">
                                </div>
                                <?php echo form_error('name', '<p class="text-danger pl-3">', ' </p>'); ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" placeholder="Username" name="email" value="<?php echo set_value('email') ?>">
                                </div>
                                <?php echo form_error('email', '<p class="text-danger pl-3">', ' </p>'); ?>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
                                    </div>
                                </div>
                                <?php echo form_error('password1', '<p class="text-danger pl-3">', ' </p>'); ?>
                                <button type="submit" class="btn btn-info btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>