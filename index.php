<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michael. C Ani</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css" crossorigin="anonymous" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Courier New", Courier, monospace;
        }

        /**NAVIGATION BAR */
        .nav-container {
            position: relative;
        }

        .nav-container .checkbox {
            position: absolute;
            top: 1.5em;
            right: 1.5em;
            height: 2em;
            width: 2em;
            opacity: 0;
            z-index: 5;
        }

        nav i.fa-bars,
        nav i.fa-x {
            font-size: 1.4em;
            color: rgba(215, 235, 245);
            position: absolute;
            right: 1.05em;
            top: 1.1em;
            cursor: pointer;
        }

        nav i.fa-x {
            visibility: hidden;
        }

        nav {
            position: absolute;
            top: 0;
            z-index: 1000;
            padding-top: 8px;
            text-align: center;
            background: rgba(0, 0, 0, 0.2);
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .nav-container #menu ul {
            list-style: none;
            width: 30%;
            height: 22vh;
            position: absolute;
            top: 0;
            right: -250px;
            transition: 0.4s ease-in-out;
            text-align: left;
            padding: 1em 0;
            /* background-color: rgba(187, 238, 255, 0.6); */
        }

        .nav-container #menu li {
            position: relative;
        }

        .nav-container #menu li a {
            color: #bbeeff;
            text-decoration: none;
            font-size: 1em;
            font-weight: 600;
            padding: 5.4% 0.9rem;
            display: block;
        }

        .nav-container #menu li:hover a::after {
            content: "";
            display: block;
            width: 35%;
            height: 55%;
            border-radius: 50% 25%;
            background-color: #3aea;
            position: absolute;
            right: 4em;
            top: 0.6em;
            z-index: -1;
        }

        .nav-container .checkbox:checked~#menu ul {
            right: 0;
        }

        .nav-container .checkbox:checked~#menu i.fa-bars {
            visibility: hidden;
        }

        .nav-container .checkbox:checked~#menu i.fa-x {
            visibility: visible;
        }

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
            width: 70%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: rgba(215, 235, 245);
            padding-left: 1em;
        }

        .desc span {
            padding: 3px 6.7px;
            color: #4ea;
            background: #3aea;
            font-size: .5em;
            border-radius: 2px;
        }

        .service {
            display: none;
        }

        .service.active {
            display: inline-block;
        }

        @media only screen and (min-width: 769px) {
            .nav-container .checkbox {
                display: none;
            }

            nav {
                position: absolute;
                top: 0;
                background: transparent;
                display: block;
            }

            .nav-container #menu ul {
                width: 100%;
                height: 0;
                position: static;
                background-color: transparent;
                display: flex;
                justify-content: end;
            }

            .nav-container #menu li a {
                color: #bbeeff;
                text-decoration: none;
                font-size: 1.35em;
                font-weight: 500;
                display: block;
            }

            .nav-container #menu li:hover a::after {
                content: "";
                display: block;
                width: 35%;
                height: 55%;
                border-radius: 50% 25%;
                background-color: #3aea;
                position: static;
                right: 0;
                top: 0;
                z-index: 1000;
            }

            nav i.fa-bars,
            nav i.fa-x {
                display: none;
            }
        }
    </style>
</head>

<body>
    <?php include 'partials/components.php'; ?>

</body>

</html>