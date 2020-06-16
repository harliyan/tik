<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">

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

<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add Cluster</a>

<table class="table table-hover display table-responsive" id="example1">
    <thead>
        <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col">Cluster</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($cluster as $s) : ?>
            <tr>
                <th scope="row" class="text-center"><?= $i; ?></th>
                <td><?php echo $s['cluster'] ?></td>
                <td class="text-center">
                    <a href="" data-toggle="modal" data-target="#edit-data<?php echo $s['id'];?>" class="badge badge-success">edit</a>
                    <a href="<?php echo base_url() ?>data/hapuscluster/<?php echo $s['id'] ?>" class="badge badge-danger">delete</a>
                </td>

            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>
</div>
</div>
<!-- End of Main Content -->

<!-- Modal Add-->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add Cluster</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                   <span aria-hidden="true">&times;</span>                                                           
               </button>
           </div>
           <form action="<?= base_url('data/cluster') ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="cluster" name="cluster" aria-describedby="emailHelp" placeholder="Cluster">
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
<!-- End Modal Add-->

<!-- Modal Edit -->
<?php foreach ($cluster as $s) : ?> 
    <div class="modal fade" id="edit-data<?php echo $s['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Edit Cluster</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('data/edit_cluster') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-xs-8">
                                <input name="id" value="<?php echo $s['id'] ?>" class="form-control" type="text" placeholder="id" hidden>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3" >Cluster</label>
                            <div class="col-xs-8">
                                <input name="cluster" value="<?php echo $s['cluster'] ?>" class="form-control" type="text" placeholder="cluster" required>
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
