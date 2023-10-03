<?php

namespace App\Http\Requests\Profile;

use Faker\Provider\ar_EG\Text;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_nickname' => 'nullable',
            'fname' => 'nullable',
            'sns' => 'nullable',
            'department' => 'nullable',
            'detail' => 'nullable',
            'purpose' => 'nullable',
            'whyme' => 'nullable',
            'motto' => 'nullable',
            'career' => 'nullable',
            'hometown' => 'nullable',
            'hobby' => 'nullable',
            'like' => 'nullable',
            'dislike' => 'nullable',
            'strength' => 'nullable',
            'weakness' => 'nullable',
            'mbti' => 'nullable',
            'holiday' => 'nullable',
            'privatefname' => 'nullable',
            'calendar' => 'nullable',
            'comment' => 'nullable',
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'problem.required'  => '問題を入力してください。',
    //         'problem.max'       => '問題は140字以内でお願いします。',
    //         'solution.required'  => '解決法を入力してください。',
    //         'solution.max'       => '解決法は140字以内でお願いします。',
    //     ];
    // }

    public function user_nickname(): string
    {
        return $this->input('user_nickname');
    }

    public function sns(): string
    {
        return $this->input('sns');
    }

    public function department(): string
    {
        return $this->input('department');
    }

    public function detail(): string
    {
        return $this->input('detail');
    }

    public function purpose(): string
    {
        return $this->input('purpose');
    }

    public function whyme(): string
    {
        return $this->input('whyme');
    }

    public function motto(): string
    {
        return $this->input('motto');
    }

    public function career(): string
    {
        return $this->input('career');
    }

    public function hometown(): string
    {
        return $this->input('hometown');
    }

    public function hobby(): string
    {
        return $this->input('hobby');
    }

    public function like(): string
    {
        return $this->input('like');
    }

    public function dislike(): string
    {
        return $this->input('dislike');
    }

    public function strength(): string
    {
        return $this->input('strength');
    }

    public function weakness(): string
    {
        return $this->input('weakness');
    }

    public function mbti(): string
    {
        return $this->input('mbti');
    }

    public function holiday(): string
    {
        return $this->input('holiday');
    }

    public function calendar(): string
    {
        return $this->input('calendar');
    }

    public function comment(): string
    {
        return $this->input('comment');
    }
}
