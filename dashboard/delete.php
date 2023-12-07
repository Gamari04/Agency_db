<?php
     require __DIR__ .'../../config/connection.php';
        $id = $_GET['id'];
        $query = "DELETE FROM `user` WHERE id = $id";
        $result = mysqli_query($connexion , $query);
        if(isset($result)){
            header("location:../views/adminPannel.php?msg=deleted database successfuly");
        }
        else{
            echo "error";
        }
?>
<?php
//     require __DIR__ .'../../config/connection.php';
//         $id = $_GET['id'];
//         $query = "DELETE FROM `project` WHERE id = $id";
//         $result = mysqli_query($connexion , $query);
//         if(isset($result)){
//             header("location:project.php?msg=deleted database successfuly");
//         }
//         else{
//             echo "error";
//         }
// ?>