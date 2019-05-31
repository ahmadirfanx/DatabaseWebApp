<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
 <?php 
$con = mysqli_connect('localhost', 'root' , '', 'admin');
if($con==false)
{
    echo " Connection failed";
}



if (isset($_POST['search'])) {
     ?>
      <div id="page-inner">
        <?php 
        $passid="";
         $passid=$_POST['pid'];
    $sql= "Select * from passenger where passenger_id='$passid'";
    $result = $con->query($sql);
    if ($result->num_rows > 0){
      $row = $result->fetch_assoc();
        ?>

     <table class="table table-striped table-bordered table-hover"style="width:100%; margin-left: 40%; ">
     <thead>
         <tr>
                                    <th>Passenger ID</th>
                                    <th>Private ID</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Contact no.</th>
                                    <th>Address</th>
                                    
                                </tr>
                            </thead>
                             <tbody>
                                <tr>
                                    <td><?php echo $row['passenger_id']; ?> </td>
                                    <td><?php echo $row ['private_id']; ?> </td>
                                    <td><?php echo $row ['First_name']; ?> </td>
                                    <td><?php echo $row ['Last_name']; ?> </td>
                                    <td><?php echo $row ['contact_no']; ?> </td>
                                    <td><?php echo $row ['address']; ?> </td>
                                </tr>
                    </tbody>
                  </table>
                </div>
                    <?php
    } 
    else {
      ?>
      <div class="panel panel-info" style="width: 120%; margin-left: 30%;">
                        <div class="panel-heading">
                           No passengers found.
                        </div >
                      </div>

      <?php
        
    }
}
?>
</div>
</body>
</html>