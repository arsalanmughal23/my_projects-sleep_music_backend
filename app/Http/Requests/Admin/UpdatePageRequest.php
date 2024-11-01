<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Page;

class UpdatePageRequest extends FormRequest
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
        // return Page::$update_rules;
        $pageId = $this->route('page');
        return [
            'slug'   => 'sometimes|unique:pages,slug,'.$pageId.',id,deleted_at,NULL',
            'status' => 'sometimes|in:0,1'
        ];
    }
}
