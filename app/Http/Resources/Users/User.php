<?php

namespace App\Http\Resources\Users;

use Illuminate\Http\Resources\Json\JsonResource;
use Auth;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            //'user_role' => $this->when(Auth::user()->userRole->name === 'webmaster', Auth::user()->userRole->name),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
