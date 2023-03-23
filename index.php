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
        <div class="create_file">
            <div class="d-flex menu_bar">
                <div class="logo"><span>File Creator</span></div>
                <div>Home</div>
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
            <div class="d-flex form_files">
            <div class="about_files">
                <div>
                    <ol>
                        <li>Your "file creator" tool allows users to create four different types of files: text, HTML,
                            JavaScript, and PHP. </li>

                        <li>A text file is a simple file that contains plain text, with no formatting or special
                            characters. These files can be opened and edited in any text editor, and are commonly used
                            for storing notes, code snippets, and other simple pieces of text.</li>

                        <li>HTML files are used for creating web pages. They contain text, images, and other content
                            that is displayed in a web browser. HTML files are written in a markup language that defines
                            the structure and appearance of the web page.</li>

                        <li>JavaScript files are used for adding interactivity to web pages. They contain code that runs
                            in the user's web browser, and can be used to create animations, respond to user input, and
                            perform other dynamic actions on the web page.</li>

                        <li>PHP files are used for creating dynamic web pages that can interact with databases and other
                            web services. They contain code that is executed on the server-side, and can be used to
                            generate HTML, process form data, and perform other server-side tasks.</li>

                        <li>With your file creator tool, users can easily create any of these four types of files,
                            depending on their needs. This can be useful for web developers, programmers, and anyone
                            else who needs to create and edit these types of files on a regular basis.</li>
                    </ol>
                </div>
                <div>
                    <button><a href="create_file.php"> Create file</a></button>
                </div>
            </div>
            <?php
            include "file_list.php";
            
            ?>

        </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>