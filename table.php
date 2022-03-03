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

<TABLE>

<caption>População das Unidades Federativas</caption>
<thead>
    <tr>
        <th scope="col">Estado</th>
        <th scope="col">População</th>
    </tr>
</thead>

<tbody>
    <tr>
        <td>São Paulo</td>
        <td class= 'num'>46 649 132</td>
    </tr>
    <tr>
        <td>Minas Gerais</td>
        <td class= 'num'>21 411 923</td>
    </tr>
    <tr>
        <td>Rio de Janeiro</td>
        <td class= 'num'>17 463 349</td>
    </tr>
    <tr>
        <td>Bahia</td>
        <td class= 'num'>14 985 284</td>
    </tr>
    <tr>
        <td>Paraná</td>
        <td class= 'num'>11 597 484</td>
    </tr>
    <tr>
        <td>Rio Grande do Sul</td>
        <td class= 'num'>11 466 630</td>
    </tr>
    <tr>
        <td>Pernambuco</td>
        <td class= 'num'>9 674 793</td>
    </tr>
    <tr>
        <td>Ceará</td>
        <td class= 'num'>9 240 580</td>
    </tr>
    <tr>
        <td>Pará</td>
        <td class= 'num'>7 338 473</td>
    </tr>
    <tr>
        <td>Santa Catarina</td>
        <td class= 'num'>7 206 589</td>
    </tr>
    <tr>
        <td>Goiás</td>
        <td class= 'num'>7 153 262</td>
    </tr>
    <tr>
        <td>Maranhão</td>
        <td class= 'num'>4 269 995</td>
    </tr>
    <tr>
        <td>Amazonas</td>
        <td class= 'num'>4 108 508</td>
    </tr>
    <tr>
        <td>Paraíba</td>
        <td class= 'num'>4 059 905</td>
    </tr>
    <tr>
        <td>Mato Grosso</td>
        <td class= 'num'>3 567 234</td>
    </tr>
    <tr>
        <td>Rio Grande do Norte</td>
        <td class= 'num'>3 560 903</td>
    </tr>
    <tr>
        <td>Alagoas</td>
        <td class= 'num'>3 365 351</td>
    </tr>
    <tr>
        <td>Piauí</td>
        <td class= 'num'>3 289 290</td>
    </tr>
    <tr>
        <td>Distrito Federal</td>
        <td class= 'num'>3 094 325</td>
    </tr>
    <tr>
        <td>Mato Grosso do Sul</td>
        <td class= 'num'>2 839 188</td>
    </tr>
    <tr>
        <td>Sergipe</td>
        <td class= 'num'>2 338 474</td>
    </tr>
    <tr>
        <td>Rondônia</td>
        <td class= 'num'>1 815 278</td>
    </tr>
    <tr>
        <td>Tocantins</td>
        <td class= 'num'>1 607 363</td>
    </tr>
    <tr>
        <td>Acre</td>
        <td class= 'num'>906 876</td>
    </tr>
    <tr>
        <td>Amapá</td>
        <td class= 'num'>877 613</td>
    </tr>
    <tr>
        <td>Roraima</td>
        <td class= 'num'>652 713</td>
    </tr>
</tbody>

<tfoot>
    <tr>
        <td scope=" row">Total de habitantes</td>
        <td class= 'num' ><strong>213 317 639</strong></td>
    </tr>
</tfoot>

</TABLE>

<p><em>Este é um exemplo de solução, não a solução definitiva. Para ver a solução, exiba o código fonte desta página.</em></p>

<table>

    <!-- Primeira linha - Cabeçalho -->
    <tr>
        <th>Cabeçalho 1</th>
        <th>Cabeçalho 2</th>
        <th>Cabeçalho 3</th>
        <th>Cabeçalho 4</th>
    </tr>

    <!-- Linhs 2 à 6 - Dados -->
    <tr>
        <td>Linha 2 - Coluna 1</td>
        <td>Linha 2 - Coluna 2</td>
        <td>Linha 2 - Coluna 3</td>
        <td>Linha 2 - Coluna 4</td>
    </tr>

    <tr>
        <td>Linha 3 - Coluna 1</td>
        <td>Linha 3 - Coluna 2</td>
        <td>Linha 3 - Coluna 3</td>
        <td>Linha 3 - Coluna 4</td>
    </tr>

    <tr>
        <td>Linha 4 - Coluna 1</td>
        <td>Linha 4 - Coluna 2</td>
        <td>Linha 4 - Coluna 3</td>
        <td>Linha 4 - Coluna 4</td>
    </tr>

    <tr>
        <td>Linha 5 - Coluna 1</td>
        <td>Linha 5 - Coluna 2</td>
        <td>Linha 5 - Coluna 3</td>
        <td>Linha 5 - Coluna 4</td>
    </tr>

    <tr>
        <td>Linha 6 - Coluna 1</td>
        <td>Linha 6 - Coluna 2</td>
        <td>Linha 6 - Coluna 3</td>
        <td>Linha 6 - Coluna 4</td>
    </tr>

</table>

<p><em>Este é um exemplo de solução, não a solução definitiva. Para ver a solução, exiba o código fonte desta página.</em></p>

<table>

    <tr>
        <th>Item</th>
        <th>Qtd</th>
        <th>Preço</th>
    </tr>

    <tr>
        <td>Pão</td>
        <td>10</td>
        <td>R$0,50</td>
    </tr>

    <tr>
        <td>Leite</td>
        <td>1</td>
        <td>R$4,00</td>
    </tr>

    <tr>
        <td>Ovos</td>
        <td>5</td>
        <td>R$0,35</td>
    </tr>

    <tr>
        <td>Pipoca</td>
        <td>5</td>
        <td>R$2,00</td>
    </tr>

    <tr>
        <td>Pirulito</td>
        <td>10</td>
        <td>R$1,00</td>
    </tr>

</table>

<p><em>Este é um exemplo de solução, não a solução definitiva. Para ver a solução, exiba o código fonte desta página.</em></p>
Março de 2022
<table>

    <tr>
        <th>D</th>
        <th>S</th>
        <th>T</th>
        <th>Q</th>
        <th>Q</th>
        <th>S</th>
        <th>S</th>
    </tr>

    <tr>
        <td colspan="2"></td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
    </tr>

    <tr>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td><strong><em>9</em></strong></td>
        <td>10</td>
        <td>11</td>
        <td>12</td>
    </tr>

    <tr>
        <td>13</td>
        <td>14</td>
        <td>15</td>
        <td>16</td>
        <td>17</td>
        <td>18</td>
        <td>19</td>
    </tr>

    <tr>
        <td>20</td>
        <td>21</td>
        <td>22</td>
        <td>23</td>
        <td>24</td>
        <td>25</td>
        <td>26</td>
    </tr>

    <tr>
        <td>27</td>
        <td>28</td>
        <td>29</td>
        <td>30</td>
        <td>31</td>
        <td colspan="2"></td>
    </tr>

</table>

<?php require __DIR__ . "/_footer.php"; ?>