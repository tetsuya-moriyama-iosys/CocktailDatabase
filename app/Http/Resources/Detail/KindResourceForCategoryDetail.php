<?php

namespace App\Http\Resources\Detail;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CocktailSearch\Children\CategoryInCocktailResource;
use App\Http\Resources\CocktailSearch\Children\MethodResource;

class KindResourceForCategoryDetail extends JsonResource
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
            'name' => $this->name,
            'name_eng'=>$this->name_eng,
        ];
    }
}
