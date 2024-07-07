<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LancamentoUnicoResource extends JsonResource
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
            'item' => $this->item,
            'preco' => str_replace('.', ',', strval($this->preco)),
            'data' => $this->data,
            'genero' => $this->genero,
            'e_provento' => $this->e_provento
        ];
    }
}
