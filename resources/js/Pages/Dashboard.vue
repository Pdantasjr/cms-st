<template>
    <app-layout title="Dashboard">
        <sidebar />
        <main-content />
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'

import AppLayout from '@/Layouts/AppLayout.vue'
import MainContent from '@/Layouts/MainContent.vue'
import Sidebar from '@/Layouts/Sidebar.vue'
import JetDropdown from '@/Jetstream/Dropdown.vue'
import JetDropdownLink from '@/Jetstream/DropdownLink.vue'

export default defineComponent({
    components: {
        AppLayout,
        MainContent,
        Sidebar,
        JetDropdown,
        JetDropdownLink,
    },
    data() {
        return {
            showingNavigationDropdown: true,
        }
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
