<template>

   <div>
       <li>{{name}}</li>
   </div>
    
</template>

<script>
    export default {

        props: {
            name: {
                type: String,
                required: true
            }
        },

        data() {
            return {
            }
        }
        
    }
</script>