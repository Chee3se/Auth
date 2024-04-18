<?php if(isset($_SESSION['user'])) : ?>
    <p> Hello, <?= $_SESSION['user'] ?>!<p>
<?php else : ?>
    <p>Hello!</p>
<?php endif; ?>