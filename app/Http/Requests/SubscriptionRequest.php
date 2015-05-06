<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SubscriptionRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'firstname' 	=> 'required',
			'lastname'	 	=> 'required',
			'email' 		=> 'required|unique:users,email',
			'zip_code' 		=> 'required'
		];
	}

	public function sanitize()
	{
		return $this->all();
	}

}
