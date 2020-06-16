<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                </div>

                                <?php echo $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Enter Email Address..." name="email" value="<?php echo set_value('email'); ?>">
                                    </div>
                                    <?php echo form_error('email', '<p class="text-danger pl-3">', ' </p>'); ?>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                    </div>
                                    <?php echo form_error('password', '<p class="text-danger pl-3">', ' </p>'); ?>
                                    <button type="submit" class="btn btn-info btn-user btn-block">
                                        Login
                                    </button>
                                   <a href="home" class="btn btn-success btn-user btn-block">Home</a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>