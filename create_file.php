<?php
$conn=mysqli_connect("localhost","root","","create_edit_file");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create File</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&family=Dancing+Script&family=Tajawal&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <?php
        
        if($_SERVER['REQUEST_METHOD']=="POST"){
                $file_name=htmlspecialchars( $_POST['file_name']);
                $file_type=htmlspecialchars( $_POST['file_type']);
                $file_text=$_POST['file_text'];
                $file_name_show=$file_name.".".$file_type;
                $sql="INSERT INTO `file_name_storage` (`file_name`) VALUES ('$file_name_show')";
                $result=mysqli_query($conn,$sql);
                if($result){
                $file_address="file/".$file_name_show;
                $file=fopen($file_address,'w+');
                fwrite($file,$file_text);
                fclose($file);
            }
        }
        ?>
            <div class="create_file" >
            <div class="d-flex menu_bar">
                <div class="logo"><span>File Creator</span></div>
                <div>Create File</div>
                <div class="position-relative">
                    <div class="menu" id="menu_icon"><span class="material-symbols-outlined">menu</span></div>
                    <div class=" menu_list d-none" id="menu_list">
                        <div class="menu_show ">
                            <a href="index.php">Home</a>
                        </div>
                        <div class="menu_show ">
                            <a href="edit_file.php">Open file</a>
                        </div>
                        <div class="menu_show ">
                            <a href="create_file.php">Create file</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex form_files">
            <form action="create_file.php" method="post" id="create_form">
                <div class="file_desc d-flex justify-content-space-between">
                    <div>
                    <label for="file_name">Name :</label>
                    <input type="text" name="file_name" id="file_name" maxlength="50" inputmode="text">
                    </div>
                    <div>
                    <label for="file_type">Type :</label>
                    <select name="file_type" id="file_type">
                        <option value="txt">Text</option>
                        <option value="html">HTML</option>
                        <option value="php">PHP</option>
                        <option value="js">JAVA SCRIPT</option>
                        <option value="css">CSS</option>
                    </select>
                    </div>
                    <input type="submit" value="Create">
                </div>
                <div class="file_content">
                    <textarea name="file_text" id="file_text" cols="30" rows="10"></textarea>
                </div>
            </form>
            <?php
            include "file_list.php";
        ?>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>