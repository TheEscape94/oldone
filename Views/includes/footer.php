</div> <!--end of container-->
<center>
    <footer class="w3-container w3-border-top w3-border-grey" id="footer">
        <p>
            <a class="links" href="#">O nama</a>
            <a class="links" href="#">Podrška</a>
            <a class="links" href="#">Privatnost</a>
            <a class="links" href="#">Uslovi korišćenja</a>
            <a class="links" href="#">Pravila</a>
            <a class="links" href="#">Reklame</a>
            <a class="links" href="#">Kontakt</a>
        </p>
        <p>Social Network &copy; Sva prava zadržana.</p>
    </footer>
</center>
<script>
    function open_links_func(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme-d1";
        } else {
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-theme-d1", "");
        }
    }

// prikaz na manjim ekranima
    function openNav() {
        var x = document.getElementById("small_menu");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    function openChat() {
        var c = document.getElementById('chat_cont');
        c.style.display = "block";
    }
    function openConteiner(k) {
        var x = document.getElementById(k);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>
</body>
</html>