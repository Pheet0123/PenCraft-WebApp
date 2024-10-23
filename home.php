<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="homeTT.css">
    <link rel="icon" type="image/x-icon" href="รูป/logo_BW.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai+Looped:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "คุณต้องเข้าสู่ระบบก่อน";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
       
    }

?>

    <div>
            <div class="nav_bar">
                    <div class="lmg"><img src="รูป/logo_BW.png" alt=""></div>
                    <div class="h1l">HOME</div>
                    <div class="h1"><a href="Product.php" class="HP"> PRODUCT</a></div>
                    <div class="h1"> <a href="About_Us.php" class="HP">ABOUT US</a></div>
                    <div class="h1"> <label >ยินดีต้อนรับคุณ</label> <strong><?php echo $_SESSION['username']; ?>  </strong></div>
                    <div class="h1"><p><a href="login.php?logout='1'" style="color: red; text-decoration: none;" >Logout</a></p></div>
            </div>


            <div class="Buynow">
                <div class="Buynow_topic">  
                    <div><h1>PenCraft</h1></div>
                    <div><p>  ออกรูปแบบปากกาตามจิตวิญญาณของคุณ</p></div>
                    <div> <button class="btn_buy"><a  class="btn_P_text" href="Product.php">ออกแบบเลย</a></button></div>

                </div>

                <div ><img class="img_buynow" src="รูป/gpp-Photoroom.png" alt=""></div>
            </div>


            <div class="ability">
                <div class="ab">
                    <div >
                        <img class="img_ab" src="รูป/muscles.png" alt="">
                    </div>
                    <p class="Tab">ปากกาขอเรามีความแข็งแรง </p>
                </div>
                
                <div class="ab">
                    <div >
                        <img class="img_ab" src="รูป/slip.png" alt="">
                    </div>
                    <p class="Tab">หมึกปากกาไหลไม่หยุดหยุดไม่อยู่</p>
                </div>

                <div class="ab">
                    <div >
                        <img class="img_ab" src="รูป/soft.png" alt="">
                    </div>
                    <p class="Tab">ปากกาของเรามีความนุ่มมาก</p>
                </div>
            </div>

            <div class="lore">
                <div > <img class="img_lore" src="รูป/man-5723449_1280.png" alt=""></div>
                <div class="lore_text">
                    <h1>ประวัติความเป็นมา</h1>
                        <p>
                            PenCraft เกิดจากเจ้าของเว็บโปจดักชอบนำชิ้นส่วนของปากกาหลายๆยี่ห้อมาผสมหรือจัดแปลงให้ปากกาไม่เหมือนกับปากกาในท้องตลาดถั่วไปทำให้เกิดความมีเอกรักษ์ของปากกาจึงอยากให้ทุกคนสามารถเลือกรูปแบบที่ทุกคนต้องการได้

                        
                        </p>
                </div>

            </div>

            <div class="btn_P">
                <div><button ><a class="btn_P_text" href="Product.php">ออกแบบเลย</a> </button></div>
                <div>     <p>ออกรูปแบบปากกาตามจิตวิญญาณของคุณ</p> </div>
            </div>

            <div class="end_home">
                <div><p>Copyright © 2024PenCraft</p></div>


                <div><img src="รูป/logo_BW.png" alt=""></div>


                
                
            </div>






    </div>
    
</body>
</html>