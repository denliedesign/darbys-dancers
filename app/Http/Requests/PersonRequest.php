<?php
namespace App\Http\Requests;
use App\Models\Person;
use Illuminate\Foundation\Http\FormRequest;
class PersonRequest extends FormRequest
{
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
//        if ($this->method() == 'PUT') {
//            return [
//                'title' => 'required'
//            ];
//        }
        return [
            'name' => 'required',
            'role' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'addressOne' => 'required',
            'addressTwo' => 'nullable',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'comments' => 'nullable',
        ];
    }
    public function getData()
    {
        $data = $this->validated() + [
            'user_id' => $this->user()->id
        ];

        return $data;
    }
}
