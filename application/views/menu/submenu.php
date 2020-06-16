<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>


            <!-- <? $this->session->flashdata('message'); ?> -->

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New Sub Menu</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Is Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subMenu as $sm) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?php echo $sm['title'] ?></td>
                            <td><?php echo $sm['menu'] ?></td>
                            <td><?php echo $sm['url'] ?></td>
                            <td><i class="<?php echo $sm['icon'] ?>"></i>  <?php echo $sm['icon'] ?></td>
                            <td>
                               <!--  <?php 
                                if ($sm['is_active'] = 1 ){
                                    echo "active";
                                } else {
                                    echo "not active";
                                }
                                ?> -->


                            <?php if($sm['is_active'] = 1 )
                              {
                                  echo '<div class="table-success">Baik</div>';
                              } 
                              
                              else if ($sm['is_active'] = 2 ){
                                  echo '<div class="table-danger">Tidak Baik</div>';
                              }
                             ?>

                              <td>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
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
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Add New Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Submenu title">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?php echo $m['id']; ?>"><?php echo $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" aria-describedby="emailHelp" placeholder="Submenu Url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" aria-describedby="emailHelp" placeholder="Submenu icon">
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
<!-- End Modal -->