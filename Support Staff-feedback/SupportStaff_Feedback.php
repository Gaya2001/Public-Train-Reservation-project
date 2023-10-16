<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="SupportStaff_Feedback.css">

    <!-- ========================Icon Link======================= -->

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===============Google Font Link=================== -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Francois+One&display=swap" rel="stylesheet">

</head>

<body>
    <!-- ============== Side navigation Bar============= -->

    <div class="NAME">
        <div class="Administrator">Administrator Dashboard </div>
    </div>
    <div class="anu-user-info">
        <p><b>All Feedbacks</b></p>
      </div>
     
      
    <div class="sidebar">
        <header>
            <h2 class="LOGO_ADMIN"><span class="IMAGINE">IMAGINE</span> SEATS</h2>
        </header>
        <header class="DATE">WED 13, OCT 21</header>
        <header class="SUPPORT_STAFF">SUPPORT STAFF</header>
        <ul>
            <li class="Home"><a href="#HOME"><i class=""></i>HOME</a></li>
            <li class="Feedback"><a href="Feedback"><i class=""></i>FEEDBACK</a></li>
            <li class="Season_inquiry"><a href="Season_inquiry"><i class=""></i>SEASON INQUIRiES</a></li>
            <li class="Users"><a href="Users"><i class=""></i>USERS</a></li>
            <li class="News"><a href="News"><i class=""></i>NEWS</a></li>
            <li class="Logout"><a href="Logout"><i class=""></i>LOG OUT</a></li>

        </ul>
    </div>

    <div class="anu-feedbackTable">
    <table>
        <theader>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Inquire Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        </theader>
        <tbody>
        <?php
            $sql = "select * from `sfeedback`";
            $result = mysqli_query($con, $sql);
            
            if ($result) {
                while($row=mysqli_fetch_assoc($result)){
                    $ID=$row['ID'];
                    $name=$row['name'];
                    $phone=$row['phone'];
                    $email=$row['email'];
                    $Subject=$row['Subject'];
                    $Message=$row['Message'];

                    $htmlRow = '<tr>';
                    $htmlRow .= '<td>' . $ID . '</td>';
                    $htmlRow .= '<td>' . $name . '</td>';
                    $htmlRow .= '<td>' . $phone . '</td>';
                    $htmlRow .= '<td>' . $email . '</td>';
                    $htmlRow .= '<td>' . $Subject . '</td>';
                    $htmlRow .= '<td>' . $Message . '</td>';
                    $htmlRow .= '<td>';
                    $htmlRow .= '<button class="anu-feedbackUpdateBtn"><a href="update.php?updateID=' . $ID . '">Update</a></button>';
                    $htmlRow .= '<button class="anu-feedbackDeleteBtn"><a href="delete.php?deleteid=' . $ID . '">Delete</a></button>';
                    $htmlRow .= '</td>';
                    $htmlRow .= '</tr>';
            
                    // Echo the HTML row
                    echo $htmlRow;

                   
                }
            }
               
            ?>
       
        </tbody>
    </table>
    
    </div>

</body>

</html>