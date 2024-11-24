<!-- resources/views/journaling.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journaling Form</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

    <style>
        .journal-textarea {
            width: 100%;
            height: 400px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            font-family: 'Courier New', Courier, monospace;
            font-size: 16px;
            padding: 15px;
            line-height: 1.6;
            border-radius: 5px;
            resize: none;
            box-sizing: border-box;
            white-space: pre-wrap;
        }

        /* Optionally, add horizontal lines for a more journal-like feel */
        .journal-textarea::before {
            content: "________________________________________";
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 18px;
            color: #ddd;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h4 class="center-align">Journalisation Quotidienne</h4>

        <form action="{{ route('journaling.store') }}" method="POST">
                        @csrf

            <div class="input-field">
            <label for="text">Écrivez votre journal :</label>
                <textarea name="text" id="text" class="journal-textarea" placeholder="Exprimez vos sentiments..."></textarea>
              
            </div>

            <button type="submit" class="btn waves-effect waves-light">Soumettre</button>
        </form>
    </div>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>



