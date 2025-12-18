<?php

namespace Modules\Booking\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'full_name' => 'required|string',
            'email' => 'required|email',
            'country' => 'required|string',
            'hotel' => 'required|string',
            'start_date' => 'required|date',
            'adults' => 'required|numeric|min:1',
            'children' => 'nullable|numeric|min:0',
            'payment_method' => 'required|in:cash,paypal',
            // 'g-recaptcha-response' => ['required', new \App\Rules\Recaptcha],

        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => 'Full name is required.',
            'email.required' => 'Email is required.',
            'country.required' => 'Country is required.',
            'hotel.required' => 'Hotel is required.',
            'start_date.required' => 'Start date is required.',
            'adults.required' => 'Number of adults is required.',
            'adults.min' => 'At least 1 adult is required.',
            'payment_method.required' => 'Payment option is required.',
            'payment_method.in' => 'Payment option must be cash or paypal.',
        ];
    }
}
