<article class="auth-section container px-4">
    <h1 class="fw-bolder">Criar conta</h1>
    <button type="button"
        class="btn border border-gray-500 d-flex align-content-center gap-2 container justify-content-center p-3">
        <img src="./assets/img/google.png" style="width: 22px;" alt="">
        <span class="fw-bold">Faça Login com o Google</span>
    </button>
    <div class="d-flex align-items-center gap-4">
        <hr class="w-100 d-inline-block" /><span>ou</span>
        <hr class="d-inline-block w-100" />
    </div>
    <form action="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Nome completo</label>
            <input type="email" required class="form-control p-3" id="exampleFormControlInput1"
                placeholder="Digite seu nome completo">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Email</label>
            <input type="email" required class="form-control p-3" id="exampleFormControlInput1"
                placeholder="Digite seu email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Senha</label>
            <input type="email" required class="form-control p-3" id="exampleFormControlInput1"
                placeholder="Crie uma senha">
        </div>
        <button type="button" class="btn btn-primary container p-3 fw-bold mt-4">Criar conta</button>
    </form>
    <p class="text-center mt-4 fw-bold">Já tem uma conta?
        <a href="?page=login" class="text-decoration-underline">Faça login</a>
    </p>
</article>