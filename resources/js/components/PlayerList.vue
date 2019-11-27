<template>

   <div class="test">
       <slot></slot>
   </div>
    
</template>

<script>
    export default {

        data() {
            return {
            }
        }
        
    }
</script>

<style lang="css">
    .test {
        flex: 1 0 33%;
        text-align: center;
    }
</style>