<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Composer</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href="styles/style.css">
</head>
<body>
    <main>
        <?php require "vendor/autoload.php"; ?>

        <div>
            <?php $email = new app\classes\Email; ?>
            <div> <?php echo $email->send();?> <br><br></div>

            <?php $produto = new app\models\Produto; ?>
            <div> <?php echo $produto->criar(); ?> <br><br></div>

            <?php $servico = new asw\services\Search; ?>
            <div> <?php echo $servico->search(); ?> <br><br></div>

            <?php $registro = new asw\jobs\Register; ?>
            <div> <?php add($registro->register()); ?> </div>
        </div>
    </main>
</body>
</html>