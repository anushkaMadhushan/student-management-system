<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-info float-right" href="<?php echo base_url('project'); ?>">
            View All Students
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('errors')) { ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('errors'); ?>
            </div>
        <?php } ?>
        <form action="<?php echo base_url('project/store'); ?>" method="POST">
            <div class="form-group">
                <label for="name">Batch_id</label>
                <input type="text" class="form-control" id="Batch_id" name="Batch_id">
            </div>
            <div class="form-group">
                <label for="description">Course_id</label>
                <textarea class="form-control" id="Course_id" rows="1" name="Course_id"></textarea>
            </div>
            <div class="form-group">
                <label for="name">Student_name</label>
                <input type="text" class="form-control" id="Student_name" name="Student_name">
            </div>
            <div class="form-group">
                <label for="description">Student_id</label>
                <textarea class="form-control" id="Student_id" rows="1" name="Student_id"></textarea>
            </div>
            <div class="form-group">
                <label for="name">Student_nic</label>
                <input type="text" class="form-control" id="Student_nic" name="Student_nic">
            </div>
            <div class="form-group">
                <label for="description">Student_phone</label>
                <textarea class="form-control" id="Student_phone" rows="1" name="Student_phone"></textarea>
            </div>

            <button type="submit" class="btn btn-outline-primary">Save Student</button>
        </form>

    </div>
</div>