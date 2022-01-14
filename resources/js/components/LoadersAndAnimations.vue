<template>
    <div>
        <h1 class="font-normal text-3xl text-hd-grey-darkest leading-none mb-8">
            Loaders And Animations
        </h1>
        <p class="mb-10 text-hd-grey-darker leading-normal">
            This spinner uses AirBnb's
            <a href="http://airbnb.io/lottie/#/web">Lottie</a> library to render
            its animation. You may download the necessary assets below.
        </p>

        <div
            class="border border-hd-grey-lighter rounded-lg flex items-center justify-center mb-8"
        >
            <div ref="lottie" class="w-64 h-96"></div>
        </div>
        <a
            href="/animations/laracasts-spinner.zip"
            download
            class="border border-hd-grey-light px-10 py-2 rounded-full text-hd-black font-bold text-xs"
            >spinner.zip</a
        >
    </div>
</template>

<script>
import lottie from "lottie-web";
export default {
    mounted() {
        lottie.loadAnimation({
            container: this.$refs.lottie,
            renderer: "svg",
            loop: true,
            autoplay: true,
            path: "/animations/laracasts-spinner/data.json",
        });
    },
};
</script>

<style></style>
