<style>
    .banner {
        position: relative;
    }

    .overlay {
        width: 100%;
        height: 100%;
        background-color: black;
        opacity: .56;
        position: absolute;
        top: 0;
    }

    .desc {
        position: absolute;
        top: 0;
        width: 35rem;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 4px;
        color: rgba(215, 235, 245);
        padding-left: 1em;
        font-size: 2em;
    }

    .desc span {
        padding: 3px 6.7px;
        color: #4ea;
        background: #3aea;
        font-size: .8em;
        border-radius: 2px;
    }

    .service {
        display: none;
    }

    .service.active {
        display: inline-block;
        text-align: end;
    }
</style>

<?php
$services = ['Software Developer', 'Web Designer', 'UIUX Designer', 'Writer', 'Mentor'];
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

    setInterval(showNextService, 3000);
    services[currentService].classList.add('active');
</script>