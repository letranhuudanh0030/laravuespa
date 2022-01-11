import Logo from "./components/Logo.vue";
import LogoSymbol from "./components/LogoSymbol.vue";
import Colors from "./components/Colors.vue";
import Typography from "./components/Typography.vue";
import Mascot from "./components/Mascot.vue";
import Illustration from "./components/Illustration.vue";
import LoadersAndAnimations from "./components/LoadersAndAnimations.vue";
import Wallpaper from "./components/Wallpaper.vue";
import NotFound from "./components/NotFound.vue";

export default {
    mode: "history",
    linkActiveClass: "font-bold",
    routes: [
        {
            path: "*",
            component: NotFound,
        },
        {
            path: "/",
            component: Logo,
        },
        {
            path: "/logo-symbol",
            component: LogoSymbol,
        },
        {
            path: "/colors",
            component: Colors,
        },
        {
            path: "/typography",
            component: Typography,
        },
        {
            path: "/mascot",
            component: Mascot,
        },
        {
            path: "/illustration",
            component: Illustration,
        },
        {
            path: "/loaders-and-animations",
            component: LoadersAndAnimations,
        },
        {
            path: "/wallpaper",
            component: Wallpaper,
        },
    ],
};
