<template>
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div
      class="flex flex-col border-2 border-dashed border-gray-400 px-6 py-12 items-center"
      @dragover="dragging = true"
      @dragleave="dragging = false"
      :class="[dragging? 'border-indigo-500' : 'border-gray-400']"
    >
      <svg
        class="w-12 h-12 text-gray-500"
        width="18"
        height="19"
        viewBox="0 0 18 19"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M9.75 10C9.75 9.58579 9.41421 9.25 9 9.25C8.58579 9.25 8.25 9.58579 8.25 10H9.75ZM8.25 14C8.25 14.4142 8.58579 14.75 9 14.75C9.41421 14.75 9.75 14.4142 9.75 14H8.25ZM11.25 4C11.25 4.41421 11.5858 4.75 12 4.75C12.4142 4.75 12.75 4.41421 12.75 4H11.25ZM5.25 4C5.25 4.41421 5.58579 4.75 6 4.75C6.41421 4.75 6.75 4.41421 6.75 4H5.25ZM9.75 12V10H8.25V12H9.75ZM8.25 12V14H9.75V12H8.25ZM15 17.25H3V18.75H15V17.25ZM3 17.25C2.30964 17.25 1.75 16.6904 1.75 16H0.25C0.25 17.5188 1.48122 18.75 3 18.75V17.25ZM16.25 16C16.25 16.6904 15.6904 17.25 15 17.25V18.75C16.5188 18.75 17.75 17.5188 17.75 16H16.25ZM17.75 16V10H16.25V16H17.75ZM0.25 10V16H1.75V10H0.25ZM3 4.75H15V3.25H3V4.75ZM3 11.25C2.30964 11.25 1.75 10.6904 1.75 10H0.25C0.25 11.5188 1.48122 12.75 3 12.75V11.25ZM16.25 10C16.25 10.6904 15.6904 11.25 15 11.25V12.75C16.5188 12.75 17.75 11.5188 17.75 10H16.25ZM15 4.75C15.6904 4.75 16.25 5.30964 16.25 6H17.75C17.75 4.48122 16.5188 3.25 15 3.25V4.75ZM3 3.25C1.48122 3.25 0.25 4.48122 0.25 6H1.75C1.75 5.30964 2.30964 4.75 3 4.75V3.25ZM15 11.25H9V12.75H15V11.25ZM9 11.25H3V12.75H9V11.25ZM17.75 10V6H16.25V10H17.75ZM0.25 6V10H1.75V6H0.25ZM12.75 4V3H11.25V4H12.75ZM10 0.25H8V1.75H10V0.25ZM5.25 3V4H6.75V3H5.25ZM8 0.25C6.48122 0.25 5.25 1.48122 5.25 3H6.75C6.75 2.30964 7.30964 1.75 8 1.75V0.25ZM12.75 3C12.75 1.48122 11.5188 0.25 10 0.25V1.75C10.6904 1.75 11.25 2.30964 11.25 3H12.75Z"
          fill="currentColor"
        />
      </svg>

      <p class="text-xl text-gray-700">Drop files to upload</p>
      <p class="mb-2 text-gray-700">Or</p>
      <label class="bg-whtie px-4 h-9 inline-flex items-center rounded border border-gray-300 shadow-sm text-sm font-medium text-gray-700 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
        Select files
        <input class="sr-only" type="file" name="file" id="file" multiple />
      </label>
      <p class="text-xs text-gray-600 mt-4">Maximum upload file sizeL 512MB.</p>
    </div>
  </div>
</template>

<script>
export default {
    data(){
        return {
            dragging: false
        }
    }
};
</script>

<style lang="scss" scoped>
</style>
