<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php if(count($errors)>0): ?>
        <div classs="error">
            <?php foreach ($errors as $error) : ?>
            <p><?php echo $error?></p>
            <?php endforeach ?>
        </div>
        <?php endif?>
    </body>
</html>
