<?php
if(gettype($data)  == 'array') : ?>
    <?php foreach ($data as $key=>$value) : ?>
        <br>
        <?=$key .' ' ?>
        <?=print_r($value) ?>
    <?php endforeach;?>
<?php endif; ?>
