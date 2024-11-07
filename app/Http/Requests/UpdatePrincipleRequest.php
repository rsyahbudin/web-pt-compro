<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePrincipleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            "name" => ["required", "string", "max:255"],
            "subtitle" => ["required", 'string', 'max:500'],
            "thumbnail" => ["sometimes", "image", "mimes:png,jpg,jpeg,webp"],
            "icon" => ["sometimes", "image", "mimes:png,jpg,jpeg,webp"],
            "keypoints" => ["sometimes", "array"], // Ensure keypoints is an array
            "keypoints.*.keypoint" => ["sometimes", "string", "max:255"], // Validate each keypoint
            "keypoints.*.manufacture" => ["sometimes", "string", "max:255"],
        ];
    }
}
