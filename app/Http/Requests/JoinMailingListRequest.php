<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
//use Illuminate\Foundation\Http\FormRequest;

class JoinMailingListRequest extends Request {

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
            'email' 		=> 'required|email',
		];
	}

    public function messages(){

        return[
            'email.required'		=> 'Your email address is required'
        ];
    }

	/**
	 * Get the sanitized input for the request.
	 *
	 * @return array
	 */
	public function sanitize()
	{
		return $this->all();
	}

}
