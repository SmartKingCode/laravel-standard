<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class StudentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => StudentResource::collection($this->collection)
        ];
    }

    public function with($request)
    {
        return [
            'author_url' => url('http://localhost:8000')
        ];
    }
}
