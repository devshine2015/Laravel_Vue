<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Article extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }

    // Add whatever data you want to the above response.
    public function with($request) {
        return [
            'version' => '1.0.0',
            'auth_url' => url('http://kedarnadkarny.com')
        ];
    }
}
