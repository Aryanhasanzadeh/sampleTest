<?php

namespace Modules\User\App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Modules\Ship\Parents\Requests\ParentRequest;
use Modules\User\Models\User;

class LoginRequest extends ParentRequest
{
    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'phone' => [
                'required',
                Rule::exists(User::getTableName()),
                ...config('user.validation.phone', [])
            ],
            'password' => [
                'required',
                Password::min(8)->letters()->numbers()->symbols()
            ],
        ];
    }

    /**
     * @return array<int, string>
     */
    public function attributes(): array
    {
        return __('user::auth.login.attributes');
    }
}
