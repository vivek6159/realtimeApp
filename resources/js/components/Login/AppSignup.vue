<template>
    <v-container>
        <v-form @submit.prevent="signup">
            <v-text-field
                v-model="form.name"
                :error-messages="errors.name"
                type="text"
                label="Name"
                required
            ></v-text-field>
            <v-text-field
                v-model="form.email"
                :error-messages="errors.email"
                type="email"
                label="E-mail"
                required
            ></v-text-field>
            <v-text-field
                v-model="form.password"
                :error-messages="errors.password"
                label="Password"
                type="Password"
                required
            ></v-text-field>
            <v-text-field
                v-model="form.password_confirmation"
                :error-messages="errors.password"
                label="Password"
                type="Password"
                required
            ></v-text-field>
            <v-btn type="submit">Sign up</v-btn>
            <v-btn @click="clear">clear</v-btn>
            <router-link to="/login">
                <v-btn flat>Login</v-btn>
            </router-link>
        </v-form>
    </v-container>
</template>

<script>
export default {
    data() {
        return {
            form: {
                name: null,
                email: null,
                password: null,
                password_confirmation: null
            },
            errors: {}
        };
    },
    methods: {
        signup() {
            axios
                .post("/api/auth/signup", this.form)
                .then(res => User.responseAfterLogin(res))
                .catch(error => (this.errors = error.response.data.errors));
        },
        clear() {
            this.form.name = null;
            this.form.email = null;
            this.form.password = null;
            this.form.password_confirmation = null;
            this.errors = {};
        }
    }
};
</script>

<style>
</style>
