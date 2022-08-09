<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-primary" href="<?php echo base_url('project/create/'); ?>">
            Add New Student
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>

        <table class="table table-bordered">
            <tr>
                <th>Batch ID</th>
                <th>Course ID</th>
                <th>Student Name</th>
                <th>Student ID</th>
                <th>Student NIC</th>
                <th>Student Phone</th>
                <th width="240px">Action</th>
            </tr>

            <?php foreach ($projects as $student) { ?>
                <tr>
                    <td><?php echo $student->Batch_id; ?></td>
                    <td><?php echo $student->Course_id; ?></td>
                    <td><?php echo $student->Student_name; ?></td>
                    <td><?php echo $student->Student_id; ?></td>
                    <td><?php echo $student->Student_nic; ?></td>
                    <td><?php echo $student->Student_phone; ?></td>
                    <td>
                        <a class="btn btn-outline-info" href="<?php echo base_url('project/show/' . $student->ID) ?>">
                            Show
                        </a>
                        <a class="btn btn-outline-success" href="<?php echo base_url('project/edit/' . $student->ID) ?>">
                            Edit
                        </a>
                        <a class="btn btn-outline-danger" href="<?php echo base_url('project/delete/' . $student->ID) ?>">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>