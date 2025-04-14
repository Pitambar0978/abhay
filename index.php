<?php
$servername="localhost:3307";
$username="root";
$password="";
$dbname="kumar";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection fail");
}

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$Dob=$_POST['Dob'];
$Gender=$_POST['Gender'];
$EmailId=$_POST['EmailId'];
$Age=$_POST['Age'];
$PhoneNumber=$_POST['PhoneNumber'];
$FatherName=$_POST['FatherName'];
$FatherOccupation=$_POST['FatherOccupation'];
$MotherName=$_POST['MotherName'];
$MotherOccupation=$_POST['MotherOccupation'];
$Village=$_POST['Village'];
$Pincode=$_POST['Pincode'];
$District=$_POST['District'];
$State=$_POST['State'];
$Religion=$_POST['Religion'];
$Caste=$_POST['Caste'];
$Income=$_POST['Income'];
$StudentPhoto=$_POST['StudentPhoto'];
$StudentSignature=$_POST['StudentSignature'];
$Matriculation=$_POST['Matriculation'];
$Intermediate=$_POST['Intermediate'];
$CasteCertificate=$_POST['CasteCertificate'];
$ResidentalCertificate=$_POST['ResidentalCertificate'];
$IncomeCertificate=$_POST['IncomeCertificate'];

$sql="INSERT INTO `student`(`sr`, `fname`, `mname`, `lname`, `Dob`, `Gender`, `EmailId`, `Age`, `PhoneNumber`, `FatherName`, `FatherOccupation`, `MotherName`, `MotherOccupation`, `Village`, `Pincode`, `District`,`State`, `Religion`, `Caste`, `Income`, `StudentPhoto`, `StudentSignature`, `Matriculation`, `Intermediate`, `CasteCertificate`, `ResidentalCertificate`, `IncomeCertificate`) VALUES (NULL,'$fname','$mname','$lname','$Dob','$Gender','$EmailId','$Age','$PhoneNumber','$FatherName','$FatherOccupation','$MotherName','$MotherOccupation','$Village','$Pincode','$District','$State','$Religion','$Caste','$Income','$StudentPhoto','$StudentSignature','$Matriculation','$Intermediate','$CasteCertificate','$ResidentalCertificate','$IncomeCertificate')";


if($conn->query($sql)==True)
{
    echo "new record added";
}
else{
    echo " error";
}
$conn->close();
?>