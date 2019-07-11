<template>
    <div>
        <app-toolbar></app-toolbar>
        <app-footer></app-footer>
        <router-view></router-view>
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