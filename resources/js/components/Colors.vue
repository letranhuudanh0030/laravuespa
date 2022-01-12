<template>
    <div>
        <h1 class="font-normal text-3xl text-hd-grey-darkest leading-none mb-6">
            Colors
        </h1>
        <div class="mb-16">
            <p class="mb-8">Primary - Blue, White, Dark Grey</p>
            <div class="flex">
                <div
                    class="text-center mr-8"
                    v-for="color in primary_colors"
                    :key="color.code"
                >
                    <div
                        class="rounded-full shadow-hd-default w-hd-18 h-hd-18 mb-3"
                        :style="`background: ${color.code}`"
                    ></div>
                    <p class="text-xs">{{ color.code }}</p>
                </div>
            </div>
        </div>
        <div class="mb-16">
            <p class="mb-8">Secondary - Category Colors & Accents</p>
            <div class="flex">
                <div
                    class="mr-8 flex flex-col items-center"
                    v-for="color in secondary_colors"
                    :key="color.type"
                >
                    <div
                        class="rounded-full shadow-hd-default w-hd-18 h-hd-18 mb-3"
                        :style="`background-image: linear-gradient(to right, ${color.code_first}, ${color.code_second});`"
                    ></div>
                    <div class="flex justify-center mb-4">
                        <div class="flex flex-col items-center mr-4">
                            <div
                                class="rounded-full shadow-hd-default w-5 h-5 mb-3"
                                :style="`background: ${color.code_first}`"
                            ></div>
                            <p class="text-xs">{{ color.code_first }}</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div
                                class="rounded-full shadow-hd-default w-5 h-5 mb-3"
                                :style="`background: ${color.code_second}`"
                            ></div>
                            <p class="text-xs">{{ color.code_second }}</p>
                        </div>
                    </div>
                    <h5 class="uppercase text-2xs text-hd-grey font-normal">
                        {{ color.type }}
                    </h5>
                </div>
            </div>
        </div>
        <div class="mb-16">
            <p class="mb-8">Icons</p>
            <div class="flex">
                <div
                    class="text-center mr-8"
                    v-for="color in icon_colors"
                    :key="color.code"
                >
                    <div
                        class="rounded-full shadow-hd-default w-hd-18 h-hd-18 mb-3"
                        :style="`background: ${color.code}`"
                    ></div>
                    <p class="text-xs">{{ color.code }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            primary_colors: [
                { code: "#328AF1" },
                { code: "#FFF" },
                { code: "#222222" },
            ],
            secondary_colors: [
                {
                    code_first: "#EC454F",
                    code_second: "#F44881",
                    type: "Laravel",
                },
                {
                    code_first: "#637BFF",
                    code_second: "#21C8F6",
                    type: "PHP",
                },
                {
                    code_first: "#1AAB8B",
                    code_second: "#6EDCC4",
                    type: "TESTING",
                },
                {
                    code_first: "#F19A1A",
                    code_second: "#FFC73C",
                    type: "JAVASCRIPT",
                },
                {
                    code_first: "#8B60ED",
                    code_second: "#B372BD",
                    type: "TOOLING",
                },
            ],
            icon_colors: [
                {
                    code: "#78909C",
                },
            ],
        };
    },
};
</script>

<style></style>
