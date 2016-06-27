<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContatoRequest extends Request {
 
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true; //qualquer um pode usar esse tipo de Request
  }
 
  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'nome'  => 'required|min:3',
      'email' => 'required|email'
    ];
  }
 
}
