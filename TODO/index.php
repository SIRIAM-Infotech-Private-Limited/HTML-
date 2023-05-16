<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
 
  $sql = "DELETE FROM `notes` WHERE `Sno` = $sno ";
  $result = mysqli_query($conn, $sql);
  
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['snoEdit'])){
   //UPDATE
  
  $Status = $_POST["statusEdit"];
  $sno =$_POST["snoEdit"];

  $sql = "UPDATE `notes` SET `Status` = '$Status' WHERE `notes`.`sno` = $sno ";
  $result =mysqli_query($conn, $sql);
}
  else{
  $Task = $_POST["Task"];
  $Priority = $_POST["priority"];
  $Status = $_POST["status"];

  $sql = "INSERT INTO `notes` ( `Task`, `Priority`, `Status`) VALUES ( '$Task', '$Priority', '$Status')";
  $result =mysqli_query($conn, $sql);

  if($result){
    $insert =True;

  }
  else{
   echo " unsuccessfull " .mysqli_error($conn);
  }
  }
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="style.css" />
  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<body>
 


<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action ="/TODO/index.php" method ="POST" >
      <input type="hidden" name= "snoEdit" id="snoEdit">
     <div class="form-group">
      <label for="Task">Task</label>
      <input  type="text" class="form-control" id ="TaskEdit" name="TaskEdit" placeholder="Task Name" disabled />
    </div>
    <div class="form-group">
      <label  for="priority">Priority </label>
      <select class="form-control" id="priorityEdit" name="priorityEdit"  disabled>
        <option disabled="" selected="" value="">Task Priority</option>
        <option value="Normal">Normal</option>
        <option value="urgent">Urgent</option>
        <option value="others">Others</option>
        
      </select>
    </div>
    <div class="form-group">
      <label  for="status">Status</label>
      <select class="form-control" id ="statusEdit" name="statusEdit"  required>
        <option disabled="" selected="" value="">Task Priority</option>
        <option value="Completed">Completed</option>
        <option value="Pending">Pending</option>
        </select>
    </div>
    <button class="btn btn-primary" name="button" type="submit">Update Task</button>
  </form>
      </div>
    </div>
  </div>
</div>
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TODO APP</a>
    </div>
   
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<form action ="/TODO/index.php" method ="POST" class="container">
    <div class="container-small-unit">
      <label class="label" for="">Task</label>
      <input class="input" type="text" id ="Task" name="Task"placeholder="Task Name" required />
    </div>
    <div class="container-small-unit">
      <label class="label" for="">Priority 
      </label>
      <select class="form-control" id="priority" name="priority"  required>
        <option disabled="" selected="" value="">Task Priority</option>
        <option value="Normal">Normal</option>
        <option value="urgent">Urgent</option>
        <option value="others">Others</option>
        
      </select>
    </div>
    <div class="container-small-unit">
      <label class="label" for="">Status
      </label>
      <select class="form-control " id ="status" name="status"  required>
        <option disabled="" selected="" value="" >Status</option>
        <option value="Completed">Completed</option>
        <option value="Pending">Pending</option>
        </select>
    </div>
    
    
    <button class="btn" name="button" type="submit">Add Task</button>
  </form>

  <div class="container" id="table">
  <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">sno</th>
      <th scope="col">Task</th>
      <th scope="col">Priority</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $sql ="SELECT * FROM `notes`" ;
    $result= mysqli_query($conn, $sql);
    $sno = 0;
    while($row= mysqli_fetch_assoc($result)){
      
      $sno =$sno + 1;
      echo "<tr>
      
      <th scope='row'>". $sno ."</th>
      <td>". $row['Task']."</td>
      <td>". $row['Priority']."</td>
      <td>". $row['Status']."</td>
      <td> <button class= 'edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> <button class= 'delete btn btn-sm btn-primary'id= d".$row['sno'].">Delete</button> </td>
       </tr>";
      
    }
    ?>

    
</tbody> 
</table>
  </div>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) =>{
        console.log("edit ", );
        tr = e.target.parentNode.parentNode;
        Task = tr.getElementsByTagName("td")[0].innerText;
        priority = tr.getElementsByTagName("td")[1].innerText;
        status= tr.getElementsByTagName("td")[2].innerText;
        console.log(Task, priority, status);
        TaskEdit.value = Task;
        priorityEdit.value = priority;
        statusEdit.value = status;
        snoEdit.value= e.target.id;
        console.log(e.target.id);
        $('#editModal').modal('toggle');
        

      })
    })
    </script>
    <script>

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) =>{
        console.log("delete ", );
        sno = e.target.id.substr(1, );
        
    
        
        if (confirm("Press a button")){
          console.log("yes");
          window.location =`/TODO/index.php?delete=${sno}`;
        }
        else{
          console.log("no");
        }
      })
    })
  </script> 

</body>

</html>