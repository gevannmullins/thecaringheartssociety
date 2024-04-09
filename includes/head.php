<!-- <meta charset="utf-8"> -->
<!-- <meta name="description" content=""> -->
<!-- <meta name="Saquib" content="Blade"> -->
<title>The Caring Hearts Society</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      /* height: 120px; */
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #000000;
      padding: 25px;
      color: #ffffff;
    }

    .carousel-caption {
      right: 0;
      left: 0;
      padding-bottom: 30px;
      position: absolute;
      background-color: rgba(0, 0, 0, 0.3);
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 10;
      padding-top: 20px;
      padding-bottom: 20px;
      color: #fff;
      text-align: center;
      text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
      display: grid;
      align-items: center;
    }

    .carousel-inner img {
      width: 90%;
      /* Set width to 100% */
      margin: auto;
      min-height: 200px;
    }

    
    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none;
      }
    }

    @import url("https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap");

    *,
    *:after,
    *:before {
      box-sizing: border-box;
    }

    :root {
      --header-outer-height: 110px;
      --header-inner-height: 70px;
      --header-height-difference: calc(var(--header-outer-height) - var(--header-inner-height));
      --header-bg: #000000;
    }

    body {
      font-family: "DM Sans", sans-serif;
      background-color: #f2f5f7;
      line-height: 1.5;
      min-height: 100vh;
      position: relative;
    }

    .responsive-wrapper {
      width: 90%;
      max-width: 1280px;
      margin-left: auto;
      margin-right: auto;
    }

    /* Sticky header */
    .header-outer {
      /* Make it stick */
      height: var(--header-outer-height);
      position: sticky;
      top: calc(var(--header-height-difference) * -1);
      /* Multiply by -1 to get a negative value */
      display: flex;
      align-items: center;

      /* Other */
      background-color: var(--header-bg);
      box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
      z-index: 9999999999999999999999999999999999999999999999999999999999999999999;
    }

    .header-inner {
      /* Make it stick */
      height: var(--header-inner-height);
      position: sticky;
      top: 0;

      /* Other */
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .header-logo {
      display: block;
      height: calc(var(--header-inner-height));
    }

    /* Styling of other elements */
    .header-logo img {
      display: inline-flex;
      /* height: calc(var(--header-inner-height) - 10px); */
      height: calc(var(--header-inner-height));
      transition: 0.2s;

    }

    .header-logo h3 {
      display: inline-flex;
      /* height: calc(var(--header-inner-height) - 10px); */
      /* height: calc(var(--header-inner-height)); */
      font-weight: 600;
      font-size: 30;
      color: rgb(189, 0, 0);
      transition: 0.2s;

    }

    .header-navigation {
      display: flex;
      flex-wrap: wrap;
    }

    .header-navigation a,
    .header-navigation button {
      /* font-size: 1.125rem; */
      font-size: 18;
      color: inherit;
      margin-left: 1.75rem;
      position: relative;
      font-weight: 500;
    }

    .header-navigation a {
      display: none;
      /* font-size: 1.125rem; */
      font-size: 18;
      font-weight: 800;
      /* color: inherit; */
      color: rgb(189, 0, 0);
      text-decoration: none;
    }

    .header-navigation button {
      border: 0;
      background-color: transparent;
      padding: 0;
    }

    .header-navigation a:hover:after,
    .header-navigation button:hover:after {
      transform: scalex(1);
    }

    .header-navigation a:after,
    .header-navigation button:after {
      transition: 0.25s ease;
      content: "";
      display: block;
      width: 100%;
      height: 2px;
      background-color: currentcolor;
      transform: scalex(0);
      position: absolute;
      bottom: -2px;
      left: 0;
    }

    .main {
      margin-top: 3rem;
    }

    .widget {
      width: 100%;
      /* max-width: 600px; */
      max-width: 1280px;
      border-radius: 8px;
      box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.1);
      background-color: #fff;
      padding: 2.5rem;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 2rem;
      font-size: 1.125rem;
    }

    .widget>*+* {
      margin-top: 1.25em;
    }

    .widget h2 {
      font-size: 1.5rem;
      font-weight: 700;
      line-height: 1.25;
    }

    .widget code {
      display: inline-block;
      padding: 0.125em 0.25em;
      border-radius: 2px;
      background-color: #bee5d3;
    }

    .widget strong {
      font-weight: 700;
    }

    @media (max-width: 600px) {
      .header-logo h3 {
        display: none;
      }

    }

    @media (min-width: 800px) {
      .header-navigation a {
        display: inline-block;
      }

      .header-navigation button {
        display: none;
      }

    }
  </style>
