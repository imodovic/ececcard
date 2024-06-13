<!DOCTYPE html>
<html>

<head>


    <title> تهنئة العيد | اسم الجهة هنا </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="description" content="اكتب اسمك وانشئ تصميمك بضغطة زر وخلال ثوان ">

    <link rel="canonical" href="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;700;800&display=swap" rel="stylesheet">
    <meta property="og:description" name="description" content="اكتب اسمك وانشئ تصميمك بضغطة زر وخلال ثوان " />
    <meta property="type" content="website" />
    <meta property="og:type" content="website" />
    <meta property="image" content="images/logo.png" />
    <meta property="og:image" content="images/logo.png" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/code.js"></script>

</head>

<body style="width: 100%">
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <a href="index.php"><img src="images/logo.png" class="site-logo" /></a>
                <div class="content-grid">

                    <form method="post" action="create.php" class="new-card-form">
                        <h3 class="section-title">انشئ تهنئتك </h3>

                        <div class="grid-item">
                            <label for="job">البادئة</label>
                            <input type="text" name="job" placeholder="مثل ال اخوكم ، محبكم  ...الخ " id="job">
                        </div>


                        <div class="grid-item">
                            <label for="name">الإسم</label>
                            <input type="text" name="name" placeholder="اكتب  اسمك" id="name">
                        </div>



                        <div class="grid-item select-design-grid">
                            <label for="name">إختر التصميم </label>

                            <div>
                                <!-- ------------ البطاقة الأولي خيار ----------------------->
                                <div class="design-item">
                                    <input type="radio" name="design" value="1" id="design-1">
                                    <label for="design-1"><img src="cards/1.png"></label>
                                </div>

                                <!-- ----------- البطاقة الثانية خيار ---------------------->

                                <div class="design-item">
                                    <input type="radio" name="design" value="2" id="design-2">
                                    <label for="design-2"><img src="cards/2.png"></label>
                                </div>
                                <!-- ----------- البطاقة الثالثة خيار ---------------------->

                                <div class="design-item">
                                    <input type="radio" name="design" value="3" id="design-3">
                                    <label for="design-3"><img src="cards/3.png"></label>
                                </div>

                                <!-- ----------- البطاقة الرابعة خيار ---------------------->

                                <div class="design-item">
                                    <input type="radio" name="design" value="4" id="design-4">
                                    <label for="design-4"><img src="cards/4.png"></label>
                                </div>


                            </div>

                        </div>

                        <div class="error-message"></div>

                        <input type="submit" name="create" class="primary-btn submit-button" value="انشئ تصميمك">

                    </form>


                </div>
                <center>
                    <br />
                    <br />
                    <div class="uk-margin">
                        عدد البطاقات المطبوعة
                        <?php echo file_get_contents("use.txt"); ?>
                    </div>


                </center>


            </div>
        </div>
    </div>
    <!-- 
<div id="site-footer">
    <p>جميع    الحقوق محفوظة   ©️ 2023</p>
</div> -->
</body>

</html>