<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LancamentoListadoResource extends JsonResource
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
            'preco' => $this->editarPreco($this->preco, $this->e_provento),
            'data' => $this->formatarData($this->data),
            'genero' => $this->genero
        ];
    }

    private function editarPreco(float $preco, bool $e_provento): string
    {
        $precoEditado = "";
        if (!$e_provento) {
            $precoEditado .= "-";
        }
        $precoEditado .= "R$ " . str_replace('.', ',', strval($preco));
        return $precoEditado;
    }

    private function formatarData(string $data): string
    {
        $carbon = new Carbon($data);
        $dataFormatada = $carbon->format("d/m/Y");
        return $dataFormatada;
    }
}
