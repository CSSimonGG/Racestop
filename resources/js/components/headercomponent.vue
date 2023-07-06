<script>
export default {
    data() {
        return {
            showMenu: false,
        };
    },
    methods: {
        toggleNav: function () {
            this.showMenu = !this.showMenu;
            this.toggleScrolling();
        },
        toggleScrolling() {
            if (this.showMenu) {
                document.body.classList.add("overflow-hidden");
            } else {
                document.body.classList.remove("overflow-hidden");
            }
        },
    },
};
</script>

<template>
    <header class="bg-white h-[3.25rem] 2xsm:h-[7.25rem] block sticky inset-0">
        <div
            class="z-20 absolute inset-0 max-xl:w-9/12 xl:w-8/12 3xl:w-64p 4xl:w-3/5 5xl:w-7/12 6xl:w-56p 7xl:w-54p bg-white h-[3.25rem]"
        ></div>
        <div class="5xsm:bg-dark-red h-[3.25rem] relative">
            <div class="max-w-5xl mx-auto flex items-center justify-between">
                <div class="z-100 bg-white mx-4 w-8/12">
                    <span
                        class="text-light-red text-xl 3xsm:text-2xl 2xsm:text-3xl font-extrabold"
                    >
                        <a href="/"> RACESTOP </a>
                    </span>
                </div>
                <div
                    class="z-30 bg-light-red max-5xsm:mr-0 max-2xsm:mr-3 lg:w-2/12 h-[3.25rem] 5xsm:clip-polygon"
                >
                    <ul
                        class="max-2xsm:hidden flex place-items-center my-4 ml-10 pr-8"
                    >
                        <a
                            class="pr-2"
                            href="https://www.instagram.com/"
                            target="_blank"
                            title="Racestop on Instagram"
                        >
                            <li>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0,0,256,256"
                                    width="16px"
                                    height="16px"
                                    fill-rule="nonzero"
                                >
                                    <g
                                        fill="#ffffff"
                                        fill-rule="nonzero"
                                        stroke="none"
                                        stroke-width="1"
                                        stroke-linecap="butt"
                                        stroke-linejoin="miter"
                                        stroke-miterlimit="10"
                                        stroke-dasharray=""
                                        stroke-dashoffset="0"
                                        font-family="none"
                                        font-weight="none"
                                        font-size="none"
                                        text-anchor="none"
                                        style="mix-blend-mode: normal"
                                    >
                                        <g transform="scale(9.84615,9.84615)">
                                            <path
                                                d="M7.54688,0c-4.15625,0 -7.54687,3.39063 -7.54687,7.54688v10.90625c0,4.15625 3.39063,7.54688 7.54688,7.54688h10.90625c4.15625,0 7.54688,-3.39062 7.54688,-7.54687v-10.90625c0,-4.15625 -3.39062,-7.54687 -7.54687,-7.54687zM7.54688,2h10.90625c3.07422,0 5.54688,2.46875 5.54688,5.54688v10.90625c0,3.07422 -2.46875,5.54688 -5.54687,5.54688h-10.90625c-3.07422,0 -5.54687,-2.46875 -5.54687,-5.54687v-10.90625c0,-3.07422 2.46875,-5.54687 5.54688,-5.54687zM20.5,4c-0.82812,0 -1.5,0.67188 -1.5,1.5c0,0.82813 0.67188,1.5 1.5,1.5c0.82813,0 1.5,-0.67187 1.5,-1.5c0,-0.82812 -0.67187,-1.5 -1.5,-1.5zM13,6c-3.85547,0 -7,3.14453 -7,7c0,3.85547 3.14453,7 7,7c3.85547,0 7,-3.14453 7,-7c0,-3.85547 -3.14453,-7 -7,-7zM13,8c2.77344,0 5,2.22656 5,5c0,2.77344 -2.22656,5 -5,5c-2.77344,0 -5,-2.22656 -5,-5c0,-2.77344 2.22656,-5 5,-5z"
                                            />
                                        </g>
                                    </g>
                                </svg>
                            </li>
                        </a>
                        <a
                            class="pr-2"
                            href="https://www.facebook.com/"
                            target="_blank"
                            title="Racestop on Facebook"
                        >
                            <li>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0,0,256,256"
                                    width="16px"
                                    height="16px"
                                    fill-rule="nonzero"
                                >
                                    <g
                                        fill="#ffffff"
                                        fill-rule="nonzero"
                                        stroke="none"
                                        stroke-width="1"
                                        stroke-linecap="butt"
                                        stroke-linejoin="miter"
                                        stroke-miterlimit="10"
                                        stroke-dasharray=""
                                        stroke-dashoffset="0"
                                        font-family="none"
                                        font-weight="none"
                                        font-size="none"
                                        text-anchor="none"
                                        style="mix-blend-mode: normal"
                                    >
                                        <g transform="scale(10.66667,10.66667)">
                                            <path
                                                d="M12,2c-5.523,0 -10,4.477 -10,10c0,5.013 3.693,9.153 8.505,9.876v-7.226h-2.474v-2.629h2.474v-1.749c0,-2.896 1.411,-4.167 3.818,-4.167c1.153,0 1.762,0.085 2.051,0.124v2.294h-1.642c-1.022,0 -1.379,0.969 -1.379,2.061v1.437h2.995l-0.406,2.629h-2.588v7.247c4.881,-0.661 8.646,-4.835 8.646,-9.897c0,-5.523 -4.477,-10 -10,-10z"
                                            />
                                        </g>
                                    </g>
                                </svg>
                            </li>
                        </a>
                        <a
                            class="pr-2"
                            href="https://www.twitter.com/"
                            target="_blank"
                            title="Racestop on Twitter"
                        >
                            <li>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0,0,256,256"
                                    width="16px"
                                    height="16px"
                                    fill-rule="nonzero"
                                >
                                    <g
                                        fill="#ffffff"
                                        fill-rule="nonzero"
                                        stroke="none"
                                        stroke-width="1"
                                        stroke-linecap="butt"
                                        stroke-linejoin="miter"
                                        stroke-miterlimit="10"
                                        stroke-dasharray=""
                                        stroke-dashoffset="0"
                                        font-family="none"
                                        font-weight="none"
                                        font-size="none"
                                        text-anchor="none"
                                        style="mix-blend-mode: normal"
                                    >
                                        <g transform="scale(10.66667,10.66667)">
                                            <path
                                                d="M22,3.999c-0.78,0.463 -2.345,1.094 -3.265,1.276c-0.027,0.007 -0.049,0.016 -0.075,0.023c-0.813,-0.802 -1.927,-1.299 -3.16,-1.299c-2.485,0 -4.5,2.015 -4.5,4.5c0,0.131 -0.011,0.372 0,0.5c-3.353,0 -5.905,-1.756 -7.735,-4c-0.199,0.5 -0.286,1.29 -0.286,2.032c0,1.401 1.095,2.777 2.8,3.63c-0.314,0.081 -0.66,0.139 -1.02,0.139c-0.581,0 -1.196,-0.153 -1.759,-0.617c0,0.017 0,0.033 0,0.051c0,1.958 2.078,3.291 3.926,3.662c-0.375,0.221 -1.131,0.243 -1.5,0.243c-0.26,0 -1.18,-0.119 -1.426,-0.165c0.514,1.605 2.368,2.507 4.135,2.539c-1.382,1.084 -2.341,1.486 -5.171,1.486h-0.964c1.788,1.146 4.065,2.001 6.347,2.001c7.43,0 11.653,-5.663 11.653,-11.001c0,-0.086 -0.002,-0.266 -0.005,-0.447c0,-0.018 0.005,-0.035 0.005,-0.053c0,-0.027 -0.008,-0.053 -0.008,-0.08c-0.003,-0.136 -0.006,-0.263 -0.009,-0.329c0.79,-0.57 1.475,-1.281 2.017,-2.091c-0.725,0.322 -1.503,0.538 -2.32,0.636c0.834,-0.5 2.019,-1.692 2.32,-2.636z"
                                            />
                                        </g>
                                    </g>
                                </svg>
                            </li>
                        </a>
                        <a
                            href="https://www.tiktok.com/"
                            target="_blank"
                            title="Racestop on Tiktok"
                        >
                            <li>
                                <svg
                                    fill="#ffffff"
                                    viewBox="0 0 32 32"
                                    version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    stroke="#ffffff"
                                    width="16px"
                                    height="16px"
                                >
                                    <g
                                        id="SVGRepo_bgCarrier"
                                        stroke-width="0"
                                    ></g>
                                    <g
                                        id="SVGRepo_tracerCarrier"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>tiktok</title>
                                        <path
                                            d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z"
                                        ></path>
                                    </g>
                                </svg>
                            </li>
                        </a>
                    </ul>
                    <span class="flex items-center 2xsm:hidden mx-10 mt-4">
                        <div @click="toggleNav" class="flex">
                            <button
                                type="button"
                                class="flex"
                                aria-label="toggle menu"
                            >
                                <span
                                    :class="showMenu ? 'hidden' : 'flex'"
                                ></span>
                                <span
                                    :class="showMenu ? 'flex' : 'hidden'"
                                ></span>
                                <svg
                                    :class="showMenu ? 'hidden' : 'flex'"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 50 50"
                                    width="24px"
                                    height="24px"
                                    class=""
                                >
                                    <path
                                        d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"
                                    />
                                </svg>
                                <svg
                                    :class="showMenu ? 'flex' : 'hidden'"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 30 30"
                                    width="24px"
                                    height="24px"
                                    class=""
                                >
                                    <path
                                        d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"
                                    />
                                </svg>
                            </button>
                        </div>
                    </span>
                </div>
                <div
                    class="z-40 max-4xsm:hidden bg-dark-red w-2/12 h-[3.25rem]"
                >
                    <!-- Not Loged In- -->
                    <span
                        class="flex max-3xsm:items-center max-3xsm:justify-center my-3"
                    >
                        <a href="/profile" class="pr-2"
                            ><img
                                src="/build/images/user-profile.png"
                                alt="user"
                                class="w-8 h-8"
                            />
                        </a>
                        <a
                            href="/profile"
                            class="max-2xsm:hidden text-white font-bold my-1"
                            >Profile</a
                        >
                    </span>
                </div>
            </div>
        </div>
        <div class="max-2xsm:hidden max-w-5xl mx-auto p-4">
            <nav class="flex font-night font-bold">
                <ul class="flex max-w-5xl">
                    <li>
                        <span class="pr-6 pb-5 pt-[19px]">
                            <a href="/">HOME</a>
                        </span>
                    </li>
                    <li>
                        <span class="hover:bg-yellow px-6 pb-5 pt-[19px]">
                            <a href="/f1/news">F1 NEWS</a>
                        </span>
                    </li>
                    <li>
                        <span class="hover:bg-yellow px-6 pb-5 pt-[19px]">
                            <a href="/f1/calender">F1 CALENDER</a>
                        </span>
                    </li>
                    <li>
                        <span class="hover:bg-yellow px-6 pb-5 pt-[19px]">
                            <a href="/f1/statistics">F1 STATISTICS</a>
                        </span>
                    </li>
                    <li class="max-sm:hidden">
                        <span class="hover:bg-yellow px-6 pb-5 pt-[19px]">
                            <a href="/f1/standings">F1 STANDINGS</a>
                        </span>
                    </li>
                    <li class="max-lg:hidden dropdown group relative">
                        <span
                            class="z-0 dropdown-toggle group-hover:bg-yellow px-5 pb-5 pt-[19px]"
                        >
                            <a href="/championships">CHAMPIONSHIPS</a>
                            <svg
                                class="z-40 absolute top-2.5 left-[72px]"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="gray"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                width="32"
                                height="32"
                            >
                                <line x1="12" y1="17" x2="16" y2="12" />
                                <line x1="12" y1="17" x2="8" y2="12" />
                            </svg>
                        </span>
                        <div
                            class="dropdown-content hidden group-hover:block hover:block absolute bg-night text-white px-4 py-5 border-t-20 border-yellow"
                        >
                            <a href="" class="block pb-4 hover:text-yellow"
                                >MOTOGP</a
                            >
                            <a href="/f1" class="block pb-4 hover:text-yellow"
                                >F1</a
                            >
                            <a href="" class="block pb-4 hover:text-yellow"
                                >F2</a
                            >
                            <a href="" class="block pb-4 hover:text-yellow"
                                >F3</a
                            >
                            <a href="" class="block pb-4 hover:text-yellow"
                                >FORMULA E</a
                            >
                            <a href="" class="block pb-4 hover:text-yellow"
                                >INDYCAR</a
                            >
                            <a href="" class="block pb-4 hover:text-yellow"
                                >NASCAR</a
                            >
                            <a href="" class="block hover:text-yellow"
                                >Le Mans</a
                            >
                        </div>
                    </li>
                </ul>
                <div @click="toggleNav" class="flex">
                    <button type="button" class="flex" aria-label="toggle menu">
                        <span :class="showMenu ? 'hidden' : 'flex'">MORE</span>
                        <span :class="showMenu ? 'flex' : 'hidden'">CLOSE</span>
                        <svg
                            :class="showMenu ? 'hidden' : 'flex'"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 50 50"
                            width="24px"
                            height="24px"
                            class="ml-3"
                        >
                            <path
                                d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"
                            />
                        </svg>
                        <svg
                            :class="showMenu ? 'flex' : 'hidden'"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 30 30"
                            width="24px"
                            height="24px"
                            class="ml-1"
                        >
                            <path
                                d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"
                            />
                        </svg>
                    </button>
                </div>
            </nav>
        </div>
        <div
            :class="showMenu ? 'flex' : 'hidden'"
            class="absolute top-14 2xsm:top-28 left-0 bg-night h-screen w-full justify-center"
        >
            <span
                class="text-xl text-white font-bold 2xsm:flex max-w-5xl 2xsm:space-x-32 lg:space-x-64 mt-8"
            >
                <ul class="space-y-4 max-lg:absolute max-lg:left-12">
                    <li class="move-right-on-hover">
                        <a href="/">Home</a>
                    </li>
                    <li class="move-right-on-hover">
                        <a href="/f1/news">F1 News</a>
                    </li>
                    <li class="move-right-on-hover">
                        <a href="/f1/calender">F1 Calendar</a>
                    </li>
                    <li class="move-right-on-hover">
                        <a href="/f1/statistics">F1 Statistics</a>
                    </li>
                    <li class="move-right-on-hover">
                        <a href="/f1/drivers">F1 Drivers</a>
                    </li>
                    <li class="move-right-on-hover">
                        <a href="/f1/teams">F1 Teams</a>
                    </li>
                    <li class="move-right-on-hover">
                        <a href="/f1/results">F1 Results</a>
                    </li>
                </ul>
                <ul
                    class="space-y-4 max-2xsm:mt-4 max-2xsm:absolute max-2xsm:left-12 max-2xsm:top-80"
                >
                    <li class="move-right-on-hover">
                        <a href="/championships">Championships</a>
                    </li>
                    <li class="move-right-on-hover">
                        <a href="/f2">Formula 2</a>
                    </li>
                    <li class="move-right-on-hover">
                        <a href="/f3">Formula 3</a>
                    </li>
                    <li class="move-right-on-hover">
                        <a href="/fe">Formula E</a>
                    </li>
                    <li class="move-right-on-hover">
                        <a href="/indycar">Indycar</a>
                    </li>
                    <li class="move-right-on-hover">
                        <a href="/nascar">Nascar</a>
                    </li>
                    <li class="move-right-on-hover">
                        <a href="/endurance-racing">Endurance Racing</a>
                    </li>
                </ul>
                <div class="max-lg:hidden">
                    <h2 class="text-sm">WELCOME TO</h2>
                    <h1 class="text-light-red text-2xl font-extrabold mb-2">
                        RACESTOP
                    </h1>
                    <div class="font-medium text-base mt-4 mb-8">
                        <p>Benefits of signing up:</p>
                        <p>- More Exclusive Content</p>
                        <p>- Enter Giveaways</p>
                        <p>- Share Your Thoughts</p>
                        <p>And Way More</p>
                    </div>
                    <span
                        class="bg-light-red hover:bg-dark-red px-4 py-3 rounded-md text-base"
                    >
                        <a href="/profile">To Profile</a>
                    </span>
                </div>
            </span>
        </div>
        <div class="z-50 bg-yellow p-0.5"></div>
        <div class="bg-night p-0.5"></div>
    </header>
</template>

<style scoped>
.move-right-on-hover {
    @apply transition-transform duration-300 transform hover:translate-x-4;
}
</style>
