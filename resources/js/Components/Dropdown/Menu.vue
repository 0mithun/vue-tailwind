<template>
    <div class="relative inline-block text-left">
         <slot :is-open="isOpen" />
    </div>
</template>

<script>
    export default {
        data(){
            return {
                isOpen: false
            }
        },
        methods: {
            open(){
                this.isOpen = true;
            },
            close(){
                this.isOpen = false;
            },
            toggle(){
                this.isOpen = !this.isOpen;
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
