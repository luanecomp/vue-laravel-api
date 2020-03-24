<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <a href="https://www.capgemini.com/br-pt/" target="_blank">
                <img src="/logo.png">
            </a>
            <br>
            <span class="text-secondary">Banco Capgemini</span>
        </div>

        <transition name="fade">
            <router-view></router-view>
        </transition>
    </div>
</template>

<script>
    export default {}
</script>
