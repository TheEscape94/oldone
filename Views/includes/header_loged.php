<html>
    <?php require 'Views/includes/head.php'; ?>
    <body>
        <div class="w3-container w3-theme-d2 w3-top header_div w3-padding-2">
            <ul class="w3-navbar w3-theme-d2 w3-left-align" style="height: 40px;">
                <!-- umanjen meni -->
                <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
                    <a class="w3-padding-large w3-large w3-theme-d4" href="javascript:void(0);" onclick="openNav()"><img class='w3-padding-2' src='images/icons/small_menu.png' /></a>
                </li>
                <!-- logo -->
                <li><a href="index" class="w3-padding-12 w3-theme-d4 w3-hover-text-blue-grey"><b>Social Network</b></a></li>
                <!-- novosti -->
                <li class="w3-hide-small"><a href="dashboard" class="w3-padding-large w3-hover-none" title="Novosti"><i class="fa fa-globe w3-large w3-margin-right"></i></a></li>
                <!-- poruke -->
                <li class="w3-hide-small w3-dropdown-click w3-hover-none">
                    <a onclick="openConteiner('msg')" class="w3-padding-large w3-hover-none"><span class="w3-badge w3-right w3-small w3-theme-l1" style="margin-top: -8px;margin-left: 5px;">3</span><i class="fa fa-envelope w3-large"></i></a>
                    <div id="msg" class="w3-dropdown-content w3-white w3-card-4 w3-round-xlarge w3-padding-hor-12" style="margin-left: 20px; width: 350px; margin-top: -5px;">
                        <p class="p_naslov">Poruke</p><hr />
                        <!--conversation look-->
                        <a class="w3-hover-none w3-hover-text-blue-grey w3-padding-4" href="#">
                            <div class="w3-round w3-border-bottom" style="width:100%; height: 30px; padding: 5px;">
                                <img src="images/img_avatar_woman.png" class="avatar_small w3-left"/>
                                <p class="w3-left w3-margin-left">Ime Prezime</p>
                            </div>
                        </a>
                        <!--conversation look END-->
                        <a class="w3-hover-none w3-hover-text-blue-grey w3-padding-4" href="#">
                            <div class="w3-round w3-border-bottom" style="width:100%; height: 30px; padding: 5px;">
                                <img src="images/img_avatar_man.png" class="avatar_small w3-left"/>
                                <p class="w3-left w3-margin-left">Ime Prezime</p>
                            </div>
                        </a>
                        <a class="w3-hover-none w3-hover-text-blue-grey w3-padding-4" href="#">
                            <div class="w3-round w3-border-bottom" style="width:100%; height: 30px; padding: 5px;">
                                <img src="images/img_avatar_man.png" class="avatar_small w3-left"/>
                                <p class="w3-left w3-margin-left">Ime Prezime</p>
                            </div>
                        </a>
                    </div>
                </li>
                <!-- obavestenja -->
                <li class="w3-hide-small w3-dropdown-click w3-hover-none">
                    <a onclick="openConteiner('notif')" class="w3-padding-large w3-hover-none"><span class="w3-badge w3-right w3-small w3-theme-l1" style="margin-top: -8px;">5</span><i class="fa fa-bell w3-large"></i></a>     
                    <div id="notif" class="w3-dropdown-content w3-white w3-card-4 w3-round-xlarge w3-padding-hor-12" style="margin-left: 20px; width: 350px; margin-top: -5px;">
                        <p class="p_naslov">Obaveštenja</p><hr />
                        <!--notif look-->
                        <a class="w3-hover-none w3-hover-text-blue-grey w3-padding-4" href="#">
                            <div class="w3-round w3-border-bottom" style="width:100%; height: 30px; padding: 5px;">
                                <img src="images/img_avatar_man.png" class="avatar_small w3-left"/>
                                <p class="w3-left w3-margin-left">Obaveštenje 1</p>
                            </div>
                        </a>
                        <!--notif look END-->
                        <a class="w3-hover-none w3-hover-text-blue-grey w3-padding-4" href="#">
                            <div class="w3-round w3-border-bottom" style="width:100%; height: 30px; padding: 5px;">
                                <img src="images/img_avatar_woman.png" class="avatar_small w3-left"/>
                                <p class="w3-left w3-margin-left">Obaveštenje 1</p>
                            </div>
                        </a>
                        <a class="w3-hover-none w3-hover-text-blue-grey w3-padding-4" href="#">
                            <div class="w3-round w3-border-bottom" style="width:100%; height: 30px; padding: 5px;">
                                <img src="images/img_avatar_man.png" class="avatar_small w3-left"/>
                                <p class="w3-left w3-margin-left">Obaveštenje 1</p>
                            </div>
                        </a>
                    </div>
                </li>
                <!--prijatelji-->
                <li class="w3-hide-small w3-dropdown-click w3-hover-none">
                    <a onclick="openConteiner('friendRec')" class="w3-padding-large w3-hover-none" title="Prijatelji"><span class="w3-badge w3-right w3-small w3-theme-l1" style="margin-top: -8px; margin-left: 5px;">1</span><i class="fa fa-users w3-large"></i></a>
                    <div id="friendRec" class="w3-dropdown-content w3-white w3-card-4 w3-round-xlarge w3-padding-hor-12" style="margin-left: 20px; width: 350px; margin-top: -5px;">
                        <p class="p_naslov">Zahtevi za prijateljsvo</p><hr />
                        <!--requ look-->
                        <div class="w3-round w3-border-bottom" style="width:100%; padding: 5px 15px; height: 75px; position: relative;"> 
                            <img src="images/img_avatar_man.png" class="avatar_normal w3-left"/><br>
                            <a class="w3-hover-none w3-hover-text-blue-grey" style="position: absolute; top: -5px; left: 70px;" href="#"><strong>Ime Prezime</strong></a>
                            <br>
                            <button class="w3-btn w3-white w3-round w3-border w3-left" style="position: absolute; top: 35px; left: 85px;"><i class="fa fa-check"></i>Prihvati</button>
                            <button class="w3-btn w3-white w3-round w3-border w3-right" style="position: absolute; top: 35px; left: 185px;"><i class="fa fa-remove"></i>Ne sada</button>
                        </div>
                        <!--requ look END-->
                        <div class="w3-round w3-border-bottom" style="width:100%; padding: 5px 15px; height: 75px; position: relative;"> 
                            <img src="images/img_avatar_woman.png" class="avatar_normal w3-left"/><br>
                            <a class="w3-hover-none w3-hover-text-blue-grey" style="position: absolute; top: -5px; left: 70px;" href="#"><strong>Ime Prezime</strong></a>
                            <br>
                            <button class="w3-btn w3-white w3-round w3-border w3-left" style="position: absolute; top: 35px; left: 85px;"><i class="fa fa-check"></i>Prihvati</button>
                            <button class="w3-btn w3-white w3-round w3-border w3-right" style="position: absolute; top: 35px; left: 185px;"><i class="fa fa-remove"></i>Ne sada</button>
                        </div>
                    </div>
                </li>
                <!-- pretraga -->
                <li class="w3-hide-small w3-hide-small w3-center w3-padding-medium" style="margin-left: 5px;">
                    <input class="w3-input w3-border w3-round-large" style="float: left;width: 250px; height: 26px; padding: 2px 7px; color: #bdbdbd;" name="user_search" type="text" placeholder="Pretraga...">
                    <button class="none_btn"><i class="fa fa-search w3-xlarge" style="margin-left: 10px; color: #fff;"></i></button>
                </li>
                <!-- podesavanja -->
                <li class="w3-hide-small w3-right w3-dropdown-click w3-hover-none">
                    <a onclick="openConteiner('settings')" class="w3-padding-large w3-hover-none" title="Podešavanja"><i class="fa fa-cogs w3-large"></i> <i class="fa fa-sort-down"></i></a>
                    <div id="settings" class="w3-dropdown-content w3-white w3-card-4 w3-round-xlarge" style="padding: 5px;margin-left: -100px; margin-top: -5px;">
                        <a class="w3-hover-none w3-hover-text-blue-grey w3-center w3-padding-4" href="#">Podesavanja</a>
                        <a class="w3-hover-none w3-hover-text-blue-grey w3-center w3-padding-4" href="#">Privatnost</a>
                        <a class="w3-hover-none w3-hover-text-blue-grey w3-center w3-padding-4" href="#">Statistika</a>
                        <hr>
                        <a class="w3-hover-none w3-hover-text-blue-grey w3-center w3-padding-4" href="#"><i class="fa fa-power-off icon_color"></i>&nbsp; Odjava</a>
                    </div>
                </li>
                <!-- profil -->
                <li class="w3-hide-small w3-right"><a href="profile" class="w3-padding-large w3-hover-none" title="Profil"><img src="images/img_avatar_man.png" class="avatar_small"/></a></li>
                <!--chat-->
                <li class="w3-hide-small w3-right"><a onclick="openChat();" class="w3-padding-2 w3-hover-none" title="Dopisivanje"><i class="fa fa-comments-o w3-xlarge"></i></a></li>
            </ul>
            <?php require 'Views/includes/small_menu.php'; ?>
        </div>
        <div class="w3-container w3-content" id='content'> <!--begin of container-->

