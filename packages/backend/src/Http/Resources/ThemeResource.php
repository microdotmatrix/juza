<?php

namespace Juzaweb\Backend\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ThemeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'code' => $this->slug,
            'title' => $this->title,
            'thumbnail' => $this->getThumbnail(),
            'banner' => upload_url($this->banner),
            'description' => $this->description,
        ];
    }
}
