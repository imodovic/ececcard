<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    require_once "functions.php";

    $name = $_POST["name"];
    $design = $_POST["design"];

    ///نفترض ان الصورة اللي اختارها العميل هي رقم واحد
    $index_image = imagecreatefrompng(__DIR__ . '/cards/11.png');
 


    $White = imagecolorallocate($index_image, 255, 255, 255); //لون الخط RGB
    $Blue = imagecolorallocate($index_image, 29, 47, 58); //لون الخط RGB
    $Black = imagecolorallocate($index_image, 0, 0, 0); //لون الخط RGB
    $Lightblue = imagecolorallocate($index_image, 51, 167, 186); //لون الخط RGB
    $Orange = imagecolorallocate($index_image, 110, 79, 34); //لون الخط RGB



    require_once "functions.php";

    $fontsize = 6; //مقاس الخط
    $font_path2 = __DIR__ . '/29lt-bukra-Bold.ttf'; //مسار الخط المستخدم
    $font_path = __DIR__ . '/29lt-bukra-Bold.ttf'; //مسار الخط المستخدم

 
    $x=877;
    $y=1080;
    
    $w = 226;
    $h = 224;

      $rand = time();


    //////////////////////////////// اذا اختار المستخدم الصورة رقم 1
    if ($design == "1") {
        textPrint($Arabic, $name, $index_image, $fontsize+18, $font_path, 1300, 1155, $White);

        $x=877;
        $y=1100;

        @upload($rand."upload.png","fileToUpload",$w,$h);
        if (file_exists('uploads/'.$rand."upload.png")){ 
        $png = imagecreatefrompng(__DIR__ . '/uploads/'.$rand.'upload.png');                 
        }

        $w = 155;
        $h = 9;
        list($width, $height) = getimagesize(__DIR__ . '/cards/11.png'); 
        $out = imagecreatetruecolor($width, $height);       
        imagecopyresampled($out, $png, $x, $y, 0, 0, $w,$h,$w,$h);   
        imagecopy($out,$index_image, 0, 0, 0, 0, $width, $height); 
    }


    //////////////////////////////// اذا اختار المستخدم الصورة رقم 2
    if ($design == "2") {
        $index_image = imagecreatefrompng(__DIR__ . '/cards/22.png');
   
        textPrint($Arabic, $name, $index_image, $fontsize+15, $font_path, 1300, 1155, $Black);
        $x=275;
        $y=205;

        $w = 155;
        $h = 9;
        @upload($rand."upload.png","fileToUpload",$w,$h);
        if (file_exists('uploads/'.$rand."upload.png")){ 
        $png = imagecreatefrompng(__DIR__ . '/uploads/'.$rand.'upload.png');                 
        }
        list($width, $height) = getimagesize(__DIR__ . '/cards/22.png'); 
        $out = imagecreatetruecolor($width, $height);  
        imagecopyresampled($out, $png, $x, $y, 0, 0, $w,$h,$w,$h);   
        imagecopy($out,$index_image, 0, 0, 0, 0, $width, $height); 
    }

    //////////////////////////////// اذا اختار المستخدم الصورة رقم 3
    if ($design == "3") {
        $index_image = imagecreatefrompng(__DIR__ . '/cards/77.png');
       
        textPrint($Arabic, $name, $index_image, $fontsize+15, $font_path, 1300, 1155, $Orange);

        $x=280;
        $y=223;
        $w = 155;
        $h = 9;
        @upload($rand."upload.png","fileToUpload",$w,$h);
        if (file_exists('uploads/'.$rand."upload.png")){ 
        $png = imagecreatefrompng(__DIR__ . '/uploads/'.$rand.'upload.png');                 
        }

        list($width, $height) = getimagesize(__DIR__ . '/cards/77.png'); 
        $out = imagecreatetruecolor($width, $height);  
        imagecopyresampled($out, $png, $x, $y, 0, 0, $w,$h,$w,$h);   
        imagecopy($out,$index_image, 0, 0, 0, 0, $width, $height); 
    }

     //////////////////////////////// 4 اذا اختار المستخدم الصورة رقم
    if ($design == "4") {
        $index_image = imagecreatefrompng(__DIR__ . '/cards/44.png');
       
        textPrint($Arabic, $name, $index_image, $fontsize+15, $font_path, 1300, 1155, $Lightblue);
        
        $x=280;
        $y=223;
        $w = 155;
        $h = 9;
        @upload($rand."upload.png","fileToUpload",$w,$h);
        if (file_exists('uploads/'.$rand."upload.png")){ 
        $png = imagecreatefrompng(__DIR__ . '/uploads/'.$rand.'upload.png');                 
        }

        list($width, $height) = getimagesize(__DIR__ . '/cards/44.png'); 
        $out = imagecreatetruecolor($width, $height);  
        imagecopyresampled($out, $png, $x, $y, 0, 0, $w,$h,$w,$h);   
        imagecopy($out,$index_image, 0, 0, 0, 0, $width, $height); 
    }


    ob_start();
    imagepng($out);
    $image_data = ob_get_clean();

    @unlink('uploads/'.$rand."upload.png");
    countMoment();
} else {
    header('Location: ./');
}


?>

<html>

<head>
    <title>  تهنئة عيد الأضحى المبارك لمنسوبي شركة الشرق للاستشارات الهندسية </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <meta name="description" content="اكتب اسمك وانشئ تصميمك بضغطة زر وخلال ثوان ">

    <link rel="canonical" href="">
    <meta property="og:description" name="description" content="اكتب اسمك وانشئ تصميمك بضغطة زر وخلال ثوان ">
    <meta property="type" content="website">
    <meta property="og:type" content="website">
    <meta property="image" content="images/ececlogo.png">
    <meta property="og:image" content="images/ececlogo.png">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/code.js"></script>
</head>

<body style="width: 100%">
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <a href="index.php"><img src="images/ececlogo.png" class="site-logo"></a>
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