<style type="text/css">
    option.danger {background-color: #E74A3B; color: white; font-size: 20px}
    option.warning {background-color: #F6C23E; color: white; font-size: 20px}
    option.primary {background-color: #4E73DF; color: white; font-size: 20px}
    option.success {background-color: #1CC88A; color: white; font-size: 20px}
    option.info {background-color: #17A2B8; color: white; font-size: 20px}
    option.secondary {background-color: #6C757D; color: white; font-size: 20px}
    option.light {background-color: #F8F9FA; color: black; font-size: 20px}
    option.dark {background-color: #343A40; color: white; font-size: 20px}

</style>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-4">

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

<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add Status Perangkat</a>

<table class="table table-hover display table-responsive" id="example1" style="width: 100%">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Status</th>
            <th scope="col">Flag</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($status as $s) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?php echo $s['status'] ?></td>
                <td><h4><span class="badge badge-<?php echo $s['flag'] ?>"><?php echo $s['flag'] ?></span></h4></td>
                <td>
                    <a href="" data-toggle="modal" data-target="#edit-data<?php echo $s['id_status'];?>" class="badge badge-success">edit</a>
                    <a href="<?php echo base_url() ?>data/hapus/<?php echo $s['id_status'] ?>" class="badge badge-danger">delete</a>
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
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add Status Perangkat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                 <span aria-hidden="true">&times;</span>                                                                                                                                                             
             </button>
         </div>
         <form action="<?= base_url('data/inputstatus') ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="status" name="status" aria-describedby="emailHelp" placeholder="Status Perangkat">
                </div>
                <div class="form-group">
                    <select name="flag" id="flag" class="form-control">
                        <option value= "">------Choose Color-------</option>
                        <option class="danger" value= "danger">Danger</option>
                        <option class="warning" value= "warning">Warning</option>
                        <option class="primary" value= "primary">Primary</option>
                        <option class="info" value= "info">Info</option>
                        <option class="success" value= "success">Success</option>
                        <option class="secondary" value= "secondary">Secondary</option>
                        <option class="light" value= "light">Light</option>
                        <option class="dark" value= "dark">Dark</option>
                    </select>
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

<!-- Modal Edit -->
<?php foreach ($status as $s) : ?> 
    <div class="modal fade" id="edit-data<?php echo $s['id_status'] ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Edit Status</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('data/edit_status') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-xs-8">
                                <input name="id_status" value="<?php echo $s['id_status'] ?>" class="form-control" type="text" placeholder="id_status" hidden>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3" >Status</label>
                            <div class="col-xs-8">
                                <input name="status" value="<?php echo $s['status'] ?>" class="form-control" type="text" placeholder="status" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info">Update</button>
                            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            </div>
    <?php endforeach;?> 
<!--End Modal Edit -->