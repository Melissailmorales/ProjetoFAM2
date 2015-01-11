<div id="Slide">

    <figure>
        <span class="trs next"></span>
        <span class="trs prev"></span>

        <div id="slider">
            <center>
                <a href="#" class="trs">
                    <img src="images/imgCapa.jpg" style="width:550px; height:280px;" alt="PROJETO FORMAÇÃO DE AGENTES MULTIPLICADORES"> 
                </a>
                <a href="#" class="trs">
                    <img src="images/prefeitura.jpg" style="width:600px; height:300px;" alt="PREFEITURA DE ITAPETININGA">
                </a>	
            </center>	
        </div>

        <figcaption></figcaption>
    </figure>

    <script type="text/javascript">
        function setaImagem() {
            var settings = {
                primeiraImg: function() {
                    elemento = document.querySelector("#slider a:first-child");
                    elemento.classList.add("ativo");
                    this.legenda(elemento);
                },
                ultimaImg: function() {
                    elemento = document.querySelector("#slider a:last-child");
                    elemento.classList.add("ativo");
                    this.legenda(elemento);
                },
                slide: function() {
                    elemento = document.querySelector(".ativo");
                    if (elemento.nextElementSibling) {
                        elemento.nextElementSibling.classList.add("ativo");
                        settings.legenda(elemento.nextElementSibling);
                        elemento.classList.remove("ativo");
                    } else {
                        elemento.classList.remove("ativo");
                        settings.primeiraImg();
                    }

                },
                proximo: function() {
                    clearInterval(intervalo);
                    elemento = document.querySelector(".ativo");

                    if (elemento.nextElementSibling) {
                        elemento.nextElementSibling.classList.add("ativo");
                        settings.legenda(elemento.nextElementSibling);
                        elemento.classList.remove("ativo");
                    } else {
                        elemento.classList.remove("ativo");
                        settings.primeiraImg();
                    }
                    intervalo = setInterval(settings.slide, 4000);
                },
                anterior: function() {
                    clearInterval(intervalo);
                    elemento = document.querySelector(".ativo");
                    if (elemento.previousElementSibling) {
                        elemento.previousElementSibling.classList.add("ativo");
                        settings.legenda(elemento.previousElementSibling);
                        elemento.classList.remove("ativo");
                    } else {
                        elemento.classList.remove("ativo");
                        settings.ultimaImg();
                    }
                    intervalo = setInterval(settings.slide, 4000);
                },
                legenda: function(obj) {
                    var legenda = obj.querySelector("img").getAttribute("alt");
                    document.querySelector("figcaption").innerHTML = legenda;
                }
            };
            //chama o slide
            settings.primeiraImg();
            //chama a legenda
            settings.legenda(elemento);
            //chama o slide à um determinado tempo
            var intervalo = setInterval(settings.slide, 4000);
            document.querySelector(".next").addEventListener("click", settings.proximo, false);
            document.querySelector(".prev").addEventListener("click", settings.anterior, false);
        }
        window.addEventListener("load", setaImagem, false);
    </script>
</div>