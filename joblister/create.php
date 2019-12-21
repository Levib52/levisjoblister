<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

if(isset($_POST['submit'])){
    $data = array();
    $data['job_title'] = htmlspecialchars(strip_tags($_POST['job_title']));
    $data['company'] = htmlspecialchars(strip_tags($_POST['company']));
    $data['category_id'] = htmlspecialchars(strip_tags($_POST['category_id']));
    $data['description'] = htmlspecialchars(strip_tags($_POST['description']));
    $data['location'] = htmlspecialchars(strip_tags($_POST['location']));
    $data['salary'] = htmlspecialchars(strip_tags($_POST['salary']));
    $data['contact_user'] = htmlspecialchars(strip_tags($_POST['contact_user']));
    $data['contact_email'] =htmlspecialchars(strip_tags( $_POST['contact_email']));


    if($job->create($data)){
        redirect('index.php', 'Your Job Has Been Listed', 'success');
    } else {
        redirect('index.php', 'Something Went Wrong', 'error');
    }
}

$template = new Template('templates/job-create.php');

$template->categories = $job->getCategories();

echo $template;