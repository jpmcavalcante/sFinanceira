
<?php if (!empty($error)): ;?>
<div class="callout callout-danger">
    <p><?php echo $error;?></p>
</div>
<?php endif;?>

        <form action="<?php echo BASE_URL;?>login/index_action/" method="post">
            <input type="text"  name="email" placeholder="email">
            <input type="password"  name="senha" placeholder="senha">
            <button type="submit">Entrar</button>
        </form>



