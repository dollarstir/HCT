<?php

function viewcourses(){
    include 'db.php';

    $getco= mysqli_query($conn,"SELECT * FROM programme");

    while ($row=mysqli_fetch_array($getco)) {


        $ctitle= $row['ctitle'];
        $duration= $row['duration'];
        $arequirement= $row['arequirement'];
        $description=$row['description'];


        echo '<div class="item col-lg-3 col-6">
                <img class="img-fluid" src="assets/images/courses/def2.png" width="160px"   height="50px" alt="" />
                <p class="text-center"><a href="courses.html#">'.$ctitle.'</a></p>
              </div>';
        # code...
    }
}

function countcourse(){
    
}



?>