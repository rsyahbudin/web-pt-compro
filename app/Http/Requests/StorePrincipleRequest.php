<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrincipleRequest extends FormRequest
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
            "subtitle" => ["required", 'string', 'max:255'],
            "thumbnail" => ["required", "image", "mimes:png,jpg,jpeg,webp"],
            "icon" => ["required", "image", "mimes:png,jpg,jpeg,webp"],
            "keypoints" => ["required", "array"], // Ensure keypoints is an array
            "keypoints.*.keypoint" => ["required", "string", "max:255"], // Validate each keypoint
            "keypoints.*.manufacture" => ["required", "string", "max:255"],
        ];
    }
}
