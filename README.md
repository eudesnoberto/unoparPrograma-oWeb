# Projeto: Descubra seu Signo Zodiacal

Este projeto foi desenvolvido como parte de um trabalho acadêmico na faculdade Unopar. Ele consiste em uma aplicação web que permite ao usuário descobrir seu signo zodiacal com base na data de nascimento fornecida.

## Funcionalidade

- O usuário insere sua data de nascimento em um formulário.
- A data é comparada com os intervalos de datas dos signos zodiacais, armazenados em um arquivo XML.
- O signo correspondente é exibido, junto com uma breve descrição.

## Tecnologias Utilizadas

- **PHP**: Para processamento de dados e consulta ao arquivo XML.
- **HTML/CSS**: Para estruturação e estilização das páginas.
- **Bootstrap**: Para responsividade e design moderno.

## Como Rodar

1. Instale o XAMPP.
2. Coloque os arquivos do projeto na pasta `xampp/htdocs/`.
3. Acesse `http://localhost/Project/` no seu navegador.

## Estrutura do Projeto

Sistema-de-Signos/

│

├── assets/

│   ├── css/

│   │   └── style.css              # Arquivo de estilo personalizado

│   ├── imgs/                      # Pasta para imagens utilizadas no projeto

│   └── js/                        # Pasta para scripts JavaScript (caso necessário)


│
├── layouts/

│   └── header.php                 # Arquivo de cabeçalho com o link para o Bootstrap

│
├── index.php                      # Página inicial com o formulário

├── show_zodiac_sign.php           # Página que exibe o signo e informações relacionadas

├── signos.xml                     # Arquivo XML com os dados dos signos zodiacais

├── README.md                      # Arquivo de documentação

└── .gitignore                     # Arquivo para ignorar arquivos não necessários no repositório

## Explicação da Estrutura:

- assets: Pasta que contém todos os arquivos estáticos, como imagens, arquivos CSS e scripts JS.

- css/style.css: Arquivo de estilização personalizado.
- imgs: Pasta onde as imagens utilizadas no site são armazenadas.
- js: Pasta para scripts JavaScript que podem ser usados para validações ou interatividade adicional.
- layouts/header.php: Arquivo que contém a parte de cabeçalho da página, como links para o Bootstrap e outros recursos globais.

- index.php: Página inicial do projeto, contendo o formulário para o usuário inserir sua data de nascimento e ser redirecionado para a página com o signo.

- show_zodiac_sign.php: Página que recebe os dados do formulário, processa as informações e exibe o signo correspondente ao usuário.

- signos.xml: Arquivo XML que armazena as informações sobre os signos zodiacais, como o nome do signo, datas de início e fim e uma descrição.




## Conclusão

Este trabalho demonstra a utilização de PHP e XML para consulta dinâmica de dados, além de aplicar boas práticas de desenvolvimento web com HTML, CSS e Bootstrap.

## Mais

- Intituição: Unopar.
- Aluno: Francieudes Silva Noberto Alves.
- Curso: Superior de Tecnologia em Análise e Desenvolvimento de Sistemas.
- Portifólio: Programação Web.

## Licença

- Este projeto é de uso acadêmico e pode ser utilizado para fins educacionais.



