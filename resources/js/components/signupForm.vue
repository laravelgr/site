<template>
    <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
        <form action="" method="POST">
            <h1 class="text-2xl text-gray-700 text-left">Νέος λογαριασμός</h1>
            <p class="pb-8 text-gray-600">Ενημερωθείτε με τα νέα της κοινότητας, για τις επόμενες συναντήσεις μας και
                βέβαια για πρόσβαση στο Slack κανάλι της κοινότητας.</p>
            <input
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="fullname"
                    placeholder="Full Name"
                    v-model="input.fullname"
            />
            <input
                    type="email"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="email"
                    placeholder="Email"
                    v-model="input.email"
            />
            <input
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="password"
                    placeholder="Password"
                    v-model="input.password"
            />
            <input
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="confirm_password"
                    v-model="input.confirm_password"
                    placeholder="Confirm Password"/>
            <button type="submit"
                    class="w-full text-center py-3 rounded bg-green text-white bg-green-600 hover:bg-green-dark focus:outline-none"
                    @click.prevent="signup()">ΔΗΜΙΟΥΡΓΙΑ ΛΟΓΑΡΙΑΣΜΟΥ
            </button>
        </form>
    </div>
</template>

<script>
    export default {
        name: "signupForm",
        data() {
            return {
                errors:[],
                input: {
                    fullname: '',
                    email: '',
                    password: '',
                    confirm_password: ''
                }
            }
        },
        methods: {
            signup() {
                this.errors = [];
                axios.post('/signup', this.input).then(response => {
                    // todo redirect / thank you
                }).catch(error => {
                    this.errors = error.response.data.errors;
                });
            }
        }
    }
</script>

<style scoped>

</style>