<template>
    <h1>{{posts}}</h1>
    <p>Teste p</p>
</template>

<script>
import {defineComponent} from 'vue'

export default defineComponent({
    props: {
        posts: String,
    }
})
</script>
