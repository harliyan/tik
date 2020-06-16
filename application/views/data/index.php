<!-- Begin Page Content -->
<div class="container-fluid">
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
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
<!-- Custom Tabs -->
<div class="box-body">
    <div class="card">
        <div class="card-body">
            <div class="tab-content">
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                <a href="<?php $_SERVER['PHP_SELF']; ?>" class="btn btn-danger mb-3"><i class="fas fa-redo-alt"></i> Refresh</a>
                <a href="<?php $_SERVER['PHP_SELF']; ?>" class="btn btn-warning mb-3"><i class="fas fa-redo-alt"></i> Update Data</a>
                <table class="table table-hover display table-responsive" id="example2">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">Perangkat/OPD</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Cluster</th>
                            <th scope="col">Kondisi</th>
                            <th scope="col">Time</th>
                            <th scope="col">IP Address</th> 
                            <th scope="col">Jenis Konverter</th>
                            <th scope="col">#</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data as $d) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $i; ?></th>
                                <td><?php echo $d['opd'] ?></td>
                                <td><?php echo $d['alamat'] ?></td>
                                <td><?php echo $d['cluster'] ?></td>
                                <td><?php echo $d['kondisi'] ?></td>
                                <td><?php echo $d['time'] ?></td>
                                <td><?php echo $d['ip'] ?></td>
                                <td><?php echo $d['jenis_konverter'] ?></td>
                                <td class="text-center"><small><a href="" data-toggle="modal" data-target="#modal_edit<?php echo $d['id'];?>"> Show Details</a></small></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url() ?>data/editdata/<?php echo $d['id'] ?>" class="badge badge-warning">edit</a>
                                    <a href="<?php echo base_url() ?>data/hapusdata/<?php echo $d['id'] ?>" class="badge badge-danger">delete</a>

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




<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                   <span aria-hidden="true">&times;</span>                                                                                                     
               </button>
           </div>
           <form action="<?= base_url('data/cluster') ?>" method="post">
            <div class="modal-body">
               <!--  <div class="form-group">
                    <label>OPD</label>
                    <input type="text" class="form-control" id="opd" name="opd" aria-describedby="emailHelp" placeholder="Masukan Nama OPD">
                </div> -->
               <!--  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="Masukan Alamat OPD">
                </div> -->
                <div class="form-group ">
                    <label for="opd">OPD</label>
                    <select class="form-control" name="opd">
                      <?php foreach($data_opd as $do){ ?>
                        <option value="<?php echo $do->opd; ?>"><?php echo $do->opd; ?></option>';
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="cluster">Cluster</label>
                <select class="form-control" name="cluster">
                  <?php foreach($data_cluster as $dc){ ?>
                    <option value="<?php echo $dc->cluster; ?>"><?php echo $dc->cluster; ?></option>';
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="kondisi">Kondisi</label>
            <select class="form-control" name="kondisi">
                <option value="up">up</option>
                <option value="down">down</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jenis Konverter</label>
            <select class="form-control" name="kondisi">
                <option value="single">single</option>
                <option value="double">double</option>
            </select>
        </div>
        <div class="form-group">
            <label>IP Address</label>
            <input type="text" class="form-control" id="ip" name="ip" aria-describedby="emailHelp" placeholder="IP Address">
        </div>
        <div class="form-group">
            <label>Jointing1</label>
            <select class="form-control" name="kondisi">
                <option value="single">single</option>
                <option value="double">double</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jointing2</label>
            <input type="text" class="form-control" id="jointing2" name="jointing2" aria-describedby="emailHelp" placeholder="jointing2">
        </div>
        <div class="form-group">
            <label>Jointing3</label>
            <input type="text" class="form-control" id="jointing3" name="jointing3" aria-describedby="emailHelp" placeholder="jointing3">
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

<?php foreach ($data as $d) :
    $id=$d['id'];
    $opd=$d['opd'];
    ?>
    <div class="modal fade" id="modal_edit<?php echo $d['id'];?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel"><?php echo $d['opd'];?></h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/barang/edit_barang'?>">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-lg-3">
                                <b><label class="control-label col-xs-3" >Kecamatan</label></b>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <b><label class="control-label col-xs-3" >: <?php echo $d['kecamatan'];?></label></b>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -20px">
                            <div class="col-lg-3">
                                <label class="control-label col-xs-3" >Alamat</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >: <?php echo $d['alamat'];?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -20px">
                            <div class="col-lg-3">
                                <label class="control-label col-xs-3" >Cluster</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >: <?php echo $d['cluster'];?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -20px">
                            <div class="col-lg-3">
                                <label class="control-label col-xs-3" >Kondisi</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >:  
                                        <?php
                                        $kondisi = $d['kondisi'];
                                        $up = '<span class="badge badge-success">UP</span>';
                                        $down = '<span class="badge badge-danger">DOWN</span>';
                                        if ($kondisi == "up") {
                                            echo "$up";
                                        } else {
                                            echo "$down";
                                        }
                                        ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: -20px">
                                <div class="col-lg-3">
                                    <label class="control-label col-xs-3" >Konverter</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >: <?php echo $d['jenis_konverter'];?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: -20px">
                                <div class="col-lg-3">
                                    <label class="control-label col-xs-3" >IP Address</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >: <?php echo $d['ip'];?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: -20px">
                                <div class="col-lg-3">
                                    <label class="control-label col-xs-3" >Jointing</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >: <?php echo $d['jointing'];?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: -20px">
                                <div class="col-lg-3">
                                    <label class="control-label col-xs-3" >Latitude</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >: <?php echo $d['latitude'];?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: -20px">
                                <div class="col-lg-3">
                                    <label class="control-label col-xs-3" >Longitude</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >: <?php echo $d['longitude'];?></label>
                                    </div>
                                </div>
                            </div>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                  <div class="carousel-item active">
                                      <img class="d-block w-100" src="<?= base_url('uploads') ?>/<?php echo $d['foto1'];?>" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                      <img class="d-block w-100" src="<?= base_url('uploads') ?>/<?php echo $d['foto2'];?>" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                      <img class="d-block w-100" src="<?= base_url('uploads') ?>/<?php echo $d['foto3'];?>" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                      <img class="d-block w-100" src="<?= base_url('uploads') ?>/<?php echo $d['foto4'];?>" alt="First slide">
                                  </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>

