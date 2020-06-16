<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3><strong><span></span> <?= $title ?></strong></h3>
    <!-- Main content -->

    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- Custom Tabs -->
                <div class="box-body">
                    <div class="card">
                        <div class="card-header d-flex p-0">
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <?php
                                if($this->session->flashdata('successDelete')){
                                    echo
                                    '<div class="alert alert-info">'.
                                    $this->session->flashdata('successDelete').'</div>';
                                } ?>
                                <br>
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
                                <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add OPD Data</a>
                                <div>
                                    <div class="table-wrapper-scroll-y table-responsive my-custom-scrollbar">
                                        <table class="table table-bordered table-striped mb-0  table-responsive"  id="example2">
                                            <thead>
                                                <tr>
                                                 <th scope="col" class="text-center">#</th>
                                                 <th class="text-center" scope="col">OPD_id</th>
                                                 <th class="text-center" scope="col">OPD</th>
                                                 <th class="text-center" scope="col">Nama OPD</th>
                                                 <th class="text-center" scope="col">Alamat</th>
                                                 <th class="text-center" scope="col">Email</th>
                                                 <th class="text-center" scope="col">Kontak</th>
                                                 <th class="text-center" scope="col">Action</th>

                                             </tr>
                                         </thead>
                                         <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($opd as $o) : ?>
                                                <tr>
                                                    <th scope="row" class="text-center"><?= $i; ?></th>
                                                    <td class="text-center"><?php echo $o['id'] ?></td>
                                                    <td class="text-center"><?php echo $o['opd'] ?></td>
                                                    <td class="text-center"><?php echo $o['opd_nama'] ?></td>
                                                    <td class="text-center"><?php echo $o['alamat'] ?></td>
                                                    <td class="text-center"><?php echo $o['email'] ?></td>
                                                    <td class="text-center"><?php echo $o['kontak'] ?></td>
                                                    <td class="text-center">
                                                        <a href="" data-toggle="modal" data-target="#edit-data<?php echo $o['id'];?>" class="badge badge-success">edit</a>
                                                        <a href="<?php echo base_url() ?>data/hapusopd/<?php echo $o['id'] ?>" class="badge badge-danger">delete</a>
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
                </div>
            </div>
        </section>
    </div>

    <!-- Modal Add-->
    <div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Add OPD Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?= base_url('data/opd') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="opd" name="opd" aria-describedby="emailHelp" placeholder="Nama OPD">
                    </div>
                    <!-- <div class="form-group">
                        <input type="text" class="form-control" id="opd_nama" name="opd_nama" aria-describedby="emailHelp" placeholder="Nama OPD Lengkap">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="Alamat OPD">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email OPD">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kontak" name="kontak" aria-describedby="emailHelp" placeholder="Kontak OPD">
                    </div> -->
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
<?php foreach ($opd as $o) : ?> 
    <div class="modal fade" id="edit-data<?php echo $o['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Edit Data OPD</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('data/edit_opd') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-xs-8">
                                <input name="id" value="<?php echo $o['id'] ?>" class="form-control" type="text" placeholder="id" hidden>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3" >OPD</label>
                            <div class="col-xs-8">
                                <input name="opd" value="<?php echo $o['opd'] ?>" class="form-control" type="text" placeholder="opd" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3" >Nama OPD Lengkap</label>
                            <div class="col-xs-8">
                                <input name="opd_nama" value="<?php echo $o['opd_nama'] ?>" class="form-control" type="text" placeholder="opd" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-xs-3" >Alamat OPD</label>
                            <div class="col-xs-8">
                                <input name="alamat" value="<?php echo $o['alamat'] ?>" class="form-control" type="text" placeholder="Alamat OPD" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-xs-3" >Email OPD</label>
                            <div class="col-xs-8">
                                <input name="email" value="<?php echo $o['email'] ?>" class="form-control" type="text" placeholder="Email OPD" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-xs-3" >Kontak OPD</label>
                            <div class="col-xs-8">
                                <input name="kontak" value="<?php echo $o['kontak'] ?>" class="form-control" type="text" placeholder="Kontak OPD" required>
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
