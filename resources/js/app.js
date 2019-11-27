import Vue from 'vue';

import TeamSelection from './components/TeamSelection.vue';
import PlayerList from './components/PlayerList.vue';
import Player from './components/Player.vue';


Vue.component('team-selection',TeamSelection);
Vue.component('player-list',PlayerList);
Vue.component('player',Player);

const app = new Vue({
    el: '#app'
});