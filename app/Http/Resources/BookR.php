<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookR extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'nama_book' =>$this->name_book,
            'summary' => $this->summary,
            'publisher' => $this->publisher,
            'publisher' => $this->publisher,
            'publisher' => $this->publisher,
            'date_relase' => date_format($this->created_at, 'd-m-Y h:i:s')
        ];
    }
}