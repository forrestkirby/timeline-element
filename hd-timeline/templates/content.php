<?php

/* Herzog Dupont for YOOtheme Pro Copyright (C) 2016�2022 YOOtheme GmbH, 2019�2022 Thomas Weidlich GNU GPL v3 */

if (count($children) > 1) : ?>
<ul>
    <?php foreach ($children as $child) : ?>
    <li>

        <?= $builder->render($child, ['element' => $props]) ?>

    </li>
    <?php endforeach ?>
</ul>
<?php elseif (count($children) == 1) : ?>
<div>

    <?= $builder->render($children[0], ['element' => $props]) ?>

</div>
<?php endif ?>
