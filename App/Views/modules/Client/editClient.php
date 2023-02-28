

<h1>Editar o cliente - <?= $resultData[1]?></h1>
<form action="<?php echo RAIZ.'/save-client';?>" method='post'>
    <input type="hidden" name='id' value='<?= $resultData [0]?>'>

    <label for="name">Nome Completo:</label>
    <input type="text" id='name' name='name' value='<?= $resultData [1]?>'><br><br>

    <label for="email">Email:</label>
    <input type="email" id='email' name='email' value='<?= $resultData [2]?>'><br><br>

    <label for="phone">Telefone:</label>
    <input type="text" id='phone' name='phone' value='<?= $resultData [3]?>'><br><br>
    <input type="submit">
    
</form>