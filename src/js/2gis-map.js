if(document.getElementById('2gis-map')) {
	var map;
	var mapCoord = [52.974126, 36.058124];
	var mapZoom = 18;
	var placeholderCoord = [52.974239, 36.058958];
	var iconUrl = '/wp-content/themes/azbn7theme/img/default/map-placeholder.png';
	var iconRetinaUrl = '/wp-content/themes/azbn7theme/img/default/map-placeholder.png';
	var iconSize = [130, 140];
	var iconAnchor = [64, 130];	
	if($(document).width() < 768) {
		var mapZoom = 16;
		var mapCoord = [52.9744, 36.059];
		var iconUrl = '/wp-content/themes/azbn7theme/img/default/map-placeholder-xs.png';
		var iconRetinaUrl = '/wp-content/themes/azbn7theme/img/default/map-placeholder-xs.png';
		var iconSize = [74, 80];
		var iconAnchor = [36, 74];	 
	}
	DG.then(function () {
		map = DG.map('2gis-map', {
			center: mapCoord,
			zoom: mapZoom,
			scrollWheelZoom: false,
			fullscreenControl: false
		});
		var myIcon = DG.icon({
			iconUrl: iconUrl,
			iconRetinaUrl: iconRetinaUrl,
			iconSize: iconSize,
			iconAnchor: iconAnchor,
			popupAnchor: [0, 0]
		});
		DG.marker(placeholderCoord, {icon: myIcon}).addTo(map).bindPopup('ул. г.&nbsp;Орёл, бульвар&nbsp;Победы&nbsp;6, этаж&nbsp;4 оф.&nbsp;52');
	});
}
