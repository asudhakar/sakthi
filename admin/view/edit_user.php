 <?php include_once 'header.php'; ?>
        <h2 style="text-align: center;">Edit User</h2>
        <?php
          if(isset($_GET['id'])){
            include_once '../controllers/edit_user_controller.php';
            $id = $_GET['id'];
            $user_details = get_user_all_details($id);
          }
          else{
            $id = "";
          }
          
        ?>
        <div>
          <form method="post" action="../app/edit_user.php">
            <input type="textbox" name="username" class="form-control" placeholder="user name" value = "<?php echo $user_details[0]['username']; ?>" required autofocus><br/>
            <input type="email" name="email" class="form-control" placeholder="email" value = "<?php echo $user_details[0]['email']; ?>" required autofocus><br/>
            <input type="password" name="password" class="form-control" placeholder="password" value = "<?php echo $user_details[0]['password']; ?>" required><br/>
              <?php 
                include_once '../controllers/add_user_controller.php';
                $catagory_options = get_catagory_options();
              ?>
            <select name="catagory" placeholder="catagory" class="form-control" required>
                <?php 
                  $total_html="";
                  foreach ($catagory_options as $key => $catagory_option) {
                    if($catagory_option['catagory_name'] == $user_details[0]['catagory']){
                      $total_html = $total_html."<option selected='selected'>".$catagory_option['catagory_name']."</option>";
                    }else{
                      $total_html = $total_html."<option>".$catagory_option['catagory_name']."</option>";
                    }
                  }
                  echo "$total_html";

                 ?>
            </select><br/>

            <input type="textbox" name="institution/company" class="form-control" value = "<?php echo $user_details[0]['institution/company']; ?>" placeholder="institution/company" required><br/>
            <p style="text-align:center;">
              <button type="submit" class="btn btn-success" style="width: 208px;">Update User</button>
            </p>
          </form>
        </div> 
        
<?php include_once 'footer.php'; ?>
  