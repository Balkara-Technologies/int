<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/desktop.css">
    <link rel="stylesheet" href="../../css/orientation.css">
    <link rel="stylesheet" href="../../css/ipad.css">
    <link rel="stylesheet" href="../../css/mobile.css">
 <!-- Google tag (gtag.js) -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-5SNHPD0QJR"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-5SNHPD0QJR');
        </script>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        th, td {
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .container {
            max-width: 1200px;
            margin: auto;
        } */
    </style>
</head>
<body>
<?php include "../../header.php"  ?>
    <div class="container">
        <h1>CSS Properties Documentation</h1>
        <table>
            <tr>
                <th>Category</th>
                <th>CSS Properties</th>
            </tr>
            <tr>
                <td>Basic Structure</td>
                <td>color, background-color, font-family, font-size, font-style, font-weight</td>
            </tr>
            <tr>
                <td>Text Styling</td>
                <td>text-align, text-decoration, text-transform, line-height, letter-spacing</td>
            </tr>
            <tr>
                <td>Box Model</td>
                <td>margin, padding, border, width, height, max-width, min-width, max-height, min-height, box-sizing</td>
            </tr>
            <tr>
                <td>Background</td>
                <td>background, background-image, background-size, background-repeat, background-position, background-attachment</td>
            </tr>
            <tr>
                <td>Borders</td>
                <td>border-style, border-width, border-color, border-radius</td>
            </tr>
            <tr>
                <td>Layout</td>
                <td>display, position, top, bottom, left, right, z-index, float, clear, overflow, visibility</td>
            </tr>
            <tr>
                <td>Flexbox</td>
                <td>display, flex-direction, justify-content, align-items, align-content, flex-wrap, flex-grow, flex-shrink, flex-basis, order</td>
            </tr>
            <tr>
                <td>Grid</td>
                <td>display, grid-template-columns, grid-template-rows, grid-template-areas, grid-column-gap, grid-row-gap, grid-column, grid-row, grid-area, justify-items, align-items, justify-content, align-content</td>
            </tr>
            <tr>
                <td>Animation</td>
                <td>animation-name, animation-duration, animation-timing-function, animation-delay, animation-iteration-count, animation-direction, animation-fill-mode, animation-play-state</td>
            </tr>
            <tr>
                <td>Transforms</td>
                <td>transform, transform-origin, transform-style, perspective, perspective-origin</td>
            </tr>
            <tr>
                <td>Transitions</td>
                <td>transition-property, transition-duration, transition-timing-function, transition-delay</td>
            </tr>
            <tr>
                <td>Miscellaneous</td>
                <td>opacity, cursor, clip, filter</td>
            </tr>
        </table>
    </div>
    <?php include "../../footer.php"  ?>
</body>
</html>
