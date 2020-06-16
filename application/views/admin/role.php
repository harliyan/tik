<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Menu</a>

            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

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

            <!-- <? $this->session->flashdata('message'); ?> -->

           

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?php echo $r['role'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-success">access</a>
                                <a href="<?= base_url('admin/roleEdit/') . $r['id']; ?>" class="badge badge-warning">edit</a>
                                <a href="<?= base_url() ?>admin/hapusRole/<?php echo $r['id'] ?>" class="badge badge-danger">delete</a>
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
                <h5 class="modal-title" id="newMenuModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                   <span aria-hidden="true">&times;</span>                                                                                                                                                             
               </button>
           </div>
           <form action="<?= base_url('admin/role') ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="role" name="role" aria-describedby="emailHelp" placeholder="Role">
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
<!-- End Modal -->