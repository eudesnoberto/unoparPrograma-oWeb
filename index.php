<?php include('layouts/header.php'); ?>

<div class="container">
    <h2>Descubra seu Signo Zodiacal</h2>
    <p class="text-center text-muted">Informe sua data de nascimento para descobrir seu signo e características</p>
    
    <form id="signo-form" method="POST" action="show_zodiac_sign.php">
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>
        <button type="submit" class="btn btn-primary">Consultar Signo</button>
    </form>
</div>

</body>
</html>
