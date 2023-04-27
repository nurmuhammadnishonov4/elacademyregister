<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");

        /* reset */
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            /* basic color palette */
            --white-1: hsl(0, 0%, 100%);
            --black-1: hsl(0, 0%, 0%);
            --black-2: hsl(0, 0%, 50%);
            --red-1: hsl(0, 50%, 0%);
            --red-2: hsl(0, 50%, 50%);
            /* fonts */
            --ft-fy-fallback-1: sans-serif;
            --ft-fy-1: "Poppins", var(--ft-fy-fallback-1);
            --ft-se-400: 1.05rem;
            --ft-se-500: 2rem;
            --ft-se-600: 6rem;
        }

        /* components */
        .page {
            --__title_ft-se: clamp(var(--ft-se-500), 15vw, var(--ft-se-600));
            color: var(--black-1);
            display: grid;
            font-family: var(--ft-fy-1);
            font-size: var(--ft-se-400);
            background-color: var(--white-1);
            min-height: 100vh;
            place-items: center;
        }

        .title {
            color: var(--__title_cr, var(--black-1));
            font-family: var(--__title_ft-fy, var(--ft-fy-1));
            font-size: var(--__title_ft-se, var(--ft-se-500));
            position: relative;
        }

        .title::before {
            color: var(--__title__bef_cr, var(--red-2));
            width: var(--__title__bef_wh, 45%);
            position: absolute;
            content: attr(data-text);
            overflow: hidden;
            border-right: 2px solid;
            white-space: nowrap;
            animation: anim 8s linear infinite;
        }

        @keyframes anim {

            0%,
            10%,
            100% {
                width: 0%;
                color: var(--red-1);
            }

            40%,
            90% {
                width: 100%;
                color: var(--red-2);
            }
        }
    </style>
    <title>Document</title>
</head>

<body class="page">
    <h1 class="title" data-text="Rahmat">Rahmat</h1>
</body>

</html>