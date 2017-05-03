<?php
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==0&&$_POST["captcha"]==1987)
{
echo "Correct Code Entered";
}
elseif(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==1&&$_POST["captcha"]==9259)
{
    echo "Correct Code Entered";
}
elseif(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==2&&$_POST["captcha"]==5803)
{
    echo "Correct Code Entered";
}
elseif(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==3&&$_POST["captcha"]==7026)
{
    echo "Correct Code Entered";
}
elseif(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==4&&$_POST["captcha"]==6859)
{
    echo "Correct Code Entered";
}
elseif(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==5&&$_POST["captcha"]==2224)
{
    echo "Correct Code Entered";
}
elseif(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==6&&$_POST["captcha"]==8196)
{
    echo "Correct Code Entered";
}
elseif(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==7&&$_POST["captcha"]==9927)
{
    echo "Correct Code Entered";
}
elseif(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==8&&$_POST["captcha"]==6612)
{
    echo "Correct Code Entered";
}
elseif(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==9&&$_POST["captcha"]==7342)
{
    echo "Correct Code Entered";
}
else
{
die("Wrong Code Entered");
}
?>