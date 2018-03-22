<?php
class Common {

	public static function returnData($code = 200, $message = SUCCESS, $userId = '', $sessionId = '', $data = null)
	{
		return Response::json([
				'code' => $code,
				'message' => $message,
				'user_id' => $userId,
				'session_id' => $sessionId,
				'data' => $data,
			]);
	}
	public static function returnDataNotUser($data = null)
	{
		return Response::json(['data' => $data]);
	}
	public static function getSessionId($input, $userId)
	{
		$device = User::where('user_id', $userId)
						->first();
		if($device) {
			if(empty($input['session_id'])) {
				$sessionId = $device->session_id;
				if(!($sessionId)) {
					$sessionId = generateRandomString();
					User::find($device->id)->update(['session_id' => $sessionId]);
				}
			}
			else {
				if($device->session_id == $input['session_id']) {
					$sessionId = $input['session_id'];
				} else {
					throw new Prototype\Exceptions\UserSessionErrorException();
				}
			}
		} else {
			$sessionId = generateRandomString();
			User::create(['device_id'=>$input['device_id'], 'user_id'=>$userId, 'session_id'=>$sessionId]);
		}
		return $sessionId;
	}
	public static function getCategoryWithLike($input)
	{
		// $cats = Common::getListArray('Category', ['id', 'name']);
		$cats = Category::all();
		if($cats) {
			foreach($cats as $key => $value) {
				$data[$key] = [
					'id' => $value->id,
					'name' => $value->name,
				];				
			}
		}
		$data = array_merge(['0'=>array('id'=>0, 'name'=>'Home')], $data);
		return $data;
	}
	public static function searchNews($input)
	{
		$data = News::where(function ($query) use ($input)
		{
			if($input['page_id'] != '') {
				$query = $query->where('page_id', $input['page_id']);
			}
			if ($input['userid'] != '') {
				$query = $query->where('userid', $input['userid']);
			}
			if ($input['fullname'] != '') {
				$query = $query->where('fullname', 'like', '%'.$input['fullname'].'%' );
			}
			if ($input['status'] != '') {
				if($input['status'] == DAGOI){
					$query = $query->where('status', $input['status']);
				}else{
					$query = $query->where('status', '<>', DAGOI);
				}
			}
			if ($input['status_access'] != '') {
				$query = $query->where('status_access', $input['status_access'] );
			}
			if ($input['phone'] != '') {
				$query = $query->where('phone', $input['phone'] );
			}
			if($input['start'] != ''){
				$query = $query->where('time_post', '>=', $input['start']);
			}
			if($input['end'] != ''){
				$query = $query->where('time_post', '<=', $input['end'] + 84600);
			}
		})->orderBy('time_post', 'desc')->paginate(PAGINATE);
		return $data;
	}

	public static function getUserRole()
	{
		$user = Auth::user()->get();
    	if($user) {
			$userRole = $user->role_id;
		} else {
			$userRole = NULL;
		}
		return $userRole;	
	}
	public static function getModelArray($modelName, $fieldName, $fieldValue)
	{
		$data = $modelName::lists($fieldName, $fieldValue);
		if($data) {
			return $data;
		}
		return [];
	}

	public static function getInput($input)
	{
		return Input::only('name', 'email', 'username', 'phone','date_of_birth', 'sex', 'ethnic', 'identity_card', 'current_address', 'address', 'degree', 'skyper', 'number_tax', 'number_insure', 'marriage', 'note', 'type_id', 'salary', 'start_time', 'end_time', 'page_id');
		
	}
}