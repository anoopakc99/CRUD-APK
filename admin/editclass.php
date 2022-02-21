<?php
include('../include/config.php');
include('header/top.php'); 
include('header/navbar.php');
?>

<?php
      $ids=$_GET['id'];
      $query =  mysqli_query($db_conn, "SELECT * FROM anp where id='$ids'");
      $class = mysqli_fetch_array($query);
      $name = $class['name'];
      $date = $class['date'];
      $phone = $class['phone'];
      $medium = $class['medium'];
       


    if(count($_POST)){
        extract($_POST);
        extract($_GET);


        $query= mysqli_query($db_conn, "UPDATE  anp SET class='$class', name='$name', date='$date', phone='$phone', medium='$medium' WHERE id='$id' ") or die('DB error');
        if ($query) {
           echo "<script>alert('Welcome , You have Update  Student !')</script>";
           echo "<script>window.open('desboard.php', '_self')</script>";
        }
    }

      ?>

<div class="container">
 <div class="row">
                <div class="col-md-12">
                
                    <h2 class="text-center text-white bg-primary mt-5">Update Details</h2><hr>
                </div>
                
                    <form action="" method="POST" enctype="multipart/form-data">
                  

<fieldset class="border border-secondary p-3 form-group">
                  <legend class="d-inline w-auto h6">Student Information</legend>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class=" col-form-label text-danger">Student Name</label>
                          <input type="text" class="form-control" placeholder="Full Name" name="name" value="<?php echo $name ?>">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="">DOB</label>
                          <input type="date" required class="form-control" placeholder="DOB" name="date" value="<?php echo $date ?>">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="">Student Mobile</label>
                          <input type="text" class="form-control" placeholder="Mobile" name="phone" value="<?php echo $phone ?>">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="">Student Subject</label>
                          <select name="medium"  class="form-control"  required>
                                    <option value="Hindi"<?php if($medium == 'Hindi'){echo "selected";} ?>>Hindi</option>
                                    <option value="English"<?php if($medium == 'English'){echo "selected";} ?>>English</option>
                                    <option value="CBSC"<?php if($medium == 'CBSC'){echo "selected";} ?>>CBSC</option>
                                </select>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="">Student Class</label>
                          <select name="class" class="form-control required">
                                    <option value="Class1"<?php if($class == 'Class1'){echo "selected";} ?>>Class1</option>
                                    <option value="Class2"<?php if($class == 'Class2'){echo "selected";} ?>>Class2</option>
                                    <option value="Class3"<?php if($class == 'Class3'){echo "selected";} ?>>Class3</option>
                                    <option value="Class4"<?php if($class == 'Class4'){echo "selected";} ?>>Class4</option>
                                    <option value="Class5"<?php if($class == 'Class5'){echo "selected";} ?>>Class5</option>
                                    <option value="Class6"<?php if($class == 'Class6'){echo "selected";} ?>>Class6</option>
                                    <option value="Class7"<?php if($class == 'Class7'){echo "selected";} ?>>Class7</option>
                                    <option value="Class8"<?php if($class == 'Class8'){echo "selected";} ?>>Class8</option>
                                    <option value="Class9"<?php if($class == 'Class9'){echo "selected";} ?>>Class9</option>
                                    <option value="Class10"<?php if($class == 'Class10'){echo "selected";} ?>>Class10</option>
                               </select>
                        </div>
                      </div>
                      
                           
                           <div class="offset-sm- col-sm-3">
                             <button class="btn btn-primary btn-block " name="submit" type="submit">Update Student</button>
                           </div>
                     
                    
      
      </div>
                     </div>

