<?php require "vista/layouts/header.php"; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4 mt-5 mb-5">
            <form action="<?php urlsite ?>?page=loginauth" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" name="txtUsuario" placeholder="Usuario" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="txtUsuario" placeholder="Usuario" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">INGRESAR</button>
            </form>
            <?php if(isset($_GET['msg'])): ?>
                <div class="alert alert-danger mt-3">
                    <?php
                        echo htmlspecialchars($_GET['msg']);
                    ?>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>

<?php require "vista/layouts/footer.php"; ?>