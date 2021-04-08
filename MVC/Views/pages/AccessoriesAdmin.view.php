<!-- Accessories -->
<div>
    <button class="btn btn-primary" data-toggle="modal" data-target="#addAccessoriesModal">
        <i class="fas fa-plus mr-2"></i> Thêm sản phẩm</button>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>ID Phụ kiện</th>
                <th>Tên Phụ kiện</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Giảm giá</th>
                <th>Mô tả</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $tempAccessories = [];
            while ($row = $data['Accessories']->fetch_assoc()) {
                $tempAccessories[] = $row;
                echo "<tr>
                    <td>" . $row['IDaccessories'] . "</td>
                    <td>" . $row['AccessoriesName'] . "</td>
                    <td><img src='" . $row['Image'] . "' style='width: 50px;'></td>
                    <td>" . $row['Price'] . "</td>
                    <td>" . $row['Discount'] . "</td>
                    <td>" . $row['Description'] . "</td>
                    <td>
                        <button type='button' onclick='update(" . $row['IDaccessories'] . ")' class='btn btn-outline-danger' data-toggle='modal' data-target='#updateAccessories'><i class='fas fa-cogs'> </i></button>
                       <a href='http://huysmartphone.xyz/Admin/deleteAccessories/" . $row['IDaccessories'] . "'><button type='button' name='deleteAccessories' class='btn btn-out-warning'> <i class='fas fa-trash'> </i></button></a>
                    </td>
                    </tr>";
            }
            echo '<script>var tempAccessories = ' . json_encode($tempAccessories) . '</script>';
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
                    <form action="http://huysmartphone.xyz/admin/addAccessories" method="post" enctype="multipart/form-data" class="form-row">
                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" name="nameAccessories" placeholder="Tên sản phẩm" required>
                        </div>
                        <div class="col-12 mt-3">
                            Ảnh cho sản phẩm
                            <input type="file" class="form-control" name="imgAccessories" required>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="number" min="0" class="form-control" name="priceAccessories" placeholder="Giá" required>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="number" min="0" class="form-control" name="discountAccessories" placeholder="Giảm Giá" required>
                        </div>
                        <div class="col-12 mt-3">
                            <textarea cols="10" rows="5" class="form-control" name="descriptionAccessories" placeholder="Mô tả" required></textarea>
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

    <script>
        function update(key) {
            $("#idUpAccessories").val(key);
            key--;
            $("#nameUpAccessories").val(tempAccessories[key]['AccessoriesName']);
            $("#imgUpAccessories").attr("src", tempAccessories[key]['Image']);
            $("#priceUpAccessories").val(tempAccessories[key]['Price']);
            $("#discountUpAccessories").val(tempAccessories[key]['Discount']);
            $("#descriptionUpAccessories").val(tempAccessories[key]['Description']);
        }
    </script>
    <!-- Modal updateAccessories-->
    <div class="modal fade" id="updateAccessories" tabindex="-1" role="dialog" aria-labelledby="updateAccessoriesModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateAccessoriesModalLabel">Chỉnh sửa thông tin sản phẩm </h5>
                    <button type="button" class="close" data-dismiss='modal' aria-label="close">
                        <span aria-hidden="true">&times; </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="http://huysmartphone.xyz/admin/updateAccessories" method="post" class="form-row">
                        <div class="col-12 mt-3">
                            <input type="number" class="form-control" id="idUpAccessories" name="idUpAccessories" readonly>
                        </div>

                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" id="nameUpAccessories" name="nameUpAccessories" placeholder="Tên sản phẩm" required>
                        </div>
                        <div class="col-12 mt-3">
                            Ảnh cho sản phẩm<br>
                            Ảnh gốc:
                            <img id="imgUpAccessories" src='' style='width: 50px;'></td>
                            <br>Ảnh mới(nếu muốn đổi ảnh):
                            <input type="file" class="form-control" name="imgUpAccessories">
                        </div>
                        <div class="col-12 mt-3">
                            <input type="number" min="0" class="form-control" id="priceUpAccessories" name="priceUpAccessories" placeholder="Giá" required>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="number" min="0" class="form-control" id="discountUpAccessories" name="discountUpAccessories" placeholder="Giảm Giá" required>
                        </div>
                        <div class="col-12 mt-3">
                            <textarea id="descriptionUpAccessories" cols="10" rows="5" class="form-control" name="descriptionUpAccessories" placeholder="Mô tả" required></textarea>
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