# Projeto: **Descubra seu Signo Zodiacal**

Este projeto foi desenvolvido como parte de um trabalho acadêmico na **faculdade Unopar**. Ele consiste em uma aplicação web interativa que permite ao usuário descobrir seu signo zodiacal com base na data de nascimento fornecida.

## Funcionalidade

- O usuário insere sua **data de nascimento** em um formulário.
- A data é comparada com os intervalos de datas dos signos zodiacais, armazenados em um **arquivo XML**.
- O signo correspondente é exibido, juntamente com uma **breve descrição**.

## Tecnologias Utilizadas

- **PHP**: Para processamento de dados e consulta ao arquivo XML.
- **HTML/CSS**: Para estruturação e estilização das páginas.
- **Bootstrap**: Para responsividade e design moderno.

## Como Rodar

1. **Instale o XAMPP**: [Baixe o XAMPP aqui](https://www.apachefriends.org/download.html).
2. **Coloque os arquivos do projeto** na pasta `xampp/htdocs/` no seu computador.
3. **Acesse** o projeto em seu navegador com o seguinte endereço:  
   `http://localhost/Project/`.

---

## Estrutura do Projeto

```plaintext
Sistema-de-Signos/
│
├── assets/
│   ├── css/
│   │   └── style.css              # Arquivo de estilo personalizado
│   ├── imgs/                      # Pasta para imagens utilizadas no projeto
│   └── js/                        # Pasta para scripts JavaScript (se necessário)
│
├── layouts/
│   └── header.php                 # Arquivo de cabeçalho com o link para o Bootstrap
│
├── index.php                      # Página inicial com o formulário
├── show_zodiac_sign.php           # Página que exibe o signo e informações relacionadas
├── signos.xml                     # Arquivo XML com os dados dos signos zodiacais
├── README.md                      # Arquivo de documentação
└── .gitignore                     # Arquivo para ignorar arquivos não necessários no repositório
```

### Explicação da Estrutura:

- **`assets/`**: Contém os arquivos estáticos, como imagens, arquivos CSS e scripts JS.
  - **`css/style.css`**: Arquivo de estilização personalizado.
  - **`imgs/`**: Pasta onde as imagens utilizadas no projeto são armazenadas.
  - **`js/`**: Pasta para scripts JavaScript (caso necessários).
  
- **`layouts/`**: Contém o cabeçalho da página, incluindo o link para o Bootstrap e outros recursos globais.
  - **`header.php`**: Arquivo que contém o cabeçalho da página.

- **`index.php`**: Página inicial com o formulário para o usuário inserir sua data de nascimento e ser redirecionado para a página do signo.

- **`show_zodiac_sign.php`**: Página que processa os dados do formulário e exibe o signo correspondente ao usuário.

- **`signos.xml`**: Arquivo XML que armazena as informações sobre os signos zodiacais, como nome do signo, datas de início e fim, e uma breve descrição.

- **`README.md`**: Documento explicativo do projeto e suas instruções de uso.

- **`.gitignore`**: Arquivo utilizado para evitar que arquivos desnecessários, como caches e logs, sejam enviados ao repositório.

---

## Conclusão

Este trabalho demonstra a utilização de **PHP** e **XML** para consulta dinâmica de dados, além de aplicar boas práticas de desenvolvimento web com **HTML**, **CSS** e **Bootstrap** para criar uma interface limpa e responsiva.

---

## Mais

- **Instituição**: Unopar  
- **Aluno**: Francieudes Silva Noberto Alves  
- **Curso**: Superior de Tecnologia em Análise e Desenvolvimento de Sistemas  
- **Portfólio**: Programação Web

## Licença

Este projeto é de **uso acadêmico** e pode ser utilizado para fins educacionais.

---




