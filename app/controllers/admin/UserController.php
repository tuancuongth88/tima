<?php 

class UserController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = User::orderBy('id', 'asc')->paginate(PAGINATE);
		return View::make('admin.users.index')->with(compact('data'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.users.create_admin');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'username' => 'required|unique:users',
			'password' => 'required',
		);
		$input = Input::except('_token');
		$validator = Validator::make($input,$rules);
		if($validator->fails()) {
			return Redirect::action('UserController@create')
				->withErrors($validator);
		}else{
			$input_User = Common::getInput($input);
			// $input_User = $input;
			$input_User['password'] = Hash::make($input['password']);
			$id = CommonNormal::create($input_User);
		}
		return Redirect::action('UserController@index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		CommonNormal::delete($id);
		return Redirect::action('UserController@index');
	}

	public function resPassword($id)
	{
		$data = User::find($id);
		return View::make('admin.users.changepassword')->with(compact('data'));
	}

	public function updatePassword($id)
	{
		$rules = array(
			'password'   => 'required',
			'repassword' => 'required|same:password'
		);
		$input = Input::except('_token');
		$validator = Validator::make($input,$rules);
		if($validator->fails()) {
			return Redirect::action('UserController@resPassword',$id)
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else 
		{
			$inputPass['password'] = Hash::make($input['password']);
			CommonNormal::update($id, $inputPass);
			return Redirect::action('UserController@index')->with('message', 'Thay đổi mật khẩu thành công');
		}
			return Redirect::action('UserController@index')->with('message', 'Thay đổi mật khẩu không thành công');
	}

}
