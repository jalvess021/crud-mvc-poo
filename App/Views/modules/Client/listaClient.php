<h1>Clients Lists</h1>
<a href="<?php echo 'form-client';?>"><button>Novo Cliente</button></a>
    <div class='content'>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultData as $data): ?> <!-- inicia o laço de repetição -->
                <tr>
                    <td><?= $data['id_client']?></td><!-- mesma coisa que abrir uma tag php com o echo -->
                    <td><?= $data['name_client']?></td>
                    <td><?= $data['email_client']?></td>
                    <td><?= $data['phone_client']?></td>
                    
                        <td class='form-line'>
                            <form action="<?= RAIZ . '/info-client'?>" method='post'>
                                <input type="hidden" name='clientId' value="<?=$data['id_client']?>">
                                <input type="submit" value='Visualizar'>
                            </form>
                            <form action="<?= RAIZ . '/edit-client'?>" method='post'>
                                <input type="hidden" name='clientId' value="<?=$data['id_client']?>">
                                <input type="submit" value='Editar'>
                            </form>
                            <form action="<?= RAIZ . '/delete-client'?>" method='post'>
                                <input type="hidden" name='clientId' value="<?=$data['id_client']?>">
                                <input type="submit" value='Excluir'>
                            </form>
                        </td>
                    
                </tr>
                <?php endforeach;?> <!-- fecha o laço de repetição -->
            </tbody>
        </table>
    </div>
 