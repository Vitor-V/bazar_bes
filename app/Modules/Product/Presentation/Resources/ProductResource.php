<?php

namespace App\Modules\Product\Presentation\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'=> $this->resource->id,
            'name'=> $this->resource->name,
            'description'=> $this->resource->description,
            'type'=> $this->resource->type,
            'value'=> $this->resource->value,
            'store_id'=> $this->resource->store_id,
            'created_at'=> $this->resource->created_at->format('H:i d-m-Y'),
            'updated_at'=> $this->resource->updated_at->format('H:i d-m-Y'),
            'deleted_at'=> $this->resource->deleted_at ? $this->resource->deleted_at->format('H:i d-m-Y') : null,
            'comments'=> CommentResource::collection($this->resource->comments)
        ];
    }
}
