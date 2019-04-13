<template>
   <div>
      <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">
         Logo
      </h1>

      <div class="mb-10">
         <picture class="flex justify-center items-center shadow mb-6 rounded-lg">
            <img src="/images/logo.svg" alt="logo">
         </picture>

         <div class="flex justify-between items-center">
            <p>Original Logo on <strong>white </strong> Background</p>

            <a href="/images/negative-logo.svg" class="border border-grey-light px-8 py-2 rounded-full text-black font-bold text-xs">negative-logo.svg</a>
         </div>
      </div>

      <div>
         <picture class="flex justify-center items-center shadow mb-6 bg-blue rounded-lg">
            <img src="/images/negative-logo.svg" alt="negative-logo">
         </picture>

         <div class="flex justify-between items-center">
            <p>Negative Logo on <strong>white </strong> Background</p>

            <a href="/images/negative-logo.svg" class="border border-grey-light px-8 py-2 rounded-full text-black font-bold text-xs">negative-logo.svg</a>
         </div>
      </div>
   </div>
</template>

<script>
    export default {};
</script>

<style lang="scss">
   picture {
      display: block;
      height: 382px;
   }
</style>
