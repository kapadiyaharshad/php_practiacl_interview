<?php 
error_reporting(E_ALL);
ini_set('display_errors',1);
$conn = mysqli_connect("localhost","root","password","php_pratice");
if(!$conn){
    echo "Not connecte". mysqli_connect_error();
}

// select start
//fetch  mysqli_fetch_row,mysqli_fetch_array,mysqli_fetch_object,mysqli_fetch_all
// $qeury = "SELECT * FROM employee";
// $result = mysqli_query($conn,$qeury);
// $row = mysqli_fetch_array($result);

    // while($row = mysqli_fetch_array($result)){
    //     echo $row['name']."<br>" ;
    // }
//     while($row = mysqli_fetch_all($result)){
//         echo "<Pre>";
// print_r($row);
        
        // echo $row['name']."<br>" ;
    // }

// echo mysqli_num_rows($result);
// echo "<Pre>";
// print_r($row);
// select end

// insert query start
// $query = "INSERT INTO employee VALUES(10,'ronak',10000,2,3,'ronak@gmail.com','2020-09-01')";
// $query = "INSERT INTO employee(name,salary,manager_id,dept_id,email,date) VALUES('ronak_tes',10000,2,3,'ronak_ee@gmail.com','2020-09-01')";
// echo $query;
// $exe = mysqli_query($conn,$query);
// echo $exe;
// insert query e d
//update query start
// $query = "UPDATE employee SET name='update' WHERE id=2";
// $exe = mysqli_query($conn,$query);
// echo $exe;
//update query end
//delete query start

$arr = [1,3,6,1,3,6,9,10,10];
$newArray = [];
foreach($arr as $val){
    $newArray[$val]= $val;
} 
echo "<pre>";
print_r($newArray);
//out put [1,3,6,9]
?>