<!-- Listagem de registros-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients List </title>
</head>
<body>

<h1>Clients Lists</h1>

    <div class='content'>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultData as $data): ?> <!-- inicia o laço de repetição -->
                <tr>
                    <td><?= $data['id_client']?></td><!-- mesma coisa que abrir uma tag php com o echo -->
                    <td><?= $data['name_client']?></td>
                    <td><?= $data['email_client']?></td>
                    <td><?= $data['phone_client']?></td>
                </tr>
                <?php endforeach;?> <!-- fecha o laço de repetição -->
            </tbody>
        </table>
    </div>
    
</body>
</html>