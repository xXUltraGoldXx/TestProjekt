<style>
	.introjs-tooltipReferenceLayer {
		max-width: 100vw;
	}

	.introjs-tooltip {
		max-width: 80vw;
		max-height: 80vh;
	}

	.introjs-tooltiptext {
		max-width: 80vw;
		max-height: 80vh;

		overflow: auto;
	}

	.introjs-tooltip .video-container {
		position: relative;
		padding-bottom: 56.25%;
		padding-top: 30px;
		height: 0;
		overflow: hidden;
	}

	.introjs-tooltip .video-container iframe,
	.introjs-tooltip .video-container object,
	.introjs-tooltip .video-container embed {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}


	@media (min-width: 768px) {
		.introjs-tooltip .video-container {
			width: 640px;
		}
	}

	@media (min-width: 1200px) {
		.introjs-tooltip .video-container {
			width: 1000px;
		}
	}

	@media (max-height: 640px) {
		.introjs-tooltip .video-container {
			width: 220px;
		}
	}

	@media (min-height: 640px) and (max-height: 1000px) {
		.introjs-tooltip .video-container {
			width: 420px;
		}
	}

	.introjs-tooltip img {
		max-width: 100%;
		height: auto;
	}

	.introjs-tooltip video {
		width: 100%;
		height: auto;
	}

	.contentIntro {
		margin-left: 20px;
		margin-right: 20px;
		margin-bottom: 20px;
	}
	#searchdiv .btn {
		text-align: left;
		color: white;
	}
	div.darkTheme > div#tourOverview2 > div.contentIntro h2{
		color:white;
	}
	div.darkTheme > div#tourOverview2 > div.contentIntro span{
		color:white;
	}
	div.darkTheme > div#tourOverview2 > div.contentIntro p{
		color:white;
	}
	div#tourOverview2 > div.contentIntro > #searchdiv .btn {
    	text-align: left;
    	color: black !important;
	}
	div.darkTheme > div#tourOverview2 > div.contentIntro > #searchdiv .btn {
    	text-align: left;
    	color: white !important;
	}

</style>
<div id="tourOverview2">
	<div class="contentIntro">

	    <div class="input-group">
	    	<span class="input-group-addon">Suche:</span>
	    	<input id="searchInput" type="text" class="form-control" placeholder="z.B Neue Kontakt anlegen">
	    </div><br><br>
	    <div id="searchdiv">
	    	<div class="row">
	            <div class="col-xs-6">
	            	<h2>Basisfunktionen</h2>
	                	<div class="btn-group-vertical text-left">
	                    	<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('neue_kontakt_anlegen2'); closeTour();">Neue Kontakt anlegen [16181]</button>
	                    	<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('indexsuche'); closeTour();">Indexsuche [16169]</button>
	                    	<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('blackboard'); closeTour();">Blackboard [16178]</button>
	                    	<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('massenbearbeitung_von_listen'); closeTour();">Massenbearbeitung von Listen [16167]</button>
	                    	<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('individualisierung_des_kontaktbrowsers'); closeTour();">Individualisierung des Kontaktbrowsers [16168]</button>
	                    	<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('arbeiten_mit_multiplen_kontakten'); closeTour();">Arbeiten mit multiplen Kontakten [16172]</button>
	                    	<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('termine_für_kollegen_machen'); closeTour();">Termine für Kollegen machen [16174]</button>
	                	</div>
	            </div>
	            <div class="col-xs-6">
		            <h2>Erweiterte Funktionen</h2>
		            <div class="btn-group-vertical">
							<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('detailsuche'); closeTour();">Detailsuche [16170]</button>
		            			<div class="btn-group-vertical" style="margin-left: 20px;">
		            				<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('detailsuche_speichern'); closeTour();">Detailsuche speichern [16179]</button>
		                			<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('detailsuche_laden_und_zurücksetzen'); closeTour();">Detailsuche laden und zurücksetzen [16180]</button>
		            			</div>
		                	<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('ansprechpartner_zu_firmen_zuordnen'); closeTour();">Ansprechpartner zu Firmen zuordnen [16171]</button>
		                	<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('kontakte_in_beziehung_setzen'); closeTour();">Kontakte in Beziehung setzen [16173]</button>
		                	<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('kontakte_exportieren'); closeTour();">Kontakte exportieren [16175]</button>
		                	<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('eigene_felder_anlegen'); closeTour();">Eigene Felder anlegen [16176]</button>
		                	<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('kontakte_importieren'); closeTour();">Kontakte importieren [16177]</button>
		                	<button type="button" class="btn btn-default noBg noBorder" onclick="startTour2('dsgvo'); closeTour();">DSGVO [16186]</button>
		             	</div>
	            </div>
	          </div>
	          <p id="nothing" style="display: none;">Es wurde nix gefunden.</p>
	    </div>
	</div>
</div>
