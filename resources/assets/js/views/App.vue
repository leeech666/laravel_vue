<template>
    <div>
        <h1>Vue Router Demo App</h1>

        <p>
		    <router-link :to="{ name: 'food1' }">Chinese Food</router-link> |
            <router-link :to="{ name: 'home' }">Home</router-link> |
            <router-link :to="{ name: 'hello' }">Fashion Demo</router-link> 

        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>
