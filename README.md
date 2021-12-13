![PHP](./assets/php_image.png)

# PHP

#### repositorio para postar exercicios, e anotações referentes a linguagem PHP

```php
<?php
    echo "Hello World"
?>
```

<h2 style="text-decoration: underline">Conteúdo Do Repositório</h2>

<dl>
  <dt>Variáveis</dt>
  <dd>exemplo-01 - Criando minha primeira variável</dd>
  <dd>exemplo-02 - Mais sobre variáveis e algumas funções do php</dd>
  <dd>exemplo-03 - Tipos de Variáveis</dd>
  <dd>exemplo-04 - Variaveis super globais</dd>
  <dd>exemplo-05 - Escopo de Variável</dd>

  <dt>Operadores</dt>
  <dd>exemplo-01 - Operadores em Php</dd>
  <dd>exemplo-02 - Operadores Aritimeticos</dd>

  <dt>Strings</dt>
  <dd>exemplo-01 - aspas simples e dublas </dd>
  <dd>exemplo-02 - Funções de String</dd>

  <dt>Include</dt>
  <dd>exemplo-01 - include de um arquivo </dd>
  <dd>exemplo-02 - Funções de chamada no require</dd>

  <dt>Estruturas De Controle</dt>
  <dd>exemplo-01 - condicional if </dd>
  <dd>exemplo-02 - Switch Case</dd>
  <dd>exemplo-03 - For</dd>
  <dd>exemplo-04 - Foreach</dd>
  <dd>exemplo-05 - While</dd>

  <dt>Arrays</dt>
  <dd>exemplo-01 - Estrutura de um Array</dd>
  <dd>exemplo-02 - Funções para Arrays</dd>
  <dd>exemplo-03 - Json</dd>
  <dd>exemplo-04 - Constantes</dd>

  <dt>Session</dt>
  <dd>exemplo-01 - iniciando uma Sessão </dd>
  <dd>exemplo-02 - Exibindo Sessão</dd>
  <dd>exemplo-03 - Id's de Sessão</dd>

  <dt>Funções</dt>
  <dd>exemplo-01 - Sintaxe de uma Função</dd>
  <dd>exemplo-02 - Paramentros de uma Função</dd>
  <dd>exemplo-03 - Função com chamada de paramentros opcionais</dd>
  <dd>exemplo-04 - Passagem de Paramentros Valor X Referência </dd>
  <dd>exemplo-05 - Declaração de tipos escalares </dd>
  <dd>exemplo-06 - Funções Recursivas </dd>
  
</dl>

<h2 style="text-decoration: underline">Funções e Metodos PHP</h2>

```php
echo //exibe na tela uma especie de console.log do php
unset($nome); //Apaga a Variavel da Memoria
isset() //Verifica se a Variavel existe ou contém valor se sim retorna true caso contrário retorna false
. //usa-se o ponto para concatenar variáveis
exit //para a execução do codigo quando é encontrado
var_dump() //monstra o tipo da variavel
fopen() //abre um arquivo em tradução file open
global // caso exista uma variavel fora do escopo posso chamar ela passando global antes da variável
strtoupper() //converte string para Maiuscula
strtolower() // converte string para minuscula
ucwords() //converte a primeira letra de cada palavra em maiuscula
ucfirst() //converte só a primeira letra em maiuscula
str_replace() //troca o termo definido pelo buscado na string
strpos() //position encontra em qual posição estã a string buscada e retorno o numero
substr() //recebe a string, a posição de inicio, a posição de final e retorna a string cortada
strlen() //retorna quantas letras tem a string passada
include // tenta inportar o arquivo mesmo com erro
require // obriga que o arquivo exista e que esteja funcionando corretamente para importar, se não existir ou estiver com erro, o require gera erro fatal
require_once // faz a mesma coisa do require a diferencia é que traz o arquivo apenas uma vez
include_once // faz a mesma coisa do include a diferencia é que traz o arquivo apenas uma vez
continue //continua a execução
rand() //sorteia numeros aleatorios
print_r() //exibe arrays e coleçoes
end() //exibe o ultimo valor de um array ex end($carros[1]);
array_push() //adiciona um array no final da lista
json_encode() //converte um array php para Json
json_decode() // converte um json para array php
define() //cria uma variavel constantes ex define("SERVIDOR", "127.0.0.1");
session_start() //Inicia uma Sessão
session_id() //cria um id para cada sessão
session_regenerate_id() //cria um novo id de sessão para o user
session_unset() //limpa variaveis de sessão, caso não receba numhuma variavel como parametro limpa todas as variaveis de sessão
session_destroy() //enquanto session_unset limpa as variaveis de sessão ela ainda permanece com o usuario ativo na sessão, session_destroy ele limpa tudo e remove o usuario da sessão
func_get_args() //pega os paramentos passados na funcao, mesmo que não tenha nenhuma variavel passada como paramentro ex function ola();
gettype() // monstra de que tipo é a variavel
```

<br />
<h2 style="text-decoration: underline">Variáveis super globais</h2>

```php
$_GET[] //pega o valor que vem da query string
$_SERVER[] //pega o id do acessante do site o $_Server pega informações do ambiente
```

<br />

<h2 style="text-decoration: underline">Tipos de Dados Em PHP</h2>

### Tipos Básico

```php
inteiros
númericos
string
ponto flutuante
booleano
```

### tipos compostos

```php
array
objeto
```

### tipos especiais

```php
resource
null
```

<br />
<h2 style="text-decoration: underline">Operadores</h2>

```php
= //atribuição
. //concatenação
.= //atribui e concatena
+= //atribui e soma
-= //atribui e subtrai
*= //atribui e multiplica
+ //soma
- //subtração
* //multiplicação
/ //divisão
% //mod
** //exponenciação
> //maior
< //menor
>= //maior ou igual
<= //manor ou igual
== //igual valor
=== //igual tipo e valor
!= //diferente
!== //diferente e tipo
<=> //spaceship 1 caso o primeiro valor for maior 0 se forem iguais -1 caso o segundo valor for maior
?? //nullcolescing tras o valor que existir se tiver um null ele ignora, assim que encontrar o primeiro valor valido ele retorna
++ //incremental
-- //decremental
&& //and
|| //or
```
