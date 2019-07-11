<template>
    <div>
        <app-toolbar></app-toolbar>
        <router-view></router-view>
        <app-footer></app-footer>
    </div>
</template>

<script>
import AppToolbar from "./AppToolbar";
import AppFooter from "./AppFooter";
import AppLogin from "./Login/AppLogin";
export default {
    components: {
        AppToolbar,
        AppFooter,
        AppLogin
    }
};
</script>

<style lang="scss" scoped>
</style>