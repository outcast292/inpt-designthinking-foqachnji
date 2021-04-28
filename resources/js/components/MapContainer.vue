<template>
  <div id="map">
    <div id="popup"></div>
  </div>
</template>

<script>
import "ol/ol.css";
// This is library of openlayer for handle map
import Map from "ol/Map";
import View from "ol/View";
import { defaults as defaultControls, ScaleLine } from "ol/control";
import { Tile as TileLayer, Vector as VectorLayer } from "ol/layer";
import { OSM, Vector as VectorSource } from "ol/source";
import Feature from "ol/Feature";
import { Icon, Style } from "ol/style";
import Point from "ol/geom/Point";
import Overlay from "ol/Overlay";

export default {
  mounted() {
    this.initiateMap();
  },
  methods: {
    initiateMap() {
      // create vector layer
      var iconFeature = new Feature({
        geometry: new Point([-617751.81, 4014908.67]),
        name: "Null Island",
        population: 4000,
        rainfall: 500,
        id: 1,
      });

      var iconStyle = new Style({
        image: new Icon({
          anchor: [0.5, 46],
          anchorXUnits: "fraction",
          anchorYUnits: "pixels",
          src: "img/pinpoint.png",
        }),
      });

      iconFeature.setStyle(iconStyle);
      var source = new VectorSource({
        features: [iconFeature],
      });
      var vector = new VectorLayer({
        source: source,
      });
      // create title layer
      var raster = new TileLayer({
        source: new OSM(),
      });
      // create map with 2 layer

      //
      var map = new Map({
        controls: defaultControls().extend([
          new ScaleLine({
            units: "degrees",
          }),
        ]),
        target: "map",
        layers: [raster, vector],
        view: new View({
          center: [-616187.55, 4015164.57],
          zoom: 15,
        }),
      });
      //setting overlay
      var element = document.getElementById("popup");

      var popup = new Overlay({
        element: element,
        positioning: "bottom-center",
        stopEvent: false,
        offset: [0, -50],
      });
      map.addOverlay(popup);

      // display popup on click
      map.on("click", function (evt) {
        var feature = map.forEachFeatureAtPixel(evt.pixel, function (feature) {
          return feature;
        });
        if (feature) {
          var coordinates = feature.getGeometry().getCoordinates();
          popup.setPosition(coordinates);
          $(element).popover({
            placement: "top",
            html: true,
            content: feature.get("name"),
          });
          $(element).popover("show");
          window.location.href = "/service/" + feature.values_.id;
        } else {
          $(element).popover("destroy");
        }
      });

      // change mouse cursor when over marker
    },
  },
};
</script>
<style>
#map {
  margin: 0;
  padding: 0;
  height: 500px;
  width: 100%;
}
</style>