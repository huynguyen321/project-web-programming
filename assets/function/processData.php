<body>
    <?php
    error_reporting(0);
    if (session_id() === '') session_start();
    $smartphone = $_SESSION['phone'];
    //add
    if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['addProduct'])) {
        $temp =  array(
            'img' => $_POST['imgp'],
            'name' => $_POST['namep'],
            'price' => $_POST['pricep'],
            'vote' => floatval($_POST['votep'])
        );
        $smartphone['hot'][] = $temp;
        $_SESSION['phone'] = $smartphone;
        echo "<script>window.location = 'admin.php'</script>";
    };
    //delete
    if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['deleteProduct'])) {
        $k = $_POST['deleteProduct'];
        unset($smartphone['hot'][$k]);
        $smartphone['hot'] = array_values($smartphone['hot']);
        $_SESSION['phone'] = $smartphone;
        echo "<script>window.location = 'admin.php'</script>";
    };
    //update
    if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['updateProduct'])) {
        $key = $_POST['idprd'];
        $temp = array(
            'img' => $_POST['imgprd'],
            'name' => $_POST['nameprd'],
            'price' => $_POST['priceprd'],
            'vote' => floatval($_POST['voted']) 
        );
        $smartphone['hot'][$key] = $temp;
        echo '<script>console.log("'.$smartphone['hot'][$key]['name'].'");</script>';  
        $_SESSION['phone'] = $smartphone;
        echo "<script>window.location = 'admin.php'</script>";
    };
    ?>
</body>