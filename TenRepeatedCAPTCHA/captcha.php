<?php
session_start();
$code=rand(0,9);
$_SESSION["code"]=$code;
header("Cache-Control: no-cache, must-revalidate");


switch ($code) {
    case 0:
        echo "<html> <head> <title>Test Form</title> </head> <body> <form action='validate.php' method='post'> <h3>Please solve the CAPTCHA</h3> <input name='captcha' type='text'> <img src='0.png' style='margin-top:10px' /><br> <input name='submit' type='submit' value='Submit' style='margin-left:10px;margin-top:20px'> </form> </body> </html>";
        break;
    case 1:
        echo "<html> <head> <title>Test Form</title> </head> <body> <form action='validate.php' method='post'> <h3>Please solve the CAPTCHA</h3> <input name='captcha' type='text'> <img src='1.png' style='margin-top:10px' /><br> <input name='submit' type='submit' value='Submit' style='margin-left:10px;margin-top:20px'> </form> </body> </html>";
        break;
    case 2:
        echo "<html> <head> <title>Test Form</title> </head> <body> <form action='validate.php' method='post'> <h3>Please solve the CAPTCHA</h3> <input name='captcha' type='text'> <img src='2.png' style='margin-top:10px'/><br> <input name='submit' type='submit' value='Submit' style='margin-left:10px;margin-top:20px'> </form> </body> </html>";
        break;
    case 3:
        echo "<html> <head> <title>Test Form</title> </head> <body> <form action='validate.php' method='post'> <h3>Please solve the CAPTCHA</h3> <input name='captcha' type='text'> <img src='3.png' style='margin-top:10px'/><br> <input name='submit' type='submit' value='Submit' style='margin-left:10px;margin-top:20px'> </form> </body> </html>";
        break;
    case 4:
        echo "<html> <head> <title>Test Form</title> </head> <body> <form action='validate.php' method='post'> <h3>Please solve the CAPTCHA</h3> <input name='captcha' type='text'> <img src='4.png' style='margin-top:10px'/><br> <input name='submit' type='submit' value='Submit' style='margin-left:10px;margin-top:20px'> </form> </body> </html>";
        break;
    case 5:
        echo "<html> <head> <title>Test Form</title> </head> <body> <form action='validate.php' method='post'> <h3>Please solve the CAPTCHA</h3> <input name='captcha' type='text'> <img src='5.png' style='margin-top:10px'/><br> <input name='submit' type='submit' value='Submit' style='margin-left:10px;margin-top:20px'> </form> </body> </html>";
        break;
    case 6:
        echo "<html> <head> <title>Test Form</title> </head> <body> <form action='validate.php' method='post'> <h3>Please solve the CAPTCHA</h3> <input name='captcha' type='text'> <img src='6.png' style='margin-top:10px'/><br> <input name='submit' type='submit' value='Submit' style='margin-left:10px;margin-top:20px'> </form> </body> </html>";
        break;
    case 7:
        echo "<html> <head> <title>Test Form</title> </head> <body> <form action='validate.php' method='post'> <h3>Please solve the CAPTCHA</h3> <input name='captcha' type='text'> <img src='7.png' style='margin-top:10px'/><br> <input name='submit' type='submit' value='Submit' style='margin-left:10px;margin-top:20px'> </form> </body> </html>";
        break;
    case 8:
        echo "<html> <head> <title>Test Form</title> </head> <body> <form action='validate.php' method='post'> <h3>Please solve the CAPTCHA</h3> <input name='captcha' type='text'> <img src='8.png' style='margin-top:10px'/><br> <input name='submit' type='submit' value='Submit' style='margin-left:10px;margin-top:20px'> </form> </body> </html>";
        break;
    case 9:
        echo "<html> <head> <title>Test Form</title> </head> <body> <form action='validate.php' method='post'> <h3>Please solve the CAPTCHA</h3> <input name='captcha' type='text'> <img src='9.png' style='margin-top:10px'/><br> <input name='submit' type='submit' value='Submit' style='margin-left:10px;margin-top:20px'> </form> </body> </html>";
        break;
    default:
        echo "An error.. Pls check ur code.. :)";
}


// $im = imagecreatetruecolor(50, 24);
// $bg = imagecolorallocate($im, 22, 86, 165); //background color blue
// $fg = imagecolorallocate($im, 255, 255, 255);//text color white
// imagefill($im, 0, 0, $bg);
// imagestring($im, 5, 5, 5,  $code, $fg);
// header("Cache-Control: no-cache, must-revalidate");
// header('Content-type: image/png');
// imagepng($im);
// imagedestroy($im);
?>