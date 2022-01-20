<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <jet-application-logo class="block h-8 w-auto" />
            </div>

            <div class="mt-8 text-2xl">
                Bem vindo a sua aplicação Jetstream!
            </div>

            <div class="mt-6 text-gray-500">
                Painel da aplicação.
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'

    export default defineComponent({
        components: {
            JetApplicationLogo,
        },
    })
</script>
