<template>

   <div class="wrapper">

        <player-list>
            <h1>unpicked players</h1>
            <input type="text" v-model="newPlayer">
            <button :disabled="!newPlayer" @click="addPlayer">Add Player</button>

            <ul>
                <player v-for="player in unteamedPlayers" :key="player.id" :name="player.name"></player>
            </ul>
        </player-list>

        <player-list>
            <h1>team 1</h1>
        </player-list>

        <player-list>
            <h1>team 2</h1>
        </player-list>

   </div>
    
</template>

<script>
    export default {
        data() {
            return {
                newPlayer: '',
                playerList: [],
                ID: 0
            }
        },

        computed: {
            unteamedPlayers() {
                return this.playerList.filter((player)=>player.team === 0);
            }
        },

        methods: {
            addPlayer() {
                if(this.newPlayer) {
                    this.playerList.push(
                        {id: this.getID(), name: this.newPlayer, team: 0}
                    );
                }

                this.newPlayer = '';
            },

            getID() {
                return this.ID++;
            }
        }
        
    }
</script>


<style lang="css">
    .wrapper {
        display: flex;
    }
</style>