<div class="tab-content col-10" id="v-pills-tabContent">
    <!-- user -->
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <form action="" method="post">
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
                while ($row = $data['Smartphone']->fetch_assoc()) {
                    include 'ModalDetailSmartphone.view.php';
                if ($connect->query($sql)) {

                    $result = $connect->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $IDuser = $row['IDuser'];
                            $Name = $row['Name'];
                            $UserName = $row['UserName'];
                            $Email = $row['Email'];
                            $PhoneNumber = $row['PhoneNumber'];
                            $Address = $row['Address'];

                            echo $table = "
                        <thead class='thead-light'>
                        <tr>
                        <td>$IDuser</td>
                        <td>$Name</td>
                        <td>$UserName</td>
                        <td>$Email</td>
                        <td>$PhoneNumber</td>
                        <td>$Address</td>
                        <td>
                        <a href = 'classes/blockUser.class.php?id=$IDuser'><i class='fas fa-lock' color='red'></i></a>
                        </td></tr></thead>
   
                        ";
                        }
                    }
                }
                ?>

            </table>
        </form>
        <?php
        $connect->close();
        ?>
    </div>
</div>