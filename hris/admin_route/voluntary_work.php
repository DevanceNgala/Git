<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_admin.php'); 
include('logout.php'); 
 include('nav.php'); ?>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->
<STRONG>
   <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
               <ul class="nav" id="side-menu">
               
              
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
                     		 <?php	$id=$_GET['id'];
                     		
										
											$emp=(" select * from personal_information where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											$show = $fetch_res->fetch_array(MYSQLI_ASSOC)
											
											
											
										?>
									
									<img src=" upload/<?php echo $show['image']; ?>" class="img-rounded" height="200px" width="200px" >
																
							<center><?php echo $show['firstname']." ".$show['surname']; ?></center>
                           </li>		
								<?php /*
					$id=$_SESSION['employee_id'];
					$fetch=$mysqli->query("select * from personal_information where employee_id=".$id."");
					$show=$fetch->fetch_array(MYSQLI_BOTH);
					$_SESSION['employee_id']=$show['employee_id'];
					*/
					?>
			
				         <li>
                                <a href="personal_info.php?id=<?php echo $id; ?>" class="not_active">
								<button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
								Employee
							</a>
                            </li>
										<li class="active">
                        <a href="#" >
						<button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						PDS Information<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li >
						
                                <a href="personal_information.php?id=<?php echo $id; ?>"class="not_active">Personal Information 
								</a>
							
                            </li>
							
							
							
                            <li>
                                <a href="family_background_details.php?id=<?php echo $id; ?>" class="not_active">
								Family Background
							</a>
                            </li>
					
							       <li>
                                <a href="Educational_Background.php ?id=<?php echo $id; ?>" class="not_active">Educational Background</a>
                            </li>
							       <li>
                                <a href="civil_service.php?id=<?php echo $id; ?>" class="not_active">Civil Service</a>
                            </li>
							       <li>
                                <a href="work_experience.php?id=<?php echo $id; ?>" class="not_active">Work Experience</a>
                            </li>
							       <li>
                                <a href="voluntary_work.php?id=<?php echo $id; ?>" class="active_nav">Voluntary Work</a>
                            </li>
							       <li>
                                <a href="training_programs.php?id=<?php echo $id; ?>" class="not_active">Training Programs</a>
                            </li>
							       <li>
                                <a href="other_information.php?id=<?php echo $id; ?>"class="not_active"  >Other Information</a>
                            </li>
							       <li>
                                <a href="account.php?id=<?php echo $id; ?>" class="not_active">Account</a>
                            </li>
							      
							       
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
							 
									       <li>
                              
							   <a href="service_credits.php?id=<?php echo $id; ?>" class="not_active" >
							    <button type="button" class="btn btn-info btn-circle ">
								<i class="fa fa-table fa-fw fa-lg"></i> </button>&nbsp;Service Credits</a>
                            </li>
							       <li>
                           
							  <a href="attendance.php?id=<?php echo $id; ?>" class="not_active">
							   <button type="button" class="btn btn-info btn-circle ">
								<i class="fa fa-table fa-fw fa-lg"></i> </button>&nbsp;Attendance</a>
                            </li>
							
                  
                        <!-- /.nav-second-level -->
         
                 
                   
                   
                  
                   
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
		</STRONG>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            <div class="row">
              
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
</br>
</br>
			
				   <div class="row-blue">
				         <b style="color:#fff;"> <b style="color:#fff; font-size:25px;"> <center>Voluntary Work</center></b></b>
                        
   <div class="row">

			    <div class="col-lg-12">
                    <div class="panel panel-default" >
                        <div class="panel-heading"  style="background-color:#46b8da;">
                    </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NAME & ADDRESS OF ORGANIZATION</th>
                                            <th>INCLUSIVE DATES From - To</th>
                              
                                            <th>NUMBER OF HOURS</th>
                                            <th>POSITION / NATURE OF WORK</th>
                                         
                                
                                 
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php	$id=$_GET['id'];
											$emp=(" select * from voluntary_work where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
										      <td><?php echo $show['name_address_organization']; ?></td>
                                            <td><?php echo "(".$show['dates_from'].")-</br>(".$show['dates_to'].")"; ?></td>
                                            <td><?php echo $show['number_hours']; ?></td>
                                            <td><?php echo $show['position']; ?></td>
										
                                          
                                        </tr>
                                    <?php }; ?>
                                    </tbody>
                                </table>
								   
                            </div>
                            <!-- /.table-responsive -->
                           		
	
                 
                        </div>
								  	       <div class="panel-footer">
										   
                          					    <div class="form-group">
                      <div class="col-lg-2 pull-right">
       
                    </div>
                  </div>
				
                 
							
                        </div>
                        <!-- /.panel-body -->
                    </div>

					
                    </div>
                    </div>
                    </div>
         
				
				
				 <form action="add_voluntary_work.php" method="post">
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Voluntary Work</h4>
                                        </div>
                                        <div class="modal-body">
                           
         
			  
									
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">NAME & ADDRESS OF ORGANIZATION:</span>
												<input type="text" name="name_address_organization" class="form-control input-sm" >
																	<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
											</div>
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">NUMBER OF HOURS:</span>
												<input type="text" name="number_hours" class="form-control input-sm" />
											</div>
										
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">POSITION / NATURE OF WORK:</span>
												<input type="text" name="position" class="form-control input-sm" />
											</div>				
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date From:</span>
												<input type="date" name="dates_from" class="form-control input-sm" />
											
									</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">To:</span>
												<input type="date" name="dates_to" class="form-control input-sm" />
											
									</div>
										
									
									
						
								
				
									  
									   </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
							</form>
				
                 <div class="row">
				 
				 
				 
				 
									<div class="col-lg-10">
									
									
									
									
									
									
									
									
											   
									  
									  
									  </div>
									
									  


              
                
                </div>
             
				
				
				

                <!-- /.col-lg-12 -->
           
									
			
									
									
									
									
			</div>
                    <!-- /.panel -->
           
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
      
            <!-- /.row -->

            <!-- /.row -->
			
            </div>
			
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
