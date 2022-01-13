<template>
    <div>
        <h1
            class="font-normal text-3xl text-hd-grey-darkest leading-none mb-12"
        >
            Meet "Lary"
        </h1>

        <div
            class="flex flex-col items-center text-center lg:flex-row lg:text-left mb-12"
        >
            <div class="lg:mr-8 flex flex-col items-center">
                <img
                    :src="mascots[0].img.src"
                    :alt="mascots[0].img.src"
                    class="mb-4"
                />
                <a :href="mascots[0].img.src" class="button">{{
                    mascots[0].img.fileName
                }}</a>
            </div>
            <p class="leading-relaxed w-64 mt-8 lg:-mt-8">
                {{ mascots[0].teaser }}
            </p>
        </div>
        <div class="lg:flex">
            <div
                v-for="(mascot, index) in mascots"
                :key="index"
                v-if="index !== 0"
                class="border border-grey-lighter rounded-lg flex flex-col items-center justify-center pt-6 pb-6 px-8 mx-auto mb-6 lg:mb-0"
                :class="
                    index < mascots.length - 1 ? 'lg:ml-0 lg:mr-6' : 'lg:mx-0'
                "
            >
                <a :href="mascot.img.src" class="mb-5 mt-auto">
                    <img :src="mascot.img.src" :alt="mascot.img.alt" />
                </a>
                <a
                    :href="mascot.img.src"
                    download
                    class="text-hd-grey font-semibold text-2xs hover:underline mt-auto"
                >
                    {{ mascot.img.fileName }}
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            mascots: [
                {
                    img: {
                        src: "/images/mascot/larydefault.svg",
                        alt: "Lary Default",
                        fileName: "larydefault.svg",
                    },
                    teaser: "Quirky. Dynamic. Smartsy. He’s got it all. Who wouldn’t want him?",
                },
                {
                    img: {
                        src: "/images/mascot/larypeek.svg",
                        alt: "Lary Peek",
                        fileName: "larypeek.svg",
                    },
                    teaser: "",
                },
                {
                    img: {
                        src: "/images/mascot/larywink.svg",
                        alt: "Lary Wink",
                        fileName: "larywink.svg",
                    },
                    teaser: "",
                },
                {
                    img: {
                        src: "/images/mascot/larysmart.svg",
                        alt: "Lary Smart",
                        fileName: "larysmart.svg",
                    },
                    teaser: "",
                },
                {
                    img: {
                        src: "/images/mascot/larylab.svg",
                        alt: "Lary Lab",
                        fileName: "larylab.svg",
                    },
                    teaser: "",
                },
            ],
        };
    },
};
</script>

<style></style>
