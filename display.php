<?php
    
    require'./include/db.php';
    error_reporting(0); 
        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sec = $_POST['sec'];
    $year = $_POST['year']; 

    $sql = "SELECT id,subject,time,day,location,campus FROM $sec";
    $result = $conn->query($sql);

    $day = date('l');
    echo '<div class="card-deck">';
    if($year == 1){
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {

                if( $day == $row["day"]){

                    echo '<div class="card">
                            <div class="card-body">';
                    echo '<h4 class="card-title">'.$row["subject"].'</h4>';
                    echo '<p class="card-text p1">'. $row["time"].'<br>'.$row["location"].'<br>'.$row["campus"].'</p>';
                    // echo '<p class="card-text p2">'. $row["location"].'</p>';
                    // echo '<p class="card-text p3">'. $row["campus"].'</p>';
                                // echo $row["subject"]. " - " . $row["time"]. " " . $row["location"]. "<br>";
                    echo '
                            </div>
                        </div>
                    ';

                }
            }
        }else echo "&nbsp;&nbsp;&nbsp;&nbsp;Sorry Insufficient Data !";
    }else echo "&nbsp;&nbsp;&nbsp;&nbsp;Sorry Insufficient Data!";
    
    echo '</div>';
    $conn->close();
?>