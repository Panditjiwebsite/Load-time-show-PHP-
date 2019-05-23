<?php
$start = microtime(true);
?>




<html>
<head>

    <style>
    #time{
        position:fixed;
        top:40%;
        width:50%;
        background-color:black;
        color:white;
        padding:10px;
        font-family:arial;
        text-align:center;
    }
    </style>

</head>
<body>
    
    

    <?php
    $s = 100;
    $e=300;
    $i=1;
    while($i <= $e){
        echo $i."x".$s."=".($i*$s)."<br>";
        $i++;
    }
    ?>
</body>
</html>



<?php
$end = microtime(true);
$time = round(($end - $start), 4)." Load time ";
?>

<div id="time"><?php if(isset($time)){echo $time;} ?></div>