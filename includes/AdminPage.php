<div class="container-fluid d-flex flex-row mb-3">
	<div class="nav flex-column nav-pills col-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
		 aria-selected="true">Người dùng</a>
		<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
		 aria-selected="false">Profile</a>
		<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
		 aria-selected="false">Messages</a>
		<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
		 aria-selected="false">Settings</a>
	</div>
	<div class="tab-content col-10" id="v-pills-tabContent">
		<!-- user -->
		<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
			<form action="AdminPage.php" method="get">
				<table class="table">
					<thead class="thead-light">
						<tr>
							<th>IdUser</th>
							<th>Name</th>
							<th>UserName</th>
							<th>Email</th>
							<th>PhoneNumber</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<?php
                    require_once 'classes\Connect.class.php';
                    $sql = "SELECT * from user";
                    $conn = new Connect('project');

                    $connect =$conn->connect();
                    
                    if ($connect->query($sql) ) { 
                    
                    $result = $connect->query($sql);  
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        $IDuser = $row['IDuser'];
                        $Name = $row['Name'];
                        $UserName = $row['UserName'];
                        $Email = $row['Email'];
                        $PhoneNumber = $row['PhoneNumber'];
                        $Address = $row['Address'];
                       
                        echo $table="
                        <thead class='thead-light'>
                        <tr>
                        <td>$IDuser</td>
                        <td>$Name</td>
                        <td>$UserName</td>
                        <td>$Email</td>
                        <td>$PhoneNumber</td>
                        <td>$Address</td>
                        <td>
                        <a href = 'delete.php?id=$IDuser'><i class='fas fa-lock' color='red'></i></a>
                        </td></tr></thead>
   
                        ";
                    }
                }}
                ?>

				</table>
			</form>
			<?php
            $connect->close();
            ?>
		</div>
		<!--  -->
		<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">a</div>
		<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">b</div>
		<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>


	</div>
</div>