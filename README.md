# Agnomen
A PHP package mainly developed for Laravel to set attributes for error messages of when failing validation.


Installation
====

Add this package name in composer.json

    "require": {
      "sukohi/agnomen": "1.*"
    }

Execute composer command.

    composer update
    
Usage
====

At first, add AgnomenTrait to `App/Http/Requests/Request.php` like this.

    <?php
    
    namespace App\Http\Requests;
    
    use Illuminate\Foundation\Http\FormRequest;
    use Sukohi\Agnomen\AgnomenTrait;
    
    abstract class Request extends FormRequest
    {
        use AgnomenTrait;
    
        private $attribute_names = [
            'email' => 'YOUR-TEXT-1',
            'password' => 'YOUR-TEXT-2',
            'accepted' => 'YOUR-TEXT-3'
        ];
    
    }


And make your own Request using the following command.

    php artisan make:request *****Request

* see [here](http://laravel.com/docs/5.1/validation#form-request-validation) for the details

then add your validation rules there like this.

    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required', 
            'accepted' => 'accepted'
        ];
    }

Now if your application respond error messages, `:attribute` will be replaced with `$attribute_names` values.  
See [here](http://laravel.com/docs/5.1/validation#custom-error-messages) for the details

e.g.)  
  
`The :attribute field is required.`  =>  `The YOUR-TEXT-1 field is required.`

License
====

This package is licensed under the MIT License.

Copyright 2015 Sukohi Kuhoh