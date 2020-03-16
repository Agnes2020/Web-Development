<?php
class Validation{
    
    public function verifyusername($username)
    {
        //Create a connection instance
        $mysqli = connectToDb();
        
        $query = "SELECT Username FROM myusers WHERE Username=?";
        $stmt = mysqli_stmt_init($mysqli);
        if(!mysqli_stmt_prepare($stmt, $query)){
            header("Location : ../register.php?error=connection");
        }else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck= mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0){
                return true;
            }else{
                return false;
            }
        }
        // $result =  $mysqli->query($query);
        // if($result->num_rows > 0)
        // {
        //     //This means that the username already exists
        //     return true;
        // }
        // else
        // {
        //     return false;
        // }
    }
}
?>