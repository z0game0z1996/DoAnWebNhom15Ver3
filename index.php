<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mobile Shopping</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div id="background">
    <div id="page">
        <div id="header">
            <div id="logo">
                
            </div>

            <div style="text-align: center;">
                <button type="button" class="btn btn-danger" onclick="window.location.href='./admin/login.php'">Login to admin</button>
            </div>
            <div id="navigation">
                <ul id="primary">
                    <li class="selected">
                        <a href="index.php">Home</a>
                    </li>
                    
                    <?php
                    	require_once "./db.php";
                        $db = new db;
                    	$TenHang = $db->TenHang();
                    	foreach ($TenHang as $rows) {
                    ?> 
                    <li>
                        <a href="sanpham.php?id=<?php echo $rows['IDHSX']?>"><?php echo $rows['TenHSX'] ?></a>
                    </li>
                    <?php
                    	} 
                    ?>
                    
                </ul>
                <ul>
                    <li>
                        <form action="search.php" method="get">
                            <input type="text" name="search" value="" placeholder="Nhập sản phẩm cần tìm" style="float:left;padding-right: 20px;margin-right: 10px;">
                            <input type="submit" value="GO" class="button"
                                   style="position: absolute;background: #97b847;color: #fff;">
                        </form>
                    </li>
                </ul>

            </div>
        </div>
        <div id="contents">

            <div id="main">
                <div id="featured">
                    <h4><span>Items</span></h4>
                    <ul class="items">
                    	<?php
                    		require_once  './db.php';
                            
                            $per_page = 4;
                            $page = isset($_GET['page'])?$_GET['page']:1;
                            $total_rows = 24;
                            $base_url= $_SERVER['PHP_SELF'];
                    		$sanpham = $db->sanpham($page, $per_page);
                    		foreach ($sanpham as $row) {
                    	?>
                        <li>
                            <a href="chitietsp.php?id=<?php echo $row['ID']; ?>"> <img src="./images/<?php echo $row['HinhAnh'] ?>" alt="Img" width="169"
                                              height="168"><br> <?php echo $row['TenSP']; ?>
                                <br><span><?php echo $row['GiaSP']; ?></span></a>
                        </li>
                        <?php 
                    		} 
                    	?>
                    </ul>
                   
                </div>
                 <div style="float: right; display: inline-block;">
                    <?php
                         echo $db->phantrang ($base_url, $total_rows, $page, $per_page);
                    ?>
                    </div>
            </div>
        </div>

        <div id="footer">
            <div class="background">
                <p class="footnote">
                    2018 &copy; TDC - Lập trình web 1 : Bui Nguyen Minh Tuan
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>