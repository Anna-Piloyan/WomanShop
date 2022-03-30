if (window.navigator.geolocation) {
    let map;

    function initMap() {
        const uluru = {
            lat: 49.87,
            lng: 24.02
        };
        map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: 49.87,
                lng: 24.02
            },
            zoom: 8,
        });
        const geocoder = new google.maps.Geocoder();

        const infowindow = new google.maps.InfoWindow();
        const latlng = {
            lat: 49.87,
            lng: 24.02,
        };
        geocoder.geocode({
            location: latlng
        }).then((response) => {
            if (response.results[0]) {
                map.setZoom(17);

                const marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                });
            }
        });
    }
    initMap();
}