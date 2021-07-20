<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<b>โปรแกรมคำนวณหาค่าดัชนีมวลกาย BMI
</b>
<p>โปรดกรอกข้อมูลให้ครบ</p>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="w">น้ำหนัก</label>
    <input type="text" name="w" id="w" />
    <label for="textfield"></label>
    กิโลกรัม</p>
  <p>
    <label for="h">ส่วนสูง</label>
    <input type="text" name="h" id="h" />
  เซนติเมตร</p>
  <p>
    <label for="textfield"></label>
    <input type="submit" name="button" id="button" value="คำนวณ" />
    <input type="reset" name="button2" id="button2" value="ยกเลิก" />
  </p>
</form>
<?php
   $weight=$_POST["w"];
   $height=$_POST["h"] ;
   
   $bmi=$weight/ (($height/100) *($height/100));
  
    echo "น้ำหนัก=$weight กิโลกรัม<br/>";
    echo "ส่วนสูง=$height เซนติเมตร<br/>";
	
	echo "ค่าดัชนีมวลกาย BMI =$bmi<br/>";
	
    if($bmi>30)
     {
     echo "คุณอยู่ในเกณฑ์ <b>อ้วน</b>";
     }
       else if($bmi>=25.0 && $bmi<29.9)
      {
          echo "คุณอยู่ในเกณฑ์ <b>ท้วม</b>";
      }
       else if($bmi>=18.5 && $bmi<24.9)
       {
       echo "คุณอยู่ในเกณฑ์ <b>สมส่วน</b>";
      } 
       else if($bmi>=1 && $bmi<18.4)
      {
          echo "คุณอยู่ในเกณฑ์ <b>ผอม</b>";
      }
      else
      {
          echo "ข้อมูลผิดพลาด";
      }





?>
   
	



<p>&nbsp;</p>
</body>
</html>