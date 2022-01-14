<template>
    <div>
        <h1 class="font-normal text-3xl text-hd-grey-darkest leading-none mb-6">
            Laracasts Stats
        </h1>
        <ul>
            <li><strong>Total Series:</strong> {{ series }}</li>
            <li><strong>Total lessons:</strong> {{ lessons }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            series: 0,
            lessons: 0,
        };
    },

    created() {
        axios
            .get("http://localhost:8000/api/stats")
            .then((response) => response.data)
            .then((data) => {
                this.series = data.series;
                this.lessons = data.lessons;
            });
    },
};
</script>

<style></style>
