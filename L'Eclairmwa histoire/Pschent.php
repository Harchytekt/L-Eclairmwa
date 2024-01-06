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
        a {
        text-decoration: none;
        color: #775204;
        }
    </style>
</head>
<body>
	<section class="conteneur">
        <p>Un roi du sud de l'Égypte, Narmer (le légendaire Ménès), unifie le pays vers 3.150 ACN et fonde la première dynastie. Le pharaon règne en se coiffant du "<a href="#" class="popup-light" data-popup-class="popup-block" data-popup-width="500px">pschent</a>", la double couronne.</p>
    <section class="popup-block">
        <p><img src="images/Pschent.png" alt="Pschent" title="Pschent" width="475" height="198" style="left:10px;" /></p> 		
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
