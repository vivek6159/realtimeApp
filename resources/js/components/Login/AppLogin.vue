<template>
    <v-container>
        <v-form @submit.prevent="login">
            <v-text-field v-model="form.email" type="email" label="E-mail" required></v-text-field>

            <v-text-field v-model="form.password" label="Password" type="Password" required></v-text-field>

            <v-btn type="submit">Login</v-btn>
            <v-btn @click="clear">clear</v-btn>
            <router-link to="/signup">
                <v-btn flat>Sign up</v-btn>
            </router-link>
        </v-form>
    </v-container>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: null,
                password: null
            }
        };
    },
    created() {
        if (User.loggedIn()) {
            this.$router.push({ name: "forum" });
        }
    },
    methods: {
        login() {
            User.login(this.form);
            //this.$router.push({ name: "forum" });
        },
        clear() {
            this.form.email = null;
            this.form.password = null;
        }
    }
};
</script>

<style lang="scss" scoped>
</style>