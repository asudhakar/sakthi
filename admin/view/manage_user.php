<?php include_once 'header.php'; ?>
<div class="home_header">
	<h1>Manage Users</h1>
	<hr style="border-top: 1px solid #191616">
</div>
<div class="home_content">
  
<?php
  include_once '../app/manage_user.php';
  $total_user_details = get_total_user_details();
  if($total_user_details != "empty"){
?>

<table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Catagory</th>
        <th>Company Name</th>
        <th>Total Refered Count</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $html_content = "";
    foreach ($total_user_details as $key => $user_details) {
      $html_content = $html_content."<tr><td><a href='user_referals.php?id=".$user_details['id']."'>".$user_details['username']."</a></td><td>".$user_details['email']."</td><td>".$user_details['catagory']."</td><td>".$user_details['institution/company']."</td><td>".$user_details['total_refered_count']."</td><td><a href='../app/option.php?id=".$user_details['id']."&option=edit'>Edit</a> <a href='../app/option.php?id=".$user_details['id']."&option=delete'>Delete</a></tr>";
    }
    echo $html_content;
    ?>

    </tbody>
  </table>

    

<?php
  }else{
    echo '<h3>No user record found yet wanted to <a href="add_user.php">add</a>?</h3>';
  }
?>

</div>

<?php include_once 'footer.php'; ?>