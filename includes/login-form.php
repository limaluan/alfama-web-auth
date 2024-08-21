<article class="auth-section container px-4">
    <h1 class="fw-bolder">Fazer login</h1>
    <p class="fw-bold my-4">Nova conta? <a href="?page=registrar" class="text-primary">Cadastre-se gratuitamente</a></p>
    <form action="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Email</label>
            <input type="email" required class="form-control p-3" id="exampleFormControlInput1"
                placeholder="Digite seu email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Senha</label>
            <input type="email" required class="form-control p-3" id="exampleFormControlInput1"
                placeholder="Insira sua senha">
        </div>
        <a href="?senha" class="text-primary fw-bold p-3">Esqueceu sua senha?</a>
        <button type="button" class="btn btn-primary container p-3 fw-bold mt-4">Entrar</button>
        <button type="button"
            class="btn border border-gray-500 d-flex align-content-center gap-2 container justify-content-center p-3 mt-4">
            <img src="./assets/img/google.png" style="width: 22px;" alt="">
            <span class="fw-bold">Faça Login com o Google</span>
        </button>
    </form>
</article>