<?php	include('db_con.php');

if(isset($_POST['submit']))
{






//personal info

 $place_birth=$_POST['place_birth'];
 $date_of_birth=$_POST['date_of_birth'];
 $sex=$_POST['sex'];
 $civil_status=$_POST['civil_status'];
 $department=$_POST['department'];
 $file=$_FILES["file"]["name"];
 $cis_no=$_POST['cis_no'];
 $position=$_POST['position'];
 
 //employee details
$employee_id=$_POST['employee_id_no'];
$employee_id_no=($_POST['employee_id_no'] + "1");
 $citizenship=$_POST['citizenship'];
 $height=$_POST['height'];
 $weight=$_POST['weight'];
 $bloodtype=$_POST['bloodtype'];
 $gsis_id_no=$_POST['gsis_id_no'];
 $pag_ibig_id_no=$_POST['pag_ibig_id_no'];
 $philhealth_no=$_POST['philhealth_no'];
 $sss_no=$_POST['sss_no'];
 $residential_address=$_POST['residential_address'];
 $ra_zip_code=$_POST['ra_zip_code'];
 $ra_telephone_no=$_POST['ra_telephone_no'];
 $permanent_address=$_POST['permanent_address'];
 $pa_zip_code=$_POST['pa_zip_code'];
 $pa_telephone_no=$_POST['pa_telephone_no'];
 $email_address=$_POST['email_address'];
 $cellphone_no=$_POST['cellphone_no'];
 $agency_employee_no=$_POST['agency_employee_no'];
 $tin=$_POST['tin'];
 $service_credits="0";
 




	
$up_emp=("update personal_information set 
 place_birth='$place_birth',
 date_of_birth='$date_of_birth',
 sex='$sex',
 civil_status='$civil_status',
 department='$department',
 image='$file',
 cis_no='$cis_no',
 position='$position'



 where  employee_id='$employee_id' ");

 $mysqli->query($up_emp);
 

$up_emp1=("update employee_details set 
 citizenship='$citizenship',
 height='$height',
 weight='$weight',
 bloodtype='$bloodtype',
 gsis_id_no='$gsis_id_no',
 pag_ibig_id_no='$pag_ibig_id_no',
 philhealth_no='$philhealth_no',
 sss_no='$sss_no',
 residential_address='$residential_address',
 ra_zip_code='$ra_zip_code',
 ra_telephone_no='$ra_telephone_no',
 permanent_address='$permanent_address',
 pa_zip_code='$pa_zip_code',
 pa_telephone_no='$pa_telephone_no',
 email_address='$email_address',
 cellphone_no='$cellphone_no',
 agency_employee_no='$agency_employee_no',
 tin='$tin'


 where  employee_id='$employee_id' ");

 $mysqli->query($up_emp1);
	

	
	
	header("location:user_personal_information.php");
	
	
	
	
}

else { echo "";}

 

 
 $allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 1000000000000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";

    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	  

      }
    }
  }
else
  {
  echo "Invalid file";
  }
 ?>
