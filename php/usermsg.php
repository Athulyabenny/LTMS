<?php
//��һ��mysqli���������Ӷ���
header("Access-Control-Allow-Origin: *");
$db=new MySQLi("localhost","root","","usermsg");
//�������������IP��ַ�������û��������룬���ݿ������
    //׼��һ��SQL���
  $result = mysqli_query($db,"select * from usermsg1");
  $array= array();
  class Message{
    public $number;
  }
  while($row = mysqli_fetch_array($result)) {
    $m=new Message();
    $m->number = $row['number'];
    $array[]=$m;
  }
  $data=json_encode($array);
  echo $data;
?>