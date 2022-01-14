<template>
    <div>
        <h1 class="font-normal text-3xl text-hd-grey-darkest leading-none mb-6">
            Your Achievements
        </h1>

        <input
            type="text"
            placeholder="Your Laracasts API Token"
            v-model="token"
            class="border p-2 rounded w-full mb-4"
            @keyup.enter="fetchAchievements"
        />

        <p
            class="text-red-500 italic text-sm"
            v-if="message"
            v-text="message"
        ></p>

        <ul class="list-disc pl-8">
            <li
                v-for="(achievement, index) in achievements"
                :key="index"
                v-text="achievement.name"
            ></li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return { achievements: [], token: "", message: "" };
    },
    methods: {
        fetchAchievements() {
            axios
                .get(
                    `http://localhost:8000/api/achievements?api_token=${this.token}`
                )
                .catch((error) => {
                    this.message = error.response.data.message;
                    this.achievements = null;
                })
                .then(({ data }) => {
                    this.achievements = data;
                    this.message = null;
                });
        },
    },
};
</script>

<style></style>
