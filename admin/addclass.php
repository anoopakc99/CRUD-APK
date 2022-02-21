<?php
include('../include/config.php');
include('header/top.php'); 
include('header/navbar.php');
?>
<div class="container">
 <div class="row">
                <div class="col-md-12">
                
                    <h2 class="text-center text-white bg-primary mt-5">Add  Information</h2><hr>
                </div>
                
                    <form action="" method="POST" enctype="multipart/form-data">
                    <fieldset class="border border-secondary p-3 form-group">
                  <legend class="d-inline w-auto h6">Student Information</legend>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class=" col-form-label text-danger">Student Name</label>
                          <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="">DOB</label>
                          <input type="date" required class="form-control" placeholder="DOB" name="date" required>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="">Student Mobile</label>
                          <input type="text" class="form-control" placeholder="Mobile" name="phone" required>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="">Student Subject</label>
                          <select name="medium" class="form-control"  required>
                                    <option value="Hindi">Hindi</option>
                                    <option value="English">English</option>
                                    <option value="CBSC">CBSC</option>
                                </select>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="">Student Class</label>
                          <select name="class" class="form-control required">
                                    <option value="Class1">Class1</option>
                                    <option value="Class2">Class2</option>
                                    <option value="Class3">Class3</option>
                                    <option value="Class4">Class4</option>
                                    <option value="Class5">Class5</option>
                                    <option value="Class6">Class6</option>
                                    <option value="Class7">Class7</option>
                                    <option value="Class8">Class8</option>
                                    <option value="Class9">Class9</option>
                                    <option value="Class10">Class10</option>
                               </select>
                        </div>
                      </div>
                      
                           
                           <div class="offset-sm- col-sm-3">
                             <button class="btn btn-primary btn-block " name="submit" type="submit">Add Student</button>
                           </div>
                     
                    
      
      </div>
                     </div>
                     
</div>
      <?php
      if(isset($_POST['submit'])){
        $class = $_POST['class'];
        $name = $_POST['name'];
        $date = $_POST['date'];
        $phone = $_POST['phone'];
        $medium = $_POST['medium'];

        $query= mysqli_query($db_conn, "INSERT INTO anp (class,name,date,phone,medium) VALUE ('$class', '$name', '$date', '$phone', '$medium')") or die('DB error');
        if ($query) {
           echo "<script>alert('Welcome , You have Added a new Student !')</script>";
           echo "<script>window.open('desboard.php', '_self')</script>";
        }
      }
      
      ?>