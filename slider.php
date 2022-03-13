<?php
if(isset($_POST['btn']))
    foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
            {
				//print_r($_FILES);
                $file_name=$_FILES["files"]["name"][$key];
                $file_tmp=$_FILES["files"]["tmp_name"][$key];
                $ext=pathinfo($file_name,PATHINFO_EXTENSION);
				
                // if(in_array($ext,$extension))
                // {
                    if(!file_exists("profile_pics/".$file_name))
                    {
                        move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"profile_pics/".$file_name);
                    }
                    else
                    {
                        $filename=basename($file_name,$ext);
                        $newFileName=$filename.time().".".$ext;
                        move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"profile_pics/.".$newFileName);
                    }
                
            }
?>




<form method ="post" enctype="multipart/form-data">
<input type="file" name="files[]" multiple/><br><br>
			
			<input type="submit" name="btn" value="Submit">
			 
 </form>