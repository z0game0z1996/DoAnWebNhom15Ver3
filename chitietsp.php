<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mobile Shopping</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div id="background">
    <div id="page">
        <div id="header">
            <div id="logo">
                
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
                        <form action="" method="">
                            <input type="text" value="" style="float:left;padding-right: 20px;margin-right: 10px;">
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
                    <h4><span>Chi Tiết Sản Phẩm</span></h4>                   
                    <?php require_once "db.php";
                        $id = $_GET['id'];
                        $chitiet = $db->chitietsp($id);
                        foreach ($chitiet as $rows) {
                    ?>
                        <li>
                            <a href="#"> <img src="./images/<?php echo $rows["HinhAnh"]; ?>" alt="Img"
                                             width="169" height="168"><br> <?php echo $rows['TenSP']  ?>
                                <br><span><?php echo $rows['GiaSP']  ?></span></a>
                        </li>
                        <?php 
                            } 
                        ?>
                        <h1 style="color:red" >Giới Thiệu Về Sản Phẩm:</h1>
                        <p style="text-align:left"><?php echo $rows['MoTa']?> </p>
                </div>                                              
            </div>
        </div>
        <div id="footer">
            <div class="background">
                <p class="footnote">
                   
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>