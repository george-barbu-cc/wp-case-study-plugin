<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 */
?>

<div id="caseStudyPopup">
    <div class="contentPopup"> 
        <span data-cancel="true" class="cancel">
            <svg viewPort="0 0 12 12" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <line x1="1" y1="11" 
                    x2="11" y2="1" 
                    stroke="black" 
                    stroke-width="2"/>
                <line x1="1" y1="1" 
                    x2="11" y2="11" 
                    stroke="black" 
                    stroke-width="2"/>
            </svg>
        </span>

        <div class="formPopup">
            <div class="content">
                <img src="<?php echo plugin_dir_url( __DIR__ ) ?>assets/img/1713.svg" class="desktop">
                <img src="<?php echo plugin_dir_url( __DIR__ ) ?>assets/img/1713-m.svg" class="mobile">
                <span class="text">
                    <h3>Mehr Unterstützung zum Mitnehmen?</h3>
                    <p>Deine Verbindung zwischen Körper und Kopf stärken? Wir unterstützen dich mit vielen Infos und Strategien.</p>
                </span>
                
            </div>

            <form action="#" id="formContainer" class="formContainer" >
                <input type="text" id="caseStudyPopup-email" class="" placeholder="beispiel@email.de" name="email" required>
                <span data-error="caseStudyPopup-email" class="hidden">Bitte schreibe deine Email in dieser Form: beispiel@email.de</span>
                <input type="submit" id="submit" name="submit" required value="Senden">
            </form>
        </div>
        <div class="successPopup "> 
            <div class="content">
                <span class="text">
                    <img src="<?php echo plugin_dir_url( __DIR__ ) ?>assets/img/success.svg" class="">
                    <h3>Perfekt, das hat geklappt!</h3>
                    <p>Danke, dass du dich für unseren Newsletter angemeldet hast. Sei gespannt, dich erwarten schon bald viele spannende Strategien und Tipps aus der Welt der Psychologie und Psychotherapie!</p>
                </span>
                
            </div>
        </div>

        <span data-cancel="true" class="close">Schließen</span>
    </div>
</div>