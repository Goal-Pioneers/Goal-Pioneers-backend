<?php


    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;


    /**
     * 
     */
    class OnlyJSONRequest 
        extends FormRequest
    {
        abstract public function inputAuthorization(): bool;

        /**
         * Determine if the user is authorized to make this request.
         *
         * @return bool
         */
        final public function authorize(): bool
        {
            return $this->secure() && 
                $this->isJson() && 
                $this->inputAuthorization();
        }
    }

?>