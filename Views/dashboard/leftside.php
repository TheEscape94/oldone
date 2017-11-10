<!-- leftside -->
<div class="w3-col" style="float: left; width: 200px;">
    <!--profile short-->
    <div class="w3-card-2 w3-round w3-white" style="padding: 10px 0;">
        <div class="w3-container">
            <i class="fa fa-user w3-large" style="color: #4d636f;"></i>&nbsp;<a class="links" href="">Petar Petrovic</a>
        </div>
    </div>
    <br>
    <!-- alert_box -->
    <div class="w3-container w3-round w3-theme-l4 w3-border w3-theme-border  w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display = 'none'" class="w3-hover-text-grey w3-closebtn">
            <i class="fa fa-close w3-large"></i>
        </span>
        <p><strong>Popunite Vaš profil!</strong></p>
        <p styl="font-size: 11px;">Vaš profil nije upotpunosti popunjen!</p>
    </div>
    <div class="w3-card-2 w3-round w3-white" style="padding: 10px 0;">
        <div class="w3-container">
            <i class="fa fa-ellipsis-h w3-left-align icon_color"></i> <a class="group_links_a" href="#">Novosti</a><br>
            <i class="fa fa-comments w3-left-align icon_color"></i><a class="group_links_a" href="#">Poruke</a><br>
            <i class="fa fa-download w3-left-align icon_color"></i> <a class="group_links_a" href="#">Pratim</a><br>
        </div>
    </div><br>
    <!-- dodavanje grupe, stranice, bloga -->
    <div class="w3-card-2 w3-round">
        <div class="w3-accordion w3-white">
            <button onclick="open_links_func('stranica_id')" class="w3-btn-block w3-theme-l1 w3-left-align w3-border-bottom" style="font-weight: bold;"><i class="fa fa-sticky-note"></i>&nbsp;&nbsp;Stranice</button>
            <div id="stranica_id" class="w3-accordion-content w3-container">
                <a class="group_links_a w3-hover-none w3-hover-text-blue-grey" href="#">moja_stranica 1</a>
                <a class="group_links_a w3-hover-none w3-hover-text-blue-grey" href="#">moja_stranica 2</a>
                <a class="group_links_a w3-hover-none w3-hover-text-blue-grey" href="#">moja_stranica 3</a>
            </div>
            <button onclick="open_links_func('grupa_id')" class="w3-btn-block w3-theme-l1 w3-left-align w3-border-bottom" style="font-weight: bold;"><i class="fa fa-th-list"></i>&nbsp; Grupe</button>
            <div id="grupa_id" class="w3-accordion-content w3-container">
                <a class="group_links_a w3-hover-none w3-hover-text-blue-grey" href="#">moja_grupa 1</a>
                <a class="group_links_a w3-hover-none w3-hover-text-blue-grey" href="#">moja_grupa 2</a>
                <a class="group_links_a w3-hover-none w3-hover-text-blue-grey" href="#">moja_grupa 3</a>
            </div>
            <button onclick="open_links_func('blog_id')" class="w3-btn-block w3-theme-l1 w3-left-align w3-border-bottom" style="font-weight: bold;"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Blog</button>
            <div id="blog_id" class="w3-accordion-content w3-container">
                <a class="group_links_a w3-hover-none w3-hover-text-blue-grey" href="#">moj_blog 1</a>
                <a class="group_links_a w3-hover-none w3-hover-text-blue-grey" href="#">moj_blog 2</a>
                <a class="group_links_a w3-hover-none w3-hover-text-blue-grey" href="#">moj_blog 3</a>
            </div>
            <button onclick="open_links_func('dogadjaj_id')" class="w3-btn-block w3-theme-l1 w3-left-align w3-border-bottom" style="font-weight: bold;"><i class="fa fa-glass"></i>&nbsp; Dogadjaji</button>
            <div id="dogadjaj_id" class="w3-accordion-content w3-container">
                <a class="group_links_a w3-hover-none w3-hover-text-blue-grey" href="#">Dogadjaj 1</a>
                <a class="group_links_a w3-hover-none w3-hover-text-blue-grey" href="#">Dogadjaj 2</a>
                <a class="group_links_a w3-hover-none w3-hover-text-blue-grey" href="#">Dogadjaj 3</a>
            </div>
        </div>      
    </div>
    <br>
    <!-- precice -->
    <div class="w3-card-2 w3-round w3-white" style="padding: 15px 0;">
        <div class="w3-container">
            <p class="group_links_p"><i class="fa fa-group icon_color"></i> Prijatelji</p>
            <a class="group_links_a" href="#">Bliski prijatelji</a><br>
            <a class="group_links_a" href="#">Skoro dodati</a><br>
            <a class="group_links_a" href="#">Predlog prijatelja</a><br>
            <hr>
            <p class="group_links_p"><i class="fa fa-plus-circle icon_color"></i> Napravi</p>
            <a class="group_links_a" href="#"><i class="fa fa-plus"></i> Stranicu</a><br>
            <a class="group_links_a" href="#"><i class="fa fa-plus"></i> Grupu</a><br>
            <a class="group_links_a" href="#"><i class="fa fa-plus"></i> Blog</a><br>
            <a class="group_links_a" href="#"><i class="fa fa-plus"></i> Dogadjaj</a><br>
            <hr>
            <p class="group_links_p"><i class="fa fa-bookmark icon_color"></i> Pronadji</p>
            <a class="group_links_a" href="#">Prijatelje</a><br>
            <a class="group_links_a" href="#">Stranice</a><br>
            <a class="group_links_a" href="#">Grupe</a><br>
            <a class="group_links_a" href="#">Blog</a><br>
            <a class="group_links_a" href="#">Dogadjaje</a><br>
        </div>
    </div>
    <br>

    <!-- End Left Column -->
</div>