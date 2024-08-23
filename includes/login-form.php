<article class="auth-section container px-4">
    <h1 class="fw-bolder title">Fazer login</h1>
    <p class="fw-bold my-4">Nova conta? <a href="?page=registrar" class="text-primary">Cadastre-se gratuitamente</a></p>
    <form action="/actions/login.php" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Email</label>
            <input type="email" required class="form-control p-3" id="email" name="email"
                placeholder="Digite seu email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Senha</label>
            <input type="password" required class="form-control p-3" id="password" name="password"
                placeholder="Insira sua senha">
        </div>
        <a href="?senha" class="text-primary fw-bold p-3">Esqueceu sua senha?</a>
        <button type="submit" class="btn btn-primary container p-3 fw-bold mt-4">Entrar</button>
        <button type="button"
            class="btn border border-gray-500 d-flex align-content-center gap-2 container justify-content-center p-3 mt-4">
            <img src="./assets/img/google.png" style="width: 22px;" alt="">
            <span class="fw-bold">Faça Login com o Google</span>
        </button>
    </form>
</article>