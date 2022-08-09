<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-info float-right" href="<?php echo base_url('project/'); ?>">
            View All Students
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('errors')) { ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('errors'); ?>
            </div>
        <?php } ?>

        <form action="<?php echo base_url('project/update/' . $project->ID); ?>" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="name">Batch_id</label>
                <input type="text" class="form-control" id="Batch_id" name="Batch_id" value="<?php echo $project->Batch_id; ?>">
            </div>
            <div class="form-group">
                <label for="name">Course_id</label>
                <input type="text" class="form-control" id="Course_id" name="Course_id" value="<?php echo $project->Course_id; ?>">
            </div>
            <div class="form-group">
                <label for="name">Student_name</label>
                <input type="text" class="form-control" id="Student_name" name="Student_name" value="<?php echo $project->Student_name; ?>">
            </div>
            <div class="form-group">
                <label for="name">Student_id</label>
                <input type="text" class="form-control" id="Student_id" name="Student_id" value="<?php echo $project->Student_id; ?>">
            </div>
            <div class="form-group">
                <label for="name">Student_nic</label>
                <input type="text" class="form-control" id="Student_nic" name="Student_nic" value="<?php echo $project->Student_nic; ?>">
            </div>
            <div class="form-group">
                <label for="name">Student_phone</label>
                <input type="text" class="form-control" id="Student_phone" name="Student_phone" value="<?php echo $project->Student_phone; ?>">
            </div>


            <button type="submit" class="btn btn-outline-primary">Update Student</button>
        </form>

    </div>
</div>