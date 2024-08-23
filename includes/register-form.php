<article class="auth-section container px-4">
    <h1 class="fw-bolder title">Criar conta</h1>
    <button type="button"
        class="btn border border-gray-500 d-flex align-content-center gap-2 container justify-content-center p-3">
        <img src="./assets/img/google.png" style="width: 22px;" alt="">
        <span class="fw-bold">Faça Login com o Google</span>
    </button>
    <div class="d-flex align-items-center gap-4">
        <hr class="w-100 d-inline-block" /><span>ou</span>
        <hr class="d-inline-block w-100" />
    </div>
    <form onsubmit="onsubmit="handleRegister()"" method="POST" id="registerForm">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Nome completo</label>
            <input type="text" required class="form-control p-3" id="name" name="name"
                placeholder="Digite seu nome completo">
            <p class="ms-3 mt-1" id="nameErrorMsg"></p>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Email</label>
            <input type="email" required class="form-control p-3" id="email" name="email"
                placeholder="Digite seu email">
            <p class="ms-3 mt-1" id="emailErrorMsg"></p>
            </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Senha</label>
            <input type="password" required class="form-control p-3" id="password" name="password"
                placeholder="Crie uma senha">
            <p class="ms-3 mt-1" id="passErrorMsg"></p>
        </div>
        <button type="submit" class="btn btn-primary container p-3 fw-bold mt-4">Criar conta</button>
    </form>
    <p class="text-center mt-4 fw-bold">Já tem uma conta?
        <a href="?page=login" class="text-decoration-underline">Faça login</a>
    </p>
</article>
<script src="/assets/js/register.js"></script>
