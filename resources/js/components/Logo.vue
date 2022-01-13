<template>
    <div>
        <h1 class="font-normal text-3xl text-hd-grey-darkest leading-none mb-6">
            Full Logo
        </h1>

        <div
            v-for="(logo, index) in logos"
            :key="index"
            :class="index < logos.length - 1 ? 'mb-10' : ''"
        >
            <picture
                style="height: 382px"
                class="block rounded-lg shadow-hd-default flex items-center justify-center mb-6"
                :class="logo.background"
            >
                <img :src="logo.img.src" :alt="logo.img.alt" />
            </picture>

            <div class="flex justify-between">
                <p v-html="logo.teaser"></p>
                <a
                    download
                    type="button"
                    :href="logo.img.src"
                    class="border border-grey-light px-8 py-2 rounded-full text-hd-black font-bold text-xs"
                    >{{ logo.img.fileName }}</a
                >
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            logos: [
                {
                    img: {
                        src: "/images/logo/logo.svg",
                        alt: "Logo",
                        fileName: "logo.svg",
                    },
                    background: "",
                    teaser: "Original logo on <strong>white</strong> background",
                },
                {
                    img: {
                        src: "/images/logo/negative-logo.svg",
                        alt: "Negative Logo",
                        fileName: "negative-logo.svg",
                    },
                    background: "bg-hd-blue",
                    teaser: "Negative logo with accent on <strong>dark</strong> background",
                },
                {
                    img: {
                        src: "/images/logo/pure-negative-logo.svg",
                        alt: "Pure Nagative Logo",
                        fileName: "pure-negative-logo.svg",
                    },
                    background: "bg-hd-black",
                    teaser: "Pure negative logo on <strong>dark</strong> background",
                },
            ],
        };
    },
};
</script>

<style></style>
