<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RelatorioExport;
use Illuminate\Support\Facades\Response;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class RelatorioController extends Controller
{
    public function index()
    {
        // Seu código existente
    }

    public function exportPDF(Request $request)
    {
        if (!$request->has('dados')) {
            return back()->with('error', 'Nenhum dado recebido para exportação.');
        }

        $dados = json_decode($request->dados, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return back()->with('error', 'Erro ao processar os dados para exportação.');
        }

        if (empty($dados)) {
            return back()->with('error', 'Nenhum dado válido para exportação.');
        }

        $pdf = PDF::loadView('relatorios.pdf', [
            'visitantes' => $dados,
            'cpf' => $request->cpf ?? null,
            'data_entrada' => $request->data_entrada ?? null,
            'data_saida' => $request->data_saida ?? null,
            'destino' => $request->destino ?? null
        ]);

        // Faz o download do PDF
        return $pdf->download('relatorio_visitantes.pdf');
    }

    public function exportarExcel(Request $request)
    {
        // Validação dos dados recebidos
        if (!$request->has('dados')) {
            return back()->with('error', 'Nenhum dado recebido para exportação.');
        }

        $dados = json_decode($request->dados, true);

        // Verifica se o JSON foi decodificado corretamente
        if (json_last_error() !== JSON_ERROR_NONE) {
            return back()->with('error', 'Erro ao processar os dados para exportação.');
        }

        // Verifica se há dados válidos
        if (empty($dados)) {
            return back()->with('error', 'Nenhum dado válido para exportação.');
        }

        return Excel::download(new RelatorioExport($dados), 'relatorio_visitantes.xlsx');
    }


    public function exportarCsv(Request $request)
    {
        if (!$request->has('dados')) {
            return back()->with('error', 'Nenhum dado recebido para exportação.');
        }

        $dados = json_decode($request->dados, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return back()->with('error', 'Erro ao processar os dados para exportação.');
        }

        if (empty($dados)) {
            return back()->with('error', 'Nenhum dado válido para exportação.');
        }

        // Cabeçalho do CSV
        $header = array_keys($dados[0]);
        $csv = implode(';', $header) . "\n";

        // Linhas do CSV
        foreach ($dados as $linha) {
            $csv .= implode(';', array_map(function ($v) {
                return '"' . str_replace('"', '""', $v) . '"';
            }, $linha)) . "\n";
        }

        $filename = 'relatorio_visitantes.csv';

        return Response::make($csv, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ]);
    }


    public function exportarOdt(Request $request)
    {
        if (!$request->has('dados')) {
            return back()->with('error', 'Nenhum dado recebido para exportação.');
        }

        $dados = json_decode($request->dados, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return back()->with('error', 'Erro ao processar os dados para exportação.');
        }

        if (empty($dados)) {
            return back()->with('error', 'Nenhum dado válido para exportação.');
        }

        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        // Cabeçalho
        $header = array_keys($dados[0]);
        $table = $section->addTable();
        $table->addRow();
        foreach ($header as $col) {
            $table->addCell(2000)->addText($col);
        }

        // Dados
        foreach ($dados as $linha) {
            $table->addRow();
            foreach ($linha as $valor) {
                $table->addCell(2000)->addText($valor);
            }
        }

        $filename = 'relatorio_visitantes.odt';
        $tempFile = tempnam(sys_get_temp_dir(), 'odt');
        $phpWord->save($tempFile, 'ODText');

        return response()->download($tempFile, $filename)->deleteFileAfterSend(true);
    }
}
