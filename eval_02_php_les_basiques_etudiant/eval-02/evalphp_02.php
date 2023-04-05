<?php
    require('functions.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Calculatrice PHP</title>
</head>

<body class="bg-light">
    <div class="container mb-5">
        <h1 class="text-center mb-5">Calculatrice PHP</h1>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="" method="POST" class="grid g-3">
                    <div class="mb-3">
                        <label class="form-label visually-hidden" for="result">Résultat</label>
                        <input name="result" type="text" class="form-control fs-1 text-end" readonly value="">
                    </div>
                    <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-between">
                        <input type="submit" name="memory" class="btn-check" name="memory" id="memory" autocomplete="off">
                        <label class="btn btn-success flex-grow-1" for="memory">m +/-</label>

                        <input type="radio" class="btn-check" name="operator" id="multiply" value="multiply" autocomplete="off">
                        <label class="btn btn-outline-secondary flex-grow-1" for="multiply">x</label>

                        <input type="radio" class="btn-check" name="operator" id="divide" value="divide" autocomplete="off">
                        <label class="btn btn-outline-secondary flex-grow-1" for="divide">/</label>

                        <input type="radio" class="btn-check" name="operator" id="minus" autocomplete="off" value="minus">
                        <label class="btn btn-outline-secondary flex-grow-1" for="minus">-</label>

                        <input type="radio" class="btn-check" name="operator" id="add" autocomplete="off" value="add">
                        <label class="btn btn-outline-secondary flex-grow-1" for="add">+</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="first_number" id="first_number" type="text" class="form-control text-end" value="" placeholder="nombre">
                        <label for="first_number">premier nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="second_number" type="text" class="form-control text-end" name="second_number" value="" placeholder="nombre">
                        <label for="second_number">second nombre</label>
                    </div>
                    <div class="grid gap-3 d-md-flex justify-content-evenly">
                        <button name="clear" class="btn btn-lg flex-grow-1 btn-secondary" type="submit">AC</button>
                        <button name="calculate" class="btn btn-lg flex-grow-1 btn-secondary" type="submit">=</button>
                    </div>
                </form>
            </div>
        </div>

        <?php if (isset($errormsg)) : ?>
            <div class="modal fade" id="errormsg" tabindex="-1" aria-labelledby="errormsgLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body alert alert-danger">
                            <p><?= $errormsg ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <script async src="assets/js/main.js"></script>

</body>

</html>