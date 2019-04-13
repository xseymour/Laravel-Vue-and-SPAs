<template>
   <div>
      <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">
         Logo
      </h1>

       <!--Original Logo-->
      <div class="mb-12">
         <picture class="flex justify-center items-center shadow mb-6 rounded-lg">
            <img src="/images/logo.svg" alt="logo">
         </picture>

         <div class="flex justify-between items-center">
            <p>Original Logo on <strong>white </strong> Background</p>

            <a href="/images/negative-logo.svg" class="border border-grey-light px-8 py-2 rounded-full text-black font-bold text-xs">negative-logo.svg</a>
         </div>
      </div>

      <!--Negative Logo With Accent-->
      <div class="mb-12">
         <picture class="flex justify-center items-center shadow mb-6 bg-blue rounded-lg">
            <img src="/images/negative-logo.svg" alt="negative-logo">
         </picture>

         <div class="flex justify-between items-center">
            <p>Negative Logo on <strong>white </strong> Background</p>

            <a href="/images/negative-logo.svg" class="border border-grey-light px-8 py-2 rounded-full text-black font-bold text-xs">negative-logo.svg</a>
         </div>
      </div>

      <!-- Pure Negative Logo -->
      <div class="mb-12">
         <picture class="block shadow rounded-lg flex items-center justify-center mb-6 bg-black">
            <img src="/images/pure-negative-logo.svg" alt="logo" />
         </picture>

         <div class="flex justify-between items-center">
            <p>Pure negative logo on <strong>dark</strong> background</p>

            <a href="/images/pure-negative-logo.svg" class="button">
               pure-negative-logo.svg
            </a>
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
