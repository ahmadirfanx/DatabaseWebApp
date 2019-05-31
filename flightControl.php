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

$sql = "SELECT * from booked";
$result = $con->query($sql);


if ($result->num_rows > 0) 
{
    ?>
       <div class="panel panel-info" style="width: 130%; margin-left: 25%;">
                        <div class="panel-heading">
                           List of all bookings 
                        </div >
                    </div>
            <?php

    // output data of each row
    ?>
    <table class="table table-striped table-bordered table-hover"style="width:150%; margin-left: 40%; ">
     <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Passenger ID</th>
                                    <th>Time</th>
                                    <th>Seat_no.</th>
                                    <th>depart_time</th>
                                    <th>Country of departure</th>
                                    <th>Date of booking</th>
                                    
                                </tr>
                            </thead>
    <?php 
    while($row = $result->fetch_assoc()) 
    {
    	?>
         
                           
                            <tbody>
                                <tr>
                                    <td><?php echo $row ['booked_id']; ?> </td>
                                	<td><?php echo $row ['passenger_id']; ?> </td>
                                    <td><?php echo $row ['time']; ?> </td>
                                    <td><?php echo $row ['seat_no']; ?> </td>
                                    <td><?php echo $row ['depart_time']; ?> </td>
                                    <td><?php echo $row ['country']; ?> </td>
                                    <td><?php echo $row ['date_of_booking']; ?> </td>
                                </tr>
                            </td>
                    </tbody>
                        
<?php

    }

    ?>
    </table> 
    <?php
}
else 
{

 ?>
   <div class="panel-heading">
                          No passengers found.
                        </div >

<?php
} 
$con->close();
?>
</body>
</html>