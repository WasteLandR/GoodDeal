<?/*
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
*/?>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Профиль");
 ?>

<?
CModule::IncludeModule('iblock');
//$b_id = $_GET['BOSS'];
//$m_name = $_GET['NAME'];
//$v_id = $_GET['VAKANCY'];

$el = new CIBlockElement;

$PROP = array();
$PROP["P3"] = "2";  
$PROP["P2"] = "1";
$PROP["P4"] = "3";
$PROP["EMAIL"] = "dsds@sds.toe";
$PROP["P5"] = "";

/*$arLoadProductArray = Array(
"CREATED_BY" => 4022,
"NAME" => "2 1",
"IBLOCK_ID" => "20",
"PROPERTY_VALUES"=> $PROP,
"ACTIVE"=>"Y"
  );
if($PRODUCT_ID = $el->Add($arLoadProductArray))
	echo "ok <br/>";
else
//echo "Error: ".$el->LAST_ERROR;*/


$rsUser = CUser::GetByLogin("dsds@sds.toe");
$arUser = $rsUser->Fetch();
echo "<pre>"; print_r($arUser['ID']); echo "</pre>";
?>
?>
<?$user_data = get_user_data();
print_r($user_data);?>



<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

<?/*
	$rsUser = CUser::GetByLogin('sdfs@sds.rl');
	$arUser = $rsUser->Fetch();
//global $USER;
//$USER->Update($arUser['ID']); 
echo "<pre>"; print_r($arUser); echo "</pre>";
//$USER = new CUser; 
//$USER->Login("smirnov256@ya.ru","123456","Y");
	$csUser = CUser::GetByLogin('smirnov256@ya.ru');
	$srUser = $csUser->Fetch();
echo "<pre>"; print_r($srUser); echo "</pre>";
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");*/?>