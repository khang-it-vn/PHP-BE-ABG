<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/png"
        href="https://th.bing.com/th/id/OIP.evKumc-BJD_oCdJKVbFHZQHaHa?w=173&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7">

    <link href="https://cdn.ckeditor.com/4.16.1/standard/contents.css" rel="stylesheet">

    <!-- <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script> -->
</head>

<body>
    <header>
        <h1 style="text-align: center;">Document ABG Banking</h1>
    </header>

    <div class="container">
        <aside class="sidebar">
            <div class="search-container">
                <input type="text" id="search-input" placeholder="Search...">
            </div>

            <h2><a href="#">Add Posts</a></h2>

            <h2><a href="#">List Of Posts</a></h2>
        </aside>

       <?php require($view) ?>
    </div>

    <footer>
        <p>Bản quyền © 2023 - Trang tài liệu</p>
    </footer>

    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

    <script src="scripts.js"></script>
    <style>
    /* Set default box-sizing to border-box */
    * {
        box-sizing: border-box;
    }

    /* Style the header */
    header {
        background-color: #333;
        color: white;
        padding: 10px;
    }

    /* Style the links in the header */
    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    nav li {
        display: inline-block;
        margin: 0 10px;
    }

    nav a {
        color: white;
        text-decoration: none;
    }

    /* Style the container for sidebar and content */
    .container {
        display: flex;
        flex-wrap: wrap;
    }

    /* Style the sidebar */
    .sidebar {
        flex-basis: 300px;
        /* set width of sidebar */
        background-color: #eee;
        padding: 20px;
    }

    /* Style for search container */
    .search-container {
        display: flex;
        justify-content: center;
        margin: 0px 0px 30px 0px;
    }

    #search-input {
        padding: 10px;
        border: none;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        width: 100%;
    }

    @media screen and (max-width: 768px) {
        #search-input {
            width: 90%;
        }
    }

    /* Style heading and links in sidebar */
    .sidebar h2 {
        font-size: 1.2rem;
        margin-top: 0;
    }

    .sidebar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .sidebar li {
        margin-bottom: 10px;
    }

    .sidebar a {
        color: #333;
        text-decoration: none;
    }

    .sidebar a:hover {
        text-decoration: underline;
    }

    /* Style the main content */
    .content {
        flex: 1;
        /* make content take up remaining space */
        padding: 20px;
    }

    /* Style headings and links in main content */
    .content h2 {
        font-size: 1.5rem;
        margin-top: 20px;
    }

    .content ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .content li {
        margin-bottom: 10px;
    }

    .content a {
        color: #333;
        text-decoration: none;
    }

    .content a:hover {
        text-decoration: underline;
    }

    /* Style the footer */
    footer {
        background-color: #333;
        color: white;
        padding: 20px;
        text-align: center;
        position: relative;
        bottom: 0;
        left: 0px;
        right: 10px;
    }

    footer p {
        margin: 0;
    }
    </style>
</body>

</html>