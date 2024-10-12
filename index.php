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
            height: fit-content;
            position: absolute;
            top: 0;
            right: -250px;
            transition: 0.4s ease-in-out;
            text-align: left;
            padding: 1.2em 0;
            background-color: rgba(187, 238, 255, 0.6);
        }

        .nav-container #menu li a {
            color: #bbeeff;
            text-decoration: none;
            font-weight: 600;
            padding: 5.4% 0.9rem;
            display: block;
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

        /** BANNER / HERO SECTION */
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

        @media only screen and (min-width: 768px) {

            /**NAV RESPONSIVENESS */
            .nav-container .checkbox {
                display: none;
            }

            nav {
                background: transparent;
                display: block;
                padding: 0;
            }

            .nav-container #menu ul {
                width: 100%;
                height: fit-content;
                position: sticky;
                background-color: transparent;
                display: flex;
                justify-content: end;
                padding-right: 1rem;
            }

            .nav-container #menu li {
                position: relative;
            }

            .nav-container #menu li a {
                font-weight: 500;
                padding: 0 0.7rem;
            }

            .nav-container #menu li:hover a::after{
                content: "";
                display: block;
                background-color: #3aea;
                width: 45%;
                height: 75%;
                border-radius: 50% 25%;
                position: absolute;
                right: 1.6em;
                top: .2em;
                z-index: -1;
            }

            nav i.fa-bars,
            nav i.fa-x {
                display: none;
            }

            /**BANNER / HERO RESPONSIVENESS */


        }
    </style>
</head>

<body>
    <?php include 'partials/components.php'; ?>

</body>

</html>