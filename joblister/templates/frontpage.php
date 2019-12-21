<?php include_once 'inc/header.php'; ?>



    <div class="jumbotron text-center" id="header-img">
    <h1>Find A Job</h1>
      <form action="index.php" method="GET">
        <select name="category" class="form-control" id="">
            <option value="0">Choose Category</option>
            <?php foreach($categories as $category): ?>
            <option value="<?php echo $category->id; ?>">
            <?php echo $category->name; ?>
            </option>
            <?php endforeach; ?>
        </select>
        <br>
        <button type="submit" class="btn btn-lg btn-success">Search</button>
      </form>
    </div>
  </div>

  <div class="container">
    <h2 class="mb-4"><?php echo $title; ?></h2>
    <?php foreach($jobs as $job): ?>
    <div class="row">
      <div class="col-md-10">
        <h5><?php echo $job->job_title; ?></h5>
        <p><?php echo $job->description; ?></p>
        <p><a class="btn btn-info" href="job.php?id=<?php echo $job->id; ?>" role="button">View details &raquo;</a></p>
      </div>
    </div>
    <?php endforeach; ?>
<?php include_once 'inc/footer.php'; ?>