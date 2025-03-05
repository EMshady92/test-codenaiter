<html>
<head>
    <title>Clientes</title>
</head>
<style>
    table{
        width:100%;
    }
</style>
<body>
    <table>
        <tr>
           <th>
                Nombre
           </th>
           <th>
                Email
           </th> 
           <th>
                Telefono
           </th>  
        </tr>

        <tr>
        <?php foreach ($clientes as $client): ?>
            <td>
            <?= esc($client->nombre) ?>
            </td>
        <?php endforeach ?>
           
        </tr>
    </table>
</body>    
</html>