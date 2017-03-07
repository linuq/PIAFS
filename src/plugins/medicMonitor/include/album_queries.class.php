<?php

include_once(MEDIC_MONITOR_PATH."include/medic_monitor_db.php");

class AlbumQueries
{

    static function getSelectedCategory(){
        $medic_monitor_db = new medic_monitor_db();

        // we need to know the category in which the last photo was added
        $selected_category = array();

        if (isset($_GET['album']))
        {
            // set the category from get url or ...
            check_input_parameter('album', $_GET, false, PATTERN_ID);

            $album = $_GET['album'];
            
            if ($medic_monitor_db->albumExists($album))
            {
            $selected_category = array($album);

            // lets put in the session to persist in case of upload method switch
            $_SESSION['selected_category'] = $selected_category;
            }
            else
            {
            fatal_error('[Hacking attempt] the album id = "'.$album.'" is not valid');
            }
        }
        else if (isset($_SESSION['selected_category']))
        {
            $selected_category = $_SESSION['selected_category'];
        }
        else
        {
            $selected_category = $medic_monitor_db->getSelectedCategory();
        }
        return $selected_category;
    }


    static function getAlbumList($selected_category){

        global $user;

        $user_permissions = $user['community_permissions'];
        $upload_categories = $user_permissions['upload_categories'];
        if (count($upload_categories) == 0)
        {
            $upload_categories = array(-1);
        }

        $query = '
        SELECT id,name,uppercats,global_rank
            FROM '.CATEGORIES_TABLE.'
            WHERE id IN ('.implode(',', $upload_categories).')
        ;';

        display_select_cat_wrapper(
            $query,
            $selected_category,
            'category_options'
            );
    }
}
