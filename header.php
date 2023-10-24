<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a class="active" href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="pricing.php">Pricing</a>
    <a href="testimonial.php">Testimonial</a>
    <a href="contact.php">Contact</a>
</div>
<!-- header -->
<header>
    <!-- header inner -->
    <div class="head-top">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-sm-3">
                    <div class="logo">
                        <a href="index.php">Hello</a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <ul class="social_icon text_align_right d_none">
                        <li><a href="login.php">Se Connecter</a></li>
                        <li><a href="sign.php">S'inscrire</a></li>
                        <li><a href="javascript:void(0)" onclick="toggleSearch()"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="email text_align_right">
                        <!-- ... (autre code) ... -->
                        <input type="text" id="search-input" style="display: none;">
                        <button class="close-search-btn" onclick="closeSearch()" style="display: none;">&times;</button>
                        <li>
                            <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- end header -->
<script>
    // JavaScript pour ouvrir le champ de recherche
    function toggleSearch() {
        var searchInput = document.getElementById("search-input");
        var closeSearchBtn = document.querySelector(".close-search-btn");

        searchInput.style.display = "inline-block";
        searchInput.focus(); // Met le focus sur le champ de recherche

        // Affiche le bouton "Fermer"
        closeSearchBtn.style.display = "inline";
    }

    // JavaScript pour fermer le champ de recherche
    function closeSearch() {
        var searchInput = document.getElementById("search-input");
        var closeSearchBtn = document.querySelector(".close-search-btn");

        searchInput.style.display = "none";
        closeSearchBtn.style.display = "none";
    }
</script>