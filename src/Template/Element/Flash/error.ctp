<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-danger" role="alert" onclick="this.classList.add('hidden');">
	<span class="fa fa-exclamation-circle" aria-hidden="true"></span>
	<?= $message ?>
</div>
