<template>
    <transition leave-active-class="transition ease-in duration-100" leave-from-class="opacity-100" leave-to-class="opacity-0">
        <ul
        v-if="$parent.isOpen"
            class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm"
            tabindex="-1"
            role="listbox"
            aria-labelledby="listbox-label"
            aria-activedescendant="listbox-option-3"
        >
            <li
                class=" text-gray-900 select-none relative py-2 pl-3 pr-9 bg-white cursor-pointer"
                role="option"
                v-for="(option, index) in options" :key="index"
                @click="setItem(option)"
                :class="[selected && selected.id == option.id ? 'bg-indigo-600 text-white': 'bg-white text-gray-900']"
            >

                <slot :selected="selected" :option="option">
                    <div class="flex items-center">
                        <span :class="[selected && selected.id == option.id ? 'font-semibold text-white' : 'font-normal', 'ml-3 block truncate']">{{ option.name }}</span>
                    </div>
                    <span
                        class=" text-white absolute inset-y-0 right-0 flex items-center pr-4"
                        v-if="selected && selected.id == option.id"
                    >
                        <svg
                        class="h-5 w-5"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        aria-hidden="true"
                        >
                        <path
                            fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"
                        />
                        </svg>
                    </span>
                </slot>
            </li>
        </ul>
     </transition>


</template>

<script>
    export default {
        props: {
            options: {
                type: Array,
            },
            props: {
                modelValue: {
                    type: Object,
                    default: null
                }
            }
        },
        data(){
           return {
                selected: null
           }
        },
        emits: ['update:modelValue'],
        methods: {
             setItem(option){
                this.selected = option
                this.$emit('update:modelValue', this.selected)
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
