<?
$Now = Date(H);

$start_time = $arParams["START_TIME"];
$end_time = $arParams["END_TIME"];

if($Now < $start_time or $Now > $end_time ){

$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/work-time-email.php"
	)
);}
else{
    $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/work-time-phone.php"
        )
    );
}


?>