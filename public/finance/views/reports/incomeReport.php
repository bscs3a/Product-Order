<?php 
    // require_once '../../functions/reportGeneration/IncomeReport.php'; -- might change into ajax
    $today = new DateTime();
    $lastDayOfMonth = new DateTime($today->format('Y-m-t'));

    if ($today < $lastDayOfMonth) {
        $today->modify('-1 month');
    }

    $year = $today->format('Y');
    $month = $today->format('n');
    $monthName = $today->format('F');
    if (isset($_POST['year']) && isset($_POST['month'])){
        $year = $_POST['year'];
        $month = $_POST['month'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Income Report</title>
</head>
<style>
    ul {
        list-style-type: none;  
    }
    header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
    }
</style>

<body>
    <header>
        <div>
            <span>Income Statement</span>
            <span>
                <?php echo "$monthName $year"?>    
            </span>
        </div>
        <img src="..\..\img\logo_reports.png" alt="">
    </header>
    <?php
        // echo generateIncomeReport($year, $month);
    ?>
</body>
</html>