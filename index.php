<?php
include_once "./functions.php";
session_start();

if (isset($_GET["lunghezza"]) && !empty($_GET["lunghezza"])) {
    $_SESSION["password"] = generatePassword(
        length: $_GET["lunghezza"],
        use_uppercase: isset($_GET["maiuscole"]),
        use_lowercase: isset($_GET["minuscole"]),
        use_numbers: isset($_GET["numeri"]),
        use_symbols: isset($_GET["simboli"])
    );
    header("Location: ./result.php");
    exit;

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container mt-3  ">

        <h1 class="text-center">Generatore di Password</h1>
        <h3 class="text-center"> Genera una password sicurissima!</h3>
        <form action="index.php" method="get">
            <div>
                <label for="lunghezza">Lunghezza password</label>
                <input type="number" min="1" id="lunghezza" name="lunghezza">
            </div>
            <div class="d-flex gap-3">
                <label>Consenti caratteri uguali?</label>
                <div>


                    <div>
                        <input type="radio" id="caratteri_uguali_si" name="caratteri_uguali" value="true">
                        <label for="caratteri_uguali_si">Sì</label>
                    </div>
                    <div>
                        <input type="radio" id="caratteri_uguali_no" name="caratteri_uguali" value="false">
                        <label for="caratteri_uguali_no">No</label>
                    </div>
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="true" id="maiuscole" name="maiuscole">
                <label class="form-check-label" for="maiuscole">
                    Lettere maiuscole
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="true" id="minuscole" name="minuscole">
                <label class="form-check-label" for="minuscole">
                    Lettere minuscole
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="true" id="numeri" name="numeri">
                <label class="form-check-label" for="numeri">
                    Numeri
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="true" id="simboli" name="simboli">
                <label class="form-check-label" for="simboli">
                    Simboli
                </label>
            </div>
            <button class="btn btn-primary" type="submit"> Invia</button>
            <button class="btn btn-secondary" type="reset"> Annulla</button>

        </form>
    </div>


</body>

</html>