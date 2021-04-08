<!-- Smartphone -->
<div>
    <button class="btn btn-primary" data-toggle="modal" data-target="#addSmartphoneModal">
        <i class="fas fa-plus mr-2"></i> Thêm sản phẩm</button>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>ID smartphone</th>
                <th>Tên Smartphone</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Giảm giá</th>
                <th>Hãng sản xuất</th>
                <th>Hệ điều hành</th>
                <th>Ram</th>
                <th>Rom</th>
                <th>Vote</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $tempPhone = [];
            while ($row = $data['Smartphone']->fetch_assoc()) {
                $tempPhone[] = $row;
                echo "<tr>
                    <td>" . $row['IDphone'] . "</td>
                    <td>" . $row['PhoneName'] . "</td>
                    <td><img src='" . $row['Image'] . "' style='width: 50px;'></td>
                    <td>" . $row['Price'] . "</td>
                    <td>" . $row['Discount'] . "</td>
                    <td>" . $row['Brand'] . "</td>
                    <td>" . $row['OS'] . "</td>
                    <td>" . $row['Ram'] . "</td>
                    <td>" . $row['Rom'] . "</td>
                    <th>" . $row['Vote'] . "</th>
                    <td>
                        <button type='button' onclick='update(" . $row['IDphone'] . ")' class='btn btn-outline-danger' data-toggle='modal' data-target='#updateSmartphone'><i class='fas fa-cogs'> </i></button>
                       <a href='http://huysmartphone.xyz/Admin/deleteSmartphone/" . $row['IDphone'] . "'><button type='button' name='deleteSmartphone' class='btn btn-out-warning'> <i class='fas fa-trash'> </i></button></a>
                    </td>
                    </tr>";
            }
            echo '<script>var tempPhone = ' . json_encode($tempPhone) . '</script>';
            ?>
        </tbody>
    </table>

    <!-- Modal addSmartphone-->
    <div class="modal fade" id="addSmartphoneModal" tabindex="-1" role="dialog" aria-labelledby="addSmartphoneModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSmartphoneModalLabel">Thêm sản phẩm </h5>
                    <button type="button" class="close" data-dismiss='modal' aria-label="close">
                        <span aria-hidden="true">&times; </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="http://huysmartphone.xyz/admin/addSmartphone" method="post" enctype="multipart/form-data" class="form-row">
                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" name="namePhone" placeholder="Tên sản phẩm" required>
                        </div>
                        <div class="col-12 mt-3">
                            Ảnh cho sản phẩm
                            <input type="file" class="form-control" name="imgPhone" required>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="number" min="0" class="form-control" name="pricePhone" placeholder="Giá" required>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="number" min="0" class="form-control" name="discountPhone" placeholder="Giảm Giá" required>
                        </div>
                        <div class="col-12 mt-3">
                            Hãng sản xuất
                            <select class="form-select" name="brandPhone">
                                <option value=1>Apple</option>
                                <option value=2>Samsung</option>
                                <option value=3>Xiaomi</option>
                                <option value=4>OPPO</option>
                                <option value=5>Nokia</option>
                                <option value=6>Realme</option>
                                <option value=7 selected>Vsmart</option>
                                <option value=8>Vivo</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            Hệ điều hành
                            <select class="form-select" name="osPhone">
                                <option value=1>iOS</option>
                                <option value=2 selected>Android</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            Thông số Ram
                            <select class="form-select" name="ramPhone">
                                <option value=1 selected>2GB</option>
                                <option value=2>3GB</option>
                                <option value=3>4GB</option>
                                <option value=4>6GB</option>
                                <option value=5>8GB</option>
                                <option value=6>12GB</option>
                                <option value=7>16GB</option>
                                <option value=8>18GB</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            Thông số Rom
                            <select class="form-select" name="romPhone">
                                <option value=1 selected>8GB</option>
                                <option value=2>16GB</option>
                                <option value=3>32GB</option>
                                <option value=4>64GB</option>
                                <option value=5>128GB</option>
                                <option value=6>512GB</option>
                                <option value=7>1TB</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            Đánh giá:(sao)
                            <select class="form-select" name="votePhone">
                                <option value=0.5>0.5 sao</option>
                                <option value=1>1 sao</option>
                                <option value=1.5>1.5 sao</option>
                                <option value=2>2 sao</option>
                                <option value=2.5>2.5 sao</option>
                                <option value=3>3 sao</option>
                                <option value=3.5>3.5 sao</option>
                                <option value=4>4 sao</option>
                                <option value=4.5>4.5 sao</option>
                                <option value=5 selected>5 sao</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-danger mt-3" name="addSmartphone">Thêm</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function update(key) {
            $("#idUpPhone").val(key);
            key--;
            $("#nameUpPhone").val(tempPhone[key]['PhoneName']);
            $("#imgUpPhone").attr("src", tempPhone[key]['Image']);
            $("#priceUpPhone").val(tempPhone[key]['Price']);
            $("#discountUpPhone").val(tempPhone[key]['Discount']);

            switch (tempPhone[key]['Brand']) {
                case 'Apple':
                    $('#brandUpPhone option[value = 1]').attr('selected', 'selected');
                    break;
                case 'Samsung':
                    $('#brandUpPhone option[value = 2]').attr('selected', 'selected');
                    break;
                case 'Xiaomi':
                    $('#brandUpPhone option[value = 3]').attr('selected', 'selected');
                    break;
                case 'OPPO':
                    $('#brandUpPhone option[value = 4]').attr('selected', 'selected');
                    break;
                case 'Nokia':
                    $('#brandUpPhone option[value = 5]').attr('selected', 'selected');
                    break;
                case 'Realme':
                    $('#brandUpPhone option[value = 6]').attr('selected', 'selected');
                    break;
                case 'Vsmart':
                    $('#brandUpPhone option[value = 7]').attr('selected', 'selected');
                    break;
                case 'Vivo':
                    $('#brandUpPhone option[value = 8]').attr('selected', 'selected');
                    break;
            }
            switch (tempPhone[key]['OS']) {
                case 'iOS':
                    $('#osUpPhone option[value = 1]').attr('selected', 'selected');
                    break;
                case 'Android':
                    $('#osUpPhone option[value = 2]').attr('selected', 'selected');
                    break;
            }
            switch (tempPhone[key]['Ram']) {
                case '2GB':
                    $('#ramUpPhone option[value = 1]').attr('selected', 'selected');
                    break;
                case '3GB':
                    $('#ramUpPhone option[value = 2]').attr('selected', 'selected');
                    break;
                case '4GB':
                    $('#ramUpPhone option[value = 3]').attr('selected', 'selected');
                    break;
                case '6GB':
                    $('#ramUpPhone option[value = 4]').attr('selected', 'selected');
                    break;
                case '8GB':
                    $('#ramUpPhone option[value = 5]').attr('selected', 'selected');
                    break;
                case '12GB':
                    $('#ramUpPhone option[value = 6]').attr('selected', 'selected');
                    break;
                case '16GB':
                    $('#ramUpPhone option[value = 7]').attr('selected', 'selected');
                    break;
                case '18GB':
                    $('#ramUpPhone option[value = 8]').attr('selected', 'selected');
                    break;
            } 

            switch (tempPhone[key]['Rom']) {
                case '8GB':
                    $('#romUpPhone option[value = 1]').attr('selected', 'selected');
                    break;
                case '16GB':
                    $('#romUpPhone option[value = 2]').attr('selected', 'selected');
                    break;
                case '32GB':
                    $('#romUpPhone option[value = 3]').attr('selected', 'selected');
                    break;
                case '64GB':
                    $('#romUpPhone option[value = 4]').attr('selected', 'selected');
                    break;
                case '128GB':
                    $('#romUpPhone option[value = 5]').attr('selected', 'selected');
                    break;
                case '512GB':
                    $('#romUpPhone option[value = 6]').attr('selected', 'selected');
                    break;
                case '1TB':
                    $('#romUpPhone option[value = 7]').attr('selected', 'selected');
                    break;
            }

            switch (parseFloat(tempPhone[key]['Vote'])) {
                case 0.5:
                    $('#voteUpPhone option[value = "0.5"]').attr('selected', 'selected');
                    break;
                case 1:
                    $('#voteUpPhone option[value = "1"]').attr('selected', 'selected');
                    break;
                case 1.5:
                    $('#voteUpPhone option[value = "1.5"]').attr('selected', 'selected');
                    break;
                case 2:
                    $('#voteUpPhone option[value = "2"]').attr('selected', 'selected');
                    break;
                case 2.5:
                    $('#voteUpPhone option[value = "2.5"]').attr('selected', 'selected');
                    break;
                case 3:
                    $('#voteUpPhone option[value ="3"]').attr('selected', 'selected');
                    break;
                case 3.5:
                    $('#voteUpPhone option[value = "3.5"]').attr('selected', 'selected');
                    break;
                case 4:
                    $('#voteUpPhone option[value = "4"]').attr('selected', 'selected');
                    break;
                case 4.5:
                    $('#voteUpPhone option[value = "4.5"]').attr('selected', 'selected');
                    break;
                case 5:
                    $('#voteUpPhone option[value = "5"]').attr('selected', 'selected');
                    break;
            }
        }
    </script>
    <!-- Modal updateSmartphone-->
    <div class="modal fade" id="updateSmartphone" tabindex="-1" role="dialog" aria-labelledby="updateSmartphoneModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateSmartphoneModalLabel">Chỉnh sửa thông tin sản phẩm </h5>
                    <button type="button" class="close" data-dismiss='modal' aria-label="close">
                        <span aria-hidden="true">&times; </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="http://huysmartphone.xyz/admin/updateSmartphone" method="post" class="form-row">
                        <div class="col-12 mt-3">
                            <input type="number" class="form-control" id="idUpPhone" name="idUpPhone" readonly>
                        </div>

                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" id="nameUpPhone" name="nameUpPhone" placeholder="Tên sản phẩm" required>
                        </div>
                        <div class="col-12 mt-3">
                            Ảnh cho sản phẩm<br>
                            Ảnh gốc:
                            <img id="imgUpPhone" src='' style='width: 50px;'></td>
                            <br>Ảnh mới(nếu muốn đổi ảnh):
                            <input type="file" class="form-control" name="imgUpPhone">
                        </div>
                        <div class="col-12 mt-3">
                            <input type="number" min="0" class="form-control" id="priceUpPhone" name="priceUpPhone" placeholder="Giá" required>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="number" min="0" class="form-control" id="discountUpPhone" name="discountUpPhone" placeholder="Giảm Giá" required>
                        </div>
                        <div class="col-12 mt-3">
                            Hãng sản xuất
                            <select class="form-select" id="brandUpPhone" name="brandUpPhone">
                                <option value=1>Apple</option>
                                <option value=2>Samsung</option>
                                <option value=3>Xiaomi</option>
                                <option value=4>OPPO</option>
                                <option value=5>Nokia</option>
                                <option value=6>Realme</option>
                                <option value=7>Vsmart</option>
                                <option value=8>Vivo</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            Hệ điều hành
                            <select class="form-select" id="osUpPhone" name="osUpPhone">
                                <option value=1>iOS</option>
                                <option value=2>Android</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            Thông số Ram
                            <select class="form-select" id="ramUpPhone" name="ramUpPhone">
                                <option value=1 selected>2GB</option>
                                <option value=2>3GB</option>
                                <option value=3>4GB</option>
                                <option value=4>6GB</option>
                                <option value=5>8GB</option>
                                <option value=6>12GB</option>
                                <option value=7>16GB</option>
                                <option value=8>18GB</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            Thông số Rom
                            <select class="form-select" id="romUpPhone" name="romUpPhone">
                                <option value=1 selected>8GB</option>
                                <option value=2>16GB</option>
                                <option value=3>32GB</option>
                                <option value=4>64GB</option>
                                <option value=5>128GB</option>
                                <option value=6>512GB</option>
                                <option value=7>1TB</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            Đánh giá:(sao)
                            <select class="form-select" id="voteUpPhone" name="voteUpPhone">
                                <option value="0.5">0.5 sao</option>
                                <option value="1">1 sao</option>
                                <option value="1.5">1.5 sao</option>
                                <option value="2">2 sao</option>
                                <option value="2.5">2.5 sao</option>
                                <option value="3">3 sao</option>
                                <option value="3.5">3.5 sao</option>
                                <option value="4">4 sao</option>
                                <option value="4.5">4.5 sao</option>
                                <option value="5">5 sao</option>
                            </select>
                        </div>
                        <button type="submit" class="mt-3 btn btn-danger" name="updateSmartphone">
                            Cập nhật
                        </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                </div>
            </div>
        </div>

    </div>
</div>