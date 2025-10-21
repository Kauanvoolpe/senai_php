<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Conecta Jovem Maringá</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Font Awesome CDN oficial -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body style="background: linear-gradient(135deg, #e0e7ff 0%, #f8fafc 100%); min-height: 100vh;">
        <div style="position: relative; min-height: 100vh;">
            <img src="http://www3.maringa.pr.gov.br/sistema/imagens/gd_198aab600e58.jpg" style="position: absolute; top: 24px; left: 24px; max-width: 120px; width: 100%; border-radius: 12px; box-shadow: 0 2px 8px #0001; z-index: 10;">
            <div class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
                <img src="https://web.celepar.pr.gov.br/drupal/images/logo_parana_400x173.png" class="mb-3" style="max-width: 300px; width: 100%;">
                <h2 class="mb-2 fw-bold text-primary" style="letter-spacing: 1px;">Conecta Jovem Maringá</h2>
                <hr class="w-50 mb-4" style="border-top: 2px solid #0d6efd;">
                <div class="card shadow-lg p-0" style="max-width: 370px; width: 100%; border-radius: 18px;">
                    <div class="card-header text-center bg-primary text-white" style="border-radius: 18px 18px 0 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                        <span class="ms-2 fs-5">LOGIN</span>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label"><b>Usuário</b></label>
                                <input class="form-control" type="text" name="login" placeholder="Digite seu usuário" required/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Senha</b></label>
                                <input class="form-control" type="password" name="senha" placeholder="Digite sua senha" required/>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-bold align-items-center d-flex justify-content-center gap-2">
                                    <span>Entrar</span>
                                    <i class="fa-solid fa-arrow-right fa-beat fa-2xs" style="vertical-align: middle; line-height: 1;"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>