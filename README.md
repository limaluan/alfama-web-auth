<h1 align="center">
  <img alt="Alfama Web" title="Alfama Web" src="https://digitalks.com.br/wp-content/uploads/2014/02/alfamaweb.png" width="440px" />
</h1>

<p align="center">
  <a href="#-contexto">Contexto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-projeto">Projeto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="https://github.com/limaluan/alfama-web-auth?tab=readme-ov-file#%EF%B8%8F-executando-o-projeto">Executando o projeto</a>&nbsp;&nbsp;&nbsp;
</p>

## 🧠 Contexto

<p>O Alfama Web Auth é uma aplicação FullStack com PHP, MySQL e Bootstrap</p>

<p align="center">
  <img alt="Página Inicial / Dashboard" src="https://i.imgur.com/r9veyDd.png" width="100%">
</p>

<p>Este projeto possui as seguintes features:</p>

- Sistema de autenticação
  - Login / Registro
  - Proteção de Rotas
  - Atualização de dados do usuário
  - Feedback e validação em campos
- Totalmente Responsivo

## 📔 Projeto
<h2>Tela de Login</h1>
<p align="center">
  <img alt="Página de Login" src="https://i.imgur.com/dTE14Kj.png" width="100%">
</p>

<h2>Tela de Cadastro</h2>

<p align="center">
  <figure>
    <img alt="Tela de Cadastro" src="https://i.imgur.com/6CvKMgf.png" width="100%"/>
  </figure>
</p>

<h2>Tela de perfil do usuário</h2>

<p align="center">
  <figure>
    <img alt="Cadastro de Transação" src="https://i.imgur.com/ZAOO4uH.png" width="100%"/>
  </figure>
</p>

## ⚒️ Executando o Projeto

Execute um dos dois comandos abaixo a depender do seu sistema operacional.

```bash
docker-compose up --build
# ou se estiver no linux
sudo docker-compose up --build
```

Para parar o container e remover todos os respectivos dados.

```bash
docker-compose down --volumes --remove-orphans --rmi all
# ou se estiver no linux
sudo docker-compose down --volumes --remove-orphans --rmi all
```

O Projeto será hospedado no domínio [http://localhost:8080](http://localhost:8080).

Obs: Certifique-se de ter seu docker atualizado

Feito com ♥ by [Luan Lima](https://github.com/limaluan).
