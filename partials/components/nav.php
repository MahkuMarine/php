<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Courier New', Courier, monospace;
    }

    .nav-container {
        position: relative;
    }

    .nav-container .checkbox {
        position: absolute;
        top: 1.5em;
        right: 1.5em;
        height: 5em;
        width: 5em;
        opacity: 0;
        cursor: pointer;
        z-index: 5;
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
        width: 20em;
        height: 28.5em;
        position: absolute;
        top: 0;
        right: -150em;
        transition: .4s ease-in-out;
        text-align: left;
        padding: 1.6em;
        background-color: rgba(187,238,255,.6);
    }
    
    .nav-container #menu li:hover {
        position: relative;
    }

    .nav-container #menu li a {
        color: #bbeeff;
        text-decoration: none;
        font-size: 2.5em;
        font-weight: 600;
        padding: .53em .9rem;
        display: block;
    }

    .nav-container #menu li:hover a::after {
        content: '';
        display: block;
        width: 35%;
        height: 55%;
        border-radius: 50% 25%;
        background-color: #3aea;
        position: absolute;
        right: 4em;
        top: .6em;
        z-index: -1;
    }

    .nav-container .checkbox:checked ~ #menu ul {
        right: 0;
    }

    .nav-container .checkbox:checked ~ #menu i.fa-bars {
        visibility: hidden;
    }

    .nav-container .checkbox:checked ~ #menu i.fa-x {
        visibility: visible;
    }

    nav i.fa-bars,
    nav i.fa-x {
        font-size: 2.6em;
        color: rgba(215, 235, 245);
        position: absolute;
        right: .86em;
        top: .8em;
    }

    nav i.fa-x {
        visibility: hidden;
    }
</style>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<div class="nav-container">
    <input type="checkbox" name="check" class="checkbox" id="menu-input">
    <label for="menu-input" id="menu">
        <nav>
            <ul>
                <li><a href="" class="active">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Blog</a></li>
            </ul>

            <i class="fa-solid fa-bars"></i>
            <i class="fa-solid fa-x"></i>
        </nav>
    </label>
</div>