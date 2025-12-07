<?php
    session_start();
    include "./components/navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 w-100">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h1">Visitors</h1>        
  </div>

    <div class="table-responsive">
            <table class="table table-striped table-sm table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>School</th>
                    <th>Purpose</th>
                </tr>
                </thead>

                <tbody>
                    <?php
                        include 'functions/connectdb.php';

                        $visitor = getAllVisitors();
                        $count = countToday();
                        $exam_count = countExam();
                        $others_count = countOthers();
                        $attendance_count = countAttendance();
                        $inquiry_count = countInquiry();

                        // FIX: ensure the result is an array
                        if (!is_array($visitor)) {
                            echo "<tr><td colspan='8' class='text-danger'>Error loading visitor list. getAllVisitors() did not return an array.</td></tr>";
                        } else {

                            foreach($visitor as $Visitor){
                                // Fix: check each row is an array
                                if (!is_array($Visitor)) continue;

                                $vis_name = $Visitor['vis_fname'] . ', ' . 
                                            $Visitor['vis_lname'] . ', ' . 
                                            $Visitor['vis_mname'];
                    ?>
                        <tr>
                            <td><?= $Visitor['vis_id'] ?></td>
                            <td><?= $vis_name ?></td>
                            <td><?= $Visitor['visit_date'] ?></td>
                            <td><?= $Visitor['visit_time'] ?></td>
                            <td><?= $Visitor['vis_address'] ?></td>
                            <td><?= $Visitor['vis_contact'] ?></td>
                            <td><?= $Visitor['location_type'] ?></td>
                            <td><?= $Visitor['visit_purpose'] ?></td>
                        </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
        </table>
    </div>
</main>

<?php include "./cards.php"; ?>
<script src="js/bootstrap.js"></script>

</body>
</html>
