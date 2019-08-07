<?php

function viewcourses(){
    include 'db.php';

    $getco= mysqli_query($conn,"SELECT * FROM programme");

    while ($row=mysqli_fetch_array($getco)) {


        $ctitle= $row['ctitle'];
        $duration= $row['duration'];
        $arequirement= $row['arequirement'];
        $description=$row['description'];
        $id= $row['id'];


        echo '<div class="item col-lg-3 col-6">
                <img class="img-fluid" src="assets/images/courses/def2.png" width="160px"   height="50px" alt="" />
                <p class="text-center"><a href="course_detail.php?id= '.$id.'">'.$ctitle.'</a></p>
              </div>';
        # code...
    }
}

function countcourse(){
    include 'db.php';
    $ccourses=mysqli_query($conn,"SELECT * FROM programme  ");
    $rcount = mysqli_num_rows($ccourses);
    echo $rcount; 
}

function listcourses()
{
    include 'db.php';
    $lstc= mysqli_query($conn,"SELECT * FROM programme ");

    while ($rlst= mysqli_fetch_array($lstc)) {

        $ctitle = $rlst['ctitle'];
        $duration= $rlst['duration'];
        $level= $rlst['level'];
        $location= $rlst['location'];
        $id=$rlst['id'];

        echo '
            <article class="course-item row-divider">   
                <div class="details row">
                    <div class="col-title col-lg-4 col-md-6 col-12"><a href="course_detail.php?id= '.$id.'">'.$ctitle.'</a></div>
                    <div class="col-meta col-lg-8 col-md-6 col-12">
                        <div class="row">
                                                        
                            <div class="col-duration col-md-2">'.$duration.'</div>
                            <div class="col-level col-md-3">'.$level.'</div>
                            <div class="col-location col-md-4">'.$location.'</div>   
                        </div>                                 
                    </div><!--//col-meta-->                           
                </div><!--//details-->
            </article><!--//course-item-->';
        # code...
    }
}

function cfinder(){
    include 'db.php';
    $cfin= mysqli_query($conn,"SELECT * FROM programme ");

    while ($cfd=mysqli_fetch_array($cfin)) {
        $ctitle= $cfd['ctitle'];

        echo '
        
        <option>'.$ctitle.'</option>
        ';
    }
}


?>