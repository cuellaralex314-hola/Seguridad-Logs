<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Seguridad</title>
</head>
<body>
    <h1>Panel de seguridad</h1>
    
    <ul>
        <li>Exitosos (últimas 24h): {{ $stats['success'] }}</li>
        <li>Fallidos (últimas 24h): {{ $stats['failed'] }}</li>
        <li>Bloqueados (últimas 24h): {{ $stats['blocked'] }}</li>
    </ul>

    <h2>IPs con actividad sospechosa</h2>
    <table border="1">
        <tr>
            <th>IP</th>
            <th>Fallos</th>
            <th>Clasificación</th>
        </tr>
        @foreach($suspiciousIps as $item)
        <tr>
            <td>{{ $item->ip_address }}</td>
            <td>{{ $item->total }}</td>
            <td>{{ $item->total >= 5 ? 'CRÍTICO' : 'ALERTA' }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>