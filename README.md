# E-commerce [Nome do Projeto]

Projeto desenvolvido para a matéria de Desenvolvimento Web da faculdade (Engenharia de Software). O foco é o aprendizado de PHP, desenvolvimento back-end e conexão com banco de dados MySQL.

> Made for learning PHP and Web Development in college.

---

## 🚀 Sobre o Projeto

Este é um sistema de gerenciamento de vendas e-commerce simples (ou de cadastro, etc.) que permite criação de produto, registro de venda e exclusão (CRUD) 
---

## 🛠️ Tecnologias Utilizadas

* **PHP**
* **MySQL** (utilizando XAMPP)
* **HTML5**
* **CSS3**

---

## 🏁 Como Rodar o Projeto

Este projeto requer um ambiente de servidor local como XAMPP ou WAMP.

1.  **Clone o Repositório**
    ```bash
    git clone https://github.com/SchVictor/EcommercePHP.git
    ```

2.  **Mova a Pasta**
    * Mova a pasta do projeto para dentro do diretório `htdocs` do seu XAMPP (ex: `C:\xampp\htdocs\eccomerceComentado`).

3.  **Inicie o Servidor**
    * Abra o painel do XAMPP e inicie os módulos **Apache** e **MySQL**.

4.  **Banco de Dados**
    * Acesse `http://localhost/phpmyadmin`.
    * Crie um novo banco de dados (ex: `ecommerce_db`).
    * (Se você tiver um arquivo `.sql` com a estrutura): Importe o arquivo `database.sql` para criar as tabelas.
    * (Se não tiver): Crie as tabelas manualmente 

5.  **Arquivo de Configuração**
    * Como o arquivo `conexao.php` está ignorado (por segurança), você precisará criá-lo manualmente dentro da pasta do projeto.
    * Adicione ao `conexao.php` suas credenciais locais:
        ```php
        <?php
          $servidor = "localhost";
          $usuario = "root";
          $senha = ""; // Sua senha do XAMPP (geralmente vazia)
          $banco = "ecommerce_db"; // O banco que você criou

          $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
        ?>
        ```

6.  **Acesse o Projeto**
    * Abra seu navegador e acesse `http://localhost/eccomerceComentado`