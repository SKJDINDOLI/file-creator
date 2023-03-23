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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&family=Dancing+Script&family=Tajawal&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
                $file_name=htmlspecialchars( $_POST['file_name_edit']);
                $file_text=$_POST['file_text_edit'];
                $file_name_show=$file_name;
                $file_address="file/".$file_name_show;
                $file=fopen($file_address,'w+');
                fwrite($file,$file_text);
                fclose($file);  
        }
        
        ?>
            <div class="create_file" >
            <div class="d-flex menu_bar">
                <div class="logo"><span>File Creator</span></div>
                <div>Open File</div>
                <div class="position-relative">
                    <div class="menu" id="menu_icon"><span class="material-symbols-outlined">menu</span></div>
                    <div class=" menu_list d-none" id="menu_list">
                        <div class="menu_show ">
                            <a href="index.php"> Home</a>
                        </div>
                        <div class="menu_show ">
                            <a href="edit_file.php"> Open file</a>
                        </div>
                        <div class="menu_show ">
                            <a href="create_file.php"> Create file</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            echo '<div class="d-flex form_files">';
            if(!isset($_GET['file_name'])){
                echo '<div class="about_files">
                Open a file
            </div>';
            }
            if(isset($_GET['file_name'])){
                $file_name_open=$_GET['file_name'];
                $file_address_open="file/".$file_name_open;
            $fptr=fopen($file_address_open,"r");
            if($fptr){
                if(file_get_contents($file_address_open)){
                $content = fread($fptr,filesize($file_address_open));
                }else{
                    $content="";
                }
            echo '
            <form action="edit_file.php?file_name='.$file_name_open.'" method="post" id="update_form">
                <div class="file_desc d-flex justify-content-space-between">
                    <input type="hidden" name="file_name_edit" id="file_name_edit" value="'.$file_name_open.'" >
                    <div>'.$file_name_open.'</div>
                    <button><a href="file/'.$file_name_open.'">Run</a></button>
                    <input type="submit" value="Save">
                </div>
                <div class="file_content">
                    <textarea name="file_text_edit" id="file_text_edit" cols="30" rows="10">'.$content.'</textarea>
                </div>
            </form>';
        }
        fclose($fptr);
    }
            
            include "file_list.php";    
        ?>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>