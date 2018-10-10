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
                    <li class="selected"><a href="index.php">Home</a></li>
                    <?php
                        require_once "db.php";
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
                    <h4><span>SmartPhone</span></h4>
                    <ul class="items">
                    <?php 
                        require_once "db.php";
                        $id = $_GET['id'];
                        $dsdienthoai = $db->getsanpham($id);
                        foreach($dsdienthoai as $rows) {
                    ?>
                        <li>
                            <a href="chitietsp.php?id=<?php echo $rows['ID']; ?>"> <img src="./images/<?php echo $rows["HinhAnh"]; ?>" alt="Img"
                                              width="169" height="168"><br> <?php echo $rows['TenSP']  ?>
                                <br><span><?php echo $rows['GiaSP']  ?></span></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div id="sale">
                    <h4><span>Sale Items</span></h4>
                    <ul class="items">
                        <li>
                            <a href="#"> <img src="images/iphone-6s-plus-128gb-400-1-400x450.png"
                                              alt="Img" width="169" height="168">
                                <br>Điện thoại iPhone 6s Plus 128GB <br><span>27490000 VND</span></a>
                        </li>
                        <li>
                            <a href="#"> <img src="images/iphone-6s-plus-128gb-400-1-400x450.png"
                                              alt="Img" width="169" height="168">
                                <br>Điện thoại iPhone 6s Plus 64GB <br><span>24490000 VND</span></a>
                        </li>
                        <li>
                            <a href="#"> <img src="images/iphone-6s-plus-128gb-400-1-400x450.png"
                                              alt="Img" width="169" height="168">
                                <br>Điện thoại iPhone 6s Plus 16GB <br><span>19490000 VND</span></a>
                        </li>
                    </ul>
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