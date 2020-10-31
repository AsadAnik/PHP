<?php
///PHP Code...------(PHP File Operation)-----...
    ///Creating the File & Close..
    $file = "created_files/File.txt";
    $create_file = fopen($file, 'w');
    fclose($create_file);

    ///Lets Write The File & Close..
    if($handle_write = fopen($file, 'w')){
        fwrite($handle_write, 'I Love PHP, JavaScript');
        fclose($handle_write);
    }else{
        echo "We Cant Write  the file here!";
    }

    ///Read File & Close..
    if($handle_read = fopen($file, 'r')){
        // fread($handle_read, 20);
        //Reading Files from File...
        $content = fread($handle_read, filesize($file));
        echo $content;
        fclose($handle_read);
    }else{
        echo "Can't Read file properly!";
    }

    ///Deleting the File With Here...
    // unlink($file);
?>