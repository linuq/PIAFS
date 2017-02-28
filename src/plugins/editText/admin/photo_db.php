<?php
defined('IMAGES_TABLE') or die('Hacking attempt!');

class photo_db
{
    private $table;

    function __construct()
    {
        global $prefixeTable;
        $this->table = $prefixeTable . 'form_element_info';
    }

    function getPicture($id){
        $query = '
            SELECT *
            FROM '.IMAGES_TABLE.'
            WHERE id = '.$id.'
            ;';
        return pwg_db_fetch_assoc(pwg_query($query));
    }

    function getFileContents($picture){
        $results = array_values($picture);

        $path = $results[15];

        if(isset($_POST['editText']) && !empty($_POST["editText"])){
            $slash = stripslashes($_POST['editText']);
            file_put_contents($path,$slash);
        }

        return file_get_contents($path);
    }
}
?>