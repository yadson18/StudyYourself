<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-success" role="alert" onclick="this.classList.add('hidden');">
	<span class="fa fa-check-circle" aria-hidden="true"></span>
	<?= $message ?>
</div>
