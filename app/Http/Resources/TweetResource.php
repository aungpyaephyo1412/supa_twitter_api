<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TweetResource extends JsonResource
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
            'image' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'bio' => $this->bio,
            'location' => $this->location,
            'website' => $this->website,
            'profile_avatar' => $this->profile_avatar,
            'cover_avatar' => $this->cover_avatar,
            'created_at' => $this->created_at->format('d F'),
            'updated_at' => $this->updated_at,
            "tweets" => $this->tweets,
            "followers" => $this->followers,
            "followings" => $this->followings,
        ];
    }
}
