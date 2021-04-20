<?php
if(array_key_exists('revertButton',$_GET)){
    deleteCookies();
} 
if(!isset($_COOKIE["FavBackgroundImgName"])){
    setcookie("FavBackgroundImgName"," ");

}else{
    if(isset($_REQUEST['myRadioField'])){
        setcookie("FavBackgroundImgName",$_REQUEST['myRadioField']);
        header("Refresh:0");
    }
    $url1 ="url('".$_COOKIE["FavBackgroundImgName"].".jpg')";

    echo "<style>#popup{visibility: hidden;}</style>";
    echo "<style>#Overlay{visibility: hidden;}</style>";
    echo "<style>#Content{visibility: hidden;}</style>";
    echo "<style>#revertButton{visibility: visible;}</style>";
    echo "<style>Body{background-image:$url1;}</style>";
    echo "<style>Body{background-repeat:no-repeat;}</style>";
    echo "<style>#title{background:transparent;}</style>";
    echo "<style>#randomText{background:transparent;}</style>";
}

    function deleteCookies(){
    unset($_COOKIE["FavBackgroundImgName"]);
}

?>;
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="style.css">
    <title>Choose Your background</title>
</head>

<body>
    <form action="index.php" method="POST">
    <h1 id ="title">Lorem ipsum...</h1>
    <p id="randomText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis natus asperiores voluptas aut quis ad laudantium debitis non eveniet impedit ea dicta culpa pariatur, nulla atque, perspiciatis modi officiis cum itaque, accusamus possimus eligendi
        odio. Architecto sed, optio explicabo exercitationem hic tempore distinctio nisi praesentium eveniet eaque, iste quas molestiae beatae eum tempora magni quos aut qui laborum assumenda dolorem veniam. Accusantium deserunt beatae sit nulla quae
        eius suscipit natus consequuntur nobis aliquid error omnis repellendus perspiciatis dolor quos exercitationem mollitia, voluptate libero nostrum itaque ipsa quia repellat reiciendis? Corrupti nihil alias magni adipisci exercitationem nobis atque
        accusantium quas facilis mollitia id delectus incidunt, numquam asperiores cumque quam earum eligendi, at libero saepe natus! Tempore esse sint animi labore consequatur! Quas tempore natus omnis? Commodi iusto dolorem debitis sequi repellendus
        iure tempora deserunt nobis sapiente maxime culpa harum voluptatem vel, alias consequuntur! Aut labore similique ipsum tenetur? Laudantium, tempore! Labore consectetur consequatur aliquid quas aut libero! Voluptatem, rem sint? Pariatur iste quae
        dolorem dolor, minima mollitia repudiandae voluptate optio.</p>

    <div class="popUp" id="popup">
        <div class="overLay" id="Overlay"></div>
        <div class="content" id="Content">
            <h2>Choose Your Wallpaper</h2>
            <ul>
                <li>
                    <label for="myRadioID1" class="radio">
                        <img src="1920x1080.jpg" alt="">
                    <input type="radio" name="myRadioField" id="myRadioID1" class="radioInput"value="1920x1080">
                    <div class="radioCircle">

                    </div>
                    
                    </label>
                </li>
                <li>
                    <label for="myRadioID2" class="radio">
                        <img src="1920x1080web.jpg" alt="">
                    <input type="radio" name="myRadioField" id="myRadioID2" class="radioInput" value="1920x1080web">
                    <div class="radioCircle">

                    </div>
                    
                    </label>
                </li>
                <li>
                    <label for="myRadioID3" class="radio">
                        <img src="Ra-1920x1080.jpg" alt="">
                    <input type="radio" name="myRadioField" id="myRadioID3" class="radioInput"value="Ra-1920x1080">
                    <div class="radioCircle">

                    </div>
                    
                </label>
                </li>
                <li>
                    <label for="myRadioID4" class="radio">
                        <img src="Underwater1920x1080.jpg" alt="">
                    <input type="radio" name="myRadioField" id="myRadioID4" class="radioInput"value="Underwater1920x1080">
                    <div class="radioCircle">

                    </div>
                    
                    </label>
                </li>
                <li>
                    <label for="myRadioID5" class="radio">
                        <img src="wallpaper-firstsunshine1920x1080.jpg" alt="">
                    <input type="radio" name="myRadioField" id="myRadioID5" class="radioInput"value="wallpaper-firstsunshine1920x1080">
                    <div class="radioCircle">

                    </div>
                    
                    </label>
                </li>
            </ul>
            <input type="submit" value="Choose" class="chooseWallpaper" name="sub">
        </div>
    </div>

    </form>
    <form action="index.php" method="GET">
    <input type="submit" value="Revert Back" class="revert" id="revertButton" name="revertButton">
    </form>
</body>

</html>