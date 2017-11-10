<div class="w3-col" style="float: left; width: 300px;">
    <!--basic information-->
    <div class="w3-card-2 w3-round w3-white" style="padding: 10px 0;">
        <div class="w3-container">
            <table cellpadding="5" style="text-align: left; padding: 5px;">
                <tr>
                    <td style="width:10px;"><i class="fa fa-pencil fa-fw w3-text-theme"></i></td>
                    <td><p> Student </p></td>
                </tr>
                <tr>
                    <td style="width:10px;"><i class="fa fa-bank fa-fw w3-text-theme"></i></td>
                    <td> <p>Departman za Matematiku i Informatiku, PMF Novi Sad </p></td>
                </tr>
                <tr>
                    <td style="width:10px;"><i class="fa fa-home fa-fw w3-text-theme"></td>
                    <td> <p>Novi Sad, Srbija</p></td>
                </tr>
                <tr>
                    <td style="width:10px;"><i class="fa fa-birthday-cake fa-fw w3-text-theme"></td>
                    <td> <p>Januar 8, 1994</p></td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <!--fotografije-->
    <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container" style="padding: 15px;">
            <p class="group_links_p"><i class="fa fa-picture-o"></i> Fotofrafije</p><hr>
            <div class="w3-row-padding">
                <div class="w3-half">
                    <img src="images/test_img/test_img1.jpg" class="thumb_img">
                </div>
                <div class="w3-half">
                    <img src="images/test_img/test_img2.jpg" class="thumb_img">
                </div>
                <div class="w3-third">
                    <img src="images/test_img/test_img3.jpg" class="thumb_img">
                </div>
                <div class="w3-third">
                    <img src="images/test_img/test_img4.jpg" class="thumb_img">
                </div>
                <div class="w3-third">
                    <img src="images/test_img/test_img5.jpg" class="thumb_img">
                </div>
                <div class="w3-one">
                    <img src="images/test_img/test_img6.jpg" class="thumb_img">
                </div>
                <div class="w3-third">
                    <img src="images/test_img/test_img7.jpg" class="thumb_img">
                </div>
                <div class="w3-third">
                    <img src="images/test_img/test_img8.jpg" class="thumb_img">
                </div>
                <div class="w3-third">
                    <img src="images/test_img/test_img9.jpg" class="thumb_img">
                </div>
            </div>
            <hr>
        </div>
    </div>
    <br>
    <!-- moje grupe, stranice, bloga -->
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
</div>