<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Resource extends JsonResource
{
    function fillables(...$keys)
    {
        $fillables = $this->getFillable();

        collect($fillables)->merge($keys)->each(function($key) use (&$res) {
            $res[$key] = $this->{$key};
        });

        return $res;
    }
}
