<template>
    <div>
        <input type="file" name="" id="" accept="image/*" class="hidden" ref="file" @change="fileChange">
        <div class="relative inline-block">
             <img :src="src" alt="" class="h-24 w-24 rounded-full object-cover">
             <div class="absolute top-0 h-full w-full bg-black bg-opacity-25 flex items-center justify-center rounded-full">
                <button @click="browse">
                   <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-camera-outline"  viewBox="0 0 24 24"><path d="M20,4H16.83L15,2H9L7.17,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V6H8.05L9.88,4H14.12L15.95,6H20V18M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15Z"></path></svg>
                </button>
             </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            value: File,
            defaultSrc: String
        },
        data(){
            return {
                src: this.defaultSrc,
                file: null
            }
        },
        methods: {
            browse(){
                this.$refs.file.click();
            },
            fileChange(e){
                // this.$emit('input', e.target.files[0])
                this.file = e.target.files[0]
                this.$emit('update:modelValue', this.file)
                let reader = new FileReader();
                reader.readAsDataURL(this.file);
                reader.onload = (e)=> {
                    this.src = e.target.result;
                }
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
