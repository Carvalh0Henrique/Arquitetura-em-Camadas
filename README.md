# LOGIN_APP_ALUNO

Aplicação de login para alunos, desenvolvida com **PHP** utilizando arquitetura em **camadas**. O projeto segue uma separação clara de responsabilidades, facilitando manutenção, escalabilidade e testes.

---

## Estrutura do Projeto
```
LOGIN_APP_ALUNO
├── app
│   ├── Controller
│   │   └── AuthController.php
│   ├── Database
│   │   └── Database.php
│   ├── Model
│   │   └── User.php
│   ├── Repository
│   │   └── UserRepository.php
│   ├── Service
│   │   └── AuthService.php
│   └── database.sql
│      
├── public
│   └── index.php
│
├── ventor
│   ├── UserRepository.php  
│   │      ├── autoload_classmap.php
│   │      ├── autoload_namespaces.php
│   │      ├── autoload_psr4.php
│   │      ├── autoload_real.php
│   │      ├── autoload_static.php
│   │      ├── ClassLoader.php
│   │      └── LICENSE
│   │      
│   └── autoload.php
│
├── composer.json
│
└── README.md
```
---

## Camadas da Aplicação

1. **Controller**: Recebe requisições HTTP, valida dados e encaminha para a camada de serviço.
2. **Service**: Contém a lógica de negócio e regras da aplicação.
3. **Repository**: Faz a comunicação com o banco de dados, isolando queries SQL.
4. **Model**: Representa as entidades da aplicação.
5. **Database**: Gerencia a conexão com o banco de dados.