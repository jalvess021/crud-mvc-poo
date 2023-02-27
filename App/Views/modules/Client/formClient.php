<h1>Formulário de clientes</h1>
<br><br>
<form action="<?php echo RAIZ.'/save-client';?>" method='post'>
    <label for="name">Nome Completo:</label>
    <input type="text" id='name' name='name'><br><br>

    <label for="email">Email:</label>
    <input type="email" id='email' name='email'><br><br>

    <label for="phone">Telefone:</label>
    <input type="text" id='phone' name='phone'><br><br>

    <input type="submit">
</form>