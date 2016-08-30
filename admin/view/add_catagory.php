<?php include_once 'header.php'; ?>
<div class="home_header">
	<h1>Add Catagory</h1>
	<br>
  <?php
          if(isset($_GET['status'])){
            $status = $_GET['status'];
          }else{
            $status = "";
          }
          switch ($status) {
            case 'inserted':
              echo '<div class="alert alert-success"><strong>Success!</strong> New catagory added successfully.</div>';
              break;
            
            case 'error':
              echo '<div class="alert alert-warning"><strong>Sorry!</strong> Catagory name already present or Something went wrongly.</div>';
              break;
            default:
              echo "";
              break;
          }
          
        ?>
	<form method="post" action="../app/add_catagory.php">
    	<input type="textbox" name="catagory_name" class="form-control" placeholder="Catogory Name" required autofocus><br/>
    </form>
    <hr style="border-top: 1px solid #191616">
</div>
<div class="home_content">
	

</div>

<?php include_once 'footer.php'; ?>