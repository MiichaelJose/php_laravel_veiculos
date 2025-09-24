# php_laravel_veiculos

Projeto em **Laravel / PHP** para gerenciamento de veículos (cadastro, listagem, edição, remoção, etc.).

## 📋 Sumário

- [Descrição](#descrição)  
- [Funcionalidades](#funcionalidades)  
- [Tecnologias](#tecnologias)  
- [Pré-requisitos](#pré-requisitos)  
- [Instalação](#instalação)  
- [Configuração](#configuração)  
- [Uso](#uso)  
- [Testes](#testes)  
- [Contribuição](#contribuição)  
- [Licença](#licença)  

## Descrição

Este sistema permite o gerenciamento de um inventário de veículos, com operações básicas de CRUD (Create, Read, Update, Delete). É ideal para servir como base para aplicações de concessionárias, locadoras ou para aprendizado/trabalho com Laravel.

## Funcionalidades

- Cadastro de veículos  
- Listagem de veículos  
- Edição e exclusão de veículos  
- Validações de formulário  
- Estrutura MVC com Laravel  
- Layout front-end com Blade  

## Tecnologias

- PHP  
- Laravel  
- Blade (template engine)  
- Composer  
- (Opcional) MySQL / outro banco de dados relacional  
- (Opcional) Vite / Webpack / mix para assets  

## Pré-requisitos

Antes de executar o projeto localmente, certifique-se de ter:

- PHP versão compatível com a versão de Laravel usada  
- Composer  
- Servidor web local (ex: Apache, Nginx ou Laravel Sail / Valet)  
- Banco de dados (MySQL, PostgreSQL ou equivalente)  

## Instalação

```bash
# Clone o repositório
git clone https://github.com/MiichaelJose/php_laravel_veiculos.git

# Acesse a pasta do projeto
cd php_laravel_veiculos

# Instale as dependências PHP via Composer
composer install

# (Opcional) instale pacotes JS, se houver
npm install
# ou
yarn install
