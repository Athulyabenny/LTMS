<?php
//��һ��mysqli���������Ӷ���
header("Access-Control-Allow-Origin: *");
$db=new MySQLi("localhost","root","","carriage");
//�������������IP��ַ�������û��������룬���ݿ������
$number=0;
$password=0;
$number=$_REQUEST['telephone'];
$password=$_REQUEST['password'];
$table=$_REQUEST['table'];
//׼��һ��SQL���
$sql = "SELECT count(number) r FROM $table WHERE number = '$number' AND password ='$password'";
$result = mysqli_query($db,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
$row = mysqli_fetch_array($result);
$end = $row['r'];
echo $end;
?>