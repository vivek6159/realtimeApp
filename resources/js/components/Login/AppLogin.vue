<template>
    <v-container>
        <v-form @submit.prevent="login">
            <v-text-field v-model="form.email" type="email" label="E-mail" required></v-text-field>

            <v-text-field v-model="form.password" label="Password" type="Password" required></v-text-field>

            <v-btn type="submit">Login</v-btn>
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
    methods: {
        login() {
            User.login(this.form);
        }
    }
};
</script>

<style lang="scss" scoped>
</style>