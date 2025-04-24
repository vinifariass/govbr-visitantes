<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Visitantes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Relatório de Visitantes</h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Documento</th>
                <th>Data de Visita</th>
                <th>Data de Saida</th>
                <th>Destino</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($visitantes as $visitante)
                <tr>
                    <td>{{ $visitante['nome'] }}</td>
                    <td>{{ $visitante['cpf'] }}</td>
                    <td>{{ $visitante['data_entrada'] }}</td>
                    <td>{{ $visitante['data_saida'] }}</td>
                    <td>{{ $visitante['destino'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>