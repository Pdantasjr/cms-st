<template>
    <app-layout title="Dashboard">
        <aside class="bg-gray-600 col-span-2 h-full">
            <div class="">
                <ul>
                    <li>Teste</li>
                    <li>teste</li>
                    <li>teste</li>
                </ul>
            </div>
        </aside>
        <main class="bg-gray-500 col-span-10">
            Conteúdos principais
        </main>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <welcome />
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <sidebar />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    import Sidebar from '@/Layouts/Sidebar.vue'

    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
            Sidebar,
        },
    })
</script>
