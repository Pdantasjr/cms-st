<template>
    <div>
        <main-content title="Dashboard">
            <template v-slot:dashnoard>
                <h1>Once you have your server-side framework configured, you then need to setup your client-side framework. Inertia currently provides support for React, Vue, and Svelte.
                    Install dependencie</h1>
                Install dependencie
                Install dependencie
            </template>
        </main-content>
    </div>
</template>

<script>
import {defineComponent} from 'vue'
import JetDropdown from "@/Jetstream/Dropdown";
import JetDropdownLink from "@/Jetstream/DropdownLink";
import MainContent from "@/Layouts/MainContent";
export default defineComponent({
    components: {
        MainContent,
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
