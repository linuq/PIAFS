<?php

/* The file does not exist until some information is entered
below. Once information is entered and saved, the file will be created. */


$conf['upload_form_all_types'] = true;
$conf['sync_chars_regex'] = '/^[a-zA-Z0-9-_. ]+$/';
$conf['file_ext'] = array_merge(
 $conf['picture_ext'],
 array('tiff', 'tif', 'mpg','zip','avi','mp3','ogg','pdf', 'txt', 'docx')
 );

?>