<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $employee_id=$_POST['employee_id'];
 $school_name=$_POST['school_name'];
 $degree_course=$_POST['degree_course'];
 $year_graduated=$_POST['year_graduated'];
 $highest_grade_level_units_earned=$_POST['highest_grade_level_units_earned'];
  $dates_from=$_POST['dates_from'];
 $dates_to=$_POST['dates_to'];
 $scholar_academic_honors=$_POST['scholar_academic_honors'];
 


 

 

$emp=(" insert into graduate_studies(employee_id,school_name,degree_course,year_graduated,highest_grade_level_units_earned,dates_from,dates_to,scholar_academic_honors)  
     values('$employee_id','$school_name','$degree_course','$year_graduated','$highest_grade_level_units_earned','$dates_from','$dates_to','$scholar_academic_honors')");
	$mysqli->query($emp);
header("location:user_educational_background.php?id=".$employee_id."");
}

else { echo "";}





 
 ?>