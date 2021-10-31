# Desafio 01

Repositório em PHP criado com o objetivo de propor desafios de programação. Indicado para iniciantes, mas é necessário alguma familiaridade com docker (somente para fazer a instalação). Clone o projeto, instale-o e tente resolver da melhor forma possível os itens abaixo. Divirta-se! :)

## Requisitos

- [Git](https://git-scm.com/download)
- [Docker](https://www.docker.com/)

## Instalação

Baixe o projeto:

```shell
$ git clone git@github.com:Clyff/desafio-01.git
```

Acesse a pasta e suba os containers docker:

```shell
$ cd desafio-01
$ docker-compose up -d
```

## Uso

O projeto pode ser acessado pela url `http://localhost`.

## Desafios Sugeridos

1. Uma das páginas de mercadoria está estourando um erro no PHP. Adicione uma lógica para evitar que esse erro ocorra sem alterar os dados da mercadoria.
1. Ao inspecionar todo o HTML da página, vemos muito conteúdo não sendo exibido. Tente entender o problema e realizar uma correção.
1. Crie o arquivo `src/classes/Controlador.php` e nele, crie a classe `Controlador`. Nessa classe, reescreva toda a lógica usada em `src/index.php` para ler os parâmetros da url. Abstraia da melhor forma possível, sendo obrigatório criar os seguintes métodos:
   - **getMercadorias**: deve retornar todas mercadorias do arquivo `src/data/mercadorias.php`;
   - **findMercadoria**: deve aceitar ao menos um parâmetro, que será usado para buscar essa chave no array gerado por getMercadorias. Caso encontre, retornará esse item. Não encontrado, retornará um array vazio.
   - **render**: deve aceitar ao menos um parâmetro do tipo array. Se ele for vazio, exibirá o html do arquivo `src/views/selecione.html`. Se ouver algum valor, ele exibirá o html gerado pelo arquivo `src/views/dados-mercadoria.php`.
   - **run**: deve verificar a existência de parâmetros GET na url. Não havendo o parâmetro `mercadoria`, exibir o html do arquivo `src/views/404.html`. Caso possua, realiza toda lógica dos métodos acima para exibir o conteúdo correto.
1. Uma vez criado os métodos necessários, substituir o conteúdo de `src/index.php` por:

   ```php
   <?php
   require_once(__DIR__ . '/init.php');

   use App\classes\Controlador;

   Controlador::run();
   ```

1. Existe muito conteúdo repitido nos arquivos da pasta `src/views`. Realize as seguintes mudanças:
   - Altere todos arquivos, deixe somente o que aparecerá naquela página (o conteúdo dentro do body)
   - Crie o arquivo `src/views/layout.php`. Nele, deixe todo conteúdo repetitivo (tag head, início do body, fim do body, fom do html etc). E, dentro da tag body, exiba o conteudo de uma variável chamada `$content`.
   - Na classe `Controlador`, crie uma lógica onde, ao invés de apenas chamar o arquivo em `src/views`, exibir o conteúdo do arquivo de layout criado. Sendo a variável `$content` o conteúdo dos arquivos originais.
1. Faça melhorias no layout. Crie uma tag header, footer e dê uma cara melhor ao conteúdo da página.
