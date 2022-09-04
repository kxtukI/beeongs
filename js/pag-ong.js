mapboxgl.accessToken = 'pk.eyJ1Ijoia3h0dWtpIiwiYSI6ImNsNm8yNnN1NjA2am8zcHF1NmFpdm9lMGoifQ.R2xbOwaegs8TLqVFoykstw';
      const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/kxtuki/cl6o11we3006714lsga6cwt62',
  center: [-46.9636459, -22.4414348],
  zoom: 16
});
const marker = new mapboxgl.Marker({
    color: "#E64848",
})
.setLngLat([-46.9636459, -22.4414348])
.setPopup(new mapboxgl.Popup().setHTML("<h1 class='popup-title'>PROJETO ICA</h1><p class='popup-text'>Avenida Brasília, n.º 350 - Lot. Nova Mogi, Mogi Mirim - SP, 13800-280</p>"))
.addTo(map);

const btnMobile = document.getElementById("btn-mobile");

function menuMobile() {
  const navbar = document.getElementById("navbar");
  navbar.classList.toggle("active");
}

btnMobile.addEventListener("click", menuMobile);