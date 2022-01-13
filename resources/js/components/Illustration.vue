<template>
    <div>
        <h1
            class="font-normal text-3xl text-hd-grey-darkest leading-none mb-10"
        >
            Illustration
        </h1>

        <div
            v-for="(illustration, index) in illustrations"
            :key="index"
            class="lg:flex mb-12"
        >
            <picture
                class="rounded-lg bg-hd-blue py-6 px-10 lg:mr-10 flex flex-1 justify-center items-center"
            >
                <img
                    :src="illustration.img.src"
                    :alt="illustration.img.alt"
                    class="w-32"
                />
            </picture>
            <div style="flex: 1.4 1 0%">
                <h2 class="font-light text-xl mb-4 mt-4">
                    {{ illustration.title }}
                </h2>
                <p
                    v-html="illustration.teaser"
                    class="leading-relaxed text-hd-grey-darker text-sm mb-8 font-light"
                ></p>
                <a :href="illustration.img.src" download class="button">{{
                    illustration.img.fileName
                }}</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            illustrations: [
                {
                    img: {
                        src: "/images/illustration/clarity.svg",
                        alt: "Clarity",
                        fileName: "clarity.svg",
                    },
                    title: "Clarity",
                    teaser: "Anyone can fumble around until a program works. But to write truly clear code...is far more difficult.",
                },
                {
                    img: {
                        src: "/images/illustration/fun.svg",
                        alt: "Fun",
                        fileName: "fun.svg",
                    },
                    title: "Fun",
                    teaser: "If you’re not having fun, what's the point? As exhausting as programming can sometimes be, don't forget the simple joy of writing in a code editor, and seeing it reflected in the browser.",
                },
                {
                    img: {
                        src: "/images/illustration/experiment.svg",
                        alt: "Experiment",
                        fileName: "experiment.svg",
                    },
                    title: "Experiment",
                    teaser: "Each step of a new project often requires hours of research and experimentation.",
                },
                {
                    img: {
                        src: "/images/illustration/strength.svg",
                        alt: "Strength",
                        fileName: "strength.svg",
                    },
                    title: "Strength",
                    teaser: 'You\'ve spent hours staring at your computer screen. "Why isn\'t it working?" And then, finally, in a perfect "aha" moment, you level up and solve the problem.',
                },
                {
                    img: {
                        src: "/images/illustration/information.svg",
                        alt: "Information",
                        fileName: "information.svg",
                    },
                    title: "Information",
                    teaser: 'Too often, we lack the mental "tools" to solve a particular problem. Thankfully, that\'s what the forum is for!',
                },
            ],
        };
    },
};
</script>

<style></style>
