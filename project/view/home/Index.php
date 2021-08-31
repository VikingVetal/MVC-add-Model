<?php
if(gettype($data)  == 'array') : ?>
    <?php foreach ($data as $row) : ?>
        <?php foreach ($row as $key=>$value) : ?>

            <?=$key .' '.$value ?>
            <br>

        <?php endforeach;?>
    <?php endforeach;?>
<?php endif; ?>