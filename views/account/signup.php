<?php $this->setLayoutVar('title', 'アカウント登録') ?>

<h2>アカウント登録</h2>

<form action="<?php echo $base_url; ?>/account/register" method="post">
    <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>">

    <?php if(isset($errors) && count($errors) > 0): ?>
    <?php echo $this->render('errors', array('errors' => $errors)); ?>
    <?php endif; ?>

    <table>
        <tbody>
            <tr>
                <th>ユーザー登録</th>
                <td>
                    <input type="text" name="user_name" value="<?php echo $this->escape($user_name); ?>">
                </td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td>
                    <input type="password" name="password" value="<?php echo $this->escape($password); ?>">
                </td>
            </tr>
        </tbody>
    </table>

    <p>
        <input type="submit" value="登録">
    </p>
</form>