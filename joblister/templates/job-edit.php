<?php include 'inc/header.php'; ?>
    <h2 class="page-header my-5">Edit Job Listing</h2>
    <form action="edit.php?id=<?php echo $job->id; ?>" method="POST">
        <div class="form-group">
            <label for="">Company</label>
            <input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select type="text" class="form-control" name="category_id">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <?php if($job->category_id == $category->id): ?>
                        <option value="<?php echo $category->id; ?>" selected>
                            <?php echo $category->name; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $category->id; ?>">
                            <?php echo $category->name; ?>
                        </option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Job Title</label>
            <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" name="description"><?php echo $job->description; ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Location</label>
            <input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
        </div>
        <div class="form-group">
            <label for="">Salary</label>
            <input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
        </div>
        <div class="form-group">
            <label for="">Contact User</label>
            <input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>">
        </div>
        <div class="form-group">
            <label for="">Contact Email</label>
            <input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="Submit" name="submit" value="<?php echo $job->email; ?>">
    </form>
<?php include 'inc/footer.php'; ?>