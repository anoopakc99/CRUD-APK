<?php
include('../include/config.php');
include('header/top.php'); 
include('header/navbar.php'); 
 
 


?>
<div class="container">
 <div class="row">
                <div class="col-md-12">
                
                    <h2 class="text-center text-white bg-primary mt-5">Student Details</h2><hr>
                </div>
                <div align="right">
                        <a href="addclass.php" class="btn btn-outline-primary ">Add Student</a><hr>
                    </div>
                <table class="table table-border" id="table2excel">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sr No</th>
                                <th>Class</th>
                                <th>Student Name</th>
                                <th>Student Age</th>
                                <th>Student Phone</th>
                                <th>Student Subject</th>
                                <th>
                                    <i class="fa fa-pencil-square-o"></i>
                                </th>
                                <th>
                                <i class="fa fa-trash-o"></i>
                                </th>
                               
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                 $count =1;
              
            
                 $query =  mysqli_query($db_conn, 'SELECT * FROM anp');
                   while ($class = mysqli_fetch_object($query)) {?>
                  
                   <tr>
                   <td><?=$count++?></td>
                       <td><?=$class->class?></td>
                       <td><?=$class->name?></td>
                       <td><?=$class->date?></td>
                       <td><?=$class->phone?></td>
                       <td><?=$class->medium?></td>
             
                                <td>
                                <a href="editclass.php?id=<?php echo $class->id;?>" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>
 
                            </td>
                            <td>
                            <a href="delete.php?id=<?php echo $class->id;?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o"></i></a>
                            </td>
                            </tr>
                            <?php } ?>   
                        </tbody>
                    </table>
                
                   <script>
    $(document).ready(function(){
        $('#table2excel').DataTable();
    });
 </script>   

     
    