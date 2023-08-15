<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'url' => $this->url,
            'description' => $this->description,
            'completed_at' => $this->completed_at,
            'created_at' => $this->created_at?->toDayDateTimeString(),
            'can' => [
                'update' => $request->user()?->can('todos-update'),
                'delete' => $request->user()?->can('todos-delete'),
            ],
        ];
    }
}
