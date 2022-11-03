<?php
include 'connect.php';
session_start();
include "check.php";
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['submit']))
{
    $frdate = $_POST['fromdate'];
    $todate = $_POST['todate'];
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>	Patient List</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
	
		<!-- Fontfamily -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<?php include 'menu.php'; ?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Filters</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Filters</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
					<form method="post" class="needs-validation" novalidate>
					    <div class="row">
							
							<div class="col-md-3">
							<label>Select From Date</label>
								<div class="form-group">
								<input type="date" name="fromdate" id="fromdate" class="form-control"> 
                           </div>	</div>	
						  
						   <div class="col-md-3">
						   <div class="form-group">
						      <label>Select To Date</label>
						        <input type="date" name="todate" id="todate" class="form-control">		
							</div></div>
							<div class="col-md-3">
							<label></label>
							<label></label>
							<div class="form-group">
						
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
							</div>
							</div>
                            <div class="col-md-3">
							<div class="form-group">
							<label></label>
							<label></label>
							<p>
							
						    <input type="button" value="Download Pdf" 
							id="pdf"  onclick="Export()" class="btn btn-primary">
					        </p>
							</div></div>
						</form>	</div>			
						<br>
					
                        <div  id= "myTable"  class="row">
					<h3  align="center"> Pregnancy Patients list From <?php 
					$newDate = date("d-m-Y", strtotime($frdate));  
					$frdate = strval($newDate);
					echo $frdate; 
					?> To <?php
					$newDate = date("d-m-Y", strtotime($todate));  
					$todate = strval($newDate);
					 echo $todate; ?> </h3>
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table  class="table table-striped">
											<thead>
												<tr>
													<th>Name</th>
                                                    <th>Phone Number</th>
													<th>Patient ID</th>
													<th>Date of Delivery</th>
													<th>Type of Delivery</th>
                                                    <th>Baby Gender</th>
                                                    <th>Baby Weight</th>
												</tr>
											</thead>
											<tbody>
												<?php
												if(isset($_POST['submit']))
												{
													$frdate = $_POST['fromdate'];
													$todate = $_POST['todate'];
													$sql = mysqli_query($con,"SELECT ppi.name as name,ppi.patient_phone_number as ppn,pi.id as id,pi.token_id as tid,ps.date_of_procedure as d,pi.type_of_delivery as tod,pi.weight as w,pi.gender as g FROM `patient_pregnancy_information`  pi  ,`patient_primary_information` ppi, `patient_surgery_form` ps WHERE  ppi.id=pi.id and  pi.id in (select id from patient_surgery_form) and pi.token_id in (select token_id from patient_surgery_form) and date(pi.time) between '$frdate' and '$todate' order by pi.time asc");
													while($run = mysqli_fetch_assoc($sql))
													{
                                                        
                                                        $newDate = date("d-m-Y", strtotime($run['d']));  
                                                        $dd = strval($newDate);
														echo '<tr>
														<td>'.$run['name'].'</td>
														<td>'.$run['ppn'].'</td>
														<td>'.$run['id'].'</td>

														<td>'.$dd.'</td>
                                                        <td>'.$run['tod'].'</td>
                                                        <td>'.$run['g'].'</td>
                                                        <td>'.$run['w'].'</td>
                                                        ';

													    
													}
												}
                                                ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			
				<!-- Footer -->
				<!-- <footer>
					<p>Copyright © 2020 Dreamguys.</p>					
				</footer> -->
				<!-- /Footer -->
				
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
        <script>
        function generate() {
        var doc = new jsPDF("p", "pt", "a4", true);
        var a4Width = Number(doc.internal.pageSize.getWidth());
        doc.fromHTML($("#dataID").html(), 20, 0, {
                pagesplit: true,
                "width": (a4Width - 40) // for margin right
            },
            function(dispose) {
                doc.save("PHPLift.pdf");
            }
        );
    }
    </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

		<script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('myTable'), {
                 
                onrendered: function (canvas) {
                    var data = canvas.toDataURL(
                        {
                              pixelRatio: 100
                        }
                    );
     
                     
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500,
                            scale:5
                        }]
                    };
                   pdfMake.createPdf(docDefinition).download("Pregnancy_list.pdf");
                }
            });
        }
    </script>
   
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>

        <script>
            const searchFun = () => {
                let filter = document.getElementById('myInput').value.toUpperCase();
                
                let myTable = document.getElementById('myTable');
                
                let tr = myTable.getElementsByTagName('tr');

                for(var i=0;i<tr.length;i++){
                    let td = tr[i].getElementsByTagName('td')[1];
                    let t1 = tr[i].getElementsByTagName('td')[0];
                    let t2 = tr[i].getElementsByTagName('td')[2];
             
                    if(td || t2){
                        let textvlaue = td.textContent || td.innerHTML;
                        let phone = t2.textContent || t2.innerHTML;
                        let pid = t1.textContent || t1.innerHTML;
                        if(textvlaue.toUpperCase().indexOf(filter)>-1 || phone.indexOf(filter)>-1 || pid.toUpperCase().indexOf(filter)>-1){
                            tr[i].style.display = "";
                        }
                        else{
                            tr[i].style.display = "none";
                        }
                    }
                }

            }
        </script>
    </body>
</html>