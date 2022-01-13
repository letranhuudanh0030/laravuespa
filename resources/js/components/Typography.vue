<template>
    <div>
        <h1 class="font-normal text-3xl text-hd-grey-darkest leading-none mb-6">
            Open Sans
        </h1>
        <div
            v-for="(font, index) in fonts"
            :key="index"
            class="rounded-lg p-6 lg:py-12 lg:px-16 max-w-lg"
            :class="
                index < fonts.length - 1
                    ? `mb-10 ${font.background}`
                    : font.background
            "
            :style="`color: ${font.textColor}`"
        >
            <div class="flex justify-end mb-10 items-center">
                <div
                    class="rounded-full shadow-hd-default w-8 h-8 mr-3"
                    :style="`background: ${font.textColor}`"
                ></div>
                <span class="text-xs">{{ font.textColor }}</span>
            </div>
            <div
                v-for="(style, index) in font.styles"
                :key="index"
                class="flex justify-between"
                :class="index < font.styles.length - 1 ? 'mb-6' : ''"
            >
                <strong class="text-xl" :class="style.class">
                    {{ style.name }}
                </strong>
                <span class="text-xl" :class="style.class">
                    {{ style.size }}
                </span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            fonts: [
                {
                    background: "bg-hd-grey-lightest",
                    textColor: "#222222",
                    styles: [
                        {
                            name: "Open Sans Light",
                            size: "300",
                            class: "font-light",
                        },
                        {
                            name: "Open Sans Regular",
                            size: "400",
                            class: "font-normal",
                        },
                        {
                            name: "Open Sans Semi Bold",
                            size: "600",
                            class: "font-semibold",
                        },
                        {
                            name: "Open Sans Bold",
                            size: "700",
                            class: "font-bold",
                        },
                    ],
                },
                {
                    background: "bg-hd-black",
                    textColor: "#FFFFFF",
                    styles: [
                        {
                            name: "Open Sans Light",
                            size: "300",
                            class: "font-light",
                        },
                        {
                            name: "Open Sans Regular",
                            size: "400",
                            class: "font-normal",
                        },
                        {
                            name: "Open Sans Semi Bold",
                            size: "600",
                            class: "font-semibold",
                        },
                        {
                            name: "Open Sans Bold",
                            size: "700",
                            class: "font-bold",
                        },
                    ],
                },
            ],
        };
    },
};
</script>

<style></style>
