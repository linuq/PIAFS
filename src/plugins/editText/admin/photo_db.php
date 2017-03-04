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

    function albumExists($album){
        $query = '
        SELECT id
            FROM '.CATEGORIES_TABLE.'
            WHERE id = '.$album.'
        ;';
        $result = pwg_query($query);
        if (pwg_db_num_rows($result) == 1){
            return true;
        }
        return false;
    }

    function getSelectedCategory(){
        $query = '
            SELECT category_id
            FROM '.IMAGES_TABLE.' AS i
                JOIN '.IMAGE_CATEGORY_TABLE.' AS ic ON image_id = i.id
                JOIN '.CATEGORIES_TABLE.' AS c ON category_id = c.id
            ORDER BY i.id DESC
            LIMIT 1
            ;';
        $result = pwg_query($query);
        if (pwg_db_num_rows($result) > 0)
        {
            $row = pwg_db_fetch_assoc($result);
            return array($row['category_id']);
        }
    }
}
?>