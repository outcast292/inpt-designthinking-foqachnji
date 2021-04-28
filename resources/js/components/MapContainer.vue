<template>
  <div id="map"></div>
</template>

<script>
import "ol/ol.css";
// This is library of openlayer for handle map
import Map from "ol/Map";
import View from "ol/View";
import { defaults as defaultControls, ScaleLine } from "ol/control";
import { Tile as TileLayer, Vector as VectorLayer } from "ol/layer";
import { OSM, Vector as VectorSource } from "ol/source";
import {fromLonLat} from 'ol/proj';

export default {
  data() {
    return {
      position: null,
    };
  },
  mounted() {
    this.initiateMap();
  },
  methods: {
    initiateMap() {
      // create vector layer
      var source = new VectorSource();
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
          center: [-616187.55 ,4015164.57],
          zoom: 15,
        }),
      });
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