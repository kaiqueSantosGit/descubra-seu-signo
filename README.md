# Descubra Seu Signo

## Descrição

O projeto **"Descubra Seu Signo"** foi desenvolvido como parte de um trabalho universitário do curso de **Análise e Desenvolvimento de Sistemas** na Universidade Anhanguera Educacional. A proposta inicial foi criar uma aplicação simples, mas eficaz, que permitisse ao usuário descobrir seu signo astrológico com base na sua data de nascimento.

A aplicação foi construída utilizando tecnologias web como **HTML**, **CSS**, **PHP** e **XML**, permitindo um aprendizado prático das ferramentas e conceitos adquiridos ao longo do curso. O projeto tem como objetivo demonstrar habilidades adquiridas, ao mesmo tempo em que oferece uma interface interativa e informativa ao usuário.

## Motivação

Este projeto foi desenvolvido para consolidar meus conhecimentos e habilidades na área de desenvolvimento web. A ideia de criar uma aplicação que conecta dados astrológicos com programação foi uma maneira de explorar um tema interessante enquanto aplicava conceitos de **formulários HTML**, **estilização com CSS**, **processamento de dados com PHP**, e **leitura de arquivos XML**.

Além disso, ao longo da construção do projeto, foi possível aprofundar o entendimento sobre a integração de front-end e back-end, utilizando PHP para processar as informações e retornar o signo correto de acordo com a data informada. A aplicação, assim, reflete a progressão do aprendizado no desenvolvimento de projetos de sistemas web.

## Funcionalidades

O sistema permite que o usuário insira sua data de nascimento em um formulário e, com base nesse dado, descubra seu signo astrológico. A aplicação funciona da seguinte maneira:
1. O usuário preenche o formulário com a data de nascimento.
2. O sistema processa a data inserida e compara com os intervalos de datas predefinidos para cada signo.
3. Ao final, o signo correspondente é exibido junto com uma breve descrição.

## Tecnologias Utilizadas

- **HTML**: Estrutura básica da página web.
- **CSS**: Estilização e responsividade da página.
- **PHP**: Lógica de processamento para descobrir o signo com base na data de nascimento.
- **XML**: Armazenamento dos dados dos signos, incluindo as datas de início e fim, o nome do signo e a descrição.

## Estrutura do Projeto

O projeto está estruturado da seguinte maneira:

```plaintext
/project
│
├── index.php          # Página principal com o formulário de entrada de data
├── show_zodiac_sign.php  # Página que exibe o signo após o processamento
├── signos.xml         # Arquivo XML com os dados dos signos
├── layouts/
│   ├── header.php     # Cabeçalho da página
│   └── footer.php     # Rodapé da página
└── assets/
    └── style.css      # Arquivo CSS com a estilização do site
```
## Funcionalidade de Atualizações Futuras

O projeto foi desenvolvido de forma a ser um trabalho em constante evolução. A ideia é continuar atualizando e aprimorando o sistema conforme meus conhecimentos aumentam. Novas funcionalidades serão adicionadas ao longo do tempo, tais como:

- **Adição de mais conteúdos**: Expansão das descrições dos signos e informações extras como elementos, qualidades e regentes planetários.
- **Aprimoramento do design**: Implementação de novas técnicas de CSS para tornar o site mais visualmente atraente e responsivo.
- **Integração com banco de dados**: A ideia é substituir o arquivo XML por um banco de dados, tornando o sistema mais robusto e escalável.
- **Melhorias no desempenho**: Otimização do código PHP para melhorar a performance e usabilidade.

## Como Executar o Projeto

### Requisitos

Para rodar o projeto localmente, você precisará de um servidor PHP local, como o **XAMPP** ou **WAMP**, que fornece o ambiente necessário para executar arquivos PHP.

1. Faça o download e instale o **XAMPP** ou **WAMP** em sua máquina.
2. Coloque a pasta do projeto na pasta `htdocs` do **XAMPP** (ou pasta correspondente no **WAMP**).
3. Abra o terminal ou prompt de comando e execute o servidor local.
4. Acesse o projeto no navegador através de `http://localhost/seu_projeto`.


## Conclusão

Este projeto é um reflexo da minha jornada de aprendizado e evolução no campo do desenvolvimento web. Ele foi criado para consolidar conceitos que aprendi ao longo do curso de **Análise e Desenvolvimento de Sistemas** e também para representar minha evolução como programador.

O objetivo principal foi criar uma aplicação simples e funcional, mas a ideia é continuar aprimorando-a com o tempo, conforme meus conhecimentos em desenvolvimento de sistemas e design aumentam. Este trabalho é uma pequena parte de uma jornada maior, que envolve a construção de projetos mais complexos e o aprimoramento contínuo das minhas habilidades.

Agradeço a todos que acompanharem esse projeto e a todos que, de alguma forma, contribuírem para o meu crescimento acadêmico e profissional!


