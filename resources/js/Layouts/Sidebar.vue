<template>
    <aside class="flex flex-col h-screen overflow-hidden shadow-2xl transition duration-300 bg-white w-2/12">
        <header class="border-b h-[4rem] shrink-0 px-6 flex items-center">
            <a href="/">
                <h1 class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 to-blue-500 text-2xl font-extrabold">
                    CMS - ST</h1>
            </a>
        </header>
        <nav class="flex-1 overflow-y-auto py-6">
            <ul class="space-y-6 px-6">
                <li>
                    <ul class="text-sm space-y-1 -mx-3">
                        <li>
                            <a href="/dashboard" class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
<!--                    <Link :href="$route('')">Criar Post</Link>-->
                </li>

                <li>
                    <div class="border-t -mr-6"></div>
                </li>
                <li>
                    <p class="font-bold uppercase text-gray-600 text-xs tracking-wider">
                        Shop
                    </p>

                    <ul class="text-sm space-y-1 -mx-3 mt-2">
                        <li>
                            <a href="https://demo.filamentadmin.com/shop/products"
                               class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <span>
            Products
        </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://demo.filamentadmin.com/shop/customers"
                               class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition bg-primary-500 text-white">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <span>
            Customers
        </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://demo.filamentadmin.com/shop/orders"
                               class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                                <span>
            Orders
        </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://demo.filamentadmin.com/shop/categories"
                               class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                                <span>
            Categories
        </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://demo.filamentadmin.com/shop/brands"
                               class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>
            Brands
        </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://demo.filamentadmin.com/shop/discounts"
                               class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z"></path>
                                </svg>
                                <span>
            Discounts
        </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://demo.filamentadmin.com/shop/reviews"
                               class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                                <span>
            Reviews
        </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="border-t -mr-6"></div>
                </li>
                <li>
                    <p class="font-bold uppercase text-gray-600 text-xs tracking-wider">
                        Blog
                    </p>

                    <ul class="text-sm space-y-1 -mx-3 mt-2">
                        <li>
                            <a href="https://demo.filamentadmin.com/blog/posts"
                               class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <span>
            Posts
        </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://demo.filamentadmin.com/blog/categories"
                               class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                <span>
            Categories
        </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://demo.filamentadmin.com/blog/authors"
                               class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                <span>
            Authors
        </span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>

        </nav>
        <footer class="border-t px-6 py-3 flex shrink-0 items-center gap-3">
            <button v-if="$page.props.jetstream.managesProfilePhotos"
                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url"
                     :alt="$page.props.user.name"/>
            </button>
            <div>
                <form @submit.prevent="logout">
                    <jet-dropdown-link as="button">
                        <p class="text-sm">Sair</p>
                    </jet-dropdown-link>
                </form>
            </div>
        </footer>
    </aside>
</template>

<script>
import {defineComponent} from 'vue'
import JetDropdownLink from "@/Jetstream/DropdownLink";

export default defineComponent({
    name: 'siderbar',
    components: {
        JetDropdownLink,
    },
    methods: {
        switchToTeam(team) {
            this.$inertia.put(route('current-team.update'), {
                'team_id': team.id
            }, {
                preserveState: false
            })
        },

        logout() {
            this.$inertia.post(route('logout'));
        },
    }
})
</script>
