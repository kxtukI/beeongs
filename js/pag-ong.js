let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}

window.initMap = initMap;
  </script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBXK-Wk8sr_NeoCkMJo82mHk37d5eOtg0callback=initMap&v=weekly"
      async defer