<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;
use App\Models\ShortLink;
use DB;
class CodeRule implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        $a = ShortLink::where('code', $value)->where('created_at','>', DB::raw("date_sub(curdate(),interval 30 day)"))->first();
        if($a){
            $fail('devan');
        }
        
    }
}
