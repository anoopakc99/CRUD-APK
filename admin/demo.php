<?php
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $query =  mysqli_query($db_conn, "SELECT * FROM manage_category where id='$id'");
  $class = mysqli_fetch_array($query);
  $category_name = $class['category_name'];
  $category_code = $class['category_code'];
  $status = $class['status'];
if(isset($_POST['update']))
{
      $category_name = $_POST['category_name'];
      $category_code = $_POST['category_code'];
      $status = $_POST['status'];
      $category_image =rand(10000,99999).'_'.$_FILES['category_image']['name'];
      $dist='media/category-image/'.$category_image;
      move_uploaded_file($_FILES['category_image']['tmp_name'], $dist);
      $query = "UPDATE manage_category SET category_name='$category_name', category_code='$category_code', category_image='$category_image', status='$status' WHERE id ='$id'";
      $edit = mysqli_query($db_conn,$query);
      echo "<script> alert('data updated succesfully') </script>";
      header('Location: category-table.php');
}
}
?>


<form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                                  <div class="col-6">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" name="category_name" class="form-control" value="<?php echo "$category_name" ?>" placeholder="Category Name.." required>
                                  </div>
                                
                                  <div class="col-6">
                                    <label class="form-label">Category Code</label>
                                    <input type="text" name="category_code" class="form-control" value="<?php echo "$category_code" ?>" placeholder="Category Code.." required>
                                  </div>
                                  <div class="col-6">
                                  <label class="form-label">Category Image</label>
                                    <input type="file" class="form-control" name="category_image" value="<?php echo "$category_image" ?>" id="category_image" required>
                                  </div>
                                  <div class="col-6">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status" aria-label="Default select example" required>
                                      <option selected value="<?php echo "$status"; ?>"> Status</option>
                                      <option value="1" <?php if($status == '1'){echo "selected";} ?> >Enable</option>
                                      <option value="2" <?php if($status == '2'){echo "selected";} ?>>Disable</option>
                                    </select>
                                  </div>


                                  
                              </div>
                            </div>
                         </div>
                       </div>
                       <!--end row-->
                     </div>
                    </div>
                 </div>
              </div><!--end row-->


              <div class="ms-auto">
                <button type="button" class="btn btn-secondary" name="reset">Reset</button>
                <?php if(isset($_GET['id']))
                {?>
                <button type="submit" class="btn btn-primary" name="update">Update</button>
                <?php } else { ?>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <?php } ?>
                