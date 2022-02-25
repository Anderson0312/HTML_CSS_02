<?php require __DIR__ . "/_header.php"; ?>

<style>
    table,
    tr,
    th,
    td {
        border: 1px solid black;
    }
</style>

<h2>Tabelas</h2>

<h3>Referências:</h3>
<ul>
    <li><a href="https://www.w3schools.com/html/html_tables.asp" target="_blank">Tabelas no W3Schools</a></li>
</ul>

<ol>
    <li><strong>table</strong> &rarr; Cria uma tabela.</li>
    <p><strong>tr</strong> &rarr; table row &rarr; Cria uma linha na tabela.</p>
    <p><strong>th</strong> &rarr; table header &rarr; Cria uma célula de cabeçalho dentro da linha.</p>
    <p><strong>td</strong> &rarr; table data &rarr; Cria uma célula de dados dentro da linha.</p>
    <p><strong>colspan</strong> &rarr; Expande coluna &rarr; Esse atributo espande uma célula na mesma linha.</p>
    <p><strong>rowspan</strong> &rarr; Expande linha &rarr; Esse atributo espande uma célula para a linha seguinte.</p>
</ol>

<table>

    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
    </tr>

    <tr>
        <td>Joca da Silva</td>
        <td>joca@silva.com</td>
        <td>10/11/1980</td>
    </tr>

    <tr>
        <td>Setembrino Trocatapas</td>
        <td>set@brino.com</td>
        <td>23/12/1979</td>
    </tr>

    <tr>
        <td>Marineuza Siriliano</td>
        <td>mari@neuza.com</td>
        <td>02/02/2000</td>
    </tr>

    <tr>
        <td>Edilineuza Carmisona</td>
        <td>edir@carmo.com</td>
        <td>10/04/1971</td>
    </tr>

</table>

<h3>Outra tabela</h3>

<table>

    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Seção</th>
        <th>Subseção</th>
    </tr>

    <tr>
        <td>Bicicleta</td>
        <td>R$1000,00</td>
        <td colspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Bola</td>
        <td>R$20,00</td>
        <td>Esportes</td>
        <td>Bolas</td>
    </tr>

    <tr>
        <td>Patins</td>
        <td>R$500,00</td>
        <td colspan="2" rowspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Patinete</td>
        <td>R$700,00</td>
    </tr>

</table>

<h3>Exercícios</h3>
<ol>
    <li>Crie mais uma tabela simples representando dados em 4 colunas e 6 linhas.</li><br>
    <li>Crie uma pequena lista de compras para o brunch das crianças.</li><br>
    <li>Clique no relógio do Windows e reproduza o calendário do mês atual usando HTML.</li>
</ol>

<?php require __DIR__ . "/_footer.php"; ?>