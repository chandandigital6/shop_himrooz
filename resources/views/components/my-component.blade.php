<script setup>
    const message = ref('Hello Vue!')
    const uppercase = computed(() => message.value.toUpperCase())
</script>

<input v-model="message" />
<p v-text="uppercase" />
