<!DOCTYPE html>
<html lang="cs">
<head>
    <link rel="stylesheet" href="styly.css">
    <link rel="stylesheet" href="grid.css">
    <link rel="icon" href="img/favicon.png">
    <script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="queries.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veronika Marečková</title>
</head>
<body>
    
    <header>
        <!--Logo a navigace-->
        
        <div class="nav-background"> <!--základní menu pozadí-->
        </div>
        <div id="logo">
            <a href="https://www.interaktivniweb.cz/mujWeb"><img src="img/pizzalogo.png" alt="logo"></a>
        </div>
        <nav class="desktop-menu"> 
            <ul> 
                <li class="jq-0"><a href="#" class="jq--scroll-our-pizza" >Naše pizza</a></li>
                <li class="jq-1"><a href="#" class="jq--scroll-about-pizza">O naší pizze</a></li>
                <li class="jq-2"><a href="#"class="jq--scroll-references">Reference</a></li>
                <li class="jq-3"><a href="#" class="jq--scroll-photogallery">Galerie</a></li>
                <li class="jq-4"><a href="#" class="jq--scroll-contact-form">Kontakt</a></li>
            </ul>
        </nav>
        <!-- Top Navigation Menu - LOGO -->
        <div class="topnav">
            <a href="#home" class="active">Logo</a>
            
            <!-- Navigační odkazy (ve výchozím nastavení skryté) -->
            <div id="myLinks">
                <a href="#">Odkaz 1 Toto budou odkazy na další stránky</a>
                <a href="#">Odkaz 2</a>
                <a href="#">Odkaz 3</a>
                <a href="#">Odkaz 4  pozn. tento web další stránky zatím nemá...</a>
                <a href="#">Odkaz 5   ...ale je připraven dál růst</a>
            </div>
            <!-- „Nabídka Hamburger“ / „Ikona pruhu“ slouží k přepínání navigačních odkazů -->
            <a class="mobile-nav-icon jq--nav-icon" onclick="myFunction()"><img class="jq--image-hamburger" src="img/hamburgerMenu4.png" alt=""></a> <!--ikonka hamburger-->
        </div> 

    
    

    <!--hlavní nadpis a 2 tlačítka-->
    <div class="header-text">
        <h1>Ukázka - Web je responzivní.</h1> <!-- jq--scroll-tlacitko-1 je v JS zatím vyřazeno-->
        <a href="https://www.interaktivniweb.cz/mujWeb/form/index.php" class="btn btn-full jq--scroll-tlacitko-1"><strong>Kontaktní formulář</strong></a>
        <a href="#" class="btn btn-empty jq--scroll-tlacitko-2">Druhé tlačítko</a>
    </div>
        
    </header>
     <!--HL. ČÁST WEBU-------->
     <main>
        <!--sekce 1-->
        <section class= "sekce 1 row  jq--our-pizza">
                <h2 class="h2">Naše pizza</h2>
            <!--2 pizzy-->
            <div class="dvěpizzy">
                <!--obrázek č. 1-->
                <div class="col span-1-of-2">
                <img src="img/pizza1.jpg" alt="">
                </div>
                <!--obrázek č. 2-->
                <div class="col span-1-of-2">
                <img src="img/pizza2.jpg" alt="">
                </div>
            </div>
        </section>

        <!--sekce 2-->
        <section class= "sekce 2 row jq--about-pizza"> 
            <h2 class="h2">O naší pizze</h2>
            <!--pizza tři + vypsání výhod-->
            <div class="pizza3avýhody">
                <!--obrázek č. 3-->
                <div class="col span-1-of-2">
                    <img src="img/pizza3.jpg" alt="">
                </div>
                <!--výhody-->
                <div class="col span-1-of-2">
                    <!--odstavec 1-->
                    <div class="výhody clearfix">
                        <div>1</div>
                        <p> <strong> Pro příklad jsem zde vložila výplňkový text. </strong> Fusce nec tellus sed augue semper porta. Mauris massa.</p>
                    </div>
                    <!--odstavec 2-->
                    <div class="výhody clearfix">
                        <div>2</div>
                        <p> Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit.</p>
                    </div>
                    <!--odstavec 3-->
                    <div class="výhody clearfix">
                        <div>3</div>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                    </div>
                    <!--odstavec 4-->
                    <div class="výhody clearfix">
                        <div>4</div>
                        <p>Quisque volutpat velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. 
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--sekce 3-->
        <section class= "sekce3 jq--references"> 
            <!--reference nadpis-->
            <div class="reference">
                <h2 class="h2">Co o nás řekli naši zákazníci</h2>
            </div>
            
            <!--Reference text + foto + jméno CELEK -->
            <div class="reference-celek row"> <!--"row nastavení pro odstavce"-->
                <!--1. reference (pozn. blok) -->
                <div class="col span-1-of-3">
                    <div class="reference-text">
                        <p>Zde je prostor pro vyjádření spokojených zákazníků. Nejčastějším zdrojem jsou sociální sítě. Na základě klientského souhlasu máme k dispozici jak referenci tak i fotografii. To pomůže potenciálnímu zákazníkovi se snáze rozhodnout.</p>
                    </div>
                    
                    <div class="reference-obrázek-a-jméno">
                        <img src="img/klient.png" alt="" class="clearfix">
                            <p>jméno zákazníka</p>
                    </div>
                </div>

                <!--2. reference (pozn. blok)-->
                <div class="col span-1-of-3">
                    <div class="reference-text">
                        <p>"Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos."</p>
                    </div>
                    <div class="reference-obrázek-a-jméno">
                        <img src="img/klient.png" alt="" class="clearfix"> <!--když v css foutuju obrázek tak ho v html musím ukončit a v css na ukončení mám vzorec-->
                            <p>Petr Větvička</p>
                    </div>
                </div>

                <!--3. reference (pozn. blok) -->
                <div class="col span-1-of-3 ">
                    <div class="reference-text">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet."</p>
                    </div>
                    <div class="reference-obrázek-a-jméno">
                        <img src="img/klient.png" alt="" class="clearfix">
                            <p>Vojtěčh Nový</p>
                    </div>
                </div>
            </div>
        </section>
        <!--sekce 4 galerie-->
        <section class= "sekce4 row jq--photogallery">
            <h2 class="h2">Co u nás můžete ochutnat</h2>
            <div class="fotogalerie">
                <ul>
                    <li class="col span-1-of-2"><img src="img/pizza1.jpg" alt=""></li>
                    <li  class="col span-1-of-2"><img src="img/pizza2.jpg" alt=""></li>
                </ul>
                <ul>
                    <li class="col span-1-of-2"><img src="img/pizza3.jpg" alt=""></li>
                    <li class="col span-1-of-2"><img src="img/pizza4.jpg" alt=""></li>
                </ul>
                <ul>
                    <li class="col span-1-of-2"><img src="img/pizza5.jpg" alt=""></li>
                    <li class="col span-1-of-2"><img src="img/pizza6.jpg" alt=""></li>
                </ul>
            </div>
        </section>

       
        

              
<!--paticka webu-->      
       
    </main>
    <footer class="patička-webu">
        <div class="práce-s-textem row">
            <div class="patička-odkazy">
                <p><a href="https://www.facebook.com/" target="_blank">Facebook</a></p>
                <p><a href="https://www.youtube.com/" target="_blank">Youtube</a></p>
            </div>
            <div class="patička-výrobce">
                &COPY; 2021 Veronika Marečková
            </div>
            
        </div>  
        
    </footer>  
</body>
</html>