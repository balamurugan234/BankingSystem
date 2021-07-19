<?php
include_once 'database connection.php';
if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];
    $sql = "SELECT * from customer where id=$from";
    $query = mysqli_query($con,$sql);
    $sql1 = mysqli_fetch_array($query);
    $sql = "SELECT * from customer where id=$to";
    $query = mysqli_query($con,$sql);
    $sql2 = mysqli_fetch_array($query);
    if (($amount)<=0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Enter valid amount!")'; 
        echo '</script>';
    }
    else if($amount > $sql1['Balance']) 
    {
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance!")'; 
        echo '</script>';
    }
    else if($sql1['Balance']-$amount< 100){

        echo "<script type='text/javascript'>";
        echo "alert('Minimum balance cannot be transferred!')";
        echo "</script>";
     }
    else {
        $newbalance = $sql1['Balance'] - $amount;
        $sql = "UPDATE customer set Balance=$newbalance where id=$from";
        mysqli_query($con,$sql);
        $newbalance = $sql2['Balance'] + $amount;
        $sql = "UPDATE customer set Balance=$newbalance where id=$to";
        mysqli_query($con,$sql);
        $sender = $sql1['Name'];
        $receiver = $sql2['Name'];
        $sql = "INSERT INTO transactionhistory(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount')";
        $query=mysqli_query($con,$sql);
        if($query){
            echo "<script> 
                    alert('Transaction Successful');
                    window.location='transaction_history.php';
               </script>"; 
                }
                $newbalance= 0;
                $amount =0;
        }
}
?>
<div class="container">
            <?php
                include_once 'database connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customer where id=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($con);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
        <form method="post" name="tcredit" class="tabletext"><br>
        <br>
        <label style="font-weight:500; font-family:Times new roman; font-size:20px;">Transfer To</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected="selected">select customer...</option>
            <?php
                include_once 'database connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customer where id!=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option type="" value="<?php echo $rows['Id'];?>" >
                    <?php echo $rows['Id'];?> -
                    <?php echo $rows['Name'] ;?> 
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label style="font-weight:500; font-family:Times new roman; font-size:20px;">Amount</label>
            <input type="number" class="form-control" name="amount" placeholder="transaction amount..." required>   
            <br><br>
                <div class="text-center" >
            <button class="btn btn-success" name="submit" type="submit">TRANSFER</button>
            </div>
        </form>
    </div>