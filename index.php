
<?php

require('Smarty/libs/Smarty.class.php');
require('common.php');
require_once('db.php');	

$smarty = new Smarty;

$smarty->template_dir = 'Smarty/templates';
$smarty->compile_dir = 'Smarty/templates_c';
$smarty->config_dir = 'Smarty/configs';
$smarty->cache_dir = 'Smarty/cache';

try 
{
    $dsn = DB_ENGINE .':host='. DB_HOST .';dbname='. DB_NAME;
    $db = new PDO($dsn, DB_USER, DB_PW);
    
    // Returns all classification options
    $sql = "select classification_id, name from classification";
    foreach($db->query($sql) as $row){
        $classify_id = $row['classification_id'];
        $classify_name = $row['name'];
        $classify .= "<option value='{$classify_id}'>{$classify_name}</option>";
    }

    // Returns all sub-classification options
    //$sql = "select classification_id, name from classification";
    //foreach($db->query($sql) as $row){
    //    $classify_id = $row['classification_id'];
    //    $classify_name = $row['name'];
    //    $subclassify .= "<option value='{$classify_id}'>{$classify_name}</option>";
    //}
    
    //Returns all major cities
    $sql = "select state_id, capital, abbrev from states";
    foreach($db->query($sql) as $row){
        $state_id = $row['state_id'];
        $capital_name = $row['capital'];
        $state_name = $row['abbrev'];
        
        $states .= "<option value='{$state_id}'>{$state_name}</option>";
        $capitals .= "<option value='{$state_id}'>{$capital_name}</option>";
    }
    
    //$smarty->assign('subClassifications',$subclassify);
    $smarty->assign('classifications',$classify);
    $smarty->assign('states',$states);
    $smarty->assign('capitals',$capitals);
    $smarty->display('index.tpl');
}
catch (PDOException $e)
{
    echo $e->getMessage();
}

?>


	
