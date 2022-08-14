<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <h2> Laravel 8 vue 2 crud example</h2>
        </div>
 
        <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link text-white">Home</router-link>
                    <router-link to="/add" class="nav-item nav-link text-white">Add Cumster</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>
 
<script>
    export default {}
</script>