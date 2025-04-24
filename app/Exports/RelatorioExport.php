<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RelatorioExport implements FromArray, WithHeadings
{
    protected $dados;

    public function __construct(array $dados)
    {
        $this->dados = $dados;
    }

    public function array(): array
    {
        return $this->dados;
    }

    public function headings(): array
    {
        return [
            'Nome',
            'CPF',
            'Data de Entrada',
            'Data de Saída',
            'Destino'
        ];
    }
}