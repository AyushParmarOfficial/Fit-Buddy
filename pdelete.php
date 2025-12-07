<?php 
    include "connection.php";
?>

<?php 
    $pid=$_GET['pid']; 
    $cq="select * from product_buy where pid=$pid";
    $ct=mysqli_query($cn,$cq);
    $count=mysqli_num_rows($ct);
    if($count=0)
    { 
        $delete='delete from product where pid='.$_GET["pid"];
        if(mysqli_query($cn,$delete))
        {
            header("Location:product.php");
            exit();
        }
        else
        {
            echo "Some thinng Wrong";
        }
    }
    else
    {
        echo "<script> alert('can not Delete . Product allredy Buy..')";
        header("Location:product.php");
        exit();
    }
?>