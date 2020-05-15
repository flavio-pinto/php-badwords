<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php 
    /*
    - Creare una variabile con un paragrafo di testo.
    - Visualizzare a schermo il paragrafo
    - Visualizzare a schermo la relativa lunghezza del paragrafo
    - Sostituire tutte le ricorrenze, nel paragrafo creato, della badword passata in GET (query string) con tre * (asterschi).
    */ 
    ?>
    <?php $poesia = 'Nel campo mezzo grigio e mezzo nero<br>
    resta un aratro senza buoi che pare<br>
    dimenticato, tra il vapor leggero.<br><br>

    E cadenzato dalla gora viene<br>
    lo sciabordare delle lavandare<br>
    con tonfi spessi e lunghe cantilene:<br><br>

    Il vento soffia e nevica la frasca,<br>
    e tu non torni ancora al tuo paese,<br>
    quando partisti, come son rimasta,<br>
    come l’aratro in mezzo alla maggese.';

    $bad_word = $_GET["badword"];
    $replaced = str_replace($bad_word, '***', $poesia);
    ?>

    <h1>Giovanni Pascoli - Lavandare</h1>
    <p><?php echo $replaced ?></p>
    
    <h3>Lunghezza poesia: <?php echo strlen($poesia) . ' - Stringa di testo che non serve a niente, solo per provare a concatenare' ?></h3>
</body>
</html>