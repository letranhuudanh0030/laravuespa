<template>
    <div>
        <h1 class="font-normal text-3xl text-hd-grey-darkest leading-none mb-6">
            Wallpaper
        </h1>
        <div
            v-for="(wallpaper, index) in wallpapers"
            :key="index"
            class="max-w-md"
            :class="index < wallpapers.length - 1 ? 'mb-12' : ''"
        >
            <a :href="wallpaper.img.src">
                <img
                    :src="wallpaper.img.src"
                    :alt="wallpaper.img.alt"
                    class="mb-4"
                />
            </a>
            <div class="flex justify-between items-center">
                <h2 class="font-normal text-base">{{ wallpaper.teaser }}</h2>
                <a :href="wallpaper.img.src" download class="button">
                    {{ wallpaper.img.fileName }}
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            wallpapers: [
                {
                    img: {
                        src: "/images/wallpaper/clarity.png",
                        alt: "Clarity",
                        fileName: "clarity.png",
                    },
                    teaser: "Inspire Clarity",
                },
                {
                    img: {
                        src: "/images/wallpaper/strength.png",
                        alt: "Strength",
                        fileName: "strength.png",
                    },
                    teaser: "Inspire Strength",
                },
                {
                    img: {
                        src: "/images/wallpaper/knowledge.png",
                        alt: "Knowledge",
                        fileName: "knowledge.png",
                    },
                    teaser: "Inspire Knowledge",
                },
                {
                    img: {
                        src: "/images/wallpaper/fun.png",
                        alt: "Fun",
                        fileName: "fun.png",
                    },
                    teaser: "Inspire Fun",
                },
                {
                    img: {
                        src: "/images/wallpaper/experimenting.png",
                        alt: "Experimenting",
                        fileName: "experimenting.png",
                    },
                    teaser: "Inspire Experimenting",
                },
                {
                    img: {
                        src: "/images/wallpaper/extra.png",
                        alt: "Extra",
                        fileName: "extra.png",
                    },
                    teaser: "Extra",
                },
                {
                    img: {
                        src: "/images/wallpaper/inspire-me.png",
                        alt: "Inspire Me",
                        fileName: "inspire-me.png",
                    },
                    teaser: "Inspire Me",
                },
            ],
        };
    },
};
</script>

<style></style>
