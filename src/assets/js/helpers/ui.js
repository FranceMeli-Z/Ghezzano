export class UI {

    static stickyFooter(){

        function stickyFooterWatch(){
            var stickyFooterElementSrc = document.querySelector("#zaux-content-wrapper");
            //stickyFooterElementSrc.style.border = "5px solid red";
            var config = stickyFooterElementSrc.getAttribute("data-settings");

            //Check if config is present or not
            if( config !== null ){
                config = JSON.parse(config);
            }
            //If sticky footer is enabled in the configuration we boot it
            if( config.stickyFooter == true ){
                var header = document.querySelector(".c-header");
                var footer = document.querySelector(".c-footer");
                stickyFooterElementSrc.style.minHeight = (window.innerHeight - 4) - (header.clientHeight + footer.clientHeight) + "px";
            }
        }

        stickyFooterWatch();
        window.addEventListener("resize",stickyFooterWatch);

    }

}
