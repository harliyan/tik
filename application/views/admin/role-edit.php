<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <?= form_open_multipart('admin/roleEdit'); ?>
                <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" class="form-control" id="role" name="role" value="<?= $role['role']; ?>">
                    <?php echo form_error('role', '<p class="text-danger pl-3">', ' </p>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit Role</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->