<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<title>BarberTech</title>
</head>

<body class="bg-primary-subtle">
    <nav class="navbar navbar-expand-lg bg-body-tertiary primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">BarberTech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?interface=cadastro">💻 Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?interface=agendamento">📅 Agendamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?interface=gerenciamento">👨‍💼 Gerenciamento</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <?php 
            $interface = isset($_GET['interface']) ? $_GET['interface']: '';
            switch($interface) {
                case 'cadastro':
                    include('cadastro.php');
                    break;
                case 'agendamento':
                    include('agendamento.php');
                    break;
                case 'gerenciamento':
                    include('gerenciamento.php');
                    break;
                default:
                    include('listarAgendamento.php');
                    break;
            }
        ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>