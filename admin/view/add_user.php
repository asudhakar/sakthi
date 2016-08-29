<?php include_once 'header.php'; ?>
        <h2 style="text-align: center;">Add User</h2>
        <?php
          if(isset($_GET['status'])){
            $status = $_GET['status'];
          }else{
            $status = "";
          }
          switch ($status) {
            case 'inserted':
              echo '<div class="alert alert-success"><strong>Success!</strong> New user added successfully.</div>';
              break;
            
            case 'error':
              echo '<div class="alert alert-warning"><strong>Sorry!</strong> Something went wrongly.</div>';
              break;
            default:
              echo "";
              break;
          }
          
        ?>
        <div>
          <form method="post" action="../app/add_user.php">
            <input type="textbox" name="username" class="form-control" placeholder="user name" required autofocus><br/>
            <input type="email" name="email" class="form-control" placeholder="email" required autofocus><br/>
            <input type="password" name="password" class="form-control" placeholder="password" required><br/>
            <input type="textbox" name="catagory" class="form-control" placeholder="catagory" required><br/>
            <input type="textbox" name="institution/company" class="form-control" placeholder="institution/company" required><br/>
            <p style="text-align:center;">
              <button type="submit" class="btn btn-success" style="width: 208px;">Add User</button>
            </p>
          </form>
        </div> 
<?php include_once 'footer.php'; ?>