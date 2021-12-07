<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;
class DiscountRequest extends FormRequest
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
    {   $yesterday=Carbon::now('Asia/Ho_Chi_Minh');
        return [
        'name' => 'required|max:100',
        'ngaybd' => 'required|after_or_equal:'.$yesterday,
        'ngaykt' => 'required|after:ngaybd',
        'discount' => 'required|numeric|max:100|min:0',
        
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng không bỏ trống tên chương trình',
            'ngaybd.required'=>'Vui lòng không bỏ trống ngày tháng bắt đầu',
            'ngaykt.required'=>'Vui lòng không bỏ trống ngày tháng kết thúc',
            'discount.required'=>'Vui lòng nhập số khuyến mãi',
            'discount.max'=>'Phần trăm khuyến mãi nhỏ hơn 100%',
            'discount.min'=>'Phần trăm khuyến mãi lớn hơn 0',

             ];
}
}
