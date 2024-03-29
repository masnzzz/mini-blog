<?php $this->setLayoutVar('title', 'アカウント登録') ?>

<h2>ホーム</h2>

<form action="<?php echo $base_url; ?>/status/register" method="post">
    <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>">

    <?php if(isset($errors) && count($errors) > 0): ?>
    <?php echo $this->render('errors', array('errors' => $errors)); ?>
    <?php endif; ?>

    <textarea name="body" rows="2" cols="60"><?php echo $this->escape($body); ?></textarea>
        <p>
            <input type="submit" value="発言">
        </p>
</form>

<div id="statuses">
    <?php foreach ($statuses as $status): ?>
    <div class="status">
        <div class="status_content">
            <?php echo $this->escape($status['user_name']); ?>
            <?php echo $this->escape($status['body']); ?>
        </div>
        <div>
            <?php echo $this->escape($status['created_at']); ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>