<?php
//get name file
function getFilename($filename = null)
{
	if($filename != '') {
		return pathinfo($filename, PATHINFO_FILENAME);
	}
	return null;
}

//get extension from filename
function getExtension($filename = null)
{
	if($filename != '') {
		return pathinfo($filename, PATHINFO_EXTENSION);
	}
	return null;
}

function getStatus($status){
		return $status == DAGOI ? 'Đã gọi': 'Chưa gọi';
}

 function getnameParent($model, $id, $parent_id){
	if($parent_id)
	{
		$data = $model::find($parent_id)->name;

	return $data .'-'.$model::find($id)->name;
	}
	else
	{
		return $model::find($id)->name;
	}
}
function getIdUserAuth(){
	return Auth::user()->get()->id;
}

function generateRandomString($length = RANDOMSTRING) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// tong tin trong ngay
function getTotalNewOnDay(){
	$open_time = strtotime("00:00");
	$close_time = strtotime("23:59");
	$total = News::where('created_at', '>=', $open_time)->where('created_at', '<=', $close_time)->count();
	return $total;
}

function getTotalCallOnDay($status){
	$open_time = strtotime("00:00");
	$close_time = strtotime("23:59");
	$total = News::where('created_at', '>=', $open_time)->where('created_at', '<=', $close_time)->where('status', '=', $status)->count();
	return $total;
}

function getStatusCall(){
	return [1 => "Chưa gọi", 2=> "Đã gọi"];
}

function getStatusAccessCustomer(){
	return [1 => "Khách hang không có nhu cầu", 2=> "Khách hàng đã đồng ý"];
}

function getPageFromId($id){
	return Page::find($id)->name;
}

function getJsonFronUrl($url){
	$json = file_get_contents($url);
	$obj = json_decode($json);
	return $obj->ad;
}
function sendMail($data){
	
	 
}