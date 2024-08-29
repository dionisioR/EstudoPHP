<form name="post" action="./" method="<?= $form->method; ?>" enctype="multipart/form-data">
    <p>
        <a href="./" title="atualizar">Atualizar</a>
    </p>
    <div>
        <label for="name">Nome:</label>
        <input type="text" name="name"  value="<?= $form->nome; ?>" placeholder="Nome:" class="form-control w-25">

        <label for="email">E-mail:</label>
        <input type="email" name="email"  value="<?= $form->mail; ?>" placeholder="E-mail:" class="form-control w-25">
    </div>
    <button class="btn btn-primary">Enviar agora!</button>
</form>