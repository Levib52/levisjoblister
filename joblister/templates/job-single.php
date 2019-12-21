<?php include_once 'inc/header.php'; ?>
    <h2 class="page-header mt-4"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)<h2>
    <h5><small>Posted By <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small></h5>
    <hr>
    <p class=""><?php echo $job->description; ?></p>
    <ul class="list-group">
        <li class="list-group-item"><strong>Company:</strong> <?php echo $job->company; ?></li>
        <li class="list-group-item"><strong>Salary:</strong> <?php echo $job->salary; ?></li>
        <li class="list-group-item"><strong>Contact Email:</strong> <?php echo $job->contact_email; ?></li>
    </ul>
    <br><br>
    <a href="index.php">Go Back</a>
    <br><br>
    <div class="well">
        <a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-primary">Edit</a>
        <form action="job.php" style="display: inline;" method="post">
            <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
    </div>
<?php include_once 'inc/footer.php'; ?>