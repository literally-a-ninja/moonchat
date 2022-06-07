<template>
  <div class="container border">
    <div class="flex flex-col bg-slate-100 mx-auto">
      <h1 class="flex-shrink-1 mb-3 text-lg">What's your name?</h1>
      <div>
        <form>
          <input type="text" name="name" class="border border-black"/>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
