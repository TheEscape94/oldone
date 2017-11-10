<?php require 'Views/includes/firstheader.php'; ?>
    <center>
        <button style="margin-top: -20px;" onclick="document.getElementById('id01').style.display = 'block'" class="w3-btn w3-white w3-border w3-theme-light w3-round-xlarge"><b>Prijava</b></button>
        <br>
        <!-- Registracija -->
        <form method="post" action="">
            <div id="id00" class="w3-card-12" style="padding: 30px 0; width: 300px; position: relative; margin-top: 20px;">
                <div class="w3-fourth">
                    <input class="w3-input w3-border w3-padding-4 w3-round-large" style="width: 250px;" name="user_mail" type="text" placeholder="E-adresa" required>
                </div>
                <br>
                <div class="w3-fourth">
                    <input class="w3-input w3-border w3-padding-4 w3-round-large" style="width: 250px;" name="user_name" type="text" placeholder="Ime" required>
                </div>
                <br>
                <div class="w3-fourth">
                    <input class="w3-input w3-border w3-padding-4 w3-round-large" style="width: 250px;" name="user_lastname" type="text" placeholder="Prezime" required>
                </div>
                <br>
                <div class="w3-fourth">
                    <input class="w3-input w3-border w3-padding-4 w3-round-large" style="width: 250px;" name="user_pass" type="password" placeholder="Lozinka" required>
                </div>
                <br>
                <div class="w3-fourth">

                    <input class="w3-radio" name="user_gender" type="radio" checked>
                    <label class="w3-validate"><b>Muško</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="w3-radio" name="user_gender" type="radio">
                    <label class="w3-validate"><b>Žensko</b></label>
                </div>
                <br>
                <p class='descript_p'>Ako se registrujete, prihvatate
                    <a class="links" href="#">Uslove korišćenja</a> i <a class="links" href="#">Pravila</a></p>
                <br>
                <input type="submit" class="w3-btn w3-white w3-border w3-theme  w3-round-xlarge" value="Registracija"></input>
                <br>
                <p class='descript_p'> ili <br> koristi neki već postojeći profil</p>
                <img class="soc_img" src="images/icons/facebook.png" alt="facebook" />
                <img class="soc_img" src="images/icons/instagram.png" alt="instagram" />
                <img class="soc_img" src="images/icons/twiter.png" alt="twiter" />

                <br>
            </div>
        </form>
    </center>

    <!-- Prijava -->
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-8 w3-animate-zoom w3-round" style="max-width:600px; margin-top: -50px;">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('id01').style.display = 'none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Zatvori">&times;</span>
                <img src="images/userlog.png" alt="userlog" style="width:30%" class="w3-circle w3-margin-top">
            </div>

            <form class="w3-container" action="" method="post">
                <div class="w3-section">
                    <label><b>E-adresa</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" name="usrname" required>

                    <label><b>Lozinka</b></label>
                    <input class="w3-input w3-border" type="password" name="psw" required>

                    <button class="w3-btn-block w3-green w3-section w3-padding" type="submit">Prijava</button>
                    <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Zapamti me
                </div>
            </form>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <center>
                    <a class="links" href="#">Zaboravljena lozinka?</a>
                    <!-- <a class="links" href="#">Problem oko prijave?</a> -->
                </center>
            </div>

        </div>
    </div>
    <br>
<?php require 'Views/includes/footer.php'; ?>
