<!-- Début de la section  -->
<div id="section5" class="container-fluid m-0 p-0 col-xl-12 col-lg-12 col-md-12 col-sm-12 section">
  <div class="row lignesect5">
    <article id="adresse" class="col-xl-4 col-lg-4 col-md-12 col-sm-12 m-5 text-center">
      <p id="psect5">Aformac Vichy</br/></br/>38 avenue de la croix Saint-Martin<br/>03200 Vichy<br/></br/>Numéros: 04-70-08-70-90<br/></br/>Ouvert du lundi au vendredi:<br/>De 9h30 à 12h30 et 13h30 à 17h.</p>
    </article>

  <div id="map" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 m-5 float-right"></div>

  </div>
</div>
<!-- Fin de la section  -->

<!-- Script configuration de la MAP -->
<script type="text/javascript">
var map;
var marker;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 46.1158089, lng: 3.4358138000000054},
    zoom: 15
    });

   marker = new google.maps.Marker({
    position: {lat: 46.1158089, lng: 3.4358138000000054},
    map: map,
    title: 'AFORMAC'
    });
    marker.setMap(map);
}
  
</script>
<!-- FIN Script configuration de la MAP -->


<!-- Script appelant API MAP -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSBobvPyqEMcubZhaCZ_OWa8n8HM4DTYw&callback=initMap" async defer>
</script>
<!-- FIN Script appelant API MAP -->