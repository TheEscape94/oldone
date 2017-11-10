<html>
    <head>
        <title>
            <?php echo $this->title; ?>
        </title>
        <link rel="stylesheet" href="Public/w3.css">
        <link rel="stylesheet" href="Public/styles.css">
        <link rel="stylesheet" href="Public/theme1.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    </head>
    <body>
        <div class="w3-container"> <!--begin of container-->

            <center>
                <h2 style="color: #4d636f;"><?php echo $this->msg; ?></h2>
                <br><br>
                <img src="images/error404.jpg" alt="Error404" />
                <br><br>
                <button class="w3-btn w3-white w3-border w3-theme-light w3-round-xlarge" onclick="window.location = 'index'">Početna</button>
            </center>
            <br/><br/>

            <?php require 'Views/includes/footer.php'; ?>