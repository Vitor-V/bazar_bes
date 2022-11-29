<?php

namespace App\Modules\Product\Presentation\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'content' => $this->resource->content,
            'customer_id' => $this->resource->customer_id,
            'product_id' => $this->resource->product_id,
            'created_at'=> $this->resource->created_at->format('H:i d-m-Y'),
            'updated_at'=> $this->resource->updated_at->format('H:i d-m-Y'),
            'deleted_at'=> $this->resource->deleted_at ? $this->resource->deleted_at->format('H:i d-m-Y') : null,
            'likes' => $this->resource->likes
        ];
    }
}
