<?php

/* Herzog Dupont Copyright (C) 2016�2021 YOOtheme GmbH, 2019�2021 Thomas Weidlich GNU GPL v3 */

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
