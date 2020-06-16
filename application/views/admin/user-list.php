<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-12">

            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <!-- <? $this->session->flashdata('message'); ?> -->

            <?php if($this->session->flashdata('success')){ ?>  
             <div class="alert alert-success">  
               <a href="#" class="close" data-dismiss="alert">&times;</a>  
               <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>  
           </div>  
           <?php } else if($this->session->flashdata('error')){ ?>  
             <div class="alert alert-danger">  
               <a href="#" class="close" data-dismiss="alert">&times;</a>  
               <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>  
           </div>  
           <?php } else if($this->session->flashdata('warning')){ ?>  
             <div class="alert alert-warning">  
               <a href="#" class="close" data-dismiss="alert">&times;</a>  
               <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>  
           </div>  
            <?php } else if($this->session->flashdata('info')){ ?>  
             <div class="alert alert-info">  
               <a href="#" class="close" data-dismiss="alert">&times;</a>  
               <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>  
            </div>  
            <?php } ?>  

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New User</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>
                        <th scope="col">Role</th>
                        <th scope="col">Is Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($userlists as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?php echo $r['name'] ?></td>
                            <td><?php echo $r['email'] ?></td>
                            <td><img src="<?php echo base_url('assets/img/profile/'); ?><?php echo $r['image'] ?>" height="42" width="42"></td>
                            <td>
                                <?php if($r['role_id'] == 1)
                                {
                                  echo '<div class="badge badge-danger">Administrator</div>';
                              } 
                              else if ($r['role_id'] == 2){
                                  echo '<div class="badge badge-success">Member</div>';
                              }
                              ?>

                          </td>
                          <td><?php echo $r['is_active'] ?></td>
                          <td>
                            <a href="<?php echo base_url() ?>admin/delete_menu/<?php echo $r['id'] ?>" class="badge badge-warning">reset</a>
                            <a href="<?php echo base_url() ?>admin/hapus/<?php echo $r['id'] ?>" class="badge badge-danger">delete</a>
                        </td>

                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/userlist') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <select name="role_id" id="role_id" class="form-control">
                            <option value="">Select Role</option>
                            <?php foreach ($userlist as $u) : ?>
                                <option value="<?php echo $u['role_id']; ?>"><?php echo $u['role']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            Image : 
                            <br>
                            <img src="<?php echo base_url('assets/img/profile/'); ?><?php echo $r['image'] ?>" height="100" width="100" class="mt-1">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" value="1" id="is_active" name="is_active" checked>
                        <label class="form-check-label" for="is_active">Active?</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
</div>
</div>
<!-- End Modal