<template>
    <button
        type="button"
        class="cursor-pointer relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
        aria-haspopup="listbox"
        aria-expanded="true"
        aria-labelledby="listbox-label"
        @click="$parent.toggle()"
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
