<?php
$services = ['Software Developer', 'Web Designer', 'UIUX Designer', 'Writer', 'Mentor', 'Teacher'];
?>

<div class="banner">
    <div class="overlay"></div>
    <img src="resources/images/mahku.jpg" width="100%" alt="">
    <div class="desc">
        <h1>Michael.C Ani
            <?php foreach ($services as $index => $service): ?>
                <h2 class="service" id="service-<?= $index; ?>">
                    <span><?= $service; ?></span>
                </h2>
            <?php endforeach; ?>
        </h1>
    </div>

</div>

<script>
    let currentService = 0;
    const services = document.querySelectorAll('.service');

    function showNextService() {
        services[currentService].classList.remove('active');
        currentService = (currentService + 1) % services.length;
        services[currentService].classList.add('active');
    }

    setInterval(showNextService, 2000);
    services[currentService].classList.add('active');
</script>