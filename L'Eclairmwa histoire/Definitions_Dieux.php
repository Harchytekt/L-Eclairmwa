
	<style>
         .voile-noir {
            position: fixed;
            display: none;
            left: 0;
            top: 0; 
            width: 100%;
            height: 100%;
            opacity: 0.75;
            background: gray; 
            z-index: 9999;
        }
        .popup-block{
            position: fixed;
            display: none;
            top: 50%;
            left: 50%;
            padding: 20px; 	
            z-index: 99999;
            font-size: 0.8em;
            background: #fff;
            border: 20px solid #ddd;
            -webkit-box-shadow: 0px 0px 20px #000;
            -moz-box-shadow: 0px 0px 20px #000;
            box-shadow: 0px 0px 20px #000;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
        }
        .popup p {
            padding: 5px 10px;
            margin: 5px 0;
        }
        .popup-btn-close {
            float: right; 
            margin: -55px -55px 0 0;
        }
		l5b {
        text-decoration: underline;
        }
		l6 {
        color: #094fb9;
        font-size: 15px;
        }
		l7 {
        color: #669966;
        font-size: 15px;
        }
        a {
        text-decoration: none;
        color: #cad102;
        }
    </style>
</head>
<body>
	<section class="conteneur">
        <a href="#" class="popup-light" data-popup-class="popup-block" data-popup-width="500px">Pour connaître les définitions des mots en italique, veuillez cliquer ici.</a>
    <section class="popup-block"> 
        <img src="images\Scribe.jpg" alt="Scribe" style="float: right; margin: 90px 0 0 20px;" /> 
        <h2><l5b>Définitions antiques :</l5b></h2>
        <p><l7><l5b>Croix ankh :</l5b> croix de vie.</l7></p> 
        <p><l6><l5b>Pschent:</l5b> double couronne pharaonique.</l6></p>
        <p><l7><l5b>Ouas:</l5b> sceptre divin, représente la puissance.</l7></p>
        <p><l6><l5b>Ousekh:</l5b> large collier à plusieurs rangs.</l6></p>
        <p><l7><l5b>Égide:</l5b> bouclier.</l7></p>
        <p><l6><l5b>Atef:</l5b> couronne divine.</l6></p>
        <p><l7><l5b>Flagellum:</l5b> fouet rituel.</l7></p>
        <p><l6><l5b>Sistre:</l5b> instrument de musique.</l6></p>
        <p><l7><l5b>Chenou:</l5b> cartouche avec nom.</l7></p>
        <p><l6><l5b>Djed:</l5b> pilier.</l6></p>
        <p><l7><l5b>Menat:</l5b> bourrelet de perles avec contre-poids.</l7></p>
        <p><l6><l5b>Flabellum:</l5b> éventail de plumes.</l6></p>
        <p><l7><l5b>Signe Sa:</l5b> emblême divin de protection.</l7></p>
        <p><l6><l5b>Clepsydre:</l5b> horloge à eau.</l6></p>
    </section>
	<script charset="utf-8" src="jquery-1.6.1.min.js"></script>
    <script>
        $(function(){
            $(".popup-light").click(function() {
                var obj = $(this),
                    popupClass = obj.data("popupClass"),
                    popupWidth = obj.data("popupWidth"),
                    objPopup =  $('.' + popupClass);
 
                objPopup
                    .css("width", popupWidth)
                    .prepend('<img src="images/close_pop.png" class="popup-btn-close" title="Close Window" alt="Close" />')
                    .css({
                        // Si l'on regroupe les deux blocs CSS, le popup n'est pas bien positionné
                        // Le popup doit avoir sa taille définitive avant le calcul de outerHeight et de outerWidth
                        "margin-top":  -objPopup.outerHeight(true)/2,
                        "margin-left": -objPopup.outerWidth(true)/2
                    })
                    .fadeIn();
 
                $("<div/>", {
                    "class":"voile-noir",
                    "css":{
                        "filter":"alpha(opacity=80)"
                    }
                }).appendTo("body").fadeIn();
 
                return false;
            });
 
            $("body").delegate(".popup-btn-close, .voile-noir", "click", function(){
                $('.voile-noir , .popup-block').fadeOut(function(){
                    $(".popup-btn-close, .voile-noir").remove();
                });
 
                return false;
            });
        });
    </script>
	</section>
</body>  
</html>
