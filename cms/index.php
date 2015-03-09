<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8> 
	<title>Home - UP696811 WEBSCRP Coursework</title>
    <link rel="stylesheet" title="Webscript Style" href="../inc/cwkstyle.css">
    <script src="../lib/ajaxget.js"></script>
    <script src="../lib/main.js"></script>
</head>
<body>
    <header>
        <h1>Company Name</h1>
        <nav class="userswitch">
            <ul>
                <li><a href="/cwk/">Switch to user view</a></li>
            </ul>
        </nav>
    </header>
    
    <section>
        <h1>Content Management System</h1>
        <p>This page features all of the interfaces needed to add/edit/remove items from the database,
        as well as change the appearance of the site.</p>
    </section>
    
    <div id="cmssectioncontrol">
        <nav class="cmsnav">
            <input type="radio" name="cms" id="managedbradio"><label for="managedbradio">Manage Database</label>
            <input type="radio" name="cms" id="stockradio"><label for="stockradio">Stock</label>
            <input type="radio" name="cms" id="ordersradio"><label for="ordersradio">Pending Orders</label>
            <input type="radio" name="cms" id="appearanceradio"><label for="appearanceradio">Site Appearance</label>
        </nav>
    </div>
    
    <div class="cmsdiv" id="cmsdiv">
    
    </div>
    
</html>