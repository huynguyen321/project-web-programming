    <!-- user -->
    <form action="" method="post">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>ID User</th>
                    <th>Name</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>PhoneNumber</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>

            <?php
            while ($row = $data['Users']->fetch_assoc()) {
                $IDuser = $row['IDuser'];
                $Name = $row['Name'];
                $UserName = $row['UserName'];
                $Email = $row['Email'];
                $PhoneNumber = $row['PhoneNumber'];
                $Address = $row['Address'];
                $blockStatus = $row['Blocked'];
                if ($blockStatus == 0) {
                    $iconLock = '<i class="fas fa-lock-open" color="blue"></i>';
                } else $iconLock = '<i class="fas fa-lock" color="red"></i>';
                echo "
                <tbody>
                <tr>
                <td>$IDuser</td>
                <td>$Name</td>
                <td>$UserName</td>
                <td>$Email</td>
                <td>$PhoneNumber</td>
                <td>$Address</td>
                <td>
                <a href = 'User/blockUser/$IDuser/$blockStatus'>
                    <button class='btn btn-outline-light'>$iconLock</button>
                </a>
                </td>
                </tr>
                </tbody>
                ";
            }
            ?>
        </table>
    </form>