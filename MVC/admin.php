<?php
error_reporting(0);
if (session_id() === '') session_start();
include './assets/includes/header.inc.php'
?>

<body>
    <div class="container-fluid">
        <button class="btn btn-primary" data-toggle="modal" data-target="#addAccessoriesModal">
            <i class="fas fa-plus mr-2"></i> Thêm sản phẩm</button>
        <form action="hotAccessories.php" method="post">
            <table class="table">
                <thead class="thead-light text-center">
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php


                    foreach ($smartphone as $key => $value) {
                        if ($key == "hot") {
                            echo '<script> var array_temp = ' . json_encode($smartphone['hot']) . '</script>';
                            foreach ($value as $k => $v) {
                                $btn_action = '<button type="button" onclick="update(' . $k . ')" class="btn btn-outline-danger" data-toggle="modal" data-target="#updateAccessories"><i class="fas fa-cogs"> </i></button>
                                <button type="submit" value="' . $k . '" name="deleteAccessories" class="btn btn-out-warning"> <i class="fas fa-trash"> </i></button>'
                    ?>
                                <tr>
                                    <td><?php echo $k ?></td>
                                    <td><?php echo $v['name'] ?></td>
                                    <td><img src=<?php echo $v['img'] ?> style="width: 50px;"></td>
                                    <td><?php echo $v['price'] ?></td>
                                    <td>
                                        <?php
                                        // $vote = '';
                                        // if ($v['vote'] == 1 || $v['vote'] == 2 || $v['vote'] == 3 || $v['vote'] == 4 || $v['vote'] == 5) {
                                        //     for ($i = 0; $i < $v['vote']; $i++) {
                                        //         $vote = $vote . '<i class="fa fa-star fa-fw star-vote" aria-hidden="true"></i>';
                                        //     }
                                        // } else {
                                        //     for ($i = 0; $i < ($v['vote'] - 0.5); $i++) {
                                        //         $vote = $vote . '<i class="fa fa-star fa-fw star-vote" aria-hidden="true"></i>';
                                        //     };
                                        //     $vote = $vote . '<i class="fa fa-star-half fa-fw star-vote" aria-hidden="true"></i>';
                                        // };
                                        // echo $vote; 
                                        ?>
                                    </td>
                                    <td><?php echo $btn_action ?></td>
                                </tr>

                    <?php };
                        };
                    }; ?>
                </tbody>
            </table>
        </form>
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
                        <form action="hotAccessories.php" method="post" class="form-row">
                            <div class="col-12 mt-3">
                                <input type="text" class="form-control" name="namep" placeholder="Tên sản phẩm">
                            </div>
                            <div class="col-12 mt-3">
                                <input type="text" class="form-control" name="imgp" placeholder="Link ảnh">
                            </div>
                            <div class="col-12 mt-3">
                                <input type="text" class="form-control" name="pricep" placeholder="Giá">
                            </div>
                            <div class="col-12 mt-3">
                                Đánh giá:(sao)
                                <div class="row vote-num">
                                    <span><input type="radio" name="votep" value="0.5">0.5</span>
                                    <span><input type="radio" name="votep" value="1">1</span>
                                    <span><input type="radio" name="votep" value="1.5">1.5</span>
                                    <span><input type="radio" name="votep" value="2">2</span>
                                    <span><input type="radio" name="votep" value="2.5">2.5</span>
                                    <span><input type="radio" name="votep" value="3">3</span>
                                    <span><input type="radio" name="votep" value="3.5">3.5</span>
                                    <span><input type="radio" name="votep" value="4">4</span>
                                    <span><input type="radio" name="votep" value="4.5">4.5</span>
                                    <span><input type="radio" name="votep" value="5" checked="true">5</span>
                                </div>
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
                $("#idd").val(key);
                $("#named").val(array_temp[key]['name']);
                $("#imgd").val(array_temp[key]['img']);
                $("#priced").val(array_temp[key]['price']);
                $('input[name="voted"]').filter(`[value="${array_temp[key]['vote']}"]`).attr('checked', true);
            }
        </script>

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
</body>

</html>