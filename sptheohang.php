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
                <a href="index.html"><img src="images/logo.png" alt="LOGO"></a>
            </div>
            <div id="navigation">
                <ul id="primary">
				<?php
				require "./db.php";
				?>
                    <li class="selected">
                        <a href="index.php">Home</a>
                    </li>
					<?php
                    $db = new db;
					$hangsx = $db->hangsx();
					foreach($hangsx as $row){
					?>
                    <li>
                        <a href="sptheohang.php?idhang=<?php echo $row['mahang'] ?>"><?php echo $row['tenhang'] ?></a>
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
                    <h4><span>New Items</span></h4>
                    <ul class="items">
                        <?php
						$mahang = $_GET['idhang'];
						$sptheohang = $db->sptheohang($mahang);
						foreach($sptheohang as $row){
						?>
						<li>
                            <a href="chitietsp.php?id=<?php echo $row['masp'] ?>"> <img src="./images/<?php echo $row['hinhanh'] ?>" alt="Img" width="169"
                                              height="168"><br> <?php echo $row['tensp'] ?>
                                <br><span><?php echo $row['gia'] ?> VND</span></a>
                        </li>
                        <?php
						}
						?>
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