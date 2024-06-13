<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    require_once "functions.php";

    $job = $_POST["job"];
    $name = $_POST["name"];
    $design = $_POST["design"];

    ///نفترض ان الصورة اللي اختارها العميل هي رقم واحد
    $index_image = imagecreatefrompng(__DIR__ . '/cards/1.png');
 


    $White = imagecolorallocate($index_image, 255, 255, 255); //لون الخط RGB
    $Green = imagecolorallocate($index_image, 72, 93, 86); //لون الخط RGB
    $Black = imagecolorallocate($index_image, 0, 0, 0); //لون الخط RGB



    require_once "functions.php";

    $fontsize = 20; //مقاس الخط
    $font_path2 = __DIR__ . '/Tajawal-Bold.ttf'; //مسار الخط المستخدم
    $font_path = __DIR__ . '/Tajawal-Bold.ttf'; //مسار الخط المستخدم


    //////////////////////////////// اذا اختار المستخدم الصورة رقم 1
    if ($design == "1") {
        textPrint($Arabic, $job, $index_image, $fontsize, $font_path, 840, 690, $Black);
        textPrint($Arabic, $name, $index_image, $fontsize, $font_path, 840, 740, $Black);
    }

    //////////////////////////////// اذا اختار المستخدم الصورة رقم 2
    if ($design == "2") {
        $index_image = imagecreatefrompng(__DIR__ . '/cards/2.png');
        textPrint($Arabic, $job, $index_image, $fontsize, $font_path, 840, 690, $Black);
        textPrint($Arabic, $name, $index_image, $fontsize, $font_path, 840, 740, $Black);
    }

    //////////////////////////////// اذا اختار المستخدم الصورة رقم 3
    if ($design == "3") {
        $index_image = imagecreatefrompng(__DIR__ . '/cards/3.png');
        textPrint($Arabic, $job, $index_image, $fontsize, $font_path, 840, 690, $Black);
        textPrint($Arabic, $name, $index_image, $fontsize, $font_path, 840, 740, $Black);
    }



    ob_start();
    imagepng($index_image);
    $image_data = ob_get_clean();


    countMoment();
} else {
    header('Location: ./');
}

?>

<html>

<head>
    <title> تهنئة العيد | هنا اسم الجهة</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <meta name="description" content="اكتب اسمك وانشئ تصميمك بضغطة زر وخلال ثوان ">

    <link rel="canonical" href="">
    <meta property="og:description" name="description" content="اكتب اسمك وانشئ تصميمك بضغطة زر وخلال ثوان ">
    <meta property="type" content="website">
    <meta property="og:type" content="website">
    <meta property="image" content="images/logo.png">
    <meta property="og:image" content="images/logo.png">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/code.js"></script>
</head>

<body style="width: 100%">
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <a href="index.php"><img src="images/logo.png" class="site-logo"></a>
                <div class="box">
                    <div class="success-message">تم تصميم بطاقة التهنئة بنجاح</div>
                    <img src="data:image/png;base64,<?php echo base64_encode($image_data); ?>" class="preview-image">
                    <center>
                        <a id="download_image" class="primary-btn"
                            href="data:image/png;base64,<?php echo base64_encode($image_data); ?>"
                            download="card.png">تحميل
                            الصورة
                            <i class="fas fa-download"></i>
                        </a>


                        <a class="primary-btn" id="back-button">
                            رجــوع للرئيسية
                            <i class="fas fa-arrow-right"></i>
                        </a>



                        <br />
                        <br />
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
    </div>


    <!-- 
<div id="site-footer">
    <p>جميع    الحقوق محفوظة   ©️ 2023</p>
</div> -->


    <script>

        ////////////////////////////////////////////// go back
        var backButton = document.getElementById('back-button');

        // Add an event listener for the click event
        backButton.addEventListener('click', function (event) {
            // back page
            window.history.back();
        });
        /////////////////////////////////////////////////

    </script>
</body>

</html>