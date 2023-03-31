<html>
    <head>
        <title>Zdjęcia użytkowników</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center; vertical-align: middle;
        }
        table {
            width: 100%;
        }
        img {
            max-width: 300px;
            height: auto;
        }
        textarea {
            width: 80%;
        }
    </style>
    </head>
    
    <body>
        <header>
            <h1>Zdjęcia użytkowników:</h1>
        </header>
        <main>

            <h2>Prześlij swoje zdjęcie</h2>
            <form method="post" enctype="multipart/form-data">
                <input type="file" name="file" required="">
                <button type="submit" name="submit">Prześlij</button>
            </form>
            <br>

            <table>
                <tbody><tr><th>Owner</th>
                <th>Image</th>
                <th>Comments</th>
                                    </tr><tr class="image">
                        <td>user1</td>
                        <td><img src="uploads/46.png"></td>
                        <td>
                            <ul class="comments">
                                                            </ul>
                            <textarea></textarea><br><button>Add comment</button>
                        </td>
                        <!--<form action="upload.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="image">
                            <input type="text" name="comment" required>
                            <input type="hidden" name="image_id" value="46">
                            <input type="submit" name="submit" value="Prześlij">
                        </form>-->
                    </tr>
                                    <tr class="image">
                        <td>user1</td>
                        <td><img src="uploads/45.png"></td>
                        <td>
                            <ul class="comments">
                                                            </ul>
                            <textarea></textarea><br><button>Add comment</button>
                        </td>
                        <!--<form action="upload.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="image">
                            <input type="text" name="comment" required>
                            <input type="hidden" name="image_id" value="45">
                            <input type="submit" name="submit" value="Prześlij">
                        </form>-->
                    </tr>
                            </tbody></table>
        </main>
    

        </body></html>