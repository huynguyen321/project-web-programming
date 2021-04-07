<!-- Smartphone -->
<div>
    <button class="btn btn-primary" data-toggle="modal" data-target="#addAccessoriesModal">
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
                        <button type='button' class='btn btn-outline-danger' data-toggle='modal' data-target='#updateSmartphone" . $row['IDphone'] . "'><i class='fas fa-cogs'> </i></button>
                       <a href='/Admin/Delete/" . $row['IDphone'] . "'><button type='button' name='deleteSmartphone' class='btn btn-out-warning'> <i class='fas fa-trash'> </i></button></a>
                    </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Modal addAccessories-->
    <div class="modal fade" id="addAccessoriesModal" tabindex="-1" role="dialog" aria-labelledby="addAccessoriesModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAccessoriesModalLabel">Thêm sản phẩm </h5>
                    <button type="button" class="close" data-dismiss='modal' aria-label="close">
                        <span aria-hidden="true">&times; </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/addSmartphone" method="post" enctype="multipart/form-data" class="form-row">
                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" name="namePhone" placeholder="Tên sản phẩm" required>
                        </div>
                        <div class="col-12 mt-3">
                            Ảnh cho sản phẩm
                            <input type="file" class="form-control" name="imgPhone" required>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" name="pricePhone" placeholder="Giá" required>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" name="discountPhone" placeholder="Giảm Giá" required>
                        </div>
                        <div class="col-12 mt-3">
                            Hãng sản xuất
                            <select class="form-select" name="brandPhone">
                                <option value="1">Apple</option>
                                <option value="2">Samsung</option>
                                <option value="3">Xiaomi</option>
                                <option value="4">OPPO</option>
                                <option value="5">Nokia</option>
                                <option value="6">Realme</option>
                                <option value="7" selected>Vsmart</option>
                                <option value="8">Vivo</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            Hệ điều hành
                            <select class="form-select" name="osPhone">
                                <option value="1">iOS</option>
                                <option value="2" selected>Android</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            Thông số Ram
                            <select class="form-select" name="ramPhone">
                                <option value="1" selected>2GB</option>
                                <option value="2">3GB</option>
                                <option value="3">4GB</option>
                                <option value="4">6GB</option>
                                <option value="5">8GB</option>
                                <option value="6">12GB</option>
                                <option value="7">16GB</option>
                                <option value="8">18GB</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            Thông số Rom
                            <select class="form-select" name="romPhone">
                                <option value="1" selected>8GB</option>
                                <option value="2">16GB</option>
                                <option value="3">32GB</option>
                                <option value="4">64GB</option>
                                <option value="5">128GB</option>
                                <option value="6">512GB</option>
                                <option value="7">1TB</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            Đánh giá:(sao)
                            <select class="form-select" name="votePhone">
                                <option value="0.5">0.5 sao</option>
                                <option value="1">1 sao</option>
                                <option value="1.5">1.5 sao</option>
                                <option value="2">2 sao</option>
                                <option value="2.5">2.5 sao</option>
                                <option value="3">3 sao</option>
                                <option value="3.5">3.5 sao</option>
                                <option value="4">4 sao</option>
                                <option value="4.5">4.5 sao</option>
                                <option value="5" selected>5 sao</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-danger mt-3" name="addAccessories">Thêm</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal updateAccessories-->
    <div class="modal fade" id="upAccessories" tabindex="-1" role="dialog" aria-labelledby="updateAccessoriesLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateAccessoriesLabel">Chỉnh sửa thông tin sản phẩm </h5>
                    <button type="button" class="close" data-dismiss='modal' aria-label="close">
                        <span aria-hidden="true">&times; </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="hotAccessories.php" method="post" class="form-row">
                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" id="idd" name="idprd" readonly>
                        </div>

                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" id="named" name="nameprd">
                        </div>

                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" id="imgd" name="imgprd">
                        </div>

                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" id="priced" name="priceprd">
                        </div>
                        <div class="col-12 mt-3">
                            Đánh giá:(sao)
                            <div class="row vote-num">
                                <span><input type="radio" name="voted" id="0.5" value="0.5">0.5</span>
                                <span><input type="radio" name="voted" id="1" value="1">1</span>
                                <span><input type="radio" name="voted" id="1.5" value="1.5">1.5</span>
                                <span><input type="radio" name="voted" id="2" value="2">2</span>
                                <span><input type="radio" name="voted" id="2.5" value="2.5">2.5</span>
                                <span><input type="radio" name="voted" id="3" value="3">3</span>
                                <span><input type="radio" name="voted" id="3.5" value="3.5">3.5</span>
                                <span><input type="radio" name="voted" id="4" value="4">4</span>
                                <span><input type="radio" name="voted" id="4.5" value="4.5">4.5</span>
                                <span><input type="radio" name="voted" id="5" value="5">5</span>
                            </div>
                        </div>
                        <button type="submit" class="mt-3 btn btn-danger" name="updateAccessories">
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