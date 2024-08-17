<?php
session_start();
include 'connect.php';

$name = $conn->real_escape_string($_POST['name']);
$mobile = $conn->real_escape_string($_POST['mobile']);
$email = $conn->real_escape_string($_POST['email']);
$address = $conn->real_escape_string($_POST['address']);
$domain = $conn->real_escape_string($_POST['domain']);
$work = $conn->real_escape_string($_POST['work']);
$password = $conn->real_escape_string($_POST['password']);
$aadhar = $conn->real_escape_string($_POST['aadhar']);

//check for existing email and username
$query1 = "SELECT * FROM professionals where email_id = '$email'";
$result1 = $conn->query($query1);

if($result1->num_rows > 0){
    $conn->close();
    header("Location: ../freelancer_form.php?error=1");
    exit();
}

$query2 = "SELECT * FROM professionals where Username = '$name'";
$result2 = $conn->query($query2);

if($result2->num_rows > 0){
    $conn->close();
    header("Location: ../freelancer_form.php?error=2");
    exit();
}

//insert into professionals and professional_skills table
$sql = "INSERT INTO professionals (Username, email_id,password,location,mobile,availability) VALUES ('$name', '$email','$password','$address','$mobile',3)";
$a = $conn->query($sql);

$sql2 = "INSERT INTO professional_skills (domain_id,proff_id,projects_worked_on,avg_rating) VALUES ((select domain_id from domain where domain_category='$domain'),(select proff_id from professionals where email_id='$email'),'$work',0)";
$b = $conn->query($sql2);

//update no. of professionals in a domain
$sql3 = "SELECT domain_id from domain where domain_category='$domain'";
$result = $conn->query($sql3);
if ($result->num_rows > 0) {
    $value = $result->fetch_assoc();
    $id = $value['domain_id'];
} 

$sql4 = "SELECT CountProfessionalsInDomain('$id') as count_proff";
$result = $conn->query($sql4);
if ($result->num_rows > 0) {
    $value = $result->fetch_assoc();
    $count = $value['count_proff'];
} 

$sql5 = "UPDATE domain SET num_professionals = '$count' WHERE domain_id = '$id'";
$c = $conn->query($sql5);

//insert into security verification table
$sql6 = "SELECT proff_id from professionals where email_id='$email'";
$result = $conn->query($sql6);
if ($result->num_rows > 0) {
    $value = $result->fetch_assoc();
    $p_id = $value['proff_id'];
}

$sql7 = "INSERT INTO security_verification (proff_id, identification_number, email_id) VALUES ('$p_id', '$aadhar', '$email')";
$d = $conn->query($sql7);

//re-direct to main page
if ($a === TRUE && $b === TRUE && $c === TRUE && $d === TRUE) {
    $_SESSION['user_type'] = 'proff';
    $_SESSION['email'] = $email;
    header("Location: ../main_page.php");
    exit();
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
exit();
?>