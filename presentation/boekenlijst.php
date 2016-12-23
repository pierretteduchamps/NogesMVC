<!DOCTYPE HTML>

<!--presentation/boekenlijst.php-->
<html>
    <head>
        <meta charset ="utf-8">
        <title>Boekenlijst</title>
        <style>
            table{
                border-collapse:collapse;
            }
            td,th{
                border:1px solid black;
                padding:3px;
            }
            th{
                background-color: "grey";
            }
        </style>
    </head>
    <body>
        <h2>Boekenlijst</h2>
        <table>
            <tr>
                <th>Titel</th>
                <th>Genre</th>           
            </tr>
            <?php
                foreach ($boekenlijst as $boek){
                    ?>
            <tr>
                <td>
                    <?php print ($boek->getTitel());?>
                </td>
                <td>
                    <?php print ($boek->getGenre()->getGenreNaam());?>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>

