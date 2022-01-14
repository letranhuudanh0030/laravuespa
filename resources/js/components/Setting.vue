<template>
    <div>
        <h1 class="font-normal text-3xl text-hd-grey-darkest leading-none mb-6">
            Settings
        </h1>
        <hr />
        <h1 class="font-normal text-2xl mb-4 mt-6">General Token:</h1>
        <input
            type="text"
            placeholder="Your Laracasts API Token"
            v-model="token"
            class="border p-2 rounded w-full mb-4"
        />
        <button
            class="button hover:bg-hd-blue hover:text-white uppercase"
            @click="generalToken"
        >
            General New Access Token
        </button>
        <p v-if="newToken" class="my-4 text-xl text-green-500">
            <strong class="text-hd-black">New API Token:</strong> {{ newToken }}
        </p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            newToken: "",
            token: "",
        };
    },
    methods: {
        generalToken() {
            axios
                .post("http://localhost:8000/api/general-token", {
                    api_token: this.token,
                })
                .then(({ data }) => {
                    console.log(data);
                    this.newToken = data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

<style></style>
