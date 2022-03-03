<?php require __DIR__ . "/_header.php"; ?>

<h2>Formulários</h2>

<h3>Referências</h3>
<ul>
    <li><a href="https://www.w3schools.com/html/html_forms.asp" target="_blank"></a>Formulários no W3Schools</li>
</ul>


<h3>Exemplo 1</h3>
<p>Formulário usando o método HTTP "GET":</p>


<form action="form_process.php" method="get" id="">

<input type="text" name="nome">
<input type="password" name="Senha">

<input type="submit" value="Enviar">

</form>

<h3>Exemplo 2</h3>
<p>Formulário de pesquisa no Google:</p>

<form action="https://www.google.com/search" target="_blank" method="get">

    <input type="text" name="q">

    <input type="submit" name="Procurar no Google">

</form>


<h3>Exemplo 3</h3>
<p>Formulário usando o método HTTP "POST":</p>

<form action="/form_process.php" method="post">

    Nome: <input type="text" name="user_name"><br>
    E-mail: <input type="email" name="user_email"><br>
    Nascimento: <input type="date" name="user_birth"><br>
    Endereço: <textarea name="address"></textarea><br>

    <button type="submit">Cadastrar</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="reset">Limpar</button>

</form>





<?php require __DIR__ . "/_footer.php"; ?>