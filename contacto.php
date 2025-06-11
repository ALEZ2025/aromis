<?php include 'includes/header.php'; ?>

    <div class="container my-5">
        <h2 class="text-center mb-4">Contáctanos</h2>

        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
            <div class="alert alert-success text-center">¡Tu mensaje ha sido enviado exitosamente!</div>
        <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
            <div class="alert alert-danger text-center">Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente.</div>
        <?php endif; ?>

        <form action="enviar-correo.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea name="mensaje" rows="5" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
        </form>

        <hr>

        <h3 class="mt-5">Nuestra Ubicación</h3>
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3995.766812286953!2d-90.50741558525934!3d14.59192138617166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTR%C2%B0MzU'3MS.LC!5e0!3m2!1ses!2sgt!4v1620000000000!5m2!1ses!2sgt"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

<?php include 'includes/footer.php'; ?>