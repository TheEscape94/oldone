<!-- middle of dashboard -->
<!--share status or pic-->
<div class="w3-col" style="float: left; width:550px;">
    <div class="w3-row-padding">
        <div class="w3-col m12">
            <div class="w3-card-2 w3-round w3-white">
                <div class="w3-container w3-padding">
                    <a class="w3-opacity links" href="#"><i class="fa fa-plus"></i>Dodaj fotografiju</a>
                    <a class="w3-opacity links" href="#"><i class="fa fa-plus"></i>Dodaj album</a>
                    <a class="w3-opacity links" href="#"><i class="fa fa-plus"></i>Dodaj fajl</a><br><br>
                    <input type='text' placeholder="O čemu razmišljate..." class='w3-input w3-border w3-padding-4 w3-round' /> <br>
                    <button type="button" class="w3-btn w3-small w3-theme-l1 w3-right w3-round"> Objavi </button> 
                    <button type="button" class="w3-btn w3-small w3-hover-none w3-hover-text-blue-grey w3-white w3-right w3-round w3-margin-right"> Privatnost <i class="fa fa-sort-down"></i></button> 
                </div>
            </div>
        </div>
    </div>
    <!--status share-->
    <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="images/img_avatar_woman.png" class="w3-left avatar_normal w3-margin-right">
        <span class="w3-right w3-opacity w3-small">1 min</span>
        <h4 style='margin-top: 0;'>Petra Petrović</h4>
        <p>
            <i class='fa fa-thumbs-up'></i> 12
            <i class='fa fa-thumbs-down w3-margin-left'></i> 2
            <i class='fa fa-comment w3-margin-left'></i> 4
        </p>
        <br>
        <hr class="w3-clear">
        <p class="status_sontent_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br>
        <button type="button" class="btn_share_action w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Sviđa mi se</button> 
        <button type="button" class="btn_share_action w3-margin-bottom"><i class="fa fa-thumbs-down"></i>  Ne sviđa mi se</button> 
        <button type="button" class="btn_share_action w3-margin-bottom"><i class="fa fa-commenting-o"></i>  Komentariši</button> 
    </div>
    <!--    picture share-->
    <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="images/img_avatar_man.png" class="w3-left avatar_normal w3-margin-right">
        <span class="w3-right w3-opacity w3-small">15 min</span>
        <h4 style='margin-top: 0;'>Petar Petrović</h4>
        <p>
            <i class='fa fa-thumbs-up'></i> 12
            <i class='fa fa-thumbs-down w3-margin-left'></i> 2
            <i class='fa fa-comment w3-margin-left'></i> 4
        </p>
        <br>
        <hr class="w3-clear">
        <p>Have you seen this? Great new social network!</p>
        <img src="images/background_1.png" style="width:100%" class="w3-margin-bottom">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br>
        <button type="button" class="btn_share_action w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Sviđa mi se</button> 
        <button type="button" class="btn_share_action w3-margin-bottom"><i class="fa fa-thumbs-down"></i>  Ne sviđa mi se</button> 
        <button type="button" class="btn_share_action w3-margin-bottom"><i class="fa fa-commenting-o"></i>  Komentariši</button>
    </div> 
    <!--chat content-->
    <?php require "chat.php";?>
    <!-- End Middle Column -->
</div>
