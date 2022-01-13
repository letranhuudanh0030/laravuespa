<template>
    <div>
        <h1 class="font-normal text-3xl text-hd-grey-darkest leading-none mb-6">
            Logo Symbol
        </h1>

        <div
            v-for="(symbol, index) in symbols"
            :key="index"
            :class="index < symbols.length - 1 ? 'mb-10' : ''"
        >
            <picture
                style="height: 382px"
                class="block rounded-lg shadow-hd-default flex items-center justify-center mb-6"
                :class="symbol.background"
            >
                <img :src="symbol.img.src" :alt="symbol.img.alt" />
            </picture>

            <div class="flex justify-between">
                <p v-html="symbol.teaser"></p>
                <a
                    download
                    type="button"
                    :href="symbol.img.src"
                    class="border border-grey-light px-8 py-2 rounded-full text-hd-black font-bold text-xs"
                    >{{ symbol.img.fileName }}</a
                >
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            symbols: [
                {
                    img: {
                        src: "/images/symbol/symbol-original.svg",
                        alt: "Symbol Original",
                        fileName: "symbol-original.svg",
                    },
                    background: "",
                    teaser: "Original symbol on <strong>white</strong> background",
                },
                {
                    img: {
                        src: "/images/symbol/symbol-negative.svg",
                        alt: "Symbol Negative",
                        fileName: "symbol-negative.svg",
                    },
                    background: "bg-hd-blue",
                    teaser: "Negative symbol with accent on <strong>dark</strong> background",
                },
                {
                    img: {
                        src: "/images/symbol/symbol-pure-negative.svg",
                        alt: "Symbol Pure Negative",
                        fileName: "symbol-pure-negative.svg",
                    },
                    background: "bg-hd-black",
                    teaser: "Pure negative symbol on <strong>dark</strong> background",
                },
            ],
        };
    },
};
</script>

<style></style>
