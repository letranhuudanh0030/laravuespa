let Logo = () => import("./components/Logo.vue");
let LogoSymbol = () => import("./components/LogoSymbol.vue");
let Colors = () => import("./components/Colors.vue");
let Typography = () => import("./components/Typography.vue");
let Mascot = () => import("./components/Mascot.vue");
let Illustration = () => import("./components/Illustration.vue");
let LoadersAndAnimations = () =>
    import("./components/LoadersAndAnimations.vue");
let Wallpaper = () => import("./components/Wallpaper.vue");
let SiteStats = () => import("./components/SiteStats.vue");
let Achievements = () => import("./components/Achievements.vue");
let NotFound = () => import("./components/NotFound.vue");
let Setting = () => import("./components/Setting.vue");

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
        {
            path: "/site-stats",
            component: SiteStats,
        },
        {
            path: "/achievements",
            component: Achievements,
        },
        {
            path: "/setting",
            component: Setting,
        },
    ],
};
