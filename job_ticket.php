<?php
require ("header.php");
?>

<div class="content">
<div class="search-cont">
	<div class="searchcont-detail">
		<div class="search-boxleft">
			<form action="edit_job.php" method="post" >
				<label>Quick Search</label>
				<input name="frmSearch" type="text" placeholder="Search for a specific job">
				<input id="SubmitBtn" type="submit" value="SUBMIT" >
			</form>
		</div>
	</div>
</div>
<div class="contacts-title">
	<h2>New Job Ticket</h2>
</div>

<div class="dashboard-detail">
	<div class="newcontacts-outer">
		<div class="tab-content">
			
			  <form action="add_job_ticket.php" method="POST">
				<div class="newclienttab-inner">
				<?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname= "crst_dashboard";
						// Create Connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						$result = $conn->query("select client_name from client_info");
						echo("<div class='tabinner detail'>");
						echo "<label>Client</label><select name='client_name'>";
						while ($row = $result->fetch_assoc()) {
									  unset($client_name);
									  $client_name = $row['client_name']; 
									  echo '<option value="'.$client_name.'">'.$client_name.'</option>';
									 
						}
						echo "</select>";
						echo "</div>";
						?>
					<div class="tabinner detail">
					<label>Job Name</label>
					<input name="project_name" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Ticket Date</label>
					<input name="ticket_date" type="date" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Due Date</label>
					<input name="due_date" type="date" class="contact-prefix">
					</div>
					<?php
					
						
						$result1 = $conn->query("select initial from users");
						echo("<div class='tabinner detail'>");
						echo "<label>Created By</label><select name='created_by'>";
						echo "<option disabled selected value> -- select an option -- </option>";
						while ($row1 = $result1->fetch_assoc()) {
									  unset($created_by);
									  $created_by = $row1['initial']; 
									  echo '<option value="'.$created_by.'">'.$created_by.'</option>';
									 
						}
						echo "</select>";
						echo "</div>";
						?>
					
					<div class="tabinner detail">
					<label>Estimate Number</label>
					<input name="estimate_number" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Materials Ordered</label>
					<input name="materials_ordered" type="date" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Materials Expected</label>
					<input name="materials_expected" type="date" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Expected Quantity</label>
					<input name="expected_quantity" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Job Status</label>
					<select name='job_status'>
					<option disabled selected value> -- select an option -- </option>
					<option value="in P.M.">in P.M.</option>
					<option value="in Production">in Production</option>
					<option value="on hold">on hold</option>
					<option value="waiting for materials">waiting for materials</option>
					<option value="waiting for data">waiting for data</option>
					<option value="waiting for postage">waiting for postage</option>
					</select>
					</div>
					
					
					<div class="tabinner detail">
					<label>Mail Class</label>
					<input name="mail_class" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Rate</label>
					<input name="rate" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Processing Category</label>
					<input name="processing_category" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Mail Dimensions</label>
					<input name="mail_dim" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Weights and Measures</label>
					<input name="weights_measures" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Permit</label>
					<input name="permit" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Bmeu</label>
					<input name="bmeu" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Based On</label>
					<input name="based_on" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Non Profit Number</label>
					<input name="non_profit_number" type="text" class="contact-prefix">
					</div>
					
					<div class="tabinner detail">
					<label>Data Location</label>
					<input name="data_loc" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Records Total</label>
					<input name="records_total" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Domestic</label>
					<input name="domestic" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Foreigns</label>
					<input name="foreigns" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Data Source</label>
					<input name="data_source" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Data Received</label>
					<input name="data_received" type="date" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Data Completed</label>
					<input name="data_completed" type="date" class="contact-prefix">
					</div>
					<?php
					
						
						$result2 = $conn->query("select initial from users");
						echo("<div class='tabinner detail'>");
						echo "<label>Assigned to</label><select name='processed_by'>";
						echo "<option disabled selected value> -- select an option -- </option>";
						while ($row2 = $result2->fetch_assoc()) {
									  //unset($pm);
									  $processed_by = $row2['initial']; 
									  echo '<option value="'.$processed_by.'">'.$processed_by.'</option>';
									 
						}
						echo "</select>";
						echo "</div>";
						?>
					
					<div class="tabinner detail">
					<label>DQR Sent</label>
					<input name="dqr_sent" type="date" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Exact</label>
					<input name="exact" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Mail Foreigns</label>
					<input name="mail_foreigns" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Household</label>
					<input name="household" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>NCOA</label>
					<input name="ncoa" type="text" class="contact-prefix">
					</div>
					
					<div class="tabinner detail">
					<input type="checkbox" name="hold_postage" class="contact-prefix" ><label>Hold Postage</label>
					</div>
					<div class="tabinner detail">
					<input name="postage_paid" type="checkbox" class="contact-prefix"><label>Postage Paid</label>
					</div>
					<div class="tabinner detail">
					<label>Print Template</label>
					<input name="print_template" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Special Address Formatting</label>
					<input name="special_address" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Method of Delivery</label>
					<input name="delivery" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Tasks</label>
					<select name="tasks[]" multiple>
					  <option value="Mail Merge">Mail Merge</option>
					  <option value="Letter Printing">Letter Printing</option>
					  <option value="In-House Envelope Printing">In-House Envelope Printing</option>
					  <option value="Tabbing">Tabbing</option>
					  <option value="Folding">Folding</option>
					  <option value="Inserting">Inserting</option>
					  <option value="Sealing">Sealing</option>
					  <option value="Collating">Collating</option>
					  <option value="Labeling">Labeling</option>
					  <option value="Print Permit">Print Permit</option>
					  <option value="Correct Permit">Correct Permit</option>
					  <option value="Carrier Route">Carrier Route</option>
					  <option value="Endorsement line">Endorsement line</option>
					  <option value="Address Printing">Address Printing</option>
					  <option value="Tag as Political">Tag as Political</option>
					  <option value="Inkjet Printing">Inkjet Printing</option>
					  <option value="Glue Dots">Glue Dots</option>
					</select>
					</div>
					<div class="tabinner detail">
					<label>Task 1</label>
					<input name="task1" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Task 2</label>
					<input name="task2" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Task 3</label>
					<input name="task3" type="text" class="contact-prefix">
					</div>
					
					<div class="tabinner detail">
					<label>Completed Date</label>
					<input name="completed_date" type="date" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Data Hours</label>
					<input name="data_hrs" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Graphic Design Hours</label>
					<input name="gd_hrs" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Initial Record Count</label>
					<input name="initialrec_count" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Manual</label>
					<input name="manual" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Uncorrected</label>
					<input name="uncorrected" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Unverifiable</label>
					<input name="unverifiable" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Foreigns</label>
					<input name="bs_foreigns" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Exact</label>
					<input name="bs_exact" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Loose</label>
					<input name="loose" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Householded</label>
					<input name="householded" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Basic</label>
					<input name="basic" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>NCOA Errors</label>
					<input name="ncoa_errors" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Domestic</label>
					<input name="bs_domestic" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>NCOA</label>
					<input name="bs_ncoa" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Final Count</label>
					<input name="final_count" type="text" class="contact-prefix">
					</div>
					
					<div class="tabinner detail">
					<label>Special Instructions</label>
					<textarea name="special_instructions" class="contact-prefix"></textarea>
					</div>
					
					
				</div>
				<div class="form-bottom">
					<input id="btn" type="submit" value="Save" name="submit_form">
				</div>
			</form>
			
			
		</div>
	</div>
	
</div>
</div>

		