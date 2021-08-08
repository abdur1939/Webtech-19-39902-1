<?php 

require_once 'db_connect.php';



function insertData($data){
	$conn = db_conn();
    $selectQuery = "INSERT into userregistrationinfo (Username,Email,Phonenum,Address, Password)
VALUES (:uname, :email, :phone, :address, :password)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':uname' => $data['uname'],
        	':email' => $data['email'],
        	':phone' => $data['phone'],
        	':address' => $data['address'],
        	':password' => $data['password'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function userLogin($uname, $password){
	$conn = db_conn();
	$selectQuery = "SELECT COUNT(*) FROM `userregistrationinfo` where Username = '$uname' and Password = '$password'";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function updateinfo($uname, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `userregistrationinfo` set Username = ?, Email = ?, Phonenum = ?, Address = ? where Uname = ? ,Email = ?, Phonenum = ?, Address = ?,"   ;
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['uname'], $data['email'],$data['phone'], $data['address']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateimage($uname, $image){
    $conn = db_conn();
    $selectQuery = "UPDATE userregistrationinfo set Image = '$image' where Uname = '$uname' ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePass($uname, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE registrationinfo set Password = '$password' where Uname = '$uname' ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}