<template>
    <button
        @click="$parent.toggle"
        class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 "
    >
         <slot />
    </button>
</template>

<script>
    export default {

    }
</script>

<style lang="scss" scoped>

</style>
