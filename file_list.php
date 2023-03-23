<?php
    if(isset($_GET['folder_name'])){
        if($_GET['folder_name']!=NULL){
            $folder_name=$_GET['folder_name'];
            if(mkdir("file/$folder_name")){
                header("location:?");
            }
        }
    }
    if(isset($_GET['delete_file'])){
        if($_GET['delete_file']!=NULL){
            $file_name=$_GET['delete_file'];
            $sql="DELETE FROM `file_name_storage` WHERE `file_name`='$file_name'";
            $result=mysqli_query($conn,$sql);
            if($result){
                if(unlink("file/".$file_name)){
                header("location:?");
                }
            }
        }
    }
    $sql="SELECT * FROM `file_name_storage` ";
    $result=mysqli_query($conn,$sql);
    echo '<div class="files " id="file_show_box">
        <div class="d-flex flex-column">
            <h2>Files</h2>
            <div>
                <div id="folder_create_btn" class="width-fit-content">
                    <span class="material-symbols-outlined" >folder_open</span>
                </div>
                <form action="'.$_SERVER['PHP_SELF'].'" method="get" id="folder_form" class="d-none">
                    <input type="text" name="folder_name" id="folder_name" class="folder_name">
                    <input type="submit" value="Create">
                </form>
            </div>
        </div>';
    $sno=0;
    while($row=mysqli_fetch_assoc($result)){
        $sno++;
        echo '<div class="file_name_show">
                <div class="oveflow_x_scroll">
                    <a href="edit_file.php?file_name='.$row['file_name'].'">'.$sno.'.'.$row['file_name'].'</a>
                </div>
                <div class="position-relative">
                    <div class="more_vert">
                        <span class="material-symbols-outlined">more_vert</span>
                    </div>
                    <div class="d-none more_option">
                        <div class="menu_show ">
                            <a href="download.php?download_file='.$row['file_name'].'">Download</a>
                        </div>
                        <div class="menu_show ">
                            <a href="?delete_file='.$row['file_name'].'">Delete</a>
                        </div>
                    </div>
                </div>
                </div>';
}
echo '</div>';
        ?>