<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
    <?php
    session_start();
    if ($_SESSION['log']== false) 
    {
        $_SESSION['status'] = "Devi fare il login per accedere a questa pagina";
        header("Location: ..\index.php");
    }
    ?>
    <body>
        
        <div class="row">
            <div class="card mx-auto my-5" style="width: 18rem; border-color: blue; border-style: solid;">
                <div class="card-body text-center">
                <h5 class="card-title">Seleziona i campi da visualizzare</h5>
                <form method="POST" action="mostra_film.php">
                    <table class="mx-auto text-center">
                        <p>Seleziona almeno un campo</p>
                        <tr>
                            <td>CodFilm</td>
                            <td><input type="checkbox" name="CodFilm"></td>
                        </tr>
                        <tr>
                            <td>Titolo</td>
                            <td><input type="checkbox" name="Titolo"></td>
                        </tr>
                        <tr>
                            <td>AnnoProduzione</td>
                            <td><input type="checkbox" name="AnnoProduzione"></td>
                        </tr>
                        <tr>
                            <td>Nazionalita</td>
                            <td><input type="checkbox"  name="Nazionalita" ></td>
                        </tr>
                        <tr>
                            <td>Regista</td>
                            <td><input type="checkbox" name="Regista" ></td>
                        </tr>
                        <tr>
                            <td>Genere</td>
                            <td><input type="checkbox" name="Genere" ></td>
                        </tr>
                    </table>
                    <br>
                    <input type="submit" name="submit" id="invio" class="btn btn-primary" value="mostra tabella modificata">
                </form>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    document.getElementById("invio").addEventListener('click', () => {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]')
        let checked = false;
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                checked = true;
            }
        });

        if (!checked) {
            alert("Seleziona almeno una checkbox");
            event.preventDefault(); //evita l'invio del form
        }
    });
    
</script>