class Map {
    #map;
    #mapZoomLevel = 16;

    constructor() {
        this._loadMap();
    }

    _loadMap() {
        const latitude = 49.201999;
        const longitude = 18.761772;

        const coords = [latitude, longitude];

        this.#map = L.map("map").setView(coords, this.#mapZoomLevel);
        var marker = L.marker([49.201999, 18.761772]).addTo(this.#map);

        marker.bindPopup("Hello we are here.").openPopup();

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution:
                '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(this.#map);
    }
}

export default new Map();
