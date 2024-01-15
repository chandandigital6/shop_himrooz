<template>
    <div>
        <div v-if="expire !== null" class="mt-auto text-13px sm:text-sm text-red-600">
            Sale Close in {{ expire }}
        </div>
    </div>
</template>

<script>
export default {
    props: {
        expire: {
            type: String,
            default: null,
        },
    },
};
</script>

<style scoped>
/* Add your styles here if needed */
</style>
